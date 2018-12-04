<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="tianxin100 v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/<?php echo $this->_var['cat_style']; ?>" />
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-lazyload.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="first-show clearfix"> <?php echo $this->fetch('library/ad.lbi'); ?>
  <div class="w1210 clearfix">
    <div class="main-nav">
      <div class="float-list"> 
        <?php $_from = get_categories_tree(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat0']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat0']['iteration']++;
?> 
        <?php if ($this->_var['current_cat_pr_id'] == $this->_var['cat']['id']): ?> 
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
        <dl>
          <dt> <strong><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></strong>
            <p> 
              <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> 
              <a href="<?php echo $this->_var['childer']['url']; ?>" class="" title="<?php echo $this->_var['childer']['name']; ?>"><?php echo $this->_var['childer']['name']; ?></a> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            </p>
            <b class="arrow-right">&gt;</b> </dt>
          <dd style="top: 0px; min-height:108px;">
            <ul class="secondlist">
              <li> <strong style="background-position: -464px -80px;"><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></strong>
                <div class="float-list-cont"> 
                  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> 
                  <a href="<?php echo $this->_var['childer']['url']; ?>" class="" title="<?php echo $this->_var['childer']['name']; ?>"><?php echo $this->_var['childer']['name']; ?></a> 
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
              </li>
            </ul>
          </dd>
        </dl>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </div>
    </div>
  </div>
  <div class="image-box1">
    <?php
             $GLOBALS['smarty']->assign('index_image1',get_advlist('频道页-分类ID'.$GLOBALS['smarty']->_var['category'].'-图片1', 1));
             $GLOBALS['smarty']->assign('index_image2',get_advlist('频道页-分类ID'.$GLOBALS['smarty']->_var['category'].'-图片2', 1));
             $GLOBALS['smarty']->assign('index_image3',get_advlist('频道页-分类ID'.$GLOBALS['smarty']->_var['category'].'-图片3', 1));
		?>
    <?php $_from = $this->_var['index_image1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"> <img src="themes/wwwwe10cn/images/loading.gif" data-original="<?php echo $this->_var['ad']['image']; ?>"  height="187" width="510"></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php $_from = $this->_var['index_image2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank"><img src="themes/wwwwe10cn/images/loading.gif" data-original="<?php echo $this->_var['ad']['image']; ?>" height="187" width="340"></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php $_from = $this->_var['index_image3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" class="last"> <img src="themes/wwwwe10cn/images/loading.gif" data-original="<?php echo $this->_var['ad']['image']; ?>"  height="187" width="340"></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>
<?php $_from = $this->_var['childcat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['name']['iteration']++;
?>
<div class="floor-wrapper">
  <div class="mt">
    <h2><?php echo $this->_foreach['name']['iteration']; ?>F<span><?php echo $this->_var['cat']['cat_name']; ?></span></h2>
    <a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank" class="category-more">更多 <i>&gt;</i></a>
  </div>
  <script type="text/javascript"> 
$(document).ready(function(){ 
$(".itemOuter .itemWrapper").mouseover(function(){ 
$(this).addClass("itemWrapper_hover"); 
}); 
$(".itemOuter .itemWrapper").mouseout(function(){ 
$(this).removeClass("itemWrapper_hover"); 
}); 
}); 
</script>
  <div class="floor-content">
  	<?php $_from = $this->_var['cat']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'catgoods');$this->_foreach['cat_children'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_children']['total'] > 0):
    foreach ($_from AS $this->_var['catgoods']):
        $this->_foreach['cat_children']['iteration']++;
?>
    <div class="item" id="li_<?php echo $this->_var['catgoods']['goods_id']; ?>">
      <div class="item-inner">
      	<a class="add-cart" href="javascript:addToCart(<?php echo $this->_var['catgoods']['goods_id']; ?>)" title="加入购物车"></a>
        <a href="<?php echo $this->_var['catgoods']['url']; ?>" title='<?php echo htmlspecialchars($this->_var['catgoods']['goods_name']); ?>' target="_blank" class="item-img">
        	<img data-original="<?php echo $this->_var['catgoods']['goods_thumb']; ?>" src="themes/wwwwe10cn/images/loading.gif"  class="pic_img_<?php echo $this->_var['catgoods']['goods_id']; ?>" height="160" width="160">
        </a>
        <p class="item-name"><a href="<?php echo $this->_var['catgoods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['catgoods']['goods_name']); ?>" target="_blank"><?php echo $this->_var['catgoods']['goods_name']; ?></a></p>
      	<div class="item-price">
        	<span class="sale-price main-color"><?php if ($this->_var['catgoods']['promote_price'] > 0): ?><?php echo $this->_var['catgoods']['promote_price']; ?><?php else: ?><?php echo $this->_var['catgoods']['shop_price']; ?><?php endif; ?></span>
      	</div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="blank"></div>
<?php echo $this->fetch('library/arrive_notice.lbi'); ?>
<?php echo $this->fetch('library/right_sidebar.lbi'); ?>
<div class="site-footer">
  <div class="footer-related"> 
    <?php echo $this->fetch('library/help.lbi'); ?> 
    <?php echo $this->fetch('library/page_footer.lbi'); ?> 
  </div>
</div>
<script type="text/javascript">
$("img").lazyload({
    effect       : "fadeIn",
	 skip_invisible : true,
	 failure_limit : 20
});
</script> 
</body>
</html>