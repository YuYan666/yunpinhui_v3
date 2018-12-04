<?php exit;?>a:3:{s:8:"template";a:25:{i:0;s:59:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/goods.dwt";i:1;s:77:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/pricecut_notice.lbi";i:2;s:75:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/arrive_notice.lbi";i:3;s:73:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/page_header.lbi";i:4;s:73:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/user_header.lbi";i:5;s:79:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/user_header_right.lbi";i:6;s:69:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/ur_here.lbi";i:7;s:75:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_gallery.lbi";i:8;s:70:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/ghs_info.lbi";i:9;s:72:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_best.lbi";i:10;s:84:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_related_category.lbi";i:11;s:81:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_similar_brand.lbi";i:12;s:71:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_new.lbi";i:13;s:75:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_related.lbi";i:14;s:76:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_fittings.lbi";i:15;s:74:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/bought_goods.lbi";i:16;s:73:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/ad_position.lbi";i:17;s:84:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/goods_package_ecshop68.lbi";i:18;s:73:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/my_comments.lbi";i:19;s:74:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/packing_list.lbi";i:20;s:70:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/baozhang.lbi";i:21;s:76:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/common_problem.lbi";i:22;s:75:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/right_sidebar.lbi";i:23;s:66:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/help.lbi";i:24;s:73:"C:/wwwroot/www.bluecardai.net.cn/themes/wwwwe10cn/library/page_footer.lbi";}s:7:"expires";i:1543872074;s:8:"maketime";i:1543868474;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="tianxin100 v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干_蜜饯果干_食品生鲜_甜心商城  </title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/goods.css" />
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/magiczoom.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/gw_totop.js" ></script>
<script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script></head>
<body>
<div id="bg" class="bg" style="display:none;"></div>
<script type="text/javascript">
function showDiv(goods_id){
	document.getElementById('popDiv').style.display='block';
	document.getElementById('bg').style.display='block';
	var form_quick_buy = document.forms['quick_buy'];
	form_quick_buy.elements['goods_id'].value = goods_id;
	 var sels = document.getElementsByTagName('select'); 
	 for (var i = 0; i < sels.length; i++) {
		if(sels[i].name!='country' && sels[i].name!='province' && sels[i].name !='city' && sels[i].name !='district'){
			sels[i].style.visibility = 'hidden';     
		}
	}
}
function closeDiv(){
document.getElementById('popDiv').style.display='none';
document.getElementById('bg').style.display='none';
var sels = document.getElementsByTagName('select'); 
 for (var i = 0; i < sels.length; i++) {
		sels[i].style.visibility = '';     
    }
}
function check_notice() {
    var form_notice= document.forms['pricecut_notice'];
    var price = form_notice.elements['price'].value;
    var mobile = form_notice.elements['mobile'].value;
    var email = form_notice.elements['email'].value;
    var msg = '';
     if (price == '') {
        msg += '价格不能为空\n';
	 $('.pricecut-notice-form .price-notice').html('价格不能为空!').parents('.price-text-notice').show();
    }else if(isNaN(price)){
         msg += '价格必须为数字\n';
	 $('.pricecut-notice-form .price-notice').html('价格必须为数字!').parents('.price-text-notice').show();
     }else if(parseFloat(price) >= parseFloat(form_notice.elements['price_now'].value.replace(/[^0-9.]/ig,""))){
         msg += '价格应低于商品当前价\n';
	 $('.pricecut-notice-form .price-notice').html('价格应低于商品当前价!').parents('.price-text-notice').show();
     }else{
     		$('.pricecut-notice-form .price-notice').html('').parents('.price-text-notice').hide();	
     }
    if (mobile == '') {
        msg += '手机号码不能为空\n';
	$('.pricecut-notice-form .phone-notice').html('手机号码不能为空!').parents('.price-text-notice').show();
    } else {
        if (!(/^[\d-]{6,}$/.test(mobile))) {
            msg += '手机号码格式不对\n';
	    $('.pricecut-notice-form .phone-notice').html('手机号码格式不对!').parents('.price-text-notice').show();
        }else{
		$('.pricecut-notice-form .phone-notice').html('').parents('.price-text-notice').hide();	
    	}
    }
    if (email == '') {
        msg += '邮箱不能为空\n';
	$('.pricecut-notice-form .email-notice').html('邮箱不能为空!').parents('.price-text-notice').show();
    }else{
        var reg1 = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/;
        if (!reg1.test(email)) {
            msg += '邮箱格式不正确\n';
	    	$('.pricecut-notice-form .email-notice').html('邮箱格式不正确!').parents('.price-text-notice').show();
        }else{
			$('.pricecut-notice-form .email-notice').html('').parents('.price-text-notice').hide();
    	}
    }
    if (msg){
        return false;
    }else{		
        return true;
    }
}
</script>
<div id="popDiv" class="mydiv pricecut-notice-form" style="display:none;">
  <div class="qb_left"><span>降价通知</span><a href="javascript:closeDiv()" title="关闭"></a></div>
<div class="pop-con">
  <form  method="post" name="pricecut_notice" action="pricecut.php"  onSubmit="return check_notice();">
    <table cellpadding=0 cellspacing=0 width="90%" border=0>
      <tr>
        <td colspan="2" align=left style="padding:15px 0px;">
        	<div class="notice-note">
            	<p class="main-color">【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干</p>
            	当商品价格低于您设定的价格我们将通知您，通知短信最多发送一次，不会对您造成干扰。 
            </div>
        </td>
      </tr>
      <tr>
        <td valign="top" align="right" width="20%">现价：</td>
        <td align="left">
        	<font class="main-color"> 
                      		23.9 
          	 
          </font>
          <input type="hidden" name="price_now" value="23.9" />
        </td>
      </tr>
      <tr>
        <td valign="top" align="right"><font class="main-color">*</font>价格低于：</td>
        <td align="left">
        	<input type="text" id="consignee" name="price" size="13" class="inputBg inputBg-spe" onkeyup="this.value=this.value.replace(/[^0-9.]/ig,'')" onafterpaste="this.value=this.value.replace(/[^0-9.]]/ig,'')" />
          元时通知我！
	<div class="price-text-notice">
            	<i class="notice-icon"></i>
                <span class="notice-text price-notice"></span>
            </div>
        </td>
      </tr>
      <tr>
        <td align=right><font class="main-color">*</font>手机号码：</td>
        <td align="left">
        	<input type="text" name="mobile" size=23 class="inputBg" />
          	我们将以短信通知您
		<div class="price-text-notice">
            	<i class="notice-icon"></i>
                <span class="notice-text phone-notice"></span>
            </div> 
        </td>
      </tr>
      <tr>
        <td align=right><font class="main-color">*</font>邮箱：</td>
        <td align="left">
        	<input type="text"  name="email" class="inputBg" />
          	您还可以通过邮件接收
		<div class="price-text-notice">
            	<i class="notice-icon"></i>
                <span class="notice-text email-notice"></span>
            </div>   
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center" style="padding:20px 0 30px;">
        	<input type="hidden" value="10" name="goods_id" id="goods_id" />
          	<input type="submit" class="pop-sure main-bg-color" value="马上提交">
        </td>
      </tr>
    </table>
  </form>
  </div>
</div>
<script type="text/javascript" src="themes/wwwwe10cn/js/arrive_notice.js" ></script>
<div class="tell-me-form" style="display:none;" id="tell-me-table">
	<div class="pop-header"><span>到货通知</span><a href="javascript:closeDiv1()" title="关闭" class="tell-me-close"></a></div>
    <div class="tell-me-content">
    	<table cellpadding="0" cellspacing="0" width="100%" border="0">
              <tr>
                <td colspan="2" align="left">
                    <div class="blank10"></div>
                    <div class="notice-note">
                        <p class="main-color" id="rgoods_name"></p>
                        当商品进行补货时，我们将以短信、邮件的形式通知您，最多发送一次，不会对您造成干扰。
                    </div>
                </td>
              </tr>
              <tr>
                <td width="30%" align="right"><font class="main-color">*</font>数量：</td>
                <td align="left">
                    <input type="text" value="1" id="book-number"class="inputBg" />
                    <div class="tell-me-notice">
                        <i class="notice-icon"></i><span class="notice-text num-notice"></span>
                    </div>
                </td>
              </tr>
              <tr>
                <td align="right"><font class="main-color">*</font>手机号码：</td>
                <td align="left">
                    <input type="text" value="" id="phone-num"class="inputBg" />
                    <div class="tell-me-notice">
                        <i class="notice-icon"></i><span class="notice-text phone-notice"></span>
                    </div>
                </td>
              </tr>
              <tr>
                <td align="right"><font class="main-color">*</font>电子邮箱：</td>
                <td align="left">
                    <input type="text" value="" id="arrival-email"class="inputBg" />
                    <div class="tell-me-notice">
                        <i class="notice-icon"></i><span class="notice-text email-notice"></span>
                    </div>
                </td>
              </tr>
              <tr>
                <td colspan="2" align="center" style="padding:20px 0 30px;">
                    <input type="button" value="马上提交" onclick="tell_me1(10)" class="sure-btn"/>
                </td>
              </tr>
            </table>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/68ecshop_common.css" />
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<script type="text/javascript" src="themes/wwwwe10cn/js/page.js"></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/bubbleup.js"></script>
<div id="site-nav">
  <div class="sn-container w1210"> 
    <script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/common.min.js"></script> 
    <font id="login-info" class="sn-login-info">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca</font>
    <ul class="sn-quick-menu">
      <li class="sn-mytaobao menu-item">
        <div class="sn-menu"> 
          <a class="menu-hd" href="user.php" target="_top" rel="nofollow">我的信息<b></b></a>
          <div id="menu-2" class="menu-bd">
            <div class="menu-bd-panel"> 
            	<a href="user.php?act=order_list" target="_top" rel="nofollow">已买到的宝贝</a> 
                <a href="user.php?act=address_list" target="_top" rel="nofollow">我的地址管理</a> 
            </div>
          </div>
        </div>
      </li>
      <li class="sn-mystores"> 
        <a target="_top" class="sn-stores header-icon main-color" href="user.php?act=follow_shop"><i></i>我关注的店铺</a> 
      </li>
      <li class="sn-cart mini-cart menu"> 
        <a id="mc-menu-hd" class="sn-cart header-icon main-color" href="flow.php" target="_top" rel="nofollow"><i></i>购物车</a> 
      </li>
      <li class="sn-favorite menu-item">
        <div class="sn-menu"> 
          <a class="menu-hd" href="user.php?act=collection_list" target="_top" rel="nofollow">收藏夹<b></b></a>
          <div id="menu-4" class="menu-bd">
            <div class="menu-bd-panel"> 
            	<a href="user.php?act=collection_list" target="_top" rel="nofollow">收藏的宝贝</a> 
                <a href="user.php?act=follow_shop" target="_top" rel="nofollow">收藏的店铺</a> 
            </div>
          </div>
        </div>
      </li>
      <li class="sn-separator"></li>
      <script type="text/javascript">
		function show_qcord(){
			var qs=document.getElementById('sn-qrcode');
			qs.style.display="block";
		}
		function hide_qcord(){
			var qs=document.getElementById('sn-qrcode');
			qs.style.display="none";
		}
	  </script>
      <li class="sn-seller menu-item">
        <div class="sn-menu">
        <a class="menu-hd" href="" target="_top">商家支持<b></b></a>
        <div class="menu-bd" id="menu-6">
          <ul>
            <li>
              <h3>商家：</h3>
               
              <a href="help.php?id=9" >售后流程</a> 
               
              <a href="help.php?id=10" >购物流程</a> 
               
              <a href="help.php?id=11" >订购方式</a> 
               
              <a href="help.php?id=18" >常见问题</a> 
               
            </li>
            <li>
              <h3>帮助：</h3>
              <a href="help.php" target="_top" title="帮助中心">帮助中心</a> 
            </li>
          </ul>
        </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<script>
header_login();
function header_login()
{	
	Ajax.call('login_act_ajax.php', '', loginactResponse, 'GET', 'JSON', '1', '1');
}
function loginactResponse(result)
{
	var MEMBERZONE =document.getElementById('login-info');
	MEMBERZONE.innerHTML= result.memberinfo;
}
</script><div class="header">
	<div class="w1210">
  		<div class="mall-logo"> <a href="./"><img src="554fcae493e564ee0dc75bdf2ebf94cashop_logo|a:1:{s:4:"name";s:9:"shop_logo";}554fcae493e564ee0dc75bdf2ebf94ca" width="250" /></a> </div>
  		
  		<div class="mall-search">
    <div id="search-tips" style="display:none;"></div>
    <form class="mallSearch-form" method="get" name="searchForm" id="searchForm" action="search.php" onSubmit="return checkSearchForm()">
      <input type='hidden' name='type' id="searchtype" value="0">
      <div class="mallSearch-input">
        <ul class="search-type">
          <li class="cur" num="0">宝贝<i class="icon-down"></i></li>
          <li  num="1">店铺<i class="icon-down"></i></li>
        </ul>
        <div class="s-combobox">
          <div class="s-combobox-input-wrap">
            <input aria-haspopup="true" role="combobox" class="s-combobox-input" name="keywords" id="keyword" tabindex="9" accesskey="s" onkeyup="STip(this.value, event);" autocomplete="off"  value="请输入关键词" onFocus="if(this.value=='请输入关键词'){this.value='';}else{this.value=this.value;}" onBlur="if(this.value=='')this.value='请输入关键词'" type="text">
          </div>
        </div>
        <input type="submit" value="搜索" class="button main-bg-color"  >
      </div>
    </form>
    <ul class="hot-query" >
            <li style="border-left: none;"> <a href="search.php?keywords=iPhone5" title="iPhone5">iPhone5</a> </li>
            <li > <a href="search.php?keywords=NZXT" title="NZXT">NZXT</a> </li>
            <li > <a href="search.php?keywords=%E6%97%85%E8%A1%8C%E5%8C%85" title="旅行包">旅行包</a> </li>
            <li > <a href="search.php?keywords=%E6%A0%BC%E5%8A%9B%E7%94%B5%E6%9A%96%E5%99%A8" title="格力电暖器">格力电暖器</a> </li>
            <li > <a href="search.php?keywords=%E5%B9%B4%E8%B4%A7%E5%85%88%E5%88%B0%E5%AE%B6" title="年货先到家">年货先到家</a> </li>
            <li > <a href="search.php?keywords=MX2" title="MX2">MX2</a> </li>
            <li > <a href="search.php?keywords=%E9%82%93%E5%B0%8F%E5%B9%B3%E6%97%B6%E4%BB%A3" title="邓小平时代">邓小平时代</a> </li>
          </ul>
  </div>
  		<ul class="header-right"> 
    <li> <a href="javascript:;"><img src="themes/wwwwe10cn/images/common/7day.jpg"/></a></li>
    <li> <a href="javascript:;"><img src="themes/wwwwe10cn/images/common/guarantee.jpg"/></a></li>
    <li> <a href="javascript:;"><img src="themes/wwwwe10cn/images/common/delivery.jpg"/></a></li>
</ul> 	</div>
</div>
<div class="all-nav all-nav-border">
  <div class="w1210">
      <div class="home-category fl"  onmouseover="_show_(this)" onmouseout="_hide_(this)"> 
        <a href="catalog.php" class="menu-event main-bg-color" title="查看全部商品分类">全部商品分类<i></i></a> 
        <div class="expand-menu all-cat main-bg-color"> 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=1" target="_blank" title="进入食品生鲜频道">食品生鲜</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=14" target="_blank" title="进口水果">进口水果<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=15" target="_blank" title="释迦芭乐">释迦芭乐</a> 
                     
                    <a href="category.php?id=16" target="_blank" title="樱桃车厘子">樱桃车厘子</a> 
                     
                    <a href="category.php?id=17" target="_blank" title="芒果桃李">芒果桃李</a> 
                     
                    <a href="category.php?id=18" target="_blank" title="龙眼荔枝">龙眼荔枝</a> 
                     
                    <a href="category.php?id=19" target="_blank" title="提子葡萄">提子葡萄</a> 
                     
                    <a href="category.php?id=20" target="_blank" title="奇异果猕猴桃">奇异果猕猴桃</a> 
                     
                    <a href="category.php?id=21" target="_blank" title="凤梨蓝莓">凤梨蓝莓</a> 
                     
                    <a href="category.php?id=22" target="_blank" title="榴莲山竹">榴莲山竹</a> 
                     
                    <a href="category.php?id=357" target="_blank" title="橙子">橙子</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=13" target="_blank" title="糖果巧克力">糖果巧克力<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=24" target="_blank" title="巧克力">巧克力</a> 
                     
                    <a href="category.php?id=25" target="_blank" title="口香糖">口香糖</a> 
                     
                    <a href="category.php?id=26" target="_blank" title="棒棒糖">棒棒糖</a> 
                     
                    <a href="category.php?id=27" target="_blank" title="软糖">软糖</a> 
                     
                    <a href="category.php?id=28" target="_blank" title="奶糖">奶糖</a> 
                     
                    <a href="category.php?id=29" target="_blank" title="QQ糖">QQ糖</a> 
                     
                    <a href="category.php?id=30" target="_blank" title="果冻">果冻</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=9" target="_blank" title="牛奶乳品">牛奶乳品<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=31" target="_blank" title="常温奶">常温奶</a> 
                     
                    <a href="category.php?id=32" target="_blank" title="乳饮料">乳饮料</a> 
                     
                    <a href="category.php?id=33" target="_blank" title="儿童奶">儿童奶</a> 
                     
                    <a href="category.php?id=34" target="_blank" title="酸奶">酸奶</a> 
                     
                    <a href="category.php?id=35" target="_blank" title="豆奶">豆奶</a> 
                     
                    <a href="category.php?id=36" target="_blank" title="低脂奶">低脂奶</a> 
                     
                    <a href="category.php?id=37" target="_blank" title="全脂奶">全脂奶</a> 
                     
                    <a href="category.php?id=38" target="_blank" title="成人奶粉">成人奶粉</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=10" target="_blank" title="坚果炒货">坚果炒货<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=39" target="_blank" title="核桃">核桃</a> 
                     
                    <a href="category.php?id=40" target="_blank" title="夏威夷果">夏威夷果</a> 
                     
                    <a href="category.php?id=41" target="_blank" title="碧根果">碧根果</a> 
                     
                    <a href="category.php?id=42" target="_blank" title="开心果">开心果</a> 
                     
                    <a href="category.php?id=43" target="_blank" title="腰果">腰果</a> 
                     
                    <a href="category.php?id=44" target="_blank" title="瓜子">瓜子</a> 
                     
                    <a href="category.php?id=45" target="_blank" title="花生">花生</a> 
                     
                    <a href="category.php?id=46" target="_blank" title="杏仁">杏仁</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=12" target="_blank" title="蜜饯果干">蜜饯果干<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=47" target="_blank" title="红枣">红枣</a> 
                     
                    <a href="category.php?id=48" target="_blank" title="莓类">莓类</a> 
                     
                    <a href="category.php?id=49" target="_blank" title="葡萄干">葡萄干</a> 
                     
                    <a href="category.php?id=50" target="_blank" title="芒果干">芒果干</a> 
                     
                    <a href="category.php?id=51" target="_blank" title="香蕉干">香蕉干</a> 
                     
                    <a href="category.php?id=52" target="_blank" title="山楂片">山楂片</a> 
                     
                    <a href="category.php?id=53" target="_blank" title="橄榄">橄榄</a> 
                     
                    <a href="category.php?id=54" target="_blank" title="其他">其他</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                   <a href="brand.php?id=1&amp;cat=1" class="img-link" target="_blank" title="Three Squirrels/三只松鼠"> <img src="data/brandlogo/1513793381882343992.jpg" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=2&amp;cat=1" class="img-link" target="_blank" title="BE＆CHEERY/百草味"> <img src="data/brandlogo/1513796656228644803.jpg" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=13&amp;cat=1" class="img-link" target="_blank" title="YANG，S-NS"> <img src="data/brandlogo/1513722688483728979.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=14&amp;cat=1" class="img-link" target="_blank" title="褚橙"> <img src="data/brandlogo/1513722701251095950.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=15&amp;cat=1" class="img-link" target="_blank" title="果园多"> <img src="data/brandlogo/1513723048326582729.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=16&amp;cat=1" class="img-link" target="_blank" title="智慧橙"> <img src="data/brandlogo/1513723061138870178.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=17&amp;cat=1" class="img-link" target="_blank" title="LUOCHUAN APPLE/洛川苹果"> <img src="data/brandlogo/1513723074776947132.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=19&amp;cat=1" class="img-link" target="_blank" title="那座山"> <img src="data/brandlogo/1513723727683637125.png" width="90" height="36" /> </a>  
                   
                   
                   
                   
                   
                   
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=2" target="_blank" title="进入服装服饰频道">服装服饰</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=55" target="_blank" title="女装馆">女装馆<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=61" target="_blank" title="连衣裙">连衣裙</a> 
                     
                    <a href="category.php?id=62" target="_blank" title="连体裤">连体裤</a> 
                     
                    <a href="category.php?id=63" target="_blank" title="棉麻T恤">棉麻T恤</a> 
                     
                    <a href="category.php?id=64" target="_blank" title="时尚套装">时尚套装</a> 
                     
                    <a href="category.php?id=65" target="_blank" title="复古旗袍">复古旗袍</a> 
                     
                    <a href="category.php?id=66" target="_blank" title="牛仔裤">牛仔裤</a> 
                     
                    <a href="category.php?id=67" target="_blank" title="短外套">短外套</a> 
                     
                    <a href="category.php?id=68" target="_blank" title="防晒衫">防晒衫</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=56" target="_blank" title="内衣馆">内衣馆<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=69" target="_blank" title="聚拢文胸">聚拢文胸</a> 
                     
                    <a href="category.php?id=70" target="_blank" title="薄款文胸">薄款文胸</a> 
                     
                    <a href="category.php?id=71" target="_blank" title="无钢圈文胸">无钢圈文胸</a> 
                     
                    <a href="category.php?id=72" target="_blank" title="女士内裤">女士内裤</a> 
                     
                    <a href="category.php?id=73" target="_blank" title="男士内裤">男士内裤</a> 
                     
                    <a href="category.php?id=74" target="_blank" title="夏季睡衣">夏季睡衣</a> 
                     
                    <a href="category.php?id=75" target="_blank" title="性感睡衣">性感睡衣</a> 
                     
                    <a href="category.php?id=76" target="_blank" title="瘦腿袜">瘦腿袜</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=57" target="_blank" title="男装馆">男装馆<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=77" target="_blank" title="休闲裤">休闲裤</a> 
                     
                    <a href="category.php?id=78" target="_blank" title="牛仔裤">牛仔裤</a> 
                     
                    <a href="category.php?id=79" target="_blank" title="夹克">夹克</a> 
                     
                    <a href="category.php?id=80" target="_blank" title="风衣">风衣</a> 
                     
                    <a href="category.php?id=81" target="_blank" title="针织衫">针织衫</a> 
                     
                    <a href="category.php?id=82" target="_blank" title="长袖衬衫">长袖衬衫</a> 
                     
                    <a href="category.php?id=83" target="_blank" title="休闲短裤">休闲短裤</a> 
                     
                    <a href="category.php?id=84" target="_blank" title="POLO衫">POLO衫</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=58" target="_blank" title="户外鞋服">户外鞋服<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=85" target="_blank" title="跑步鞋">跑步鞋</a> 
                     
                    <a href="category.php?id=86" target="_blank" title="篮球鞋">篮球鞋</a> 
                     
                    <a href="category.php?id=87" target="_blank" title="帆布鞋">帆布鞋</a> 
                     
                    <a href="category.php?id=88" target="_blank" title="羽毛球鞋">羽毛球鞋</a> 
                     
                    <a href="category.php?id=89" target="_blank" title="迷彩裤">迷彩裤</a> 
                     
                    <a href="category.php?id=90" target="_blank" title="沙滩鞋">沙滩鞋</a> 
                     
                    <a href="category.php?id=91" target="_blank" title="钓鱼服">钓鱼服</a> 
                     
                    <a href="category.php?id=92" target="_blank" title="登山鞋">登山鞋</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=59" target="_blank" title="女鞋馆">女鞋馆<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=93" target="_blank" title="高跟凉拖">高跟凉拖</a> 
                     
                    <a href="category.php?id=94" target="_blank" title="平底鞋">平底鞋</a> 
                     
                    <a href="category.php?id=95" target="_blank" title="高跟鞋">高跟鞋</a> 
                     
                    <a href="category.php?id=96" target="_blank" title="坡跟单鞋">坡跟单鞋</a> 
                     
                    <a href="category.php?id=97" target="_blank" title="浅口单鞋">浅口单鞋</a> 
                     
                    <a href="category.php?id=98" target="_blank" title="帆布鞋">帆布鞋</a> 
                     
                    <a href="category.php?id=99" target="_blank" title="乐福鞋">乐福鞋</a> 
                     
                    <a href="category.php?id=100" target="_blank" title="松糕鞋">松糕鞋</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=60" target="_blank" title="箱包馆">箱包馆<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=101" target="_blank" title="单肩女包">单肩女包</a> 
                     
                    <a href="category.php?id=102" target="_blank" title="手提女包">手提女包</a> 
                     
                    <a href="category.php?id=103" target="_blank" title="女士钱包">女士钱包</a> 
                     
                    <a href="category.php?id=104" target="_blank" title="男士双肩">男士双肩</a> 
                     
                    <a href="category.php?id=105" target="_blank" title="男士钱包">男士钱包</a> 
                     
                    <a href="category.php?id=106" target="_blank" title="旅行箱">旅行箱</a> 
                     
                    <a href="category.php?id=107" target="_blank" title="拉杆箱">拉杆箱</a> 
                     
                    <a href="category.php?id=108" target="_blank" title="拉杆包">拉杆包</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                   <a href="brand.php?id=4&amp;cat=2" class="img-link" target="_blank" title="DIBE"> <img src="data/brandlogo/1513722542532698716.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=5&amp;cat=2" class="img-link" target="_blank" title="Durex/杜蕾斯"> <img src="data/brandlogo/1513713697951681487.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=23&amp;cat=2" class="img-link" target="_blank" title="HSTYLE/韩都衣舍"> <img src="data/brandlogo/1513799650053360103.jpg" width="90" height="36" /> </a>  
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=3" target="_blank" title="进入个护化妆频道">个护化妆</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=113" target="_blank" title="香水彩妆">香水彩妆<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=136" target="_blank" title="香水">香水</a> 
                     
                    <a href="category.php?id=137" target="_blank" title="底妆">底妆</a> 
                     
                    <a href="category.php?id=138" target="_blank" title="腮红">腮红</a> 
                     
                    <a href="category.php?id=139" target="_blank" title="眼部">眼部</a> 
                     
                    <a href="category.php?id=140" target="_blank" title="唇部">唇部</a> 
                     
                    <a href="category.php?id=141" target="_blank" title="美甲">美甲</a> 
                     
                    <a href="category.php?id=142" target="_blank" title="美容工具">美容工具</a> 
                     
                    <a href="category.php?id=143" target="_blank" title="套装">套装</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=109" target="_blank" title="面部护肤">面部护肤<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=114" target="_blank" title="清洁">清洁</a> 
                     
                    <a href="category.php?id=115" target="_blank" title="护肤">护肤</a> 
                     
                    <a href="category.php?id=116" target="_blank" title="面膜">面膜</a> 
                     
                    <a href="category.php?id=117" target="_blank" title="剃须">剃须</a> 
                     
                    <a href="category.php?id=118" target="_blank" title="套装">套装</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=110" target="_blank" title="洗发护发">洗发护发<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=119" target="_blank" title="洗发">洗发</a> 
                     
                    <a href="category.php?id=120" target="_blank" title="护发">护发</a> 
                     
                    <a href="category.php?id=121" target="_blank" title="染发">染发</a> 
                     
                    <a href="category.php?id=122" target="_blank" title="造型">造型</a> 
                     
                    <a href="category.php?id=123" target="_blank" title="假发">假发</a> 
                     
                    <a href="category.php?id=124" target="_blank" title="套装">套装</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=111" target="_blank" title="身体护肤">身体护肤<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=125" target="_blank" title="沐浴">沐浴</a> 
                     
                    <a href="category.php?id=126" target="_blank" title="润肤">润肤</a> 
                     
                    <a href="category.php?id=127" target="_blank" title="颈部">颈部</a> 
                     
                    <a href="category.php?id=128" target="_blank" title="手足">手足</a> 
                     
                    <a href="category.php?id=129" target="_blank" title="纤体塑形">纤体塑形</a> 
                     
                    <a href="category.php?id=130" target="_blank" title=" 美胸"> 美胸</a> 
                     
                    <a href="category.php?id=131" target="_blank" title="套装">套装</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=112" target="_blank" title="口腔护理">口腔护理<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=132" target="_blank" title="牙膏/牙粉">牙膏/牙粉</a> 
                     
                    <a href="category.php?id=133" target="_blank" title="牙刷/牙线">牙刷/牙线</a> 
                     
                    <a href="category.php?id=134" target="_blank" title="漱口水">漱口水</a> 
                     
                    <a href="category.php?id=135" target="_blank" title="套装">套装</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                   <a href="brand.php?id=24&amp;cat=3" class="img-link" target="_blank" title="innisfree/悦诗风吟"> <img src="data/brandlogo/1513799922851639880.jpg" width="90" height="36" /> </a>  
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=4" target="_blank" title="进入手机数码频道">手机数码</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=144" target="_blank" title="热卖手机">热卖手机<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=148" target="_blank" title="三星盖乐世">三星盖乐世</a> 
                     
                    <a href="category.php?id=149" target="_blank" title="iPhone">iPhone</a> 
                     
                    <a href="category.php?id=150" target="_blank" title="小米特供">小米特供</a> 
                     
                    <a href="category.php?id=151" target="_blank" title="魅族手机">魅族手机</a> 
                     
                    <a href="category.php?id=152" target="_blank" title="华为荣耀">华为荣耀</a> 
                     
                    <a href="category.php?id=153" target="_blank" title="联通4G">联通4G</a> 
                     
                    <a href="category.php?id=154" target="_blank" title="电信4G">电信4G</a> 
                     
                    <a href="category.php?id=155" target="_blank" title="移动4G">移动4G</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=145" target="_blank" title="手机配件">手机配件<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=156" target="_blank" title="电池">电池</a> 
                     
                    <a href="category.php?id=157" target="_blank" title="移动电源">移动电源</a> 
                     
                    <a href="category.php?id=158" target="_blank" title="蓝牙耳机">蓝牙耳机</a> 
                     
                    <a href="category.php?id=159" target="_blank" title="充电器">充电器</a> 
                     
                    <a href="category.php?id=160" target="_blank" title="创意配件">创意配件</a> 
                     
                    <a href="category.php?id=161" target="_blank" title="手机饰品">手机饰品</a> 
                     
                    <a href="category.php?id=162" target="_blank" title="手机耳机">手机耳机</a> 
                     
                    <a href="category.php?id=163" target="_blank" title="保护套">保护套</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=146" target="_blank" title="数码影音">数码影音<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=170" target="_blank" title="数码相机">数码相机</a> 
                     
                    <a href="category.php?id=171" target="_blank" title="单反相机">单反相机</a> 
                     
                    <a href="category.php?id=172" target="_blank" title="拍立得">拍立得</a> 
                     
                    <a href="category.php?id=173" target="_blank" title="运动相机">运动相机</a> 
                     
                    <a href="category.php?id=174" target="_blank" title="摄像机">摄像机</a> 
                     
                    <a href="category.php?id=175" target="_blank" title="户外器材">户外器材</a> 
                     
                    <a href="category.php?id=176" target="_blank" title="数码相框">数码相框</a> 
                     
                    <a href="category.php?id=177" target="_blank" title="影棚器材">影棚器材</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=147" target="_blank" title="智能设备">智能设备<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=164" target="_blank" title="智能手环">智能手环</a> 
                     
                    <a href="category.php?id=165" target="_blank" title="智能手表">智能手表</a> 
                     
                    <a href="category.php?id=166" target="_blank" title="智能眼镜">智能眼镜</a> 
                     
                    <a href="category.php?id=167" target="_blank" title="运动跟踪器">运动跟踪器</a> 
                     
                    <a href="category.php?id=168" target="_blank" title="智能家居">智能家居</a> 
                     
                    <a href="category.php?id=169" target="_blank" title="体感车">体感车</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                   <a href="brand.php?id=25&amp;cat=4" class="img-link" target="_blank" title="Xiaomi/小米"> <img src="data/brandlogo/1513798037835109279.png" width="90" height="36" /> </a>  
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=5" target="_blank" title="进入家用电器频道">家用电器</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=178" target="_blank" title="大家电">大家电<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=183" target="_blank" title="平板电视">平板电视</a> 
                     
                    <a href="category.php?id=184" target="_blank" title="空调冰箱">空调冰箱</a> 
                     
                    <a href="category.php?id=185" target="_blank" title="洗衣机">洗衣机</a> 
                     
                    <a href="category.php?id=186" target="_blank" title="家庭影院">家庭影院</a> 
                     
                    <a href="category.php?id=187" target="_blank" title="烟机/灶具">烟机/灶具</a> 
                     
                    <a href="category.php?id=188" target="_blank" title="热水器">热水器</a> 
                     
                    <a href="category.php?id=189" target="_blank" title="消毒柜/洗碗机">消毒柜/洗碗机</a> 
                     
                    <a href="category.php?id=190" target="_blank" title="冷柜/冰吧">冷柜/冰吧</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=179" target="_blank" title="生活电器">生活电器<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=191" target="_blank" title="电风扇">电风扇</a> 
                     
                    <a href="category.php?id=192" target="_blank" title="净化器">净化器</a> 
                     
                    <a href="category.php?id=193" target="_blank" title="加湿器">加湿器</a> 
                     
                    <a href="category.php?id=194" target="_blank" title="吸尘器">吸尘器</a> 
                     
                    <a href="category.php?id=195" target="_blank" title="挂烫机/熨斗">挂烫机/熨斗</a> 
                     
                    <a href="category.php?id=196" target="_blank" title="取暖电器">取暖电器</a> 
                     
                    <a href="category.php?id=197" target="_blank" title="饮水机">饮水机</a> 
                     
                    <a href="category.php?id=198" target="_blank" title="其它生活电器">其它生活电器</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=180" target="_blank" title="厨房电器">厨房电器<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=199" target="_blank" title="电饭煲">电饭煲</a> 
                     
                    <a href="category.php?id=200" target="_blank" title="微波炉">微波炉</a> 
                     
                    <a href="category.php?id=201" target="_blank" title="电磁炉">电磁炉</a> 
                     
                    <a href="category.php?id=202" target="_blank" title="电饼铛/烧烤盘">电饼铛/烧烤盘</a> 
                     
                    <a href="category.php?id=203" target="_blank" title="电炖锅">电炖锅</a> 
                     
                    <a href="category.php?id=204" target="_blank" title="果蔬解毒机">果蔬解毒机</a> 
                     
                    <a href="category.php?id=205" target="_blank" title="养生壶/煎药壶">养生壶/煎药壶</a> 
                     
                    <a href="category.php?id=206" target="_blank" title="其它厨房电器">其它厨房电器</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=181" target="_blank" title="个护健康">个护健康<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=207" target="_blank" title="剃须刀">剃须刀</a> 
                     
                    <a href="category.php?id=208" target="_blank" title="电吹风">电吹风</a> 
                     
                    <a href="category.php?id=209" target="_blank" title="按摩椅">按摩椅</a> 
                     
                    <a href="category.php?id=210" target="_blank" title="足浴盆">足浴盆</a> 
                     
                    <a href="category.php?id=211" target="_blank" title="健康秤/厨房秤">健康秤/厨房秤</a> 
                     
                    <a href="category.php?id=212" target="_blank" title="血糖仪">血糖仪</a> 
                     
                    <a href="category.php?id=213" target="_blank" title="计步器/脂肪检测">计步器/脂肪检测</a> 
                     
                    <a href="category.php?id=214" target="_blank" title="其它健康电器">其它健康电器</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=182" target="_blank" title="五金家装">五金家装<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=215" target="_blank" title="电动工具">电动工具</a> 
                     
                    <a href="category.php?id=216" target="_blank" title="手动工具">手动工具</a> 
                     
                    <a href="category.php?id=217" target="_blank" title="厨卫五金">厨卫五金</a> 
                     
                    <a href="category.php?id=218" target="_blank" title="家具五金">家具五金</a> 
                     
                    <a href="category.php?id=219" target="_blank" title="电工电料">电工电料</a> 
                     
                    <a href="category.php?id=220" target="_blank" title="监控安防">监控安防</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                   <a href="brand.php?id=27&amp;cat=5" class="img-link" target="_blank" title="TOSOT/大松"> <img src="data/brandlogo/1513798538292183259.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=28&amp;cat=5" class="img-link" target="_blank" title="Gree/格力"> <img src="data/brandlogo/1513798554083390867.png" width="90" height="36" /> </a>  
                   
                </div>
              </div>
                                          <div class="item-promotions">  <a href="affiche.php?ad_id=62&uri=#" class="img-link" target="_blank"><img src="data/afficheimg/1453362914810023437.jpg"  width="182" /></a>  <a href="affiche.php?ad_id=63&uri=#" class="img-link" target="_blank"><img src="data/afficheimg/1453362954584810931.jpg"  width="182" /></a>  </div>
               
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=6" target="_blank" title="进入家纺家居频道">家纺家居</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=306" target="_blank" title="家纺">家纺<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=312" target="_blank" title="床品套件">床品套件</a> 
                     
                    <a href="category.php?id=313" target="_blank" title="被子">被子</a> 
                     
                    <a href="category.php?id=314" target="_blank" title="蚊帐">蚊帐</a> 
                     
                    <a href="category.php?id=315" target="_blank" title="凉席">凉席</a> 
                     
                    <a href="category.php?id=316" target="_blank" title="床单被罩">床单被罩</a> 
                     
                    <a href="category.php?id=317" target="_blank" title="毛巾浴巾">毛巾浴巾</a> 
                     
                    <a href="category.php?id=318" target="_blank" title="床垫/床褥">床垫/床褥</a> 
                     
                    <a href="category.php?id=319" target="_blank" title="窗帘/窗纱">窗帘/窗纱</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=307" target="_blank" title="家具">家具<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=320" target="_blank" title="卧室家具">卧室家具</a> 
                     
                    <a href="category.php?id=321" target="_blank" title="客厅家具">客厅家具</a> 
                     
                    <a href="category.php?id=322" target="_blank" title="餐厅家具">餐厅家具</a> 
                     
                    <a href="category.php?id=323" target="_blank" title="书房家具">书房家具</a> 
                     
                    <a href="category.php?id=324" target="_blank" title="储物家具">储物家具</a> 
                     
                    <a href="category.php?id=325" target="_blank" title="阳台/户外">阳台/户外</a> 
                     
                    <a href="category.php?id=326" target="_blank" title="沙发">沙发</a> 
                     
                    <a href="category.php?id=327" target="_blank" title="鞋架/衣帽架">鞋架/衣帽架</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=308" target="_blank" title="厨具">厨具<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=328" target="_blank" title="烹饪锅具">烹饪锅具</a> 
                     
                    <a href="category.php?id=329" target="_blank" title="刀剪菜板">刀剪菜板</a> 
                     
                    <a href="category.php?id=330" target="_blank" title="厨房配件">厨房配件</a> 
                     
                    <a href="category.php?id=331" target="_blank" title="水具酒具">水具酒具</a> 
                     
                    <a href="category.php?id=332" target="_blank" title="餐具">餐具</a> 
                     
                    <a href="category.php?id=333" target="_blank" title="茶具/咖啡具">茶具/咖啡具</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=309" target="_blank" title="灯具">灯具<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=334" target="_blank" title="台灯">台灯</a> 
                     
                    <a href="category.php?id=335" target="_blank" title="吸顶灯">吸顶灯</a> 
                     
                    <a href="category.php?id=336" target="_blank" title="筒灯射灯">筒灯射灯</a> 
                     
                    <a href="category.php?id=337" target="_blank" title="LED灯">LED灯</a> 
                     
                    <a href="category.php?id=338" target="_blank" title="落地灯">落地灯</a> 
                     
                    <a href="category.php?id=339" target="_blank" title="应急灯/手电">应急灯/手电</a> 
                     
                    <a href="category.php?id=340" target="_blank" title="装饰灯">装饰灯</a> 
                     
                    <a href="category.php?id=341" target="_blank" title="吊灯">吊灯</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=310" target="_blank" title="家装软饰">家装软饰<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=342" target="_blank" title="桌布/罩件">桌布/罩件</a> 
                     
                    <a href="category.php?id=343" target="_blank" title="地毯地垫">地毯地垫</a> 
                     
                    <a href="category.php?id=344" target="_blank" title="沙发垫套/椅垫">沙发垫套/椅垫</a> 
                     
                    <a href="category.php?id=345" target="_blank" title="帘艺隔断">帘艺隔断</a> 
                     
                    <a href="category.php?id=346" target="_blank" title="相框/照片墙">相框/照片墙</a> 
                     
                    <a href="category.php?id=347" target="_blank" title="装饰字画">装饰字画</a> 
                     
                    <a href="category.php?id=348" target="_blank" title="墙贴/装饰贴">墙贴/装饰贴</a> 
                     
                    <a href="category.php?id=349" target="_blank" title="摆件花瓶">摆件花瓶</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=311" target="_blank" title="生活日用">生活日用<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=350" target="_blank" title="收纳用品">收纳用品</a> 
                     
                    <a href="category.php?id=351" target="_blank" title="雨伞雨具">雨伞雨具</a> 
                     
                    <a href="category.php?id=352" target="_blank" title="浴室用品">浴室用品</a> 
                     
                    <a href="category.php?id=353" target="_blank" title="缝纫/针织用品">缝纫/针织用品</a> 
                     
                    <a href="category.php?id=354" target="_blank" title="洗晒/熨烫">洗晒/熨烫</a> 
                     
                    <a href="category.php?id=355" target="_blank" title="净化除味">净化除味</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                   <a href="brand.php?id=31&amp;cat=6" class="img-link" target="_blank" title="lovo"> <img src="data/brandlogo/1513800708652101110.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=32&amp;cat=6" class="img-link" target="_blank" title="罗莱"> <img src="data/brandlogo/1513800718006264290.png" width="90" height="36" /> </a>  
                   
                   <a href="brand.php?id=30&amp;cat=6" class="img-link" target="_blank" title="博洋"> <img src="data/brandlogo/" width="90" height="36" /> </a>  
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=7" target="_blank" title="进入酒类饮料频道">酒类饮料</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=271" target="_blank" title="酒水">酒水<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=276" target="_blank" title="白酒">白酒</a> 
                     
                    <a href="category.php?id=277" target="_blank" title="啤酒">啤酒</a> 
                     
                    <a href="category.php?id=278" target="_blank" title="葡萄酒/果酒">葡萄酒/果酒</a> 
                     
                    <a href="category.php?id=279" target="_blank" title="黄酒/米酒">黄酒/米酒</a> 
                     
                    <a href="category.php?id=280" target="_blank" title="养生酒">养生酒</a> 
                     
                    <a href="category.php?id=281" target="_blank" title="预调酒">预调酒</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=272" target="_blank" title="冲调饮品">冲调饮品<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=282" target="_blank" title="蜂蜜">蜂蜜</a> 
                     
                    <a href="category.php?id=283" target="_blank" title="成人奶粉">成人奶粉</a> 
                     
                    <a href="category.php?id=284" target="_blank" title="豆浆/豆奶粉">豆浆/豆奶粉</a> 
                     
                    <a href="category.php?id=285" target="_blank" title="茶叶">茶叶</a> 
                     
                    <a href="category.php?id=286" target="_blank" title="奶茶">奶茶</a> 
                     
                    <a href="category.php?id=287" target="_blank" title="麦片谷物">麦片谷物</a> 
                     
                    <a href="category.php?id=288" target="_blank" title="咖啡">咖啡</a> 
                     
                    <a href="category.php?id=297" target="_blank" title="果味冲调">果味冲调</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=273" target="_blank" title="饮料饮品">饮料饮品<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=289" target="_blank" title="果蔬汁">果蔬汁</a> 
                     
                    <a href="category.php?id=290" target="_blank" title="茶饮料">茶饮料</a> 
                     
                    <a href="category.php?id=291" target="_blank" title="碳酸饮料">碳酸饮料</a> 
                     
                    <a href="category.php?id=292" target="_blank" title="功能饮料">功能饮料</a> 
                     
                    <a href="category.php?id=293" target="_blank" title="纯牛奶">纯牛奶</a> 
                     
                    <a href="category.php?id=294" target="_blank" title="酸奶">酸奶</a> 
                     
                    <a href="category.php?id=295" target="_blank" title="风味奶">风味奶</a> 
                     
                    <a href="category.php?id=296" target="_blank" title="植物蛋白饮料">植物蛋白饮料</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=274" target="_blank" title="茗茶">茗茶<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=298" target="_blank" title="铁观音">铁观音</a> 
                     
                    <a href="category.php?id=299" target="_blank" title="普洱">普洱</a> 
                     
                    <a href="category.php?id=300" target="_blank" title="龙井">龙井</a> 
                     
                    <a href="category.php?id=301" target="_blank" title="绿茶">绿茶</a> 
                     
                    <a href="category.php?id=302" target="_blank" title="红茶">红茶</a> 
                     
                    <a href="category.php?id=303" target="_blank" title="花果茶">花果茶</a> 
                     
                    <a href="category.php?id=304" target="_blank" title="养生茶">养生茶</a> 
                     
                    <a href="category.php?id=305" target="_blank" title="其他茶">其他茶</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
        		         <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="category.php?id=8" target="_blank" title="进入母婴用品频道">母婴用品</a> </dt>
            <i>&gt;</i>
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
               
               
               
               
               
               
               
               
               
               
               
               
                            <div class="subitems"> 
                                <dl class="fore1">
                  <dt> <a href="category.php?id=221" target="_blank" title="孕婴奶粉">孕婴奶粉<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=227" target="_blank" title="特配奶粉">特配奶粉</a> 
                     
                    <a href="category.php?id=228" target="_blank" title="孕妈奶粉">孕妈奶粉</a> 
                     
                    <a href="category.php?id=229" target="_blank" title="pre段">pre段</a> 
                     
                    <a href="category.php?id=230" target="_blank" title="1段">1段</a> 
                     
                    <a href="category.php?id=231" target="_blank" title="2段">2段</a> 
                     
                    <a href="category.php?id=232" target="_blank" title="3段">3段</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=222" target="_blank" title="营养/辅食">营养/辅食<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=233" target="_blank" title="米粉">米粉</a> 
                     
                    <a href="category.php?id=234" target="_blank" title="果汁/泥">果汁/泥</a> 
                     
                    <a href="category.php?id=235" target="_blank" title="面食类">面食类</a> 
                     
                    <a href="category.php?id=236" target="_blank" title="宝宝零食">宝宝零食</a> 
                     
                    <a href="category.php?id=237" target="_blank" title="DHA">DHA</a> 
                     
                    <a href="category.php?id=238" target="_blank" title="清火开胃">清火开胃</a> 
                     
                    <a href="category.php?id=239" target="_blank" title="钙铁锌">钙铁锌</a> 
                     
                    <a href="category.php?id=240" target="_blank" title="益生菌">益生菌</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=223" target="_blank" title="孕婴洗护">孕婴洗护<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=241" target="_blank" title="洗衣液/皂">洗衣液/皂</a> 
                     
                    <a href="category.php?id=242" target="_blank" title="宝宝沐浴">宝宝沐浴</a> 
                     
                    <a href="category.php?id=243" target="_blank" title="儿童防晒">儿童防晒</a> 
                     
                    <a href="category.php?id=244" target="_blank" title="防蚊/驱蚊">防蚊/驱蚊</a> 
                     
                    <a href="category.php?id=245" target="_blank" title="爽身粉">爽身粉</a> 
                     
                    <a href="category.php?id=246" target="_blank" title="奶瓶清洗">奶瓶清洗</a> 
                     
                    <a href="category.php?id=247" target="_blank" title="孕妇护肤">孕妇护肤</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=224" target="_blank" title="喂养用品">喂养用品<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=248" target="_blank" title="奶嘴奶瓶">奶嘴奶瓶</a> 
                     
                    <a href="category.php?id=249" target="_blank" title="驱蚊用品">驱蚊用品</a> 
                     
                    <a href="category.php?id=250" target="_blank" title="浴室用品">浴室用品</a> 
                     
                    <a href="category.php?id=251" target="_blank" title="水壶/水杯">水壶/水杯</a> 
                     
                    <a href="category.php?id=252" target="_blank" title="吸奶器">吸奶器</a> 
                     
                    <a href="category.php?id=253" target="_blank" title="理发器">理发器</a> 
                     
                    <a href="category.php?id=254" target="_blank" title="防溢乳垫">防溢乳垫</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=225" target="_blank" title="车床/床品">车床/床品<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=255" target="_blank" title="安全座椅">安全座椅</a> 
                     
                    <a href="category.php?id=256" target="_blank" title="手推车">手推车</a> 
                     
                    <a href="category.php?id=257" target="_blank" title="婴儿床">婴儿床</a> 
                     
                    <a href="category.php?id=258" target="_blank" title="餐椅">餐椅</a> 
                     
                    <a href="category.php?id=259" target="_blank" title="三轮车">三轮车</a> 
                     
                    <a href="category.php?id=260" target="_blank" title="儿童家具">儿童家具</a> 
                     
                    <a href="category.php?id=261" target="_blank" title="睡袋/抱被">睡袋/抱被</a> 
                     
                    <a href="category.php?id=262" target="_blank" title="凉席/蚊帐">凉席/蚊帐</a> 
                     
                  </dd>
                </dl>
                                <dl class="fore1">
                  <dt> <a href="category.php?id=226" target="_blank" title="孕妈专区">孕妈专区<i>&gt;</i></a> </dt>
                  <dd> 
                     
                    <a href="category.php?id=263" target="_blank" title="孕妇裙">孕妇裙</a> 
                     
                    <a href="category.php?id=264" target="_blank" title="打底裤">打底裤</a> 
                     
                    <a href="category.php?id=265" target="_blank" title="防辐射服">防辐射服</a> 
                     
                    <a href="category.php?id=266" target="_blank" title="腰凳">腰凳</a> 
                     
                    <a href="category.php?id=267" target="_blank" title="妈咪包">妈咪包</a> 
                     
                    <a href="category.php?id=268" target="_blank" title="收腹带">收腹带</a> 
                     
                    <a href="category.php?id=269" target="_blank" title="哺乳文胸">哺乳文胸</a> 
                     
                    <a href="category.php?id=270" target="_blank" title="孕妇内裤">孕妇内裤</a> 
                     
                  </dd>
                </dl>
                 
              </div>
            </div>
            <div class="item-right fr">
              <div class="item-brands">
                <div class="brands-inner"> 
                   
                </div>
              </div>
                             
            </div>
          </div>
        </div>
		 
         
      </div>
      </div>
      <div class="allnav fl" id="nav">
        <ul>
          <li><a class="nav" href="index.php" title="首页">首页</a></li>
                    <li><a class="nav current" href="category.php?id=1" title="食品生鲜" >食品生鲜</a></li>
                    <li><a class="nav " href="stores.php" title="店铺街" >店铺街</a></li>
                    <li><a class="nav " href="pro_search.php?intro=promotion" title="团购" >团购</a></li>
                    <li><a class="nav " href="pre_sale.php" title="预售" >预售</a></li>
                    <li><a class="nav " href="auction.php" title="拍卖" >拍卖</a></li>
                    <li><a class="nav " href="exchange.php" title="积分商城" >积分商城</a></li>
                    <li><a class="nav " href="activity.php" title="优惠活动" >优惠活动</a></li>
                    <li><a class="nav " href="article_list.php" title="文章资讯" >文章资讯</a></li>
                    <li><a class="nav " href="https://we10.taobao.com/" title="甜心100淘宝担保" target="_blank" >甜心100淘宝担保</a></li>
                  </ul>
      </div>
  </div>
</div>
<script type="text/javascript">
//<![CDATA[
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
	var frm  = document.getElementById('searchForm');
	var type = parseInt(document.getElementById('searchtype').value);
	frm.action = type==0 ? 'search.php' : 'stores.php';
        return true;
    }
    else
    {
	alert("请输入关键词！");
        return false;
    }
}
function myValue1()
{
	document.getElementById('keyword').value = "请输入商品名称或编号...";
}
function myValue2()
{
	document.getElementById('keyword').value = "";
}
//]]>
$('.search-type li').click(function() {
    $(this).addClass('cur').siblings().removeClass('cur');
    $('#searchtype').val($(this).attr('num'));
});
$(function(){
	//图片放大效果
    $(".header-right img").bubbleup({scale:100});
	
	//头部搜索
	$('.search-type').hover(function(){
		$(this).css({"height":"auto","overflow":"visible"});
	},function(){
		$(this).css({"height":32,"overflow":"hidden"});
	});
	
});
function _show_(h, b) {
	if (!h) {
		return
	}
	if (b && b.source && b.target) {
		var d = (typeof b.source == "string") ? M.$("#" + b.source) : b.source;
		var e = (typeof b.target == "string") ? M.$("#" + b.target) : b.target;
		if (d && e && !e.isDone) {
			e.innerHTML = d.value;
			d.parentNode.removeChild(d);
			if (typeof b.callback == "function") {
				b.callback()
			}
			e.isDone = true
		}
	}
	M.addClass(h, "hover");
	if (b && b.isLazyLoad && h.isDone) {
		var g = h.find("img");
		for (var a = 0, c = g.length; a < c; a++) {
			var f = g[a].getAttribute("data-src_index_menu");
			if (f) {
				g[a].setAttribute("src", f);
				g[a].removeAttribute("data-src_index_menu")
			}
		}
		h.isDone = true
	}
}
function _hide_(a) {
	if (!a) {
		return
	}
	if (a.className.indexOf("hover") > -1) {
		M.removeClass(a, "hover")
	}
}
</script>
<script type="text/javascript" src="themes/wwwwe10cn/js/nav.js"></script>
<div class="margin-w1210 clearfix">
  	<div class="w">
  <div class="breadcrumb clearfix"><a href="." class="index">首页</a> <span class='crumbs-arrow'>&gt;</span> <div class='crumbs-nav crumbs-nav0'><a class='crumbs-title' href='category.php?id=1'>食品生鲜<i class='icon'></i></a><div class='crumbs-drop'><ul class='crumbs-drop-list'><li><a href='category.php?id=1'>食品生鲜</a></li><li><a href='category.php?id=2'>服装服饰</a></li><li><a href='category.php?id=3'>个护化妆</a></li><li><a href='category.php?id=4'>手机数码</a></li><li><a href='category.php?id=5'>家用电器</a></li><li><a href='category.php?id=6'>家纺家居</a></li><li><a href='category.php?id=7'>酒类饮料</a></li><li><a href='category.php?id=8'>母婴用品</a></li><li><a href='category.php?id=356'>虚拟分类</a></li></ul></div></div> <span class='crumbs-arrow'>&gt;</span> <div class='crumbs-nav crumbs-nav1'><a class='crumbs-title' href='category.php?id=12'>蜜饯果干<i class='icon'></i></a><div class='crumbs-drop'><ul class='crumbs-drop-list'><li><a href='category.php?id=9'>牛奶乳品</a></li><li><a href='category.php?id=10'>坚果炒货</a></li><li><a href='category.php?id=12'>蜜饯果干</a></li><li><a href='category.php?id=13'>糖果巧克力</a></li><li><a href='category.php?id=14'>进口水果</a></li></ul></div></div> <span class="crumbs-arrow">&gt;</span> <span class="last">【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干</span></div>
