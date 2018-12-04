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
<link rel="stylesheet" href="themes/wwwwe10cn/css/auction.css">
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/slide.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,transport.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="maincontent">
	<div class="element pict main">
            
    <?php $this->assign('ads_id','51'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
    
        </div>
    <div class="element pict">
        
    <?php $this->assign('ads_id','52'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
    
        </div>
    <div class="element pict">
            
    <?php $this->assign('ads_id','53'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
    
        </div>
    <div class="element pict">
        
    <?php $this->assign('ads_id','54'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
    
        </div>
    <div class="element navi left"><img src="themes/wwwwe10cn/images/left.png" alt="left"></div>
    <div class="element navi right"><img src="themes/wwwwe10cn/images/right.png" alt="right"></div>
</div>
<div class="margin-w1210 clearfix">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
 	<?php if ($this->_var['auction_list']): ?> 
  	<div class="auction-list">
      <h2>全部拍卖</h2>
      <ul class="clearfix">
      <?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['auction']):
        $this->_foreach['name']['iteration']++;
?>
  		<li <?php if ($this->_foreach['name']['iteration'] % 5 == 1): ?>class="auction-list-1"<?php endif; ?>>
        	<a href="<?php echo $this->_var['auction']['url']; ?>" target="_blank" class="auction-pic">
            	<img class="err-product" src="<?php echo $this->_var['auction']['goods_thumb']; ?>" width="220" height="220">
            </a>
          	<div class="auction-cont">
            	<a class="auction-name" target="_blank" href="<?php echo $this->_var['auction']['url']; ?>"><?php echo sub_str($this->_var['auction']['goods_name'],26); ?></a>
            	<div class="auction-price">当前价：<span><?php echo $this->_var['auction']['formated_current_price']; ?></span></div>
                <div class="goods-source"><a href="supplier.php?suppId=<?php echo $this->_var['auction']['supplier_id']; ?>" target="_blank" title="商品来源"><?php echo $this->_var['auction']['suppliername']; ?></a></div>
            	<a target="_blank" href="<?php echo $this->_var['auction']['url']; ?>" class="bid-btn">我要出价</a>
          	</div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  	  </ul>
    </div>
 	<?php endif; ?> 
 	<?php echo $this->fetch('library/pages.lbi'); ?> 
</div>
<?php echo $this->fetch('library/right_sidebar.lbi'); ?>
<div class="site-footer">
    <div class="footer-related">
  		<?php echo $this->fetch('library/help.lbi'); ?>
  		<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
</html>
