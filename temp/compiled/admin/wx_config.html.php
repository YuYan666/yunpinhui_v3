<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <title><?php echo $this->_var['lang']['cp_home']; ?><?php if ($this->_var['ur_here']): ?> - <?php echo $this->_var['ur_here']; ?> <?php endif; ?></title>

    <meta name="robots" content="noindex, nofollow">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="styles/general.css" rel="stylesheet" type="text/css" />

    <link href="styles/main.css" rel="stylesheet" type="text/css" />

    <?php echo $this->smarty_insert_scripts(array('files'=>'../js/transport.js,common.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.6.2.min.js,chosen.jquery.min.js,jquery.json.js')); ?>
    <script language="JavaScript">

        <!--

        // 这里把JS用到的所有语言都赋值到这里

        <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>

        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        //-->

    </script>

</head>

<body>



<h1>

    <span class="action-span1"><a href="index.php?act=main"><?php echo $this->_var['lang']['cp_home']; ?></a> </span><span id="search_id" class="action-span1"> - 微信设置</span>

    <div style="clear:both"></div>

</h1>



<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,selectzone.js,colorselector.js')); ?>

<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>

<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />



<?php if ($this->_var['warning']): ?>

<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">

    <li style="border: 1px solid #CC0000; background: #FFFFCC; padding: 10px; margin-bottom: 5px;" ><?php echo $this->_var['warning']; ?></li>

</ul>

<?php endif; ?>



<!-- start goods form -->

<div class="tab-div1">

<!-- tab body -->

<div id="tabbody-div">

<!-- 通用信息 -->

