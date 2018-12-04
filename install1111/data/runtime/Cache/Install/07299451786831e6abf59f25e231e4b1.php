<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>甜心100安装</title>
<link rel="stylesheet" href="/install/public/simpleboot/themes/flat/theme.min.css" />
<link rel="stylesheet" href="/install/public/install/css/install.css" />
<link rel="stylesheet" href="/install/public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css" />

<script src="/install/public/js/jquery.js"></script>
</head>
<body>
	<div class="wrap">
		<div class="header">
	<h1 class="logo">甜心100 安装向导</h1>
	<div class="version">2.0.0</div>
</div>
		<section class="section">
			<div style="padding: 40px 20px;">
				<div class="text-center">
					<a style="font-size: 18px;">恭喜您，安装完成！本工具仅可使用一次，严禁倒卖传播</a>
					<br>
					<br>
					<div class="alert alert-danger" style="width: 350px;display: inline-block;">
						为了您站点的安全，安装完成后即可将网站根目录目录下的“Install”文件夹删除!
						另请对data/config.php文件做好备份，以防丢失！</br>
						您的后台默认信息是：</br>
						账户名：admin <br/>
						密码：wwwwe10cn
					</div>
					<br>
					<a class="btn btn-success" href="/install/../">进入前台</a> 
					<a class="btn btn-success" href="/install/../admin">进入后台</a> 
				</div>
			</div>
		</section>
	</div>

	<div class="footer">
	&copy; 2013-<?php echo date('Y');?> <a href="http://www.tianxin100.com" target="_blank">甜心100技术部</a>出品
</div>
</body>
</html>