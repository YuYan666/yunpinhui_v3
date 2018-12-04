<div id="shop-info">
  <input type="hidden" id="chat_supp_id" value="<?php echo $this->_var['suppid']; ?>" />
  <?php if ($this->_var['shopname']): ?>
  <dl class="shop-title">
    <dt><a href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>" target="_blank"> <?php echo $this->_var['shopname']; ?></a></dt>
  </dl>
  <?php endif; ?>
  <div class="blank"></div>
  <div class="shop-info-detail">
      <dl class="rate-detail">
        <dt>好&nbsp;评&nbsp;率&nbsp;：</dt>
        <dd><span class="hot-grey"><span class="hot-red" style="width:<?php if ($this->_var['haoping'] > 0): ?><?php echo $this->_var['haoping']; ?>%<?php else: ?>100%<?php endif; ?>;"></span></span><?php if ($this->_var['haoping'] > 0): ?><?php echo $this->_var['haoping']; ?>%<?php else: ?>100%<?php endif; ?></dd>
      </dl>
      <?php if ($this->_var['suppliername']): ?>
      <dl style="padding-top:10px;">
        <dt>商家名称：</dt>
        <dd><?php echo $this->_var['suppliername']; ?></dd>
      </dl>
      <?php endif; ?>
      <?php if ($this->_var['userrank']): ?>
      <dl>
        <dt>商店等级：</dt>
        <dd><?php echo $this->_var['userrank']; ?></dd>
      </dl>
      <?php endif; ?>
      <dl>
        <dt>客服 QQ：</dt>
        <dd> 
          <?php $_from = $this->_var['serviceqq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
          <?php if ($this->_var['im']): ?> 
          <a href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['im']; ?>&site=qq&menu=yes" target="_blank" alt="点击这里联系我" title="点击这里联系我"><img src="https://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /></a> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </dd>
      </dl>
      <dl>
        <dt>客服旺旺：</dt>
        <dd> 
          <?php $_from = $this->_var['serviceww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?> 
          <?php if ($this->_var['im']): ?> 
          <a href="https://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="https://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /></a> 
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </dd>
      </dl>
      <?php if ($this->_var['servicephone']): ?>
      <dl>
        <dt>客服电话：</dt>
        <dd><?php echo $this->_var['servicephone']; ?></dd>
      </dl>
      <?php endif; ?>
      <?php if ($this->_var['region']): ?>
      <dl>
        <dt>所在地区：</dt>
        <dd><?php echo $this->_var['region']; ?></dd>
      </dl>
      <?php endif; ?>
      <ul class="score-detail">
        <li> <a title="描述<?php if ($this->_var['c_rank'] > 0): ?><?php echo $this->_var['c_rank']; ?><?php else: ?>5.0<?php endif; ?>"> <span class="score-tit score-tit1">描述</span><span class="scores"><?php if ($this->_var['c_rank'] > 0): ?><?php echo $this->_var['c_rank']; ?><?php else: ?>5.0<?php endif; ?></span> </a> </li>
        <li> <a title="服务<?php if ($this->_var['serv_rank'] > 0): ?><?php echo $this->_var['serv_rank']; ?><?php else: ?>5.0<?php endif; ?>"> <span class="score-tit score-tit2">服务</span><span class="scores"><?php if ($this->_var['serv_rank'] > 0): ?><?php echo $this->_var['serv_rank']; ?><?php else: ?>5.0<?php endif; ?></span> </a> </li>
        <li style="margin-right: 0px"> <a title="物流<?php if ($this->_var['shipp_rank'] > 0): ?><?php echo $this->_var['shipp_rank']; ?><?php else: ?>5.0<?php endif; ?>"> <span class="score-tit score-tit3">物流</span><span class="scores"><?php if ($this->_var['shipp_rank'] > 0): ?><?php echo $this->_var['shipp_rank']; ?><?php else: ?>5.0<?php endif; ?></span> </a> </li>
      </ul>
      <div id="enter-shop">
        <div class="enter-shop-item"> <a class="btn-flat1 goto-shop" href="supplier.php?suppId=<?php echo $this->_var['suppid']; ?>" target="_blank"><i></i>进入商店 </a> <?php if ($this->_var['auction']['supplier_id']): ?> <a class="btn-flat1 shop-add" href="javascript:guanzhu(<?php echo $this->_var['auction']['supplier_id']; ?>);"><i></i>关注本店 </a> <?php else: ?> <a class="btn-flat1 shop-add" href="javascript:guanzhu(<?php echo $this->_var['goods']['supplier_id']; ?>);"><i></i>关注本店 </a> <?php endif; ?> </div>
        <div id="attention-shop">
          <p>扫一扫，手机访问店铺</p>
          <img src="erweima_supplier.php?sid=<?php echo $this->_var['suppid']; ?>" width="120" height="120" /> </div>
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