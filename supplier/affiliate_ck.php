<?php

/**
 * ECSHOP 程序说明
 * ===========================================================
 * * 版权所有 2008-2015 甜心100网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.we10.cn；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: derek $
 * $Id: affiliate_ck.php 17217 2011-01-19 06:29:08Z derek $
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');

// admin_priv('affiliate_ck');
// exit;
$timestamp = time();

$affiliate = unserialize($GLOBALS['_CFG_MOBILE']['affiliate']);


empty($affiliate) && $affiliate = array();
$separate_on = $affiliate['on'];

/*------------------------------------------------------ */
//-- 分成页
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $_GET[auid] = intval($_GET[auid]); $logdb = get_affiliate_ck() ;
    $smarty->assign('full_page',  1);
    $smarty->assign('ur_here', $_LANG['affiliate_ck']);
    $smarty->assign('on', $separate_on);
    $smarty->assign('logdb',        $logdb['logdb']);
    $smarty->assign('filter',       $logdb['filter']);
    $smarty->assign('record_count', $logdb['record_count']);
    $smarty->assign('page_count',   $logdb['page_count']);
    if (!empty($_GET['auid']))
    {
        $smarty->assign('action_link',  array('text' => $_LANG['back_note'], 'href'=>"users.php?act=edit&id=$_GET[auid]"));
    }
	$smarty->assign('supplier_list',get_supplier_list());
    assign_query_info();
    $smarty->display('affiliate_ck_list.htm');
}

