<?php if ($this->_var['helps']): ?>
<div class="footer-article w1210"> 
  <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat_0_38618200_1543867658');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat_0_38618200_1543867658']):
        $this->_foreach['no']['iteration']++;
?>
  <dl class="col-article <?php if (($this->_foreach['no']['iteration'] <= 1)): ?>col-article-first<?php endif; ?>">
    <dt><?php echo $this->_var['help_cat_0_38618200_1543867658']['cat_name']; ?></dt>
    <?php $_from = $this->_var['help_cat_0_38618200_1543867658']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_38618200_1543867658');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_38618200_1543867658']):
?>
    <dd><a rel="nofollow" href="help.php?id=<?php echo $this->_var['item_0_38618200_1543867658']['article_id']; ?>" target="_blank"><?php echo $this->_var['item_0_38618200_1543867658']['short_title']; ?></a></dd>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </dl>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <!--<dl class="col-article">
    <dt>服务支持</dt>
    <dd>售前咨询 400-078-5268</dd>
    <dd>售后咨询 400-078-5268</dd>
    <dd>客服 QQ 800007396</dd>
    <dd>工作时间 9：00-17：30</dd>
  </dl>-->
</div>
<?php endif; ?>