</div>
<div class="blank"></div>
<script>
$(function(){
	$('.breadcrumb .crumbs-nav').hover(function(){
		$(this).toggleClass('curr');	
	})
})
</script>
	<div id="product-intro" class="goods-info"> 
      <div id="preview">
        <div class="goods-img" id="li_10" style="position:relative; z-index:3;">
        	<a href="https://img.alicdn.com/bao/uploaded/i4/TB1GGTjNVXXXXb_XVXXXXXXXXXX_!!0-item_pic.jpg" class="MagicZoom" id="zoom" rel="zoom-position: right;"> 
                 
                <img  src="https://img.alicdn.com/bao/uploaded/i4/TB1GGTjNVXXXXb_XVXXXXXXXXXX_!!0-item_pic.jpg_600x600.jpg" class="goodsimg pic_img_10" id="goods_bimg" width="400" height="400" /> 
                 
          	</a> 
        </div>
        <div style="height:10px; line-height:10px; clear:both;"></div>
         
        <div class="clearfix" class="goods_picture">
<span class="scrleft" onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
<div class="gallery">
  <div id="demo">
    <div id="demo1" style="float:left;">
      <ul id="goods_gallery">
                <li> <a href="https://img.alicdn.com/bao/uploaded/i4/TB1GGTjNVXXXXb_XVXXXXXXXXXX_!!0-item_pic.jpg" rel="zoom-id: zoom;" rev="https://img.alicdn.com/bao/uploaded/i4/TB1GGTjNVXXXXb_XVXXXXXXXXXX_!!0-item_pic.jpg_600x600.jpg"   title="" > <img src="https://img.alicdn.com/bao/uploaded/i4/TB1GGTjNVXXXXb_XVXXXXXXXXXX_!!0-item_pic.jpg_300x300.jpg" alt="【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干" class="B_blue"  /> </a> </li>
                <li> <a href="https://img.alicdn.com/bao/uploaded/i2/880734502/TB2Ztt.tVXXXXX8XpXXXXXXXXXX_!!880734502.jpg" rel="zoom-id: zoom;" rev="https://img.alicdn.com/bao/uploaded/i2/880734502/TB2Ztt.tVXXXXX8XpXXXXXXXXXX_!!880734502.jpg_600x600.jpg"   title="" > <img src="https://img.alicdn.com/bao/uploaded/i2/880734502/TB2Ztt.tVXXXXX8XpXXXXXXXXXX_!!880734502.jpg_300x300.jpg" alt="【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干" class="B_blue"  /> </a> </li>
                <li> <a href="https://img.alicdn.com/bao/uploaded/i3/880734502/TB2ZWY6dmvHfKJjSZFPXXbttpXa_!!880734502.jpg" rel="zoom-id: zoom;" rev="https://img.alicdn.com/bao/uploaded/i3/880734502/TB2ZWY6dmvHfKJjSZFPXXbttpXa_!!880734502.jpg_600x600.jpg"   title="" > <img src="https://img.alicdn.com/bao/uploaded/i3/880734502/TB2ZWY6dmvHfKJjSZFPXXbttpXa_!!880734502.jpg_300x300.jpg" alt="【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干" class="B_blue"  /> </a> </li>
                <li> <a href="https://img.alicdn.com/bao/uploaded/i4/880734502/TB2IN8khXXXXXaHXXXXXXXXXXXX_!!880734502.jpg" rel="zoom-id: zoom;" rev="https://img.alicdn.com/bao/uploaded/i4/880734502/TB2IN8khXXXXXaHXXXXXXXXXXXX_!!880734502.jpg_600x600.jpg"   title="" > <img src="https://img.alicdn.com/bao/uploaded/i4/880734502/TB2IN8khXXXXXaHXXXXXXXXXXXX_!!880734502.jpg_300x300.jpg" alt="【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干" class="B_blue"  /> </a> </li>
                <li> <a href="https://img.alicdn.com/bao/uploaded/i4/880734502/TB2lZUCnNhmpuFjSZFyXXcLdFXa_!!880734502.jpg" rel="zoom-id: zoom;" rev="https://img.alicdn.com/bao/uploaded/i4/880734502/TB2lZUCnNhmpuFjSZFyXXcLdFXa_!!880734502.jpg_600x600.jpg"   title="" > <img src="https://img.alicdn.com/bao/uploaded/i4/880734502/TB2lZUCnNhmpuFjSZFyXXcLdFXa_!!880734502.jpg_300x300.jpg" alt="【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干" class="B_blue"  /> </a> </li>
              </ul>
    </div>
    <div id="demo2" style="display:inline; overflow:visible;"></div>
  </div>
