<?php
/**
 * 微信退款插件

 */
class WxPayConfig
{
	
	const APPID = TIANXIN_WXPAY_APPID;            //微信公众号AppId 
	const MCHID = TIANXIN_WXPAY_MCHID;            //微信支付商户ID 
	const KEY = TIANXIN_WXPAY_KEY;                //微信支付商户密钥Key 
	const APPSECRET = TIANXIN_WXPAY_APPSECRET;    //微信公众号AppSecret 

	const SSLCERT_PATH = TIANXIN_WXPAY_SSLCERT_PATH;
	const SSLKEY_PATH = TIANXIN_WXPAY_SSLKEY_PATH;
	

	const CURL_PROXY_HOST = "0.0.0.0";
	const CURL_PROXY_PORT = 0;
	

	const REPORT_LEVENL = 1;
}
