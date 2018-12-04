<?php

/**
 * SZY ECSHOP 在线聊天客服管理
 * ============================================================================
 * * 版权所有 2008-2015 甜心100网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.we10.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: 倪庆洋 $
 * $Id: customer.php 17217 2015-07-07 06:29:08Z niqingyang $
 */
define('IN_ECS', true);
require (dirname(__FILE__) . '/includes/init.php');
require_once (ROOT_PATH . 'includes/lib_goods.php');
require_once (ROOT_PATH . 'includes/lib_order.php');


/* 检查权限 */
admin_priv('customer');


/* act操作项的初始化 */
$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';
/* 路由 */

$function_name = 'action_' . $action;

if(! function_exists($function_name))
{
	$function_name = "action_default";
}

call_user_func($function_name);

return;

/* 路由 */

/**
 * 客服列表
 */
function action_default ()
{
	$user = $GLOBALS['user'];
	$_CFG = $GLOBALS['_CFG'];
	$_LANG = $GLOBALS['_LANG'];
	$smarty = $GLOBALS['smarty'];
	$db = $GLOBALS['db'];
	$ecs = $GLOBALS['ecs'];


   $supplier_id= $_SESSION['supplier_id'];

   $sql="select appkey,secretkey,touid,welcomeMsg from".$ecs->table('supplier')."where supplier_id='$supplier_id'";


   $row=$db->getRow($sql);
    

   
   $smarty->assign('chat', $row);

	

   $smarty->display('customer_list.htm');
}

function action_post ()
{
	$user = $GLOBALS['user'];
	$_CFG = $GLOBALS['_CFG'];
	$_LANG = $GLOBALS['_LANG'];
	$smarty = $GLOBALS['smarty'];
	$db = $GLOBALS['db'];
	$ecs = $GLOBALS['ecs'];
	$user_id = $_SESSION['user_id'];
	$chat_keys = $GLOBALS['chat_keys'];

    $supplier_id= $_SESSION['supplier_id'];

   
	$appkey = empty($_POST['appkey']) ? '' : $_POST['appkey'];
	$secretkey = empty($_POST['secretkey']) ? '' : $_POST['secretkey'];
	
	$touid = $_POST['touid'];

   $welcomeMsg = empty($_POST['welcomeMsg']) ? '' : $_POST['welcomeMsg'];

	$record = array(
				"appkey" => $appkey, "secretkey" => $secretkey, "touid" => $touid,'welcomeMsg'=>$welcomeMsg
			);
	
	
	$db->autoExecute($ecs->table('supplier'), $record, 'UPDATE', "supplier_id = '$supplier_id'");




	/* 提示信息 */
	$links = array(
		array(
			'href' => 'customer.php', 'text' => "返回上一页"
		)
	);
	
	sys_msg("修改聊天服务设置成功！", 0, $links);
}




?>