</div>
<span class="scrright" onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span> 
<script>
      function $gg(id){  
        return (document.getElementById) ? document.getElementById(id): document.all[id]
      }
      
      var boxwidth=60;//跟图片的实际尺寸相符
      
      var box=$gg("demo");
      var obox=$gg("demo1");
      var dulbox=$gg("demo2");
      obox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      box.style.width=obox.getElementsByTagName("li").length*boxwidth*6+'px';
      var canroll = false;
      if (obox.getElementsByTagName("li").length >= 6) {
        canroll = true;
        dulbox.innerHTML=obox.innerHTML;
      }
      var step=5;temp=1;speed=50;
      var awidth=obox.offsetWidth;
      var mData=0;
      var isStop = 1;
      var dir = 1;
      
      function s(){
        if (!canroll) return;
        if (dir) {
      if((awidth+mData)>=0)
      {
      mData=mData-step;
      }
      else
      {
      mData=-step;
      }
      } else {
        if(mData>=0)
        {
        mData=-awidth;
        }
        else
        {
        mData+=step;
        }
      }
      
      obox.style.marginLeft=mData+"px";
      
      if (isStop) return;
      
      setTimeout(s,speed)
      }
      
      
      function moveLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function moveRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function scrollStop() {
        isStop=1;
      }
      
      function clickLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function clickRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      </script>
