<?php

/**
 * ECSHOP 在线客服聊天系统-前台
 * ============================================================================
 * * 版权所有 2008-2015 甜心100网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.we10.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: 倪庆洋 $
 * $Id: category.php 17217 2015-02-10 06:29:08Z 倪庆洋 $
 */
define('IN_ECS', true);

require ('includes/init.php');

/* 载入语言文件 */
require_once (ROOT_PATH . 'languages/' . $_CFG['lang'] . '/user.php');

$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'chat';

/* 检查用户是否已登录 */
if(empty($_SESSION['user_id']) && $action != 'act_login' && $action != 'check_login')
{
// 	$captcha = intval($_CFG['captcha']);
// 	if(($captcha & CAPTCHA_LOGIN) && (! ($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
// 	{
// 		$GLOBALS['smarty']->assign('enabled_captcha', 1);
// 		$GLOBALS['smarty']->assign('rand', mt_rand());
// 	}
	
	// 如果未登录跳转到登录页面
	/**
	$smarty->assign('lang', $_LANG);
	$smarty->assign('back_act', '');
	$smarty->assign('action', 'login');
	$smarty->display('chat_passport.dwt');
	**/
	
	show_message('您还未登录系统，请先登录！', array('登录', '返回上一页'), array('user.php?act=login', 'index.php'), 'info');
	
	return;
}

//路由
$function_name = 'action_' . $action;

if(function_exists($function_name))
{
	call_user_func($function_name);
}
else
{
	exit('函数' . $function_name . '不存在');
}

/**
 * 检查用户是否登录
 */
function action_check_login()
{
	$is_login = empty($_SESSION['user_id']) ? 'false' : 'true';
	exit($is_login);
}

/**
 * 处理会员登录
 */
