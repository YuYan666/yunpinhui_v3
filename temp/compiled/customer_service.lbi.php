
<div class="customer-service customer-service-online">
</div>
<?php $_from = $this->_var['customer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'customer_0_65180700_1543833660');$this->_foreach['customer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['customer']['total'] > 0):
    foreach ($_from AS $this->_var['customer_0_65180700_1543833660']):
        $this->_foreach['customer']['iteration']++;
?>
<?php if ($this->_var['customer_0_65180700_1543833660']['cus_type'] == 0): ?>
<div class="customer-service">
    <a target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['customer_0_65180700_1543833660']['cus_no']; ?>&site=qq&menu=yes" alt="点击这里给我发消息" title="点击这里给我发消息"><span class="icon-qq"></span><?php echo $this->_var['customer_0_65180700_1543833660']['cus_name']; ?></a>
</div>
<?php else: ?>
<div class="customer-service">
    <a target="_blank" href="https://amos1.taobao.com/msg.ww?v=2&uid=<?php echo $this->_var['customer_0_65180700_1543833660']['cus_no']; ?>&s=2" alt="点击这里给我发消息" title="点击这里给我发消息"><span class="icon-ww"></span><?php echo $this->_var['customer_0_65180700_1543833660']['cus_name']; ?></a>
</div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