</div>
  
        
        <div class="goods-gallery-bottom">
        	        	<div class="goods-sn fl">
            	<span class="goods-sn-color">商品货号</span>
                <span>45738800824</span>
            </div>
             
            <a class="goods-compare compare-btn fr" data-goods="10" data-type="" onclick="Compare.add(10,'【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干','1', 'https://img.alicdn.com/bao/uploaded/i4/TB1GGTjNVXXXXb_XVXXXXXXXXXX_!!0-item_pic.jpg_300x300.jpg', '60.0')"><i></i>对比</a>
            
            <a href="javascript:collect(10)" class="goods-col  fr">
            	<b></b><i>收藏 (0)</i>
            </a>   
            <div class="bdsharebuttonbox fr">
        		<a class="bds_more" href="#" data-cmd="more" style="background: transparent url(themes/wwwwe10cn/images/goods-icon.png) no-repeat -110px -166px;color: #999;line-height: 25px;height: 25px; margin: 0px 10px; padding-left:20px; display: block;">分享</a>
            </div>
        </div>
		<script type="text/javascript">
        	window._bd_share_config = {
			"common": {
				"bdSnsKey": {},
				"bdText": "",
				"bdMini": "2",
				"bdMiniList": false,
				"bdPic": "",
				"bdStyle": "0",
				"bdSize": "16"
			},
			"share": {}
		};
		with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'static/api/js/share.js?v=89860593.js?cdnversion=' + ~ (-new Date() / 36e5)];
        </script>
      </div>
      <div class="goods-detail-info">
          <form action="javascript:addToCart(10)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >        
               <div class="goods-name">
                  <h1>【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干</h1>
               </div>
                              <div id="goods-price">
                 <div class="mar-l">
                       
                      <span class="price">售价</span><strong class="p-price" id="ECS_GOODS_AMOUNT"></strong> 
                       
                      <span class="depreciate"><a href="javascript:showDiv(10);">降价通知</a></span> 
                 </div>
                 <div class="show-price"> 
                                        <div class="market-prices-spe"> 
                    	<span class="price">市场价</span>
                        <font class="market-price">60.0</font> 
                    </div>
                     
                     
                                        <div class="rank-prices">
                      <div id="vip1" onmouseover="hidevip1()"> 
                      	<span class="rmbPrice">会员等级价格<i></i></span> 
                      </div>
                      <div class="hover" style="display:none;" id="vip2" onmouseover="hidevip1()" onmouseout="showvip1()"> 
                      	<span class="rmbPrice">会员等级价格<i></i></span> 
                         
                        <br/>
                        <span class="rmbPrice"> 铜牌会员：22.7</span> 
                         
                        <br/>
                        <span class="rmbPrice"> 金牌会员：21.5</span> 
                         
                        <br/>
                        <span class="rmbPrice"> 钻石会员：20.3</span> 
                         
                      </div>
                      <script type="text/javascript">
						function hidevip1(){ 
						document.getElementById('vip1').style.display="none";
						document.getElementById('vip2').style.display="block";
						}
						function showvip1(){ 
						document.getElementById('vip1').style.display="block";
						document.getElementById('vip2').style.display="none";
						}
					  </script> 
                    </div>
                     
                  </div>
                </div>
               <ul id="summary1">
                   
                   
                   
                                  </ul>
               <div id="summary-qita">
                  <ul class="qita">
                    <li>
                      <p>累积评价<span><a href="/goods.php?id=10#os_pinglun">0人评价</a></span></p>
                    </li>
                    <li>
					
					 
					<p>累计销量<span>554fcae493e564ee0dc75bdf2ebf94casales_count|a:2:{s:4:"name";s:11:"sales_count";s:8:"goods_id";s:2:"10";}554fcae493e564ee0dc75bdf2ebf94ca件</span></p>
                    </li>
					 
					
                                        <li style="border:none">
                      <p>赠送积分<span><font id="ECS_GOODS_AMOUNT_jf">23</font></span></p>
                                        </ul>
               </div>
               <ul id="summary">
                   
                                    
                                  </ul>
               <ul id="choose" class="choose_bor">
                                     
                                    <li id="choose-version">
                    <div class="dt">食品口味</div>
                    <div class="dd catt"> 
                       
                       
                       
                      
                      <input type="hidden" name="spec_attr_type" value="50">
                      <input type="hidden" name="attr_types" id="spec_attr_type_50" value="0">
                      <ul class="ys_xuan" id="xuan_50">
                        <div class="catt" id="catt_50"> 
                           
                          <a onclick="show_attr_status(this,10, 0);"  href="javascript:;"  name="99" id="xuan_a_99"  title="" >
                           
		      
                          <div class="value-label">原味</div>
                                                    <input style="display:none" id="spec_value_99" type="radio" name="spec_50" value="99" disabled="" />
                          </a> 
                           
                        </div>
                      </ul>
                      <div class="clear"></div>
                      <input type="hidden" name="spec_list" value="0" />
                       
                       
                       
                    </div>
                  </li>
                   
                   
                  <script type="text/javascript">
					var myString=new Array();
					
										myString[0]="|99|";
										
				  </script> 
                   
                  
                  <li id="choose-amount">
                    <div class="dt">数量</div>
                    <div class="dd">
                      <div class="wrap-input"> 
                        <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script> 
                        <a class="btn-reduce" href="javascript:;" onclick="goods_cut();changePrice();">减少数量</a>
                        <input name="number" type="text" class="text"  id="number" value="1" onblur="changePrice();"/>
                        <a class="btn-add" href="javascript:;" onclick="goods_add();changePrice();">增加数量</a> 
                                                  （库存<font id="shows_number">65535 </font>）
                                              </div>
                    </div>
                  </li>
                                  </ul>
               <div class="buyNub-buy-wrap">
                	<div id="choose-btns1" class="buyNub-buy" style="display:none"> 
                    	<a onclick="tell_me(10)" class="tell-me"><i></i>到货通知</a>
                  	</div>
                  	<div id="choose-btns" class="buyNub-buy"> 
                         
                        <a href="javascript:addToCart(10,0,1)" name="bi_addToCart" class="u-buy1">立即购买</a> <a href="javascript:addToCart(10)" name="bi_addToCart" class="u-buy2">加入购物车</a> 
                         
                        <a id="phone" class="btn-phone" style="position:relative;cursor:pointer">
                        	手机购买<i></i>
                            <div id="phone-tan" style="display:none"> 
                              <span class="arr"></span>
                              <div class="m-qrcode-wrap"> <img src="erweima_png.php?id=10" width="100" height="100" /> </div>
                            </div>
                        </a>  
                  	</div>
					<script type="text/javascript">
                        $("#phone").mouseover( function(){	
                            $( "#phone-tan" ).show();
                        });
                        $("#phone").mouseleave( function(){
                            $( "#phone-tan" ).hide();
                        });
                    </script> 
                </div>       
          </form>
      </div>
      <div id="supp_info"> 
         
        <div id="shop-info">
  <input type="hidden" id="chat_supp_id" value="2" />
    <dl class="shop-title">
    <dt><a href="supplier.php?suppId=2" target="_blank"> 三只松鼠</a></dt>
  </dl>
    <div class="blank"></div>
  <div class="shop-info-detail">
      <dl class="rate-detail">
        <dt>好&nbsp;评&nbsp;率&nbsp;：</dt>
        <dd><span class="hot-grey"><span class="hot-red" style="width:100%;"></span></span>100%</dd>
      </dl>
            <dl style="padding-top:10px;">
        <dt>商家名称：</dt>
        <dd>三只松鼠</dd>
      </dl>
                  <dl>
        <dt>商店等级：</dt>
        <dd>高级店铺</dd>
      </dl>
            <dl>
        <dt>客服 QQ：</dt>
        <dd> 
           
           
          <a href="https://wpa.qq.com/msgrd?v=3&uin=2538555088&site=qq&menu=yes" target="_blank" alt="点击这里联系我" title="点击这里联系我"><img src="https://wpa.qq.com/pa?p=1:2538555088:4" height="16" border="0" alt="QQ" /></a> 
           
           
        </dd>
      </dl>
      <dl>
        <dt>客服旺旺：</dt>
        <dd> 
           
           
          <a href="https://amos1.taobao.com/msg.ww?v=2&uid=wu%E5%B0%8F%E5%90%9B2010%3A%E5%B0%8F%E5%B8%85&s=2" target="_blank"><img src="https://amos1.taobao.com/online.ww?v=2&uid=wu%E5%B0%8F%E5%90%9B2010%3A%E5%B0%8F%E5%B8%85&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /></a> 
           
           
        </dd>
      </dl>
                  <dl>
        <dt>所在地区：</dt>
        <dd>河南洛阳</dd>
      </dl>
            <ul class="score-detail">
        <li> <a title="描述5.0"> <span class="score-tit score-tit1">描述</span><span class="scores">5.0</span> </a> </li>
        <li> <a title="服务5.0"> <span class="score-tit score-tit2">服务</span><span class="scores">5.0</span> </a> </li>
        <li style="margin-right: 0px"> <a title="物流5.0"> <span class="score-tit score-tit3">物流</span><span class="scores">5.0</span> </a> </li>
      </ul>
      <div id="enter-shop">
        <div class="enter-shop-item"> <a class="btn-flat1 goto-shop" href="supplier.php?suppId=2" target="_blank"><i></i>进入商店 </a>  <a class="btn-flat1 shop-add" href="javascript:guanzhu(2);"><i></i>关注本店 </a>  </div>
        <div id="attention-shop">
          <p>扫一扫，手机访问店铺</p>
          <img src="erweima_supplier.php?sid=2" width="120" height="120" /> </div>
      </div>
	</div>
