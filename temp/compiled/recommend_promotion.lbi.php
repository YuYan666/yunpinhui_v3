<?php if ($this->_var['promotion_goods']): ?>
<div class="tabs-panel sale-goods-list tabs-hide">
  <ul>
    <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_58930700_1543833660');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_58930700_1543833660']):
        $this->_foreach['index_goods']['iteration']++;
?> 
    <?php if ($this->_foreach['index_goods']['iteration'] > 5 && $this->_foreach['index_goods']['iteration'] < 11): ?>
    <li>
      <dl>
        <dt class="goods-name"> <a target="_blank" href="<?php echo $this->_var['goods_0_58930700_1543833660']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_58930700_1543833660']['goods_style_name']); ?>"><?php echo $this->_var['goods_0_58930700_1543833660']['short_style_name']; ?></a> </dt>
        <dd class="goods-thumb"> <a target="_blank" href="<?php echo $this->_var['goods_0_58930700_1543833660']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_58930700_1543833660']['goods_style_name']); ?>"> <img src="<?php echo $this->_var['goods_0_58930700_1543833660']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_58930700_1543833660']['goods_style_name']); ?>"> </a> </dd>
        <dd class="goods-price"> 商城价： <em> 
          <?php if ($this->_var['goods_0_58930700_1543833660']['promote_price'] != ""): ?> 
          <?php echo $this->_var['goods_0_58930700_1543833660']['promote_price']; ?> 
          <?php else: ?> 
          <?php echo $this->_var['goods_0_58930700_1543833660']['shop_price']; ?> 
          <?php endif; ?> 
          </em> </dd>
      </dl>
    </li>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<?php endif; ?> 
