<?php
require_once("./includes/config.php");
require_once('./lib/WxPay.Api.php');
define('ROOT_PATH',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define("TIANXIN_WXPAY_APPID", APPID);
define("TIANXIN_WXPAY_MCHID", MCHID);
define("TIANXIN_WXPAY_KEY", PARTNERKEY);
define("TIANXIN_WXPAY_APPSECRET", APPSECRET);

define("TIANXIN_WXPAY_SSLCERT_PATH",ROOT_PATH .'/cert/apiclient_cert.pem');
define("TIANXIN_WXPAY_SSLKEY_PATH", ROOT_PATH .'/cert/apiclient_key.pem');

$order_id=$_GET['order_id'];
$order_sn=$_GET['order_sn'];
$money_paid=$_GET['money_paid'];
$money_refund=$_GET['money_refund'];




	if(isset($order_sn) && $order_sn != ""){
		
		$out_trade_no = $order_sn;
		$total_fee = $money_paid*100;
		$refund_fee = $money_refund*100;
		$input = new WxPayRefund();
		$input->SetOut_trade_no($out_trade_no);
		$input->SetTotal_fee($total_fee);
		$input->SetRefund_fee($refund_fee);
		$input->SetOut_refund_no(WxPayConfig::MCHID.date("YmdHis").wx_getMillisecond().rand(1,10));
		$input->SetOp_user_id(WxPayConfig::MCHID);
		$return = WxPayApi::refund($input);

		echo json_encode($return);

	}

//获取毫秒
function wx_getMillisecond() {
	list($usec, $usec) = explode(' ', microtime());
	   $msec=round($usec*1000);
	   return $msec;
}


function prince_get_payment_by_code_pc($code)
{
    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('payment').
           " WHERE pay_code = '$code' AND enabled = '1'";
    $payment = $GLOBALS['db']->getRow($sql);

    if ($payment)
    {
        $config_list = unserialize($payment['pay_config']);

        foreach ($config_list AS $config)
        {
            $payment[$config['name']] = $config['value'];
        }
    }

    return $payment;
}

function prince_get_payment_by_id_pc($id)
{
    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('payment').
           " WHERE pay_id  = '$id' AND enabled = '1'";
    $payment = $GLOBALS['db']->getRow($sql);

    if ($payment)
    {
        $config_list = unserialize($payment['pay_config']);

        foreach ($config_list AS $config)
        {
            $payment[$config['name']] = $config['value'];
        }
    }

    return $payment;
}


function prince_get_payment_by_code_mobile($code)
{
    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('ecsmart_payment').
           " WHERE pay_code = '$code' AND enabled = '1'";
    $payment = $GLOBALS['db']->getRow($sql);

    if ($payment)
    {
        $config_list = unserialize($payment['pay_config']);

        foreach ($config_list AS $config)
        {
            $payment[$config['name']] = $config['value'];
        }
    }

    return $payment;
}

function prince_get_payment_by_id_mobile($id)
{
    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('ecsmart_payment').
           " WHERE pay_id = '$id' AND enabled = '1'";
    $payment = $GLOBALS['db']->getRow($sql);

    if ($payment)
    {
        $config_list = unserialize($payment['pay_config']);

        foreach ($config_list AS $config)
        {
            $payment[$config['name']] = $config['value'];
        }
    }

    return $payment;
}

?>
