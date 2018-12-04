<?php

/**
 * 牛模式ECSHOP采集插件:http://niumos.com/(淘宝店：new-modle.taobao.com QQ：303441162)
 * ============================================================================
 * 版权所有 牛模式团队，并保留所有权利。
 * 网站地址: http://www.niumos.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: yxn $
 * $Id: nms_menu.php 17217 2016-01-12 yxn $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
/*------------------------------------------------------ */
//-- 菜单项
/*------------------------------------------------------ */

//淘宝天猫
$modules['02_taobao']['17_3setting']                = 'shops.php?act=tb_setting';
//$modules['02_taobao']['17_1others']               = 'shops.php?act=others';
$modules['02_taobao']['17_1nms_tbk_api']    		= 'shops.php?act=nms_tbk_api_colect_view';
$modules['02_taobao']['17_2oalmm']                 	= 'shops.php?act=shopdata';
$modules['02_taobao']['17_20oalmm']               	= 'shops.php?act=batchco';
$modules['02_taobao']['17_3onekey']                 = 'shops.php?act=getAllgoods';
$modules['02_taobao']['17_3talmm']               	= 'shops.php?act=tools';
/*------------------------------------------------------ */
//-- 权限控制
/*------------------------------------------------------ */

//淘宝数据
$purview['17_3setting']       						= '17_3setting';
$purview['17_1others']       						= '17_1others';
$purview['17_2oalmm']       						= '17_2oalmm';
$purview['17_20oalmm']       						= '17_20oalmm';
$purview['17_3onekey']       						= '17_3onekey';
$purview['17_1nms_tbk_api']      					= '17_1nms_tbk_api';
$purview['17_3talmm']       						= '17_3talmm';
$purview['17_4nmsinfo']       						= '17_4nmsinfo';

/*------------------------------------------------------ */
//-- 语言项
/*------------------------------------------------------ */

/*淘宝管理*/
$_LANG['02_taobao'] 				= '淘宝数据管理';
$_LANG['taobaoke'] 					= '淘宝数据管理';
$_LANG['17_3setting'] 				= '<font style="color:#0066FF">采集设置</font>';
$_LANG['17_3onekey'] 				= '<font style="color:#0066FF">按分类采集</font>';
$_LANG['17_1others'] 				= '<font style="color:#0066FF">常规采集</font>';
$_LANG['17_1nms_tbk_api'] 			= '<font style="color:#0066FF">淘客API采集</font>';
$_LANG['17_2oalmm'] 				= '<font style="color:#0066FF">店铺采集</font>';
$_LANG['17_20oalmm'] 				= '<font style="color:#0066FF">批量ID采集</font>';
$_LANG['17_200oalmm'] 				= '<font style="color:#0066FF">常规采集</font>';
$_LANG['17_1single'] 				= '<font style="color:#0066FF">单品采集</font>';
$_LANG['17_2collect'] 				= '<font style="color:#0066FF">批量采集</font>';
$_LANG['17_data_list'] 				= '<font style="color:#0066FF">数据查询</font>';
$_LANG['17_2jiu'] 					= '<font style="color:#0066FF">9.9包邮采集</font>';
$_LANG['17_3talmm'] 				= '<font style="color:#0066FF">工具箱</font>';
$_LANG['17_4adj_attr'] 				= '<font style="color:#0066FF">整理属性</font>';
$_LANG['17_4nmsinfo'] 					= '<font style="color:#0066FF">插件信息</font>';


/*商品列表*/
$_LANG['goods_thumb'] = '缩略图';
$_LANG['shop_title'] = '商铺名称';
$_LANG['commission_num'] = '商品来源';
$_LANG['commission_rate'] = '佣金比例';
$_LANG['commission'] = '佣金';
$_LANG['to_taobao'] = '去淘宝';

$_LANG['setting_ok'] 					= '采集设置已保存';

$_LANG['en'] 	= '英语';
$_LANG['fr-fr'] = '法语';
$_LANG['es-es'] = '西班牙语';
$_LANG['nl-nl'] = '荷兰语';
$_LANG['pt-pt'] = '葡萄牙语';
$_LANG['fi-fi'] = '芬兰语';
$_LANG['da-dk'] = '丹麦语';
$_LANG['he-il'] = '以色列';
$_LANG['ko-kr'] = '韩文';
$_LANG['ja-jp'] = '日语';
$_LANG['vi'] 	= '越南语';
$_LANG['it-it'] = '意大利语';
$_LANG['el-gr'] = '希腊语';
$_LANG['no-no'] = '挪威语';
$_LANG['hu-hu'] = '匈牙利语';
$_LANG['tr-tr'] = '土耳其语';
$_LANG['cs-cz'] = '捷克语';
$_LANG['sl-sl'] = '斯洛文尼亚语';
$_LANG['pl-pl'] = '波兰语';
$_LANG['sv-se'] = '瑞典语';
$_LANG['de-de'] = '德语';
$_LANG['ru-ru'] = '俄语';
$_LANG['zh-tw'] = '台湾繁体';
//$_LANG['lang_zh'] = '简体中文';

?>