if ($_REQUEST['act'] == 'list_tianxin100')
{
    $logdb = get_affiliate_ck_tianxin100();
    $smarty->assign('full_page',  1);
    $smarty->assign('ur_here', $_LANG['affiliate_ck']);
    $smarty->assign('on', $separate_on);
    $smarty->assign('logdb',        $logdb['logdb']);
    $smarty->assign('filter',       $logdb['filter']);
    $smarty->assign('record_count', $logdb['record_count']);
    $smarty->assign('page_count',   $logdb['page_count']);
    if (!empty($_GET['auid']))
    {
        $smarty->assign('action_link',  array('text' => $_LANG['back_note'], 'href'=>"users.php?act=edit&id=$_GET[auid]"));
    }
    assign_query_info();
    $smarty->display('affiliate_ck_list.htm');
}
/*------------------------------------------------------ */
//-- 分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
     $_GET[auid] = intval($_GET[auid]); $logdb = get_affiliate_ck_tianxin100() ;
    $smarty->assign('logdb',        $logdb['logdb']);
    $smarty->assign('on', $separate_on);
    $smarty->assign('filter',       $logdb['filter']);
    $smarty->assign('record_count', $logdb['record_count']);
    $smarty->assign('page_count',   $logdb['page_count']);

    $sort_flag  = sort_flag($logdb['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('affiliate_ck_list.htm'), '', array('filter' => $logdb['filter'], 'page_count' => $logdb['page_count']));
}
/*
    取消分成，不再能对该订单进行分成
*/
elseif ($_REQUEST['act'] == 'del')
{
    $oid = (int)$_REQUEST['oid'];
    $stat = $db->getOne("SELECT is_separate FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$oid'");
    if (empty($stat))
    {
        $sql = "UPDATE " . $GLOBALS['ecs']->table('order_info') .
               " SET is_separate = 2" .
               " WHERE order_id = '$oid'";
        $db->query($sql);
    }
    $links[] = array('text' => $_LANG['affiliate_ck'], 'href' => 'affiliate_ck.php?act=list');
    sys_msg($_LANG['edit_ok'], 0 ,$links);
}
/*
    撤销某次分成，将已分成的收回来
*/
elseif ($_REQUEST['act'] == 'rollback')
{
    $logid = (int)$_REQUEST['logid'];
    $stat = $db->getRow("SELECT * FROM " . $GLOBALS['ecs']->table('affiliate_log') . " WHERE log_id = '$logid'");
	//获取当前用户总分成金额
	$user_money = $db->getOne("SELECT SUM(money) FROM " . $GLOBALS['ecs']->table('affiliate_log') . " WHERE user_id = '" . $stat['user_id'] . "'");
	//判断分成金额是否大于余额
	if($stat['money'] > $user_money)
	{
		sys_msg($_LANG['money_low'],0,$links); 
	}
    if (!empty($stat))
    {
        if($stat['separate_type'] == 1)
        {
            //推荐订单分成
            $flag = -2;
        }
        else
        {
            //推荐注册分成
            $flag = -1;
        }
        //log_account_change($stat['user_id'], -$stat['money'], 0, -$stat['point'], 0, $_LANG['loginfo']['cancel']);
        $sql = "UPDATE " . $GLOBALS['ecs']->table('affiliate_log') .
               " SET separate_type = '$flag'" .
               " WHERE log_id = '$logid'";
        $db->query($sql);
		$sql = "UPDATE " . $GLOBALS['ecs']->table('order_info') . " SET is_separate = 2 WHERE order_id = '" . $stat['order_id'] . "'";
		//撤销分成，记录日志
		write_affiliate_log($stat['order_id'], $stat['user_id'], $stat['user_name'], -$stat['money'], $flag,$_LANG['order_cancel_separate']);
    }
    $links[] = array('text' => $_LANG['affiliate_ck'], 'href' => 'affiliate_ck.php?act=list_tianxin100');
    sys_msg($_LANG['edit_ok'], 0 ,$links);
}
/*
    分成
*/
elseif ($_REQUEST['act'] == 'separate')
{
    include_once(ROOT_PATH . 'includes/lib_order.php');
    $affiliate = unserialize($GLOBALS['_CFG_MOBILE']['affiliate']);
    empty($affiliate) && $affiliate = array();
	$separate_by = $affiliate['config']['separate_by'];
    $oid = (int)$_REQUEST['oid'];
	if(empty($oid)){
		sys_msg("参数错误，不能分成");
	}
	$_SERVER['REQUEST_URI'] = $_SERVER['REQUEST_URI'] ? $_SERVER['REQUEST_URI'] : "/mobile/";
	$autoUrl = str_replace($_SERVER['REQUEST_URI'],"",$GLOBALS['ecs']->url());
	@file_get_contents($autoUrl."mobile/api/separate.php?order_id=$oid");	
    $links[] = array('text' => $_LANG['affiliate_ck'], 'href' => 'affiliate_ck.php?act=list_tianxin100');
	
    sys_msg($_LANG['edit_ok'], 0 ,$links);
}
function get_affiliate_ck()
{

    $affiliate = unserialize($GLOBALS['_CFG_MOBILE']['affiliate']);
    empty($affiliate) && $affiliate = array();
    $separate_by = $affiliate['config']['separate_by'];

    $sqladd = '';
    if (isset($_REQUEST['status']))
    {
        $sqladd = ' AND o.is_separate = ' . (int)$_REQUEST['status'];
        $filter['status'] = (int)$_REQUEST['status'];
    }
    if (isset($_REQUEST['order_sn']))
    {
        $sqladd = ' AND o.order_sn LIKE \'%' . trim($_REQUEST['order_sn']) . '%\'';
        $filter['order_sn'] = $_REQUEST['order_sn'];
    }
    if (isset($_GET['auid']))
    {
        $sqladd = ' AND o.user_id=' . $_GET['auid'];
    }
	
	if($GLOBALS['_CFG_MOBILE']['is_add_distrib'] == 0)
	{
		$sqladd = ' AND o.supplier_id = 0 '; 
	}
	else
	{
		if(isset($_REQUEST['supplier_id']))
		{
			$sqladd = ' AND o.supplier_id = ' . $_REQUEST['supplier_id']; 
		}	 
	}
	
	
	if($GLOBALS['_CFG_MOBILE']['distrib_type'] == 0)
	{
		//按订单分成
		$sql = "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table('order_info')." AS o," . $GLOBALS['ecs']->table('users') . " as u WHERE o.shipping_status = 2 AND o.user_id = u.user_id $sqladd ";
	}
	else
	{
		//按商品分成
		$sql = "select count(*) from ".
		"(select o.order_id,o.user_id,o.add_time,o.order_status,".
		"sum(split_money*goods_number) as total_money,u.user_name,o.is_separate ".
		"from " . $GLOBALS['ecs']->table('order_info') . " as o ," . 
		$GLOBALS['ecs']->table('order_goods') . " as b," . 
		$GLOBALS['ecs']->table('users') . 
		" as u where o.shipping_status = 2 and o.order_id = b.order_id ".
		"and o.user_id = u.user_id $sqladd group by o.order_id ) as ab" .
		" where total_money > 0";
	}
	
	$filter['record_count'] = $GLOBALS['db']->getOne($sql);
    $logdb = array();
    /* 分页大小 */
    $filter = page_and_size($filter);
	
	if($GLOBALS['_CFG_MOBILE']['distrib_type'] == 0)
	{
		$sql = "SELECT order_sn,is_separate,order_id,o.user_id,add_time,order_status,supplier_id,u.user_name FROM ".$GLOBALS['ecs']->table('order_info')." AS o," . $GLOBALS['ecs']->table('users') . " as u WHERE o.shipping_status = 2 AND o.user_id = u.user_id $sqladd ORDER BY order_id DESC LIMIT " . $filter['start'] . ",$filter[page_size]";
	}
	else
	{
		$sql = "select order_sn,is_separate,order_id,user_id,add_time,
		order_status,supplier_id,user_name from " .
		"(select o.order_id,o.order_sn,o.user_id,o.add_time,o.order_status,".
		"o.supplier_id,sum(split_money*goods_number) as total_money," .
		"o.is_separate,u.user_name from " . 
		$GLOBALS['ecs']->table('order_info') . " as o ," . 
		$GLOBALS['ecs']->table('order_goods') . " as b," . 
		$GLOBALS['ecs']->table('users') . " as u ".
		" where o.shipping_status = 2 and o.order_id = b.order_id " . 
		"and o.user_id = u.user_id $sqladd group by o.order_id ) as ab " . 
		" where total_money > 0  ORDER BY order_id DESC" . 
		" LIMIT " . $filter['start'] . ",$filter[page_size]";
	}
	$query = $GLOBALS['db']->query($sql);
    while ($rt = $GLOBALS['db']->fetch_array($query))
    {
		$info = get_all_affiliate_log($rt['order_id']);
		$rt['add_time'] = local_date("Y-m-d",$rt['add_time']);
		$rt['info'] = $info['info'];
		$rt['log_id'] = $info['log_id'];
		if($info['separate_type'] == -1 || $info['separate_type'] == -2)
        {
            //已被撤销
            $rt['is_separate'] = 3;
            $rt['info'] = "<s>" . $rt['info'] . "</s>";
        }
		$rt['supplier'] = get_supplier($rt['supplier_id']);
		//$logdb[] = $rt;
	}
    $arr = array('logdb' => $logdb, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}

//甜心100  新增  by  xiaojun
function get_affiliate_ck_tianxin100()
{

    $affiliate = unserialize($GLOBALS['_CFG_MOBILE']['affiliate']);
    empty($affiliate) && $affiliate = array();
    $separate_by = $affiliate['config']['separate_by'];

    $sqladd = '';
    if (isset($_REQUEST['status']))
    {
        $sqladd = ' AND o.is_separate = ' . (int)$_REQUEST['status'];
        $filter['status'] = (int)$_REQUEST['status'];
    }
    if (isset($_REQUEST['order_sn']))
    {
        $sqladd = ' AND o.order_sn LIKE \'%' . trim($_REQUEST['order_sn']) . '%\'';
        $filter['order_sn'] = $_REQUEST['order_sn'];
    }
    if (!empty($_GET['auid']))
    {
        $sqladd = ' AND a.user_id=' . $_GET['auid'];
    }

    if(!empty($affiliate['on']))
    {
        if(empty($separate_by))
        {
            //推荐注册分成
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " o".
                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".
                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .
                    " WHERE  o.shipping_status = 2 AND o.user_id > 0 AND (u.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd";
        }
        else
        {
            //推荐订单分成
            $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " o".
                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".
                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .
                    " WHERE o.user_id > 0 AND (o.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd";
        }
    }
    else
    {
        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') . " o".
                " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".
                " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .
                " WHERE o.user_id > 0 AND o.is_separate > 0 $sqladd";
    }


    $filter['record_count'] = $GLOBALS['db']->getOne($sql);
    $logdb = array();
    /* 分页大小 */
    $filter = page_and_size($filter);

    if(!empty($affiliate['on']))
    {
        if(empty($separate_by))
        {
            //推荐注册分成
            $sql = "SELECT o.*, a.log_id, a.user_id as suid,  a.user_name as auser, a.money, a.point, a.separate_type,u.parent_id as up,u.user_name FROM " . $GLOBALS['ecs']->table('order_info') . " o".
                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".
                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .
                    " WHERE o.shipping_status = 2 AND o.user_id > 0 AND (u.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd".
                    " ORDER BY order_id DESC" .
                    " LIMIT " . $filter['start'] . ",$filter[page_size]";

            /*
                SQL解释：

                列出同时满足以下条件的订单分成情况：
                1、有效订单o.user_id > 0
                2、满足以下情况之一：
                    a.有用户注册上线的未分成订单 u.parent_id > 0 AND o.is_separate = 0
                    b.已分成订单 o.is_separate > 0

            */
        }
        else
        {
            //推荐订单分成
            $sql = "SELECT o.*, a.log_id,a.user_id as suid, a.user_name as auser, a.money, a.point, a.separate_type,u.parent_id as up FROM " . $GLOBALS['ecs']->table('order_info') . " o".
                    " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".
                    " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .
                    " WHERE o.user_id > 0 AND (o.parent_id > 0 AND o.is_separate = 0 OR o.is_separate > 0) $sqladd" .
                    " ORDER BY order_id DESC" .
                    " LIMIT " . $filter['start'] . ",$filter[page_size]";

            /*
                SQL解释：

                列出同时满足以下条件的订单分成情况：
                1、有效订单o.user_id > 0
                2、满足以下情况之一：
                    a.有订单推荐上线的未分成订单 o.parent_id > 0 AND o.is_separate = 0
                    b.已分成订单 o.is_separate > 0

            */
        }
    }
    else
    {
        //关闭
        $sql = "SELECT o.*, a.log_id,a.user_id as suid, a.user_name as auser, a.money, a.point, a.separate_type,u.parent_id as up FROM " . $GLOBALS['ecs']->table('order_info') . " o".
                " LEFT JOIN".$GLOBALS['ecs']->table('users')." u ON o.user_id = u.user_id".
                " LEFT JOIN " . $GLOBALS['ecs']->table('affiliate_log') . " a ON o.order_id = a.order_id" .
                " WHERE o.user_id > 0 AND o.is_separate > 0 $sqladd" .
                " ORDER BY order_id DESC" .
                " LIMIT " . $filter['start'] . ",$filter[page_size]";
    }
    $query = $GLOBALS['db']->query($sql);
    while ($rt = $GLOBALS['db']->fetch_array($query))
    {
        if(empty($separate_by) && $rt['up'] > 0)
        {
            //按推荐注册分成
            $rt['separate_able'] = 1;
        }
        elseif(!empty($separate_by) && $rt['parent_id'] > 0)
        {
            //按推荐订单分成
            $rt['separate_able'] = 1;
        }
        if(!empty($rt['suid']))
        {
            //在affiliate_log有记录
            $rt['info'] = sprintf($GLOBALS['_LANG']['separate_info2'], $rt['suid'], $rt['auser'], $rt['money'], $rt['point']);
            if($rt['separate_type'] == -1 || $rt['separate_type'] == -2)
            {
                //已被撤销
                $rt['is_separate'] = 3;
                $rt['info'] = "<s>" . $rt['info'] . "</s>";
            }
					$rt['supplier'] = get_supplier($rt['supplier_id']);
		//$logdb[] = $rt;
        }
		$rt['add_time'] = local_date("Y-m-d",$rt['add_time']);
		$rt['supplier'] = get_supplier($rt['supplier_id']);
        $logdb[] = $rt;
    }
    $arr = array('logdb' => $logdb, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}
function write_affiliate_log($oid, $uid, $username, $money, $separate_by,$change_desc)
{
    $time = gmtime();
    $sql = "INSERT INTO " . $GLOBALS['ecs']->table('affiliate_log') . "( order_id, user_id, user_name, time, money, separate_type,change_desc)".
                                                              " VALUES ( '$oid', '$uid', '$username', '$time', '$money', '$separate_by','$change_desc')";
    if ($oid)
    {
        $GLOBALS['db']->query($sql);
    }
}

//获取某一个订单的分成金额
function get_split_money_by_orderid($order_id)
{
	 if($GLOBALS['_CFG_MOBILE']['distrib_type'] == 0)
	 {
		 $total_fee = " (goods_amount - discount + tax + shipping_fee + insure_fee + pay_fee + pack_fee + card_fee) AS total_money";
		 //按订单分成
		 $sql = "SELECT " . $total_fee . " FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$order_id'";
		 $total_fee = $GLOBALS['db']->getOne($sql);
		 $split_money = $total_fee*($GLOBALS['_CFG_MOBILE']['distrib_percent']/100);
	 }
	 else
	 {
		//按商品分成
	 	$sql = "SELECT sum(split_money*goods_number) FROM " . $GLOBALS['ecs']->table('order_goods') . " WHERE order_id = '$order_id'";
	 	$split_money = $GLOBALS['db']->getOne($sql);
	 }
	 if($split_money > 0)
	 {
		 return $split_money; 
	 }
	 else
	 {
		 return 0; 
	 }
}

//分成后，推送到各个上级分销商微信
function push_user_msg($ecuid,$order_sn,$split_money){
	$type = 1;
	$text = "订单".$order_sn."分成，您得到的分成金额为".$split_money;
	$user = $GLOBALS['db']->getRow("select * from " . $GLOBALS['ecs']->table('weixin_user') . " where ecuid='{$ecuid}'");
	if($user && $user['fake_id']){
		$content = array(
			'touser'=>$user['fake_id'],
			'msgtype'=>'text',
			'text'=>array('content'=>$text)
		);
		$content = serialize($content);
		$sendtime = $sendtime ? $sendtime : time();
		$createtime = time();
		$sql = "insert into ".$GLOBALS['ecs']->table('weixin_corn')." 

(`ecuid`,`content`,`createtime`,`sendtime`,`issend`,`sendtype`) 
			value ({$ecuid},'{$content}','{$createtime}','{$sendtime}','0',

{$type})";
		$GLOBALS['db']->query($sql);
		return true;
	}else{
		return false;
	}
}

//根据订单号获取分成日志信息
function get_all_affiliate_log($order_id)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('affiliate_log') . " WHERE order_id = '$order_id'";
	$list = $GLOBALS['db']->getAll($sql);
	$arr = array();
	$str = '';
	foreach($list as $val)
	{
		 $str .= sprintf($GLOBALS['_LANG']['separate_info2'], $val['user_id'], $val['user_name'], $val['money'])."<br />";
		 $arr['log_id'] = $val['log_id'];
		 $arr['separate_type'] = $val['separate_type'];
	}
	$arr['info'] = $str;
	return $arr;
}

//获取供货商名称
function get_supplier($supplier_id)
{
	$sql = "SELECT supplier_name FROM " . $GLOBALS['ecs']->table('supplier') . " WHERE supplier_id = '$supplier_id'";
	return $GLOBALS['db']->getOne($sql); 
}

//获取供货商列表
function get_supplier_list()
{
    $sql = 'SELECT supplier_id,supplier_name 
            FROM ' . $GLOBALS['ecs']->table('supplier') . '
            WHERE status=1 
            ORDER BY supplier_name ASC';
    $res = $GLOBALS['db']->getAll($sql);

    if (!is_array($res))
    {
        $res = array();
    }

    return $res;
}
?>