<form name="theForm" method="post" action="weixin.php?act=config">

  <table width="100%" cellpadding="3" cellspacing="1">

  <tbody>

  <tr>

    <td class="label">名称 :</td>

    <td><input type="text " name="title" size="50" value="<?php echo $this->_var['title']; ?>"></td>

  </tr>

  <tr>

    <td class="label">Token:</td>

	<td><input type="text " name="token" size="20" value="<?php echo $this->_var['token']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<span style=" color:#F30;">*&nbsp;注:&nbsp;此处“Token”内容与对接的微信公众号中的Token值一致。</span></td>
  </tr>

  <tr>

    <td class="label">AppId :</td>

    <td><input type="text " name="appid" size="20" value="<?php echo $this->_var['appid']; ?>"></td>

  </tr>

 <tr>

    <td class="label">AppSecret :</td>

    <td><input type="text " name="appsecret" size="32" value="<?php echo $this->_var['appsecret']; ?>"></td>

  </tr>

 <!---->
 <tr>

    <td class="label">微信访问路径首页 :</td>

    <td><input type="text" name="wap_url" size="32" value="<?php echo $this->_var['wap_url']; ?>">如：http://www.we10.cn/mobile/</td>

  </tr> 
  <tr style="display:none">

    <td class="label">关注引导页URL :</td>

    <td><input type="text" name="tianxin_url" size="32" value="<?php echo $this->_var['tianxin_url']; ?>"><a href="http://jingyan.baidu.com/article/63acb44ae5da2f61fdc17e7b.html" target="_blank">点击查看制作教程</a></td>

  </tr> 
    <tr>

    <td class="label">关注赠送积分 :</td>

    <td><input type="text" name="guanzhu_point" size="32" value="<?php echo $this->_var['guanzhu_point']; ?>">客户关注公众号客户获取消费积分</td>

  </tr>
      <tr>

    <td class="label">推荐关注获得积分 :</td>

    <td><input type="text" name="parent_point" size="32" value="<?php echo $this->_var['parent_point']; ?>">二维码推荐下级获得消费积分奖励</td>

  </tr>
  
  <tr>

    <td class="label">绑定管理员会员ID :</td>
    <td>
    <input type="text" maxlength="60"  id="goods_value" value="<?php echo $this->_var['admin_id']; ?>" />
    <input  type="button" class="button" value="搜索" onclick="select_goods_info();"/>
  
    <select name="admin_id" id="goods_id"  style="width:200px" >
     <option value="0">请选择上级</option>
    </select> 
	<script>
	function select_goods_info()
	{
   	    var attr = document.getElementById("goods_value").value;
   	    Ajax.call('users.php?act=goods_info','goods_value=' + attr, goods_select, 'GET', 'JSON');
	}
	function goods_select(res)
	{
		var tpl="";
		tpl+='<option value="0">请选择上级</option>'
	   	for(var key in res)
	   	{
	   		  var row = res[key];
	   		  if(row['user_id'])
	   		  {
	   		 	 tpl+='<option value="'+row['user_id']+'">'+row['user_name']+'</option>';
	   		  }
	   	}

	   	//console.log(tpl); 

	   	var goods_info = document.getElementById("goods_id");
	   	goods_info.innerHTML=tpl;
	}
   </script>
   </td>

  </tr>
  <tr>

    <td class="label">关注赠送红包:</td>

	<td>

	<select name="bonustype2">

		<option value="0">请选择赠送红包</option>

		<?php $_from = $this->_var['bonus2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>

		<option value="<?php echo $this->_var['child']['type_id']; ?>" <?php if ($this->_var['bonustype2'] == $this->_var['child']['type_id']): ?>selected<?php endif; ?>><?php echo $this->_var['child']['type_name']; ?>-<?php echo $this->_var['child']['type_money']; ?>元</option>

		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </select>
&nbsp;&nbsp;&nbsp;&nbsp;<span style=" color:#F30;">*&nbsp;注:&nbsp;此红包类型必须为线下红包，在PC端后台的促销管理里面设置。</span>
	</td>

  </tr>



 <tr>

    <td class="label">关注回复内容 :</td>

    <td><textarea name="followmsg" rows="5" cols="40"><?php echo $this->_var['followmsg']; ?></textarea></td>

  </tr>

 <tr>

    <td class="label">帮助内容 :</td>

    <td><textarea name="helpmsg" rows="5" cols="40"><?php echo $this->_var['helpmsg']; ?></textarea></td>

  </tr>
  <tr>

    <td class="label">商品搜索 :</td>

    <td> 开启<input type="radio" name="is_search"  value="1"  <?php if ($this->_var['is_search'] == 1): ?>checked="checked"<?php endif; ?>> 关闭<input type="radio" name="is_search"  value="0"  <?php if ($this->_var['is_search'] == 0): ?>checked="checked"<?php endif; ?>></td>

  </tr> 
  
 
  
  <tr>

    <td colspan="2" align="center">

      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />

    <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />

    </td>

  </tr>

</tbody></table>

</form>

</div>

</div>

<!-- end goods form -->

<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>



<script language="JavaScript">

var goodsId = '<?php echo $this->_var['goods']['goods_id']; ?>';

var elements = document.forms['theForm'].elements;

var sz1 = new SelectZone(1, elements['source_select1'], elements['target_select1']);

var sz2 = new SelectZone(2, elements['source_select2'], elements['target_select2'], elements['price2']);

var sz3 = new SelectZone(1, elements['source_select3'], elements['target_select3']);

var marketPriceRate = <?php echo empty($this->_var['cfg']['market_price_rate']) ? '1' : $this->_var['cfg']['market_price_rate']; ?>;

var integralPercent = <?php echo empty($this->_var['cfg']['integral_percent']) ? '0' : $this->_var['cfg']['integral_percent']; ?>;





onload = function()

{



    if (document.forms['theForm'].elements['auto_thumb'])

    {

        handleAutoThumb(document.forms['theForm'].elements['auto_thumb'].checked);

    }



    // 检查新订单

    startCheckOrder();

    

        <?php $_from = $this->_var['user_rank_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

        set_price_note(<?php echo $this->_var['item']['rank_id']; ?>);

    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        

        document.forms['theForm'].reset();

    }



    function setAttrList(result, text_result)

    {

        document.getElementById('tbody-goodsAttr').innerHTML = result.content;

    }





            

</script>

<?php echo $this->fetch('pagefooter.htm'); ?>

