<?php if ($this->_var['article_categories']): ?>
<div class="article-menu-title main-bg-color"><?php echo $this->_var['lang']['article_cat']; ?></div>
<div class="article-menu">
	<?php $_from = $this->_var['article_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'cat_0_47993200_1543868305');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['cat_0_47993200_1543868305']):
        $this->_foreach['cat']['iteration']++;
?>
    <div class="article-menu-list sidebar-article-menu <?php if (($this->_foreach['cat']['iteration'] == $this->_foreach['cat']['total'])): ?>last<?php endif; ?>">
    	<h4><b></b><a href="<?php echo $this->_var['cat_0_47993200_1543868305']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_47993200_1543868305']['name']); ?></a></h4>
        <ul>
            <?php $_from = $this->_var['cat_0_47993200_1543868305']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'child_0_47993200_1543868305');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['k'] => $this->_var['child_0_47993200_1543868305']):
        $this->_foreach['name']['iteration']++;
?>
            <li class="<?php if ($this->_var['k'] == $this->_var['cat_id']): ?>curr<?php endif; ?> <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>first<?php endif; ?>"><a href="<?php echo $this->_var['child_0_47993200_1543868305']['url']; ?>"><?php echo htmlspecialchars($this->_var['child_0_47993200_1543868305']['name']); ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
    </div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
</div>
<?php endif; ?>
