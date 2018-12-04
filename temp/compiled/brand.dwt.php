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
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/category.css" />
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-lazyload.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<script>var jdpts = new Object(); jdpts._st = new Date().getTime();</script>
</head><body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank"></div>
<div class="w1210">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
    <div class="content-wrap category-wrap clearfix">
    	<div class="aside">
        	<span class="slide-aside"></span>
            <div class="aside-inner">
				<?php echo $this->fetch('library/category_tree.lbi'); ?>
                <?php echo $this->fetch('library/top10.lbi'); ?> 
            </div>
        </div>
        <div class="main">
        	<div class="brand-info">
              <h3 class="brand-name"><span><?php echo $this->_var['brand']['brand_name']; ?></span></h3>
              <div class="brand-detail">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  	<?php if ($this->_var['brand']['brand_logo']): ?> 
                    <td class="td-l" align="center" valign="middle">
                    	<img src="<?php echo $this->_var['brand']['brand_logo']; ?>" />
                    </td>
                    <?php endif; ?> 
                    <td>
                    	<?php if ($this->_var['brand']['brand_desc']): ?>
                    	<?php echo nl2br($this->_var['brand']['brand_desc']); ?><br />
                        <?php endif; ?>
                      	<?php if ($this->_var['brand']['site_url']): ?> 
                      	<?php echo $this->_var['lang']['official_site']; ?> <a href="<?php echo $this->_var['brand']['site_url']; ?>" target="_blank"><?php echo $this->_var['brand']['site_url']; ?></a><br />
                      	<?php endif; ?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
    		<?php echo $this->fetch('library/goods_list.lbi'); ?>
            <?php echo $this->fetch('library/pages.lbi'); ?>
        </div>
    </div>
    <?php echo $this->fetch('library/history.lbi'); ?>
</div>
<?php echo $this->fetch('library/right_sidebar.lbi'); ?> 
<div class="site-footer">
  <div class="footer-related">
  	<?php echo $this->fetch('library/help.lbi'); ?>
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
<script type="text/javascript">
$("img").lazyload({
	effect : "fadeIn",
	skip_invisible : true,
	failure_limit : 20
});
</script> 
<script type="text/javascript" src="themes/wwwwe10cn/js/compare.js"></script> 
</body>
</html>