</div>
<script>
function guanzhu(sid){
	Ajax.call('supplier.php', 'go=other&act=add_guanzhu&suppId=' + sid, selcartResponse, 'GET', 'JSON');
}
function selcartResponse(result){
	if(result.error == 0){
		$('.pop-login,.pop-mask').show();	
		$('.pop-login').css('top',($(window).height()-$('.pop-login').height())/2);
	}else if(result.error == 1){
		$('.pop-success,.pop-mask').show();
		$('.pop-success .pop-text').html(result.info).parents('.pop-success').css('top',($(window).height()-240)/2);;
	}else{
		$('.pop-compare-small,.pop-mask').show();
		$('.pop-compare-small .pop-text').html(result.info).css({'padding-top':'20px'}).parents('.pop-compare-small').css({'top':($(window).height()-$('.pop-compare-small').outerHeight())/2});
	}
}
</script> 
         
      </div>
    </div>
  	<div class="goods-best">
	<div class="mt">
    	<h2>推荐精品</h2>
    </div>
    <div class="colList"> 
     <a id="btn-left1"  class="prev" title="上一个" onclick="top4()"></a>
      <div class="slider1 colFrame">
		<ul>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=62" title="农栈黔阳冰糖橙柑新鲜时令水果胜麻阳永兴橙赣南脐橙9斤包邮"><img width="160" height="160" alt="农栈黔阳冰糖橙柑新鲜时令水果胜麻阳永兴橙赣南脐橙9斤包邮"  src="https://img.alicdn.com/bao/uploaded/i3/768183576/TB2ztI9ckfb_uJkHFrdXXX2IVXa_!!768183576.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	35.8 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=62" title="农栈黔阳冰糖橙柑新鲜时令水果胜麻阳永兴橙赣南脐橙9斤包邮">农栈黔阳冰糖橙柑新鲜时令...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=134" title="罗莱家纺全棉斜纹被套床单床上用品四件套件秋冬新品纯棉被套床单"><img width="160" height="160" alt="罗莱家纺全棉斜纹被套床单床上用品四件套件秋冬新品纯棉被套床单"  src="https://img.alicdn.com/bao/uploaded/i2/TB1GcpBSpXXXXcoaXXXXXXXXXXX_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	0.0 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=134" title="罗莱家纺全棉斜纹被套床单床上用品四件套件秋冬新品纯棉被套床单">罗莱家纺全棉斜纹被套床单...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=101" title="innisfree/悦诗风吟绿茶精萃保湿护手霜 滋润  手部护理"><img width="160" height="160" alt="innisfree/悦诗风吟绿茶精萃保湿护手霜 滋润  手部护理"  src="https://img.alicdn.com/bao/uploaded/i2/845001562/TB1jaEfXQfb_uJkHFNRXXc3vpXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=101" title="innisfree/悦诗风吟绿茶精萃保湿护手霜 滋润  手部护理">innisfree/悦诗...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=119" title="测试商品"><img width="160" height="160" alt="测试商品"  src="https://img.alicdn.com/bao/uploaded/i3/3104451008/TB1jqELiRTH8KJjy0FiXXcRsXXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	0.0 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=119" title="测试商品">测试商品</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=87" title="韩都衣舍 娜扎明星同款 2017冬装新款宽松chic加绒潮卫衣DL7802喆"><img width="160" height="160" alt="韩都衣舍 娜扎明星同款 2017冬装新款宽松chic加绒潮卫衣DL7802喆"  src="https://img.alicdn.com/bao/uploaded/i4/263817957/TB1yXcEiPnD8KJjSspbXXbbEXXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	168.0 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=87" title="韩都衣舍 娜扎明星同款 2017冬装新款宽松chic加绒潮卫衣DL7802喆">韩都衣舍 娜扎明星同款 ...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=73" title="陕西富士非洛川水果红苹果现摘现发礼品盒新鲜脆甜十斤包邮85MM"><img width="160" height="160" alt="陕西富士非洛川水果红苹果现摘现发礼品盒新鲜脆甜十斤包邮85MM"  src="https://img.alicdn.com/bao/uploaded/i1/1760361257/TB2mtMrbsnI8KJjSsziXXb8QpXa_!!1760361257.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	48.6 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=73" title="陕西富士非洛川水果红苹果现摘现发礼品盒新鲜脆甜十斤包邮85MM">陕西富士非洛川水果红苹果...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=74" title="智慧橙橙子赣南脐橙20斤装现采新鲜水果江西赣州特产甜橙9省包邮"><img width="160" height="160" alt="智慧橙橙子赣南脐橙20斤装现采新鲜水果江西赣州特产甜橙9省包邮"  src="https://img.alicdn.com/bao/uploaded/i1/2147059865/TB1sSFhdMnH8KJjSspcXXb3QFXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	136.0 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=74" title="智慧橙橙子赣南脐橙20斤装现采新鲜水果江西赣州特产甜橙9省包邮">智慧橙橙子赣南脐橙20斤...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=75" title="赣南脐橙江西脐橙当季水果果园橙新鲜橙子脐橙水果橙5斤安远脐橙"><img width="160" height="160" alt="赣南脐橙江西脐橙当季水果果园橙新鲜橙子脐橙水果橙5斤安远脐橙"  src="https://img.alicdn.com/bao/uploaded/i4/2939716119/TB1S9zEftfJ8KJjy0FeXXXKEXXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	34.9 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=75" title="赣南脐橙江西脐橙当季水果果园橙新鲜橙子脐橙水果橙5斤安远脐橙">赣南脐橙江西脐橙当季水果...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=128" title="lovo家纺罗莱生活出品单人被子保暖被双人被芯冬季儿童蚕丝被冬被"><img width="160" height="160" alt="lovo家纺罗莱生活出品单人被子保暖被双人被芯冬季儿童蚕丝被冬被"  src="https://img.alicdn.com/bao/uploaded/i4/279887075/TB17EIab6uhSKJjSspaXXXFgFXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	998.0 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=128" title="lovo家纺罗莱生活出品单人被子保暖被双人被芯冬季儿童蚕丝被冬被">lovo家纺罗莱生活出品...</a></div>
                </div>
            </li>
      	    		<li>
            	<div class="p-img"><a href="goods.php?id=127" title="博洋家纺磨毛四件套全棉加厚1.8m床上用品秋冬纯棉被套保暖床单"><img width="160" height="160" alt="博洋家纺磨毛四件套全棉加厚1.8m床上用品秋冬纯棉被套保暖床单"  src="https://img.alicdn.com/bao/uploaded/i3/253285776/TB1KEYkcAfb_uJkHFNRXXc3vpXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
                <div class="rain-product-info">
            	<div class="p-price"><strong class="best_goods_price"> 
              	 
              	499.0 
              	 
              	</strong>
                </div>
                <div class="rate"><a href="goods.php?id=127" title="博洋家纺磨毛四件套全棉加厚1.8m床上用品秋冬纯棉被套保暖床单">博洋家纺磨毛四件套全棉加...</a></div>
                </div>
            </li>
      	    	</ul>
      </div>
     <a id="btn-right1" class="next" title="下一个" onclick="bottom4()"></a> 
    </div>
    <script type="text/javascript">
 var _scrolling="";