function action_act_login ()
{
	$user_id = $_SESSION['user_id'];
	$smarty = get_smarty();
	$ecs = get_ecs();
	$db = get_database();
	
	/* 处理会员的登录 */
	$username = isset($_POST['username']) ? trim($_POST['username']) : '';
	$password = isset($_POST['password']) ? trim($_POST['password']) : '';
	$back_act = isset($_POST['back_act']) ? trim($_POST['back_act']) : '';
	
	$captcha = intval($_CFG['captcha']);
	if(($captcha & CAPTCHA_LOGIN) && (! ($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
	{
		if(empty($_POST['captcha']))
		{
			$smarty->assign('lang', $_LANG);
			$smarty->assign('action', 'login');
			$smarty->assign('error', $_LANG['invalid_captcha']);
			$smarty->display('chat_passport.dwt');
			return;
		}
		
		/* 检查验证码 */
		include_once ('includes/cls_captcha.php');
		
		$validator = new captcha();
		$validator->session_word = 'captcha_login';
		if(! $validator->check_word($_POST['captcha']))
		{
			$smarty->assign('lang', $_LANG);
			$smarty->assign('action', 'login');
			$smarty->assign('error', $_LANG['invalid_captcha']);
			$smarty->display('chat_passport.dwt');
			return;
		}
	}
	
	if(is_email($username))
	{
		$sql = "select user_name from " . $ecs->table('users') . " where email='" . $username . "'";
		$username_e = $db->getOne($sql);
		if($username_e)
			$username = $username_e;
	}
	if(is_telephone($username))
	{
		$sql = "select user_name from " . $ecs->table('users') . " where mobile_phone='" . $username . "'";
		$username_res = $db->query($sql);
		$kkk = 0;
		while($username_row = $db->fetchRow($username_res))
		{
			$username_e = $username_row['user_name'];
			$kkk = $kkk + 1;
		}
		if($kkk > 1)
		{
			$smarty->assign('lang', $_LANG);
			$smarty->assign('action', 'login');
			$smarty->assign('error', '本网站有多个会员ID绑定了和您相同的手机号，请使用其他登录方式，如：邮箱或用户名。');
			$smarty->display('chat_passport.dwt');
			return;
		}
		if($username_e)
		{
			$username = $username_e;
		}
	}
	
	if($GLOBALS['user']->login($username, $password, isset($_POST['remember'])))
	{
		update_user_info();
		recalculate_price();
		
		// 登录成功
		
		$ucdata = isset($user->ucdata) ? $user->ucdata : '';
		// show_message($_LANG['login_success'] . $ucdata ,
		// array($_LANG['back_up_page'], $_LANG['profile_lnk']),
		// array($back_act,'user.php'), 'info');
		
		// 刷新user_id
		$user_id = $_SESSION['user_id'];
		
		header('Location: chat.php?act=chat');
	}
	else
	{
		
		$_SESSION['login_fail'] ++;
		
		$smarty->assign('lang', $_LANG);
		$smarty->assign('action', 'login');
		$smarty->assign('error', $_LANG['login_failure']);
		$smarty->display('chat_passport.dwt');
		
		return;
	}
}



function action_chat ()
{
	$user_id = $_SESSION['user_id'];
	$smarty = get_smarty();
	$ecs = get_ecs();
	$db = get_database();

	$_CFG = $GLOBALS['_CFG'];


	if(! empty($user_id))
	{
		$sql = "select headimgurl from " . $GLOBALS['ecs']->table('weixin_user') . " where ecuid = '$user_id'";
	    $headimg = $GLOBALS['db']->getOne($sql);
		if(empty($headimg)){

       
		$headimg = "mobile/themesmobile/we10cn_mobile/images/user_tianxin100.jpg";
		
		
		}
		


		
		
	}



$data=array();


if(! empty($_REQUEST['chat_goods_id']))
	{
		/* 咨询商品信息 */
		
		$goods_id = $_REQUEST['chat_goods_id'];
		
		$goods = goods_info($goods_id);

       
		$data['goods_name']=$goods['goods_name'];
		
		
		$data['url']=$ecs->url()."goods.php?id=".$goods['goods_id'];
		

	}else{



        $data['goods_name']="首页咨询";
		
		
		$data['url']=$ecs->url();


	}
	
	
	if(! empty($_REQUEST['chat_order_id']))
	{
		
		/* 咨询订单信息 */
		
		require ('includes/lib_order.php');
		
		$order_id = $_REQUEST['chat_order_id'];
		// 获取商品和店铺信息
		$goods_id = null;
		
		$order = order_info($order_id);
		
		$supp_id = $order['supplier_id'];



       $data['goods_name']="咨询订单";
		
		
	   $data['url']="订单id为".$order['order_id']."订单号为".$order['order_sn'];


	
		
	
	}
	
	if(!empty($_REQUEST['chat_supp_id']) && $_REQUEST['chat_supp_id'] != 0)
	{
		/* 店铺信息 */
	
		$supp_id = $_REQUEST['chat_supp_id'];
	
		$sql="select appkey,secretkey,touid,welcomeMsg from".$ecs->table('supplier')."where supplier_id='$supp_id'";


        $row=$db->getRow($sql);
		if(!empty($row['appkey'])){
			$data['appkey']=$row['appkey'];
			$data['secretkey']=$row['secretkey'];
			$data['touid'] = $row['touid'];
			$data['welcomeMsg'] = $row['welcomeMsg'];
		}else{
			$data['appkey']=$_CFG['chat_server_ip'];

			$data['secretkey']=$_CFG['chat_server_port'];

			$data['touid'] = $_CFG['chat_http_bind_port'];
			$data['welcomeMsg'] = $_CFG['chat_server_admin_username'];			
			
		}

	}else{




$data['appkey']=$_CFG['chat_server_ip'];

$data['secretkey']=$_CFG['chat_server_port'];

$data['touid'] = $_CFG['chat_http_bind_port'];

$data['welcomeMsg'] = $_CFG['chat_server_admin_username'];


	}

        createImUser($data['appkey'], $data['secretkey']);

        $data['avatar'] = $headimg;


		$data['user_name'] =$_SESSION['user_name'];
		
		
		$data['uid'] = 'uid'.$user_id;
		
		$data['credential'] ='uid'.$user_id;
	
	
        $smarty->assign('data', $data);


     

	
	

	$smarty->display('chat.dwt');
}



function is_telephone ($phone)
{
	$chars = "/^13[0-9]{1}[0-9]{8}$|15[0-9]{1}[0-9]{8}$|18[0-9]{1}[0-9]{8}$/";
	if(preg_match($chars, $phone))
	{
		return true;
	}
}

/**
 * 获取db对象
 *
 * @return unknown
 */
function get_database ()
{
	return $GLOBALS['db'];
}

/**
 * 获取smarty对象
 *
 * @return unknown
 */
function get_smarty ()
{
	return $GLOBALS[smarty];
}

/**
 * 获取ecs对象
 *
 * @return unknown
 */
function get_ecs ()
{
	return $GLOBALS['ecs'];
}






function createImUser($appkey = '', $secretkey = '')
	{
		
		require(ROOT_PATH . 'plugins/aliyunim/TopSdk.php');
		
		$c = new \TopClient();
		$c->appkey = $appkey;
		$c->secretKey = $secretkey;
		$req = new \OpenimUsersAddRequest();
		$userinfos = new \Userinfos();
		$userinfos->nick = $_SESSION['user_name'];
		$userinfos->userid = 'uid'.$_SESSION['user_id'];
		$userinfos->password ='uid'.$_SESSION['user_id'];
		$req->setUserinfos(json_encode($userinfos));
		$resp = $c->execute($req);
	}






?>