<?php

/**
 * ECSHOP 自动修改订单状态
 * ============================================================================
 * 版权所有 2008-2015 甜心100网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.we10.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: derek $
 * $Id: okgoods.php 17217 2015-03-24 06:29:08Z derek $
 */


define('IN_ECS', true);
require('../includes/init.php');


$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';

if($action=="pay"){

    $out_trade_no = $_GET['log_id'];
	$openid = $_GET['openid'];
    $return_arr = array('status' => 1, 'msg' => '成功', 'result' => getWXPayInfo($out_trade_no,$openid)); // 返回结果状态
    exit(json_encode($return_arr));
	
}elseif($action=="getopenId"){
	
	
		$js_code = $_GET['js_code'];
		$appid=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'appid'");
		$appsecret=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'appsecret'");		
		$url = "https://api.weixin.qq.com/sns/jscode2session?appid={$appid}&secret={$appsecret}&js_code={$js_code}&grant_type=authorization_code";
		$timeout = 5;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		$json_data = curl_exec($ch);
		curl_close($ch);
		
		echo  $json_data;	
}
    
	
  
    function getWXPayInfo($out_trade_no,$openid)
    {

		//根据支付id获取订单id
		$order_id = $GLOBALS['db']->getOne("SELECT order_id FROM ".$GLOBALS['ecs']->table('pay_log')." WHERE log_id = '$out_trade_no'");
		//获取订单信息
		$order = $GLOBALS['db']->getRow("SELECT * FROM " . $GLOBALS['ecs']->table('order_info') . " WHERE order_id = '$order_id' OR parent_order_id = '$order_id' limit 1");
		
		$goods = $GLOBALS['db']->getRow("SELECT * FROM ".$GLOBALS['ecs']->table('order_goods')." WHERE order_id = '$order_id'");

        $orderBody = $goods['goods_name'];
	if(mb_strlen($orderBody,'utf8') > 32){
		$orderBody = mb_substr($str,0,32,"UTF8");
	}
		if(empty($orderBody)){
			
			$orderBody="商品";
		}
        $tade_no = $order_id;
        $user_id = $order['user_id'];
		
		
        $total_fee =$GLOBALS['db']->getOne("SELECT order_amount FROM ".$GLOBALS['ecs']->table('pay_log')." WHERE log_id = '$out_trade_no'");
		
		$total_fee=$total_fee* 100;

        $response = getPrePayOrder($orderBody, $tade_no, $total_fee,$openid);
		

        $x = getOrder($response['prepay_id']);

        $data1['wdata'] = $x;
        $data1['pay_money'] = $total_fee;
        
        return $data1;
    }
	

	
    
    function getPrePayOrder($body, $out_trade_no, $total_fee,$open_id)
    {
		$appid=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'appid'");
		
		$machid=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'machid'");
		
		$api_key=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'key'");
        $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
        $notify_url = 'https://'.$_SERVER['HTTP_HOST'].'/api/minicallback.php';
    
        $onoce_str = getRandChar(32);
    
        $data["appid"] = $appid;
        $data["body"] = $body;
        $data["mch_id"] = $machid;
        $data["nonce_str"] = $onoce_str;
        $data["notify_url"] = $notify_url;
        $data["out_trade_no"] = $out_trade_no;
        $data["spbill_create_ip"] = get_client_ip();
        $data["total_fee"] = $total_fee;
        $data["trade_type"] = "JSAPI";
        $data["openid"] = $open_id;
        $s = getSign($data, false);
        $data["sign"] = $s;
        $xml = arrayToXml($data);
        $response = postXmlCurl($xml, $url);
        // 将微信返回的结果xml转成数组
        return xmlstr_to_array($response);
    }
    
    // 执行第二次签名，才能返回给客户端使用
    function getOrder($prepayId)
    {
		$appid=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'appid'");
        $data["appId"] = $appid;
        $data["nonceStr"] = getRandChar(32);
        $data["package"] = "prepay_id=".$prepayId;
        $data['signType'] = "MD5";
        $data["timeStamp"] = time();
        
        $s = getSign1($data, false);
        $data["sign"] = $s;
        return $data;
    }
    
    // 获取指定长度的随机字符串
    function getRandChar($length)
    {
        $str = null;
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        $max = strlen($strPol) - 1;
    
        for ($i = 0; $i < $length; $i ++) {
            $str .= $strPol[rand(0, $max)]; // rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
    
        return $str;
    }
    /*
     * 生成签名
     */
    function getSign($Obj)
    {
		$api_key=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'key'");

		
        foreach ($Obj as $k => $v) {
            $Parameters[strtolower($k)] = $v;
        }
        // 签名步骤一：按字典序排序参数
        ksort($Parameters);
        $String = formatBizQueryParaMap($Parameters, false);
        // echo "【string】 =".$String."</br>";
        // 签名步骤二：在string后加入KEY
        $String = $String . "&key=" . $api_key;
        // echo "<textarea style='width: 50%; height: 150px;'>$String</textarea> <br />";
        // 签名步骤三：MD5加密
        $result_ = strtoupper(md5($String));
        return $result_;
    }
    
    /*
     * 生成签名
     */
    function getSign1($Obj)
    {

		$api_key=$GLOBALS['db']->getOne("SELECT value FROM ".$GLOBALS['ecs']->table('shop_config')." WHERE code = 'key'");		
		
        foreach ($Obj as $k => $v) {
            $Parameters[strtolower($k)] = $v;
        }
        // 签名步骤一：按字典序排序参数
        ksort($Parameters);
        $String  = "appId=".$Obj['appId']."&nonceStr=".$Obj['nonceStr']."&package=".$Obj['package']."&signType=MD5&timeStamp=".$Obj['timeStamp']; 
        
        // 签名步骤二：在string后加入KEY
        $String = $String . "&key=" . $api_key;
        // 签名步骤三：MD5加密
        $result_ = strtoupper(md5($String));
        return $result_;
    }
    
    /*
     * 获取当前服务器的IP
     */
    function get_client_ip()
    {
        if ($_SERVER['REMOTE_ADDR']) {
            $cip = $_SERVER['REMOTE_ADDR'];
        } elseif (getenv("REMOTE_ADDR")) {
            $cip = getenv("REMOTE_ADDR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $cip = getenv("HTTP_CLIENT_IP");
        } else {
            $cip = "unknown";
        }
        return $cip;
    }
    
    // 数组转xml
    function arrayToXml($arr)
    {
        
        $xml = "<xml>";
        
        foreach ($arr as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
            } else
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
        }
        $xml .= "</xml>";
		file_put_contents("2.txt",$xml,FILE_APPEND);
        return $xml;
    }
    
    // post https请求，CURLOPT_POSTFIELDS xml格式
    function postXmlCurl($xml, $url, $second = 30)
    {
        // 初始化curl
        $ch = curl_init();
        // 超时时间
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        // 这里设置代理，如果有的话
        // curl_setopt($ch,CURLOPT_PROXY, '8.8.8.8');
        // curl_setopt($ch,CURLOPT_PROXYPORT, 8080);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        // 设置header
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        // 要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // post提交方式
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
        // 运行curl
        $data = curl_exec($ch);
        
		file_put_contents("1.txt",$data,FILE_APPEND);
        // 返回结果
        if ($data) {
            curl_close($ch);
            return $data;
        } else {
            $error = curl_errno($ch);
            echo "curl出错，错误码:$error" . "<br>";
                echo "<a href='http://curl.haxx.se/libcurl/c/libcurl-errors.html'>错误原因查询</a></br>";
                    curl_close($ch);
                    return false;
        }
    }
    
    /**
     * xml转成数组
     */
    function xmlstr_to_array($xmlstr)
    {
        
        //禁止引用外部xml实体
        
        libxml_disable_entity_loader(true);
        
        $xmlstring = simplexml_load_string($xmlstr, 'SimpleXMLElement', LIBXML_NOCDATA);
        
        $val = json_decode(json_encode($xmlstring),true);
        
        return $val;
        
        
    }
    
    // 将数组转成uri字符串
    function formatBizQueryParaMap($paraMap, $urlencode)
    {
        $buff = "";
        ksort($paraMap);
        foreach ($paraMap as $k => $v) {
            if ($urlencode) {
                $v = urlencode($v);
            }
            $buff .= strtolower($k) . "=" . $v . "&";
        }
        $reqPar;
        if (strlen($buff) > 0) {
            $reqPar = substr($buff, 0, strlen($buff) - 1);
        }
        return $reqPar;
    }
    
    function domnode_to_array($node)
    {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i ++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->domnode_to_array($child);
                    if (isset($child->tagName)) {
                        $t = $child->tagName;
                        if (! isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } elseif ($v) {
                        $output = (string) $v;
                    }
                }
                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = array();
                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string) $attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }
        return $output;
    }
?>