var a=1;
var $slider1 = $('.slider1 ul');
var $slider1_child_l = $('.slider1 ul li').length;
var $slider1_width = $('.slider1 ul li').width();
$slider1.width($slider1_child_l * $slider1_width);
var slider1_count = 0;
if ($slider1_child_l <=6) {
	$('#btn-right1').css({cursor: 'auto'});
	$('#btn-right1').removeClass("dasabled");
}
var time="";
function bottom3(){
	if (slider1_count >= $slider1_child_l - 6){
		a=0;
		top1();
	}else{
		slider1_count++;
		$slider1.animate({left: '-=' + $slider1_width + 'px'}, 'slow');	
		slider1_pic();
		time = setTimeout("bottom3()",5000);
	}
}
function top3(){
	if (slider1_count <= 0) {
		a=1;
		bottom1();	
	}else{
		slider1_count--;
		$slider1.animate({left: '+=' + $slider1_width + 'px'}, 'slow');
		slider1_pic();
		time = setTimeout("top3();",5000);
	}
}
function bottom4(){
	if (slider1_count >= $slider1_child_l - 6){
		return false;
	}else{
		slider1_count++;
		$slider1.animate({left: '-=' + $slider1_width + 'px'}, 'slow');	
		slider1_pic();
	}
}
function top4(){
	if (slider1_count <= 0) {
		return false;
	}else{
		slider1_count--;
		$slider1.animate({left: '+=' + $slider1_width + 'px'}, 'slow');
		slider1_pic();
	}
}
function slider1_pic() {
	if (slider1_count >= $slider1_child_l - 6) {
		$('#btn-right1').css({cursor: 'auto'});
		$('#btn-right1').addClass("dasabled");
	}
	else if (slider1_count > 0 && slider1_count <= $slider1_child_l - 6) {
		$('#btn-left1').css({cursor: 'pointer'});
		$('#btn-left1').removeClass("dasabled");
		$('#btn-right1').css({cursor: 'pointer'});
		$('#btn-right1').removeClass("dasabled");
	}
	else if (slider1_count <= 0) {
		$('#btn-left1').css({cursor: 'auto'});
		$('#btn-left1').addClass("dasabled");
	}
}
</script>
</div>
     <div class="left-con">
    	<div class="aside-con aside-con1">
  <div class="aside-tit">
    <h2>相关分类</h2>
  </div>
  <div class="aside-list">
    <ul>
                  <li><a href="category.php?id=14" title="进口水果">进口水果</a></li>
            <li><a href="category.php?id=13" title="糖果巧克力">糖果巧克力</a></li>
            <li><a href="category.php?id=9" title="牛奶乳品">牛奶乳品</a></li>
            <li><a href="category.php?id=10" title="坚果炒货">坚果炒货</a></li>
            <li><a href="category.php?id=12" title="蜜饯果干">蜜饯果干</a></li>
          </ul>
  </div>
</div>
        <div class="aside-con aside-con1">
  <div class="aside-tit">
    <h2>同类品牌</h2>
  </div>
  <div class="aside-list">
    <ul>
                  <li><a href="brand.php?id=2" title="BE＆CHEERY/百草味">BE＆CHEERY/百草味</a></li>
            <li><a href="brand.php?id=1" title="Three Squirrels/三只松鼠">Three Squirrels/三只松鼠</a></li>
          </ul>
  </div>
</div>
        <div class="aside-con collect">
	<div class="aside-tit">
    	<h2>最近上新</h2>
    </div>
    <div class="aside-list colList" style="max-height:512px;"> 
      <div class="slider colFrame" id="slider">
        <ul style="left: 0px;">
                     <li style="border-top:none;" >
            <div class="p-img"><a href="goods.php?id=84"><img width="100" height="100" alt="【凑单价46元】韩都衣舍2017韩版女装秋纯色织带长袖T恤EQ7354婋"  src="https://img.alicdn.com/bao/uploaded/i2/263817957/TB1c38Li8HH8KJjy0FbXXcqlpXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=84" title="【凑单价46元】韩都衣舍2017韩版女装秋纯色织带长袖T恤EQ7354婋">【凑单价46元】韩都衣舍...</a></div>
            <div class="p-price"><strong> 
               
               
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=74"><img width="100" height="100" alt="智慧橙橙子赣南脐橙20斤装现采新鲜水果江西赣州特产甜橙9省包邮"  src="https://img.alicdn.com/bao/uploaded/i1/2147059865/TB1sSFhdMnH8KJjSspcXXb3QFXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=74" title="智慧橙橙子赣南脐橙20斤装现采新鲜水果江西赣州特产甜橙9省包邮">智慧橙橙子赣南脐橙20斤...</a></div>
            <div class="p-price"><strong> 
               
              136.0 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=75"><img width="100" height="100" alt="赣南脐橙江西脐橙当季水果果园橙新鲜橙子脐橙水果橙5斤安远脐橙"  src="https://img.alicdn.com/bao/uploaded/i4/2939716119/TB1S9zEftfJ8KJjy0FeXXXKEXXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=75" title="赣南脐橙江西脐橙当季水果果园橙新鲜橙子脐橙水果橙5斤安远脐橙">赣南脐橙江西脐橙当季水果...</a></div>
            <div class="p-price"><strong> 
               
              34.9 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=60"><img width="100" height="100" alt="眉山市高山东坡脐橙8斤新鲜水果包邮非赣南橙子金堂脐橙坏果包赔"  src="https://img.alicdn.com/bao/uploaded/i4/3542370406/TB2Yb78gC_I8KJjy0FoXXaFnVXa_!!3542370406.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=60" title="眉山市高山东坡脐橙8斤新鲜水果包邮非赣南橙子金堂脐橙坏果包赔">眉山市高山东坡脐橙8斤新...</a></div>
            <div class="p-price"><strong> 
               
               
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=88"><img width="100" height="100" alt="韩都衣舍2017韩版女装冬新款宽松加厚chic假两件加绒卫衣NW9100棽"  src="https://img.alicdn.com/bao/uploaded/i1/263817957/TB1DCpYddHO8KJjSZFHXXbWJFXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=88" title="韩都衣舍2017韩版女装冬新款宽松加厚chic假两件加绒卫衣NW9100棽">韩都衣舍2017韩版女装...</a></div>
            <div class="p-price"><strong> 
               
              169.0 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=89"><img width="100" height="100" alt="韩都衣舍2017韩版女装秋装新款学生宽松织带连帽chic卫衣JZ7949玎"  src="https://img.alicdn.com/bao/uploaded/i1/263817957/TB1BS3niNrI8KJjy0FpXXb5hVXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=89" title="韩都衣舍2017韩版女装秋装新款学生宽松织带连帽chic卫衣JZ7949玎">韩都衣舍2017韩版女装...</a></div>
            <div class="p-price"><strong> 
               
              129.0 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=90"><img width="100" height="100" alt="韩都衣舍2017韩版秋装新款宽松连帽学生chic套头潮女卫衣TK9599婏"  src="https://img.alicdn.com/bao/uploaded/i4/263817957/TB1evfHiRfH8KJjy1XbXXbLdXXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=90" title="韩都衣舍2017韩版秋装新款宽松连帽学生chic套头潮女卫衣TK9599婏">韩都衣舍2017韩版秋装...</a></div>
            <div class="p-price"><strong> 
               
              134.0 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=79"><img width="100" height="100" alt="韩都衣舍2017韩版女装秋新款宽松露肩chic假两件长袖T恤NW9965棽"  src="https://img.alicdn.com/bao/uploaded/i2/263817957/TB1rmk7cjgy_uJjSZTEXXcYkFXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=79" title="韩都衣舍2017韩版女装秋新款宽松露肩chic假两件长袖T恤NW9965棽">韩都衣舍2017韩版女装...</a></div>
            <div class="p-price"><strong> 
               
              91.0 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=51"><img width="100" height="100" alt="女用自卫慰器情趣性用品震动棒抽插高潮阴蒂刺激电动舌头吸舔阴器"  src="https://img.alicdn.com/bao/uploaded/i1/2941996431/TB1ba3.fRDH8KJjSspnXXbNAVXa_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=51" title="女用自卫慰器情趣性用品震动棒抽插高潮阴蒂刺激电动舌头吸舔阴器">女用自卫慰器情趣性用品震...</a></div>
            <div class="p-price"><strong> 
               
              79.0 
               
              </strong></div>
            </li>
                     <li >
            <div class="p-img"><a href="goods.php?id=76"><img width="100" height="100" alt="韩都衣舍2017韩版女装夏装新款百搭宽松绑带上衣短袖T恤DQ6644堯"  src="https://img.alicdn.com/bao/uploaded/i3/TB1TR7PPpXXXXXCXpXXXXXXXXXX_!!0-item_pic.jpg_300x300.jpg"/></a></div>
            <div class="rate"><a href="goods.php?id=76" title="韩都衣舍2017韩版女装夏装新款百搭宽松绑带上衣短袖T恤DQ6644堯">韩都衣舍2017韩版女装...</a></div>
            <div class="p-price"><strong> 
               
              52.0 
               
              </strong></div>
            </li>
                  </ul>
      </div>
      <a id="btn-left"  class="prev" title="上一个" onclick="top2()"></a>
      <a id="btn-right" class="next" title="下一个" onclick="bottom2()"></a> 
    </div>
    <script type="text/javascript">
 		var _scrolling="";
		var a=1;
		var $slider = $('.slider ul');
		var $slider_child_l = $('.slider ul li').length;
		var $slider_height = $('.slider ul li').height();
		$slider.height($slider_child_l * $slider_height);
		
		var slider_count = 0;
		if ($slider_child_l <=3) {
			$('#btn-right').css({cursor: 'auto'});
			$('#btn-right').removeClass("dasabled");
		}
		var time="";
		function bottom1(){
			if (slider_count >= $slider_child_l - 3){
				a=0;
				top1();
			}else{
				slider_count++;
				$slider.animate({top: '-=' + $slider_height + 'px'}, 'slow');	
				slider_pic();
				time = setTimeout("bottom1()",5000);
			}
		}
		function top1(){
			if (slider_count <= 0) {
				a=1;
				bottom1();	
			}else{
				slider_count--;
				$slider.animate({top: '+=' + $slider_height + 'px'}, 'slow');
				slider_pic();
				time = setTimeout("top1();",5000);
			}
		}
		function bottom2(){
			if (slider_count >= $slider_child_l - 3){
				return false;
			}else{
				slider_count++;
				$slider.animate({top: '-=' + $slider_height + 'px'}, 'slow');	
				slider_pic();
			}
		}
		function top2(){
			if (slider_count <= 0) {
				return false;
			}else{
				slider_count--;
				$slider.animate({top: '+=' + $slider_height + 'px'}, 'slow');
				slider_pic();
			}
		}
		
		function slider_pic() {
			if (slider_count >= $slider_child_l - 3) {
				$('#btn-right').css({cursor: 'auto'});
				$('#btn-right').addClass("dasabled");
			}
			else if (slider_count > 0 && slider_count <= $slider_child_l - 3) {
				$('#btn-left').css({cursor: 'pointer'});
				$('#btn-left').removeClass("dasabled");
				$('#btn-right').css({cursor: 'pointer'});
				$('#btn-right').removeClass("dasabled");
			}
			else if (slider_count <= 0) {
				$('#btn-left').css({cursor: 'auto'});
				$('#btn-left').addClass("dasabled");
			}
		}
		$(function(){
			bottom1();
			$("#slider>ul").hover(function(){
				//鼠标移动DIV上停止
				clearTimeout(time);
			},function(){
				//离开继续调用
				if(a==1){
					bottom1();
				}else if(a==0){
					top1();
				}
			});
			
		});
</script> 
</div>
         
 
		  
		 
        
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";N;s:3:"num";N;}554fcae493e564ee0dc75bdf2ebf94ca
      	<div class="blank"></div>
      	
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";N;s:3:"num";N;}554fcae493e564ee0dc75bdf2ebf94ca 
    </div>
    <div class="right-con">
    	        <div id="wrapper">
        <div class="mt" id="main-nav-holder">
          <ul class="tab" id="nav">
            <li class="boldtit-list h-list" onclick="change_widget(1, this);"><a href="/goods.php?id=10#os_canshu">规格参数</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="/goods.php?id=10#os_jieshao" >商品介绍</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="/goods.php?id=10#os_pinglun" >商品评价(0)</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="/goods.php?id=10#os_shouhou" >售后保障</a></li>
          </ul>
          <div class="goods-ce-right"> 
          	<a href="javascript:addToCart(10)" name="bi_addToCart"  class="right-add" >加入购物车</a>
            <div class="ce-right">
              <ul class="abs-ul">
                <li class="abs-active"><i></i><span>规格参数</span></li>
                <li><i></i><span>产品介绍</span></li>
                <li><i></i><span>商品评价</span></li>
                <li><i></i><span>包装清单</span></li>
                <li><i></i><span>售后服务</span></li>
                <li><i></i><span>常见问题</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="main_widget_1">
          <div class="mc" id="os_canshu">
            <ul class="detail-list">
              <li>商品名称：【三只松鼠_草莓干106gx2袋】办公室休闲零食蜜饯果脯水果干</li>
              <li>商品编号：45738800824</li>
              <li>品牌：<a href="brand.php?id=1" >Three Squirrels/三只松鼠</a></li>
              <li>上架时间：2017-12-18</li>
              <li>商品毛重：0克</li>
                            <li>库存： 
                 
                65535  
                 
              </li>
                             
               
                            <li >净含量：212g</li>
                            <li >包装方式：包装</li>
                            <li >品牌：Three Squirrels/三只松鼠</li>
                            <li >系列：松鼠云果园草莓干106gx2 袋装</li>
                            <li >食品口味：原味</li>
                            <li >食品工艺：果脯类</li>
                            <li >产地：中国大陆</li>
                            <li >省份：安徽省</li>
                            <li >城市：芜湖市</li>
               
               
                          </ul>
          </div>
          <div class="mc" id="os_jieshao">
            <div class="blank20"></div>
                        <div class="detail-content"> <p><span style="color:#ffffff;"><span style="font-size:24.0px;"><span><span style="background-color:#000000;">主人，松鼠家包装升级中，请以收到的实物为准哦~</span></span></span></span></p> <p><img alt="草莓干_01.jpg" src="https://img.alicdn.com/imgextra/i2/880734502/TB2V2orlpXXXXbdXXXXXXXXXXXX-880734502.jpg"></p><img src="https://img.alicdn.com/imgextra/i1/880734502/TB2mLn6lpXXXXbfXpXXXXXXXXXX-880734502.jpg"><img src="https://img.alicdn.com/imgextra/i3/880734502/TB2hMzUX4IX61BjSsplXXazrpXa-880734502.jpg"><img src="https://img.alicdn.com/imgextra/i3/880734502/TB2JEH9lpXXXXasXpXXXXXXXXXX-880734502.jpg"><img src="https://img.alicdn.com/imgextra/i3/880734502/TB2NmIClpXXXXXBXXXXXXXXXXXX-880734502.jpg"><img src="https://img.alicdn.com/imgextra/i2/880734502/TB2fCyWtVXXXXX2XXXXXXXXXXXX-880734502.jpg"><img src="https://img.alicdn.com/imgextra/i3/880734502/TB27k_8lpXXXXaVXpXXXXXXXXXX-880734502.jpg"><img src="https://img.alicdn.com/imgextra/i2/880734502/TB2PM.olpXXXXbQXXXXXXXXXXXX-880734502.jpg"><img alt="40.jpg" src="https://img.alicdn.com/imgextra/i4/880734502/TB2tV02mXXXXXcoXXXXXXXXXXXX-880734502.jpg"> </div>
          </div>
          <div class="mc" id="os_pinglun">
            <div class="blank20"></div>
            <div class="my-comment-pre">
    <div class="tab-title"> 
    	<span>商品评价</span>
    </div>
    <div class="goods-content">
	<ul>
    	<li class="hpd"><div class="main-color">0%</div><p>好评度</p></li>
        <li class="pre">
        	<dl><dt>好评<span>(0%)</span></dt><dd><div style="width:0%"></div></dd></dl>
            <dl><dt>中评<span>(0%)</span></dt><dd><div style="width:0%"></div></dd></dl>
            <dl><dt>差评<span>(0%)</span></dt><dd><div style="width:0%"></div></dd></dl>
        </li>
            </ul>
    </div>
