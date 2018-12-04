<div class="category-banner">
  <ul class="banner-panel">
    <?php $_from = $this->_var['flash_img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fimg');$this->_foreach['flash_img_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flash_img_list']['total'] > 0):
    foreach ($_from AS $this->_var['fimg']):
        $this->_foreach['flash_img_list']['iteration']++;
?>
    <li><a href="<?php echo $this->_var['fimg']['img_link']; ?>" style="background:url(<?php echo $this->_var['fimg']['img_url']; ?>) center top"></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <div class="banner-extra">
  	<?php $_from = $this->_var['flash_img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fimg');$this->_foreach['flash_img_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['flash_img_list']['total'] > 0):
    foreach ($_from AS $this->_var['fimg']):
        $this->_foreach['flash_img_list']['iteration']++;
?>
    <span <?php if (($this->_foreach['flash_img_list']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>></span>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</div>
