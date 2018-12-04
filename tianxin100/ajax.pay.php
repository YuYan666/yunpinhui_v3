<?php
header("Content-type: text/html; charset=utf-8");
require_once("./includes/config.php");
require_once('./lib/WxXianjinHelper.php');
define('ROOT_PATH',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
$commonUtil = new CommonUtil();
$wxHongBaoHelper = new WxHongBaoHelper();
$actioncode=0;//返回值
$uid=$_GET['uid'];
$amount=$_GET['amount'];
$DES=$_GET['DES'];
//=======================给客户转钱全过程
$wxHongBaoHelper->setParameter("nonce_str",$commonUtil->create_noncestr());//随机字符串
$wxHongBaoHelper->setParameter("partner_trade_no",MCHID.date('His').rand(10000,99999));//交易号
$wxHongBaoHelper->setParameter("mchid",MCHID);
$wxHongBaoHelper->setParameter("mch_appid",APPID);
$wxHongBaoHelper->setParameter("openid",$uid);
$wxHongBaoHelper->setParameter("check_name","NO_CHECK");
$wxHongBaoHelper->setParameter("amount",$amount);
$wxHongBaoHelper->setParameter("re_user_name","甜心100");
$wxHongBaoHelper->setParameter("desc",iconv("GBK","UTF-8",$DES));//描述
$wxHongBaoHelper->setParameter("spbill_create_ip",$wxHongBaoHelper->Getip());
$postXml = $wxHongBaoHelper->create_hongbao_xml();
$url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers';//企业付款接口，POST，需要证书
$responseXml = $wxHongBaoHelper->curl_post_ssl($url,$postXml);//发送数据，并接收返回数据
//echo $responseXml;
$responseObj = simplexml_load_string($responseXml);//分解返回数据

if( $responseObj->result_code=="SUCCESS"&&$responseObj->return_code=="SUCCESS")//付款成功，往红包记录表中插入一条数据
{
	$actioncode=1;
	$msg['s']=1;
	$msg['r']="";
}else{//返回数据不正常的时候
	$wxHongBaoHelper->create_file("log.txt","",$responseXml);//记录日志
	$msg['s']=0;
	$msg['r']=(string)$responseObj->return_msg;
}
echo json_encode($msg);



?>