</div>
<div class="my-comment-tab">
	<ul>
    	<li id="mct_0" onClick="ShowMyComments(10,0,1)" class="cur">全部评价<span>(0)</span></li>
    	<li id="mct_1" onClick="ShowMyComments(10,1,1)">好评<span>(0)</span></li>
    	<li id="mct_2" onClick="ShowMyComments(10,2,1)">中评<span>(0)</span></li>
    	<li id="mct_3" onClick="ShowMyComments(10,3,1)">差评<span>(0)</span></li>
    	<li id="mct_4" onClick="ShowMyComments(10,4,1)">用户晒单<span>(0)</span></li>
    </ul>
</div>
<div class="my-comment-list" id="ECS_MYCOMMENTS">
</div>
<script language="javascript">
function ShowMyComments(goods_id, type, page)
{
	for (var i = 0; i <= 4 ; i ++)
	{
		document.getElementById("mct_"+i).className = (type == i) ? 'cur' : '';
	}
	Ajax.call('goods_comment.php?act=list_json', 'goods_id=' + goods_id + '&type=' + type + '&page='+page, ShowMyCommentsResponse, 'GET', 'JSON');
}
function ShowMyCommentsResponse(result)
{
  if (result.error)
  {
  }
  try
  {
    var layer = document.getElementById("ECS_MYCOMMENTS");
    layer.innerHTML = result.content;
  }
  catch (ex) {}
}
function show_good(comment_id)
{
	Ajax.call('goods_comment.php?act=good_json', 'comment_id=' + comment_id, show_goodResponse, 'GET', 'JSON');
}
function show_goodResponse(result)
{
	if (result.error == 1)
	{
		alert("您已经评过分了哦！");
	}
	else
	{
		var layer = document.getElementById("good_num_"+result.comment_id);
		layer.innerHTML = result.good_num;
	}
}
document.getElementById('mct_0').click();
</script> </div>
          <div class="mc" id="os_advantage">
            <div class="blank20"></div>
            <div class="my-comment-pre">
    <div class="tab-title"> 
    	<span>包装清单</span>
    </div>
    <div class="goods-content">
  		<img src="themes/wwwwe10cn/images/package.jpg" alt="包装清单" width="818"/>
    </div>
</div>
 </div>
          <div class="mc" id="os_shouhou">
            <div class="blank20"></div>
            <div class="my-comment-pre">
  <div class="tab-title"> <span>售后保障</span> </div>
  <div class="goods-content goods-sales-support"> 
  	质保期：一年<br />
    售前服务电话：400-078-5268<br />
    售后服务电话：400-078-5268<br />
    品牌官方网站：<a href="http://www.68ecshop.com" target="_blank" title="进入品牌官方网站" class="main-color">http://www.68ecshop.com</a><br />
    <div class="sales-support-info">本商城向您保证所售商品均为正品行货，本商城自营商品自带机打发票，与商品一起寄送。凭质保证书及本商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由本商城联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。本商城还为您提供具有竞争力的商品价格和<a href="#" target="_blank">运费政策</a>，请您放心购买！ <br />
      <br />
      注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！
      <div class="state">
      	<strong class="main-color">权利声明：</strong><br />
        本商城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东商城重要的经营资源，未经许可，禁止非法转载使用。
        <p><b>注：</b>本站商品信息均来自于厂商，其真实性、准确性和合法性由信息拥有者（厂商）负责。本站不提供任何保证，并不承担任何法律责任。</p>
      </div>
    </div>
  </div>
</div>
 </div>
          <div class="mc" id="os_changjian">
            <div class="blank20"></div>
            <div class="wenti">
  <div class="tab-title"> <span>常见问题</span> </div>
  <div class="tab-body">
    <div class="list">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">下单后可以修改订单吗？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">由本网站发货的订单，在订单打印之前可以修改，打开“订单详情”页面，点击右上角的“修改订单”即可，若没有修改订单按钮，则表示订单无法修改。</p>
      </div>
    </div>
    <div class="list">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">无货商品几天可以到货？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">您可以通过以下方法获取商品的到货时间：若商品页面中，显示“无货”时：商品具体的到货时间是无法确定的，您可以通过商品页面的“到货通知”功能获得商品到货提醒。</p>
      </div>
    </div>
    <div class="list">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">订单如何取消？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right"> 如订单处于暂停状态，进入“我的订单"页面，找到要取消的订单，点击“取消订单”按钮。</p>
      </div>
    </div>
    <div class="list">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">可以开发票吗？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">本网站所售商品都是正品行货，均开具正规发票（图书商品用户自由选择是否开发票），发票金额含配送费金额，另有说明的除外。</p>
      </div>
    </div>
    <div class="list">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">如何联系商家？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">在商品页面右则，您可以看到卖家信息，点击“联系客服”按钮，咨询卖家的在线客服人员，已开通400电话的卖家，您可直接致电卖家。</p>
      </div>
    </div>
    <div class="list">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">收到的商品少了/发错了怎么办？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">同个订单购买多个商品可能会分为一个以上包裹发出，可能不会同时送达，建议您耐心等待1-2天，如未收到，本网站自营商品可直接联系京东在线客服，第三方商家商品请联系商家在线客服。</p>
      </div>
    </div>
    <div class="list none">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">如何申请退货/换货？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">登陆网站，进入“我的订单”，点击客户服务下的返修/退换货或商品右则的申请返修/退换货，出现返修及退换货首页，点击“申请”即可操作退换货及返修，提交成功后请耐心等待，由专业的售后工作人员受理您的申请。</p>
      </div>
    </div>
    <div class="list" style="border:none">
      <div class="question clearfix"> <span class="icon fl"></span> <strong class="common-right">退换货/维修需要多长时间？</strong> </div>
      <div class="answer clearfix"> <span class="icon fl"></span>
        <p class="common-right">一般情况下，退货处理周期（不包含检测时间）：自接收到问题商品之日起 7 日之内为您处理完成，各支付方式退款时间请点击查阅退款多久可以到账；</br>
          换货处理周期：自接收到问题商品之日起 15 日之内为您处理完成；</br>
          正常维修处理周期：自接收到问题商品之日起 30 日内为您处理完成。 </p>
      </div>
    </div>
  </div>
</div>
 </div>
        </div>
      </div>
		<script type="text/javascript">
			$(".ce-right").height($("#main_widget_1").height());
            var obj11 = document.getElementById("main-nav-holder");
			var top11 = getTop(obj11);
			var isIE6 = /msie 6/i.test(navigator.userAgent);
			function getTop(e){
				var offset = e.offsetTop;
				if(e.offsetParent != null) offset += getTop(e.offsetParent);
				return offset;
			}
	    </script> 
    </div>
</div>
<script type="text/javascript" src="js/compare.js"></script>
<script type="text/javascript" src="js/json2.js"></script>
<div id="compareBox">
  <div class="menu">
    <ul>
      <li class="current" data-value='compare'>对比栏</li>
      <li data-value='history'>最近浏览</li>
    </ul>
    <a class="hide-compare" href="javascript:;" title="隐藏"></a>
    <div style="clear:both"></div>
  </div>
  <div id="compareList"></div>
  <div id="historyList" style="display:none;"> <span id="sc-prev" class="sc-prev scroll-btn"></span> <span id="sc-next" class="sc-next scroll-btn"></span>
    <div class="scroll_wrap"> 554fcae493e564ee0dc75bdf2ebf94cahistory_list|a:1:{s:4:"name";s:12:"history_list";}554fcae493e564ee0dc75bdf2ebf94ca </div>
  </div>
</div>
<script type="text/javascript">
var goods_id = 10;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 10;
var now_time = 1543839674;
var suppid = 2;
</script>
<script>
window.onload = function(){
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
//changePrice();
changePriceAll();
fixpng();
ShowMyComments(10,0,1);
try {onload_leftTime();}
catch (e) {}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice(){
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res){
  if (res.err_msg.length > 0){
	if(res.qty==0){
		document.getElementById('choose-btns').style.display = 'none';
    	document.getElementById('choose-btns1').style.display = 'block';
	}
    alert(res.err_msg);
	document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
 }else{
	  document.getElementById('choose-btns').style.display = 'block';
     document.getElementById('choose-btns1').style.display = 'none';
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT')){
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	  if (res.result_jf){
		document.getElementById('ECS_GOODS_AMOUNT_jf').innerHTML = res.result_jf;
	  }
    }
    if(document.getElementById('shows_number')){
	document.getElementById('shows_number').innerHTML = res.attr_num;
    }
    if(document.getElementById('mark_price')){
	document.getElementById('mark_price').innerHTML = res.result1;
    }
  }
  
}
/**
* 获取商品范围价格
*/
function changePriceAll(){
	var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
	var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
	Ajax.call('goods.php', 'act=allprice&id=' + goodsId + '&attr=' + attr + '&number=1', changePriceResponse, 'GET', 'JSON');
}
$('.item-operate .collet-btn').click(function(){
	$('.pop-login,.pop-mask').show();	
})
</script>
<!-- <script src="https://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js" type="text/javascript"></script> -->
<script src="https://pv.sohu.com/cityjson?ie=utf-8" type="text/javascript"></script>
<script>
Ajax.call('goods.php', 'act=get_pickup_info&ip='+returnCitySN.cip+'&suppid='+suppid,
function(res){
		if(res.error == 0) {
			var result = '<ul>';
			for(var i=0; i<res.result.length; i++){
				result += '<li>店名：'+res.result[i].shop_name+'<br>联系人：'+res.result[i].contact+'&nbsp;&nbsp;联系方式：'+res.result[i].phone + '<br>地址：'+res.result[i].address+'</li>';
			}
			result += '</ul>';
			if(res.result.length > 0){
				document.getElementById('pickup_point_list').innerHTML = result;
				
			}else{
				document.getElementById('pickup_point_list').innerHTML = '<div style="padding:10px 0;text-align:center;">该地区尚未开放自提点</div>';
				
			}
			hide_area();
			show_list();
			document.getElementById('province').innerHTML = res.city_info.province;
			document.getElementById('province').onclick = function(){
				get_area_list(1, '');
			}
			document.getElementById('city').innerHTML = res.city_info.city;
			document.getElementById('city').onclick = function(){
				get_area_list(res.city_info.province_id, res.city_info.province);
			}
			
			document.getElementById('area_label').innerHTML = res.city_info.province + '&nbsp;' + res.city_info.city;
			get_area_list(res.city_info.city_id, res.city_info.city);
		}
	}, 'GET', 'JSON');
function show_list(){
	document.getElementById('pickup_point').style.borderBottom = "1px solid #fff";
	document.getElementById('pickup_point_list').style.display = "block";
}
function hide_list(){
	document.getElementById('pickup_point').style.borderBottom = "1px solid #ccc";
	document.getElementById('pickup_point_list').style.display = "none";
}
function get_area_list(parent_id, name){
	Ajax.call('goods.php', 'act=get_area_list&parent_id='+parent_id, function(res) {
		var result = '';
		for(var i=0; i<res.length; i++){
			result += '<li';
			if(res[i].region_name.length>5)
				result += ' style="widht:170px;"';
			result += '><a href="javascript:void(0)" ';
			if(res[i].region_type == 3)
				result += 'onclick="get_pickup_point_list('+res[i].region_id+', this)">';
			else
				result += 'onclick="get_area_list('+res[i].region_id+', \''+res[i].region_name+'\')">';
			result+=res[i].region_name+'</a></li>';
		}
		result += '';
		document.getElementById('area_list').innerHTML = result;
		
		switch(res[0].region_type){
			case '1':
				document.getElementById('province').onclick = function(){get_area_list(parent_id, name);};
				document.getElementById('city').innerHTML = '市';
				document.getElementById('district').innerHTML = '区';
				switch_hover('province');
				break;
			case '2':
				document.getElementById('city').onclick = function(){get_area_list(parent_id, name);};
				document.getElementById('province').innerHTML = name;
				//document.getElementById('city').innerHTML = '市';
				document.getElementById('district').innerHTML = '区';
				switch_hover('city');
				break;
			case '3':
				document.getElementById('city').innerHTML = name;
				document.getElementById('district').innerHTML = '区';
				switch_hover('district');
				break;
		}
		hide_list();
		//show_area();
	}, 'GET', 'JSON');
}
function switch_hover(sel){
	if(sel == 'province'){
		document.getElementById('city').className = '';
		document.getElementById('district').className = '';
		document.getElementById('province').className = 'hover';
	}else if(sel == 'city'){
		document.getElementById('city').className = 'hover';
		document.getElementById('district').className = '';
		document.getElementById('province').className = '';
	}else{
		document.getElementById('city').className = '';
		document.getElementById('district').className = 'hover';
		document.getElementById('province').className = '';
	}
}
function get_pickup_point_list(region_id, obj){
	var name = obj.innerHTML;
	document.getElementById('district').innerHTML = name;
	var label = document.getElementById('province').innerHTML + '&nbsp;' +
				document.getElementById('city').innerHTML + '&nbsp;' +
				document.getElementById('district').innerHTML;
	document.getElementById('area_label').innerHTML = label;
	
	Ajax.call('goods.php', 'act=get_pickup_point_list&district_id='+region_id+'&suppid='+suppid, function(res) {
		var result = '<ul>';
			if(res.length > 0){
				for(var i=0; i<res.length; i++){
					result += '<li>'+res[i].shop_name+'&nbsp;&nbsp;地址：'+res[i].address+
								'<br>联系人：'+res[i].contact+'&nbsp;&nbsp;联系方式：'+res[i].phone + '</li>';
				}
				result += '</ul>';
				document.getElementById('pickup_point_list').innerHTML = result;
				
			}else{
				document.getElementById('pickup_point_list').innerHTML = '<div style="padding:10px 0;text-align:center;">该地区尚未开放自提点</div>';
				
			}
			hide_area();
			show_list();
			
			
	}, 'GET', 'JSON');
}
function show_area(){
	document.getElementById('area_label').style.borderBottom = "1px #fff solid";
	document.getElementById('area_list_wrap').style.display = "block";
}
function hide_area(){
	document.getElementById('area_label').style.borderBottom = "1px solid #ccc";
	document.getElementById('area_list_wrap').style.display = "none";
}
</script>
<script type="text/javascript" src="js/user.js"></script><div class="right-sidebar-con">
	<div class="right-sidebar-main">
        <div class="right-sidebar-panel">
            <div id="quick-links" class="quick-links">
            	<ul>
                    <li class="quick-area quick-login">
                        <a href="javascript:;" class="quick-links-a"><i class="setting"></i></a>
                        <div class="sidebar-user quick-sidebar">
                        	<i class="arrow-right"></i>
                            <div class="sidebar-user-info">
                            	                                <div class="user-pic">
                                	<div class="user-pic-mask"></div>
                                    <img src="themes/wwwwe10cn/images/people.gif" />
                                </div>
                                <p>你好！请<a href="javascript:;" class="quick-login-a main-color">登录</a>|<a href="register.php" class="main-color">注册</a></p>
                                                            </div>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                    	<a href="javascript:void(0);" class="mpbtn_bonus quick-links-a"><i class="bonus"></i></a>
                        <div class="popup">
                            <font>领红包再购物</font>
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                        <div class="cart-list quick-links-a" id="collectBox">
                            <i class="cart"></i>
                            <div class="span">购物车</div>
                            <span class="ECS_CARTINFO">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</span>
                        </div>
                    </li>
                    <li class="sidebar-tabs">
                        <a href="javascript:void(0);" class="mpbtn_history quick-links-a"><i class="history"></i></a>
                        <div class="popup">
                            <font id="mpbtn_histroy">我看过的</font>
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li>
                        <a href="user.php?act=follow_shop" target="_blank" class="mpbtn_stores quick-links-a"><i class="stores"></i></a>
                        <div class="popup">
                            我关注的店铺
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                    <li id="collectGoods">
                        <a href="user.php?act=collection_list" target="_blank" class="mpbtn_collect quick-links-a"><i class="collect"></i></a>
                        <div class="popup">
                            我的收藏
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                                        <li>
                        <a href="javascript:;" class="mpbtn-contrast quick-links-a"><i class="contrast"></i></a>
                        <div class="popup">
                            对比商品
                            <i class="arrow-right"></i>
                        </div>
                    </li>
                                    </ul>
            </div>
            <div class="quick-toggle">
            	<ul>
                    <li class="quick-area">
                    	<a class="quick-links-a" href="javascript:;"><i class="customer-service"></i></a>
                        <div class="sidebar-service quick-sidebar">
                        	<i class="arrow-right"></i>
                            554fcae493e564ee0dc75bdf2ebf94cacustomer_service|a:1:{s:4:"name";s:16:"customer_service";}554fcae493e564ee0dc75bdf2ebf94ca                        </div>
                    </li>
                    <li class="returnTop">
                        <a href="javascript:;" class="return_top quick-links-a"><i class="top"></i></a>
                        <div class="popup">
                        	返回顶部
                        	<i class="arrow-right"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="">
        	
            <div class="right-sidebar-panels">
            	<h3 class="sidebar-panel-header">
                    <a href="javascript:;" class="title"><i class="bonus-icon"></i><em class="title">红包</em></a>
                    <span class="close-panel"></span>
                </h3>
                <div class="bonus-panel-main">
                    <div class="bonus-panel-content">
                    	<script type="text/javascript">
						function fun(type_id, no_have_val){
							no_have = (typeof(no_have_val) == "undefined" ? 0 : no_have_val)
							Ajax.call('user.php?act=user_bonus', 'id=' + type_id + '&no_have=' + no_have, bounsResponse, 'GET', 'JSON');
						}
						function bounsResponse(result){
							$('.pop-compare,.pop-mask').show();
							$('.pop-compare .pop-text').html(result.message);
							$('.pop-compare').css({'top':($(window).height()-$('.pop-compare').height())/2});
						}
						</script>
												<div class="tip-box">
						  <i class="tip-icon"></i>
						  <div class="tip-text">暂时还没有红包~~<br/><a class="main-color" href="./">先去逛逛吧</a></div>
						</div>
						                    </div>
                </div>
            </div>
            
        	
        	<div class="ECS_CARTINFO right-sidebar-panels">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
        	
            
        	<div class="right-sidebar-panels">
				<h3 class="sidebar-panel-header">
                	<a href="javascript:;" class="title"><i></i><em class="title">我的足迹</em></a>
                    <span class="close-panel"></span>
                </h3>
          		<div class="sidebar-panel-main">
            		<div class="sidebar-panel-content">
              			<div class="history-panel">
              				<ul>
                				554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca                			</ul>
     		  			</div>
            		</div>
          		</div>
        	</div>
        	
        </div>
    </div>
