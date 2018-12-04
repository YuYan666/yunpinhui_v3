<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="tianxin100 v4_2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/68ecshop_common.css" />
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/store_joinin.css" />
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/jq4.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
</head>
<body>
<div class="header">
  <h2 class="header-logo"><a href="index.php"><img src="themes/wwwwe10cn/images/logo.gif" /></a></h2>
  <ul class="header-menu">
    <li class="current"><a href="apply.php" class="joinin"><i></i>商家入驻申请</a></li>
    <li class=""><a href="<?php echo $this->_var['mydomain']; ?>supplier/" class="login"><i></i>商家管理中心</a></li>
    <li class=""><a href="#" class="faq"><i></i>商家帮助指南</a></li>
  </ul>
</div>
<div class="header-line"><span></span></div>
<div class="banner">
  <?php echo $this->fetch('library/apply_info.lbi'); ?>
  <div id="banner">
    <div id="ctrl1"> <span class="hov"></span> <span></span> <span></span> </div>
    <div id="img1" class="full-screen-slides" style="overflow:hidden"> 
    	<a href="#"><img style="display:block;" src="themes/wwwwe10cn/images/apply/banner01.jpg" alt="" /></a> 
        <a href="#"><img src="themes/wwwwe10cn/images/apply/banner02.jpg" alt="" /></a> 
        <a href="#"><img src="themes/wwwwe10cn/images/apply/banner03.jpg" alt="" /></a> 
    </div>
  </div>
</div>
<?php echo $this->fetch('library/apply_prompt.lbi'); ?>
<?php echo $this->fetch('library/apply_detail_info.lbi'); ?>
<div class="site-footer">
    <div class="footer-related">
  		<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
<script type="text/javascript" src="themes/wwwwe10cn/js/home_index.js"></script>
</html>
