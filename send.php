<?php
header("Content-Type:text/html;charset=utf-8");
/*--------------------------------
功能:HTTP接口 发送短信
修改日期:	2009-04-08
说明:		http://http.yunsms.cn/tx/?uid=用户账号&pwd=MD5位32密码&mobile=号码&content=内容
状态:
	100 发送成功
	101 验证失败
	102 短信不足
	103 操作失败
	104 非法字符
	105 内容过多
	106 号码过多
	107 频率过快
	108 号码内容空
	109 账号冻结
	110 禁止频繁单条发送
	111 系统暂定发送
	112	有错误号码
	113	定时时间不对
	114	账号被锁，10分钟后登录
	115	连接失败
	116 禁止接口发送
	117	绑定IP不正确
	120 系统升级
--------------------------------*/
//$uid = '9999';		//用户账号
//$pwd = '9999';		//密码
//$mobile	 = '13912341234,13312341234,13512341234,02122334444';	//号码
//$content = '你好，验证码：1019【云信】';		//内容
//即时发送
//$res = sendSMS($uid,$pwd,$mobile,$content);
//echo $res;

//定时发送
/*
$time = '2010-05-27 12:11';
$res = sendSMS($uid,$pwd,$mobile,$content,$time);
echo $res;
*/
function sendSMS($mobile,$text,$time='',$mid='')
{
	$apikey = "dfae456f38242d9c24bce1dd8fcefbef"; //请用自己的apikey代替
    $url="http://yunpian.com/v1/sms/send.json";
    $encoded_text = urlencode("$text");
    $mobile = urlencode("$mobile");
    $post_string="apikey=$apikey&text=$encoded_text&mobile=$mobile";
    $get_jeson= sock_post($url, $post_string);
	$array = json_decode($get_jeson,true);
	//$get_jeson_array=unserialize($get_jeson);
	$state=$array['msg'];
	
	
	if($state == 'OK')
	
	{
		return "发送成功!";
	}
	else 
	{
		return "发送失败! 状态：";
	}
}

/**
* url 为服务的url地址
* query 为请求串
*/
function sock_post($url,$query){
    $data = "";
    $info=parse_url($url);
    $fp=fsockopen($info["host"],80,$errno,$errstr,30);
    if(!$fp){
        return $data;
    }
    $head="POST ".$info['path']." HTTP/1.0\r\n";
    $head.="Host: ".$info['host']."\r\n";
    $head.="Referer: http://".$info['host'].$info['path']."\r\n";
    $head.="Content-type: application/x-www-form-urlencoded\r\n";
    $head.="Content-Length: ".strlen(trim($query))."\r\n";
    $head.="\r\n";
    $head.=trim($query);
    $write=fputs($fp,$head);
    $header = "";
    while ($str = trim(fgets($fp,4096))) {
        $header.=$str;
    }
    while (!feof($fp)) {
        $data .= fgets($fp,4096);
    }
    return $data;
}
?>