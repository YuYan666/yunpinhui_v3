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
		require('../includes/lib_payment.php');

        $postStr = $GLOBALS['HTTP_RAW_POST_DATA']; // 这里拿到微信返回的数据结果
        
		
        $getData = xmlstr_to_array($postStr); // 为了方便我就直接把结果转成数组，看个人爱好了

		//file_put_contents("./wx.txt", $postStr, FILE_APPEND);        
        if (($getData['total_fee']) && ($getData['result_code'] == 'SUCCESS')) {
			
			$order_id = trim($getData['out_trade_no']);
			$log_id = $GLOBALS['db']->getOne("SELECT log_id FROM ".$GLOBALS['ecs']->table('pay_log')." WHERE order_id = '$order_id'");
			order_paid($log_id, 2);			
            echo 'success';
            return ;
        }
    function xmlstr_to_array($xmlstr)
    {
        libxml_disable_entity_loader(true);
        
        $xmlstring = simplexml_load_string($xmlstr, 'SimpleXMLElement', LIBXML_NOCDATA);
        
        $val = json_decode(json_encode($xmlstring),true);
        
        return $val;
    }
?>