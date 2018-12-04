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
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank"></div>
<div class="w1210">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div class="box-text">
  	<h3><?php echo htmlspecialchars($this->_var['article']['title']); ?></h3>
    <div class="content">
    	<?php if ($this->_var['article']['content']): ?> 
        <?php echo $this->_var['article']['content']; ?> 
        <?php endif; ?>
    </div>
  </div>
</div>
<div class="site-footer">
  <div class="footer-related">
  	<?php echo $this->fetch('library/help.lbi'); ?>
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
</html>
