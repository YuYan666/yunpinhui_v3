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
            	<p class="main-color"><?php echo $this->_var['goods']['goods_name']; ?></p>
            	当商品价格低于您设定的价格我们将通知您，通知短信最多发送一次，不会对您造成干扰。 
            </div>
        </td>
      </tr>
      <tr>
        <td valign="top" align="right" width="20%">现价：</td>
        <td align="left">
        	<font class="main-color"> 
            <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
          		<?php echo $this->_var['goods']['promote_price']; ?>
          	<?php else: ?>
          		<?php echo $this->_var['goods']['shop_price_formated']; ?> 
          	<?php endif; ?> 
          </font>
          <input type="hidden" name="price_now" value="<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?>" />
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
        	<input type="hidden" value="<?php echo $this->_var['goods']['goods_id']; ?>" name="goods_id" id="goods_id" />
          	<input type="submit" class="pop-sure main-bg-color" value="马上提交">
        </td>
      </tr>
    </table>
  </form>
  </div>
</div>