</div>
<div class="pop-main pop-compare">
	<div class="pop-header">
    	<span>温馨提示</span>
        <a class="pop-close" href="javascript:;" title="关闭"></a>
    </div>
    <div class="pop-con">
    	<i class="pop-icon"></i>
        <p class="pop-text"></p>
        <a href="javascript:;" class="pop-sure main-bg-color">确定</a><a href="javascript:;" class="cancel-btn none">取消</a>
    </div>
</div>
<div class="pop-main pop-compare-small">
	<div class="pop-header">
    	<span>温馨提示</span>
        <a class="pop-close" href="javascript:;" title="关闭"></a>
    </div>
    <div class="pop-con">
    	<i class="pop-icon"></i>
        <p class="pop-text"></p>
        <a href="javascript:;" class="cancel-btn">关闭</a>
    </div>
</div>
<div id="tell-me-result" class="tell-me-form" style="display:none;">
	<div class="pop-header"><span>温馨提示</span><a href="javascript:closeDiv1()" title="关闭" class="tell-me-close"></a></div>
    <div class="tell-me-content">
    	<div class="tell-me-result">
            <div class="result-icon"></div>
            <div class="result-text">
            	<div class="title"></div>
                <div class="bottom">
                	<span onclick="javascript:closeDiv1();" class="cancel-btn">关闭</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pop-mask"></div>
<div class="pop-main pop-login">
  <div class="pop-header"> <span>您尚未登录</span><a class="pop-close" href="javascript:;" title="关闭"></a></div>
  <div class="pop-con">
    <form name="formLogin" action="user.php" method="post" onSubmit="return user_login();">
      <div class="form">
      	<div class="mt">
        	<h2>用户登陆</h2><a href="register.php" class="right_register main-color"><span class="text">立即注册</span><i class="icon"></i></a>
        </div>
        <div class="mc">
        	<div class="msg-wrap">
            	<div class="msg-error">
                	<i class="msg-icon"></i><span id="msg-error-text" class="msg-error-text"></span>
                </div>
            </div>
        	<div class="item item-name">
            	<i class="icon"></i>
                <input name="username" id="username" type="text" class="text" value="" tabindex="1" placeholder="手机号/用户名/邮箱"/>
            </div>
            <div class="item item-password">
                <i class="icon"></i>
                <input type="password" name="password" id="password" class="text" value="" tabindex="2" placeholder="密码"/>
            </div>
                        <div class="safety" id="autoentry">
                <input type="checkbox" value="1" name="remember" id="remember" class="checkbox"/>
                <label for="remember" class="mar-b">请保存我这次的登录信息</label>
                <a class="forget_password fr" href="findPwd.php">忘记密码？</a> 
            </div>
            <div class="login-btn">
              <input type="hidden" name="act" value="act_login" />
              <input type="hidden" name="back_act"  value=''/>
              <input type="submit" name="submit" class="btn-img" id="loginsubmit" value="立即登录" />
            </div>
            <!--<div class="item-coagent">
		    	<a href="user.php?act=oath&type=weixin"><i class="weixin"></i>微信</a>
            	<a href="user.php?act=oath&type=qq"><i class="qq"></i>QQ</a>
            	<a href="user.php?act=oath&type=weibo"><i class="sina"></i>新浪</a>
            	<a href="user.php?act=oath&type=alipay" class="last"><i class="alipay"></i>支付宝</a>
            </div>-->
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">	
$(window).scroll(function(){ 
	if($(this).scrollTop() > $(window).height() ){ 
		$('.returnTop').show();
	}else{ 
		$('.returnTop').hide();
	} 
}) 
$('.cart-panel-content').height($(window).height()-90);
$('.bonus-panel-content').height($(window).height()-40);
$(".returnTop").click(function(){
	$('body,html').animate({scrollTop:0},800);
	return false;
});
//点击用户图标弹出登录框
$('.quick-login .quick-links-a,.quick-login .quick-login-a,.customer-service-online a').click(function(){
	$('.pop-login,.pop-mask').show();
})
$('.quick-area').hover(function(){
	$(this).find('.quick-sidebar').toggle();
})
//移动图标出现文字
$(".right-sidebar-panel li").mouseenter(function(){
	$(this).children(".popup").stop().animate({left:-92,queue:true});
	$(this).children(".popup").css("visibility","visible");
	$(this).children(".ibar_login_box").css("display","block");
});
$(".right-sidebar-panel li").mouseleave(function(){
	$(this).children(".popup").css("visibility","hidden");
	$(this).children(".popup").stop().animate({left:-121,queue:true});
	$(this).children(".ibar_login_box").css("display","none");
});
//点击购物车、用户信息以及浏览历史事件
$('.sidebar-tabs').click(function(){
	if($('.right-sidebar-main').hasClass('right-sidebar-main-open')&&$(this).hasClass('current')){
		$('.right-sidebar-main').removeClass('right-sidebar-main-open');
		$(this).removeClass('current');
		$('.right-sidebar-panels').eq($(this).index()-1).removeClass('animate-in').addClass('animate-out').css('z-index',1);
	}else{
		$(this).addClass('current').siblings('.sidebar-tabs').removeClass('current');
		$('.right-sidebar-main').addClass('right-sidebar-main-open');
		$('.right-sidebar-panels').eq($(this).index()-1).addClass('animate-in').removeClass('animate-out').css('z-index',2).siblings('.right-sidebar-panels').removeClass('animate-in').addClass('animate-out').css('z-index',1);
	}
});
$(".right-sidebar-panels").on('click', '.close-panel', function () {
	$('.sidebar-tabs').removeClass('current');
	$('.right-sidebar-main').removeClass('right-sidebar-main-open');
	$('.right-sidebar-panels').removeClass('animate-out');
});
$(document).click(function(e){ 
	var target = $(e.target); 
	if(target.closest('.right-sidebar-con').length == 0){ 
		$('.right-sidebar-main').removeClass('right-sidebar-main-open');
		$('.sidebar-tabs').removeClass('current');
		$('.right-sidebar-panels').removeClass('animate-in').addClass('animate-out').css('z-index',1);
	} 
}) 
$('.pop-login').css('top',($(window).height()-$('.pop-login').height())/2);
$('.pop-close').click(function(){
	$('.pop-main,.pop-mask').hide();
	$('form[name="formLogin"]').find('.msg-wrap').css('visibility','hidden');
	$('.pop-login .item,.pop-login .item-detail').removeClass('item-error');
	$('.pop-login .text').val('');
})
$('.pop-login .item .text').focus(function(){
	$(this).addClass('')	
})
</script><div class="site-footer">
    <div class="footer-related">
  		<div class="footer-article w1210"> 
    <dl class="col-article col-article-first">
    <dt>新手上路 </dt>
        <dd><a rel="nofollow" href="help.php?id=9" target="_blank">售后流程</a></dd>
        <dd><a rel="nofollow" href="help.php?id=10" target="_blank">购物流程</a></dd>
        <dd><a rel="nofollow" href="help.php?id=11" target="_blank">订购方式</a></dd>
        <dd><a rel="nofollow" href="help.php?id=71" target="_blank">在线支付</a></dd>
        <dd><a rel="nofollow" href="help.php?id=72" target="_blank">公司转账</a></dd>
      </dl>
    <dl class="col-article ">
    <dt>配送方式 </dt>
        <dd><a rel="nofollow" href="help.php?id=15" target="_blank">货到付款区域</a></dd>
        <dd><a rel="nofollow" href="help.php?id=16" target="_blank">配送支付查询</a></dd>
        <dd><a rel="nofollow" href="help.php?id=17" target="_blank">支付方式说明</a></dd>
        <dd><a rel="nofollow" href="help.php?id=69" target="_blank">如何送礼</a></dd>
        <dd><a rel="nofollow" href="help.php?id=70" target="_blank">Global Shipping</a></dd>
      </dl>
    <dl class="col-article ">
    <dt>购物指南</dt>
        <dd><a rel="nofollow" href="help.php?id=18" target="_blank">常见问题</a></dd>
        <dd><a rel="nofollow" href="help.php?id=20" target="_blank">订购流程</a></dd>
        <dd><a rel="nofollow" href="help.php?id=46" target="_blank">注册新会员</a></dd>
        <dd><a rel="nofollow" href="help.php?id=66" target="_blank">团购/机票</a></dd>
        <dd><a rel="nofollow" href="help.php?id=68" target="_blank">联系客服</a></dd>
      </dl>
    <dl class="col-article ">
    <dt>售后服务</dt>
        <dd><a rel="nofollow" href="help.php?id=21" target="_blank">退换货原则</a></dd>
        <dd><a rel="nofollow" href="help.php?id=22" target="_blank">售后服务保证</a></dd>
        <dd><a rel="nofollow" href="help.php?id=42" target="_blank">换货流程</a></dd>
        <dd><a rel="nofollow" href="help.php?id=73" target="_blank">退款说明</a></dd>
        <dd><a rel="nofollow" href="help.php?id=74" target="_blank">返修/退换货</a></dd>
      </dl>
    <dl class="col-article ">
    <dt>关于我们 </dt>
        <dd><a rel="nofollow" href="help.php?id=24" target="_blank">网站故障报告</a></dd>
        <dd><a rel="nofollow" href="help.php?id=25" target="_blank">选机咨询</a></dd>
        <dd><a rel="nofollow" href="help.php?id=26" target="_blank">投诉与建议</a></dd>
        <dd><a rel="nofollow" href="help.php?id=76" target="_blank">节能补贴</a></dd>
        <dd><a rel="nofollow" href="help.php?id=77" target="_blank">京东礼品卡</a></dd>
      </dl>
    <!--<dl class="col-article">
    <dt>服务支持</dt>
    <dd>售前咨询 400-078-5268</dd>
    <dd>售后咨询 400-078-5268</dd>
    <dd>客服 QQ 800007396</dd>
    <dd>工作时间 9：00-17：30</dd>
  </dl>-->
</div>
  		    <div class="footer-info clearfix">
      <div class="info-text">
      	        <p class="nav_bottom">
                                    <a href="http://www.68ecshop.com/ecshop_topic/company/" target="_blank">关于我们</a><em >|</em>
                        <a href="http://www.68ecshop.com/article-4.html" target="_blank">联系我们</a><em >|</em>
                        <a href="apply_index.php" >商家入驻</a><em >|</em>
                        <a href="#" >友情链接</a><em >|</em>
                        <a href="#" >手机商城</a><em >|</em>
                        <a href="#" >销售联盟</a><em >|</em>
                        <a href="#" >商城社区</a><em >|</em>
                        <a href="#" >企业文化</a><em >|</em>
                        <a href="help.php" >帮助中心</a><em style="display:none">|</em>
                                            </p>
        <p>
             <a href="javascript:;">&copy; 2005-2018 甜心商城1 版权所有，并保留所有权利。</a> <a href="javascript:;">甜心100 </a>
             <a href="javascript:;">              Tel: 110              </a>
             <a href="javascript:;">              E-mail: 356544983@qq.com              </a>
         </p>
         <p>
                                                        <a href="https://wpa.qq.com/msgrd?V=1&amp;uin=356544983&amp;Site=甜心商城1&amp;Menu=yes" target="_blank"><img src="https://wpa.qq.com/pa?p=1:356544983:4" height="16" border="0" alt="QQ" /> 356544983</a>
                                                                                                                                                                                                          	</p>
      </div>
    </div>
<img src="api/cron.php?t=" alt="" style="width:0px;height:0px;display:none;" />
<script type="text/javascript">
Ajax.call('api/okgoods.php', '', '', 'GET', 'JSON');
//预售
Ajax.call('pre_sale.php?act=check_order', '', '', 'GET', 'JSON');
</script>
<script type="text/javascript" src="themes/wwwwe10cn/js/base.js" ></script>
  </div>
</div>
</body>
<script type="text/javascript" src="themes/wwwwe10cn/js/compare.js"></script>
<script>
$(function(){
	$('.goods-col').click(function(){
		$('.pop-login,.pop-mask').show();	
	})
})</script>
</html>