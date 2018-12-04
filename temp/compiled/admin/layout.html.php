<?php echo $this->fetch('pageheader.htm'); ?>
<head>
<meta charset="utf-8">
<script src="js/jquery.js"></script>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=1" name="viewport">
<link href="styles/layout/layout.css" rel="stylesheet">
<link href="styles/layout/swiper.min.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<link href="styles/layout/header.css" rel="stylesheet">
<title>首页设置</title>
</head>
<body>
	<div class="layoutbody">
		<div class="layout-header">首页设置</div>
		<div class="mainbody" style="width:1200px;">
			<div class="mobile-box">
				<div class="mobile-screen">
					<div class="mobile-navbar">甜心商城</div>
					<div class="layoutlist">

						<div  style="margin-bottom: 0px;" class="home-block" id="mobile_menu_bar" <?php if ($this->_var['menu_bar'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">首页菜单栏</div>
							</div>
							<div class="cat-list" style="padding-right:30px;height: 30px;">
							<div class="list-content">
								<div class="cat-item current"><span>全部</span></div>
								<?php $_from = $this->_var['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
								<div class="cat-item" style="margin-top: 3px;"><span name="menu_bar_name" id="menu_bar_name" value="<?php echo $this->_var['list']['menu_bar_name']; ?>"><?php echo $this->_var['list']['menu_bar_name']; ?></span></div>
								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
							</div>
							<a href="" class="cat-img" style="padding: 0px;"><img style="margin-top: -3px;" src="images/cat.png"></a>
						</div>
							<div class="editbox">
								<a href="javascript:del('menu_bar')"><img src="images/icon-delete.png"></a>	
							</div>
						</div>

						<div class="home-block" id="mobile_search_box" <?php if ($this->_var['search_box'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name" >搜索框</div>
							</div>
							<img class="block-img" src="images/search.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('search_box')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_top_ad" <?php if ($this->_var['top_ad'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">轮播广告</div>
							</div>
							<img class="block-img" src="images/banner.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('top_ad')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_menu" <?php if ($this->_var['menu'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">分类导航</div>
							</div>
							<img class="block-img" src="images/menu.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('menu')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_top_news" <?php if ($this->_var['top_news'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">头条</div>
							</div>
							<img class="block-img" src="images/top_new.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('top_news')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_banner_ad" <?php if ($this->_var['banner_ad'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">横幅广告</div>
							</div>
							<img class="block-img" src="images/ad1.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('banner_ad')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_ad1" <?php if ($this->_var['ad1'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">广告1</div>
							</div>
							<img class="block-img" src="images/ad2.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('ad1')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_ad2" <?php if ($this->_var['ad2'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">广告2</div>
							</div>
							<img class="block-img" src="images/ad3.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('ad2')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_brand_model" <?php if ($this->_var['brand_model'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">超级品牌日</div>
							</div>
							<img class="block-img" src="images/brand.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('brand_model')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_cuxiao_model" <?php if ($this->_var['cuxiao_model'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">促销活动</div>
							</div>
							<img class="block-img" src="images/cuxiao.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('cuxiao_model')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_hot_model" <?php if ($this->_var['hot_model'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">热销商品</div>
							</div>
							<img class="block-img" src="images/hot_goods.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('hot_model')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_new_model" <?php if ($this->_var['new_model'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">新品上市</div>
							</div>
							<img class="block-img" src="images/new_goods.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('new_model')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<?php if ($this->_var['goods_models']): ?>
						<?php $_from = $this->_var['goods_models']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
						<div class="home-block" id="cat_<?php echo $this->_var['list']['value']; ?>">
							<div class="block-content">
								<div class="block-name"><?php echo $this->_var['list']['cat_name']; ?></div>
							</div>
							<img class="block-img" src="images/cat_goods.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del_cat(<?php echo $this->_var['list']['value']; ?>)"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php endif; ?>
						<div id="append"></div>
						<div class="home-block" id="mobile_bottom_ad" <?php if ($this->_var['bottom_ad'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">底部轮播图</div>
							</div>
							<img class="block-img" src="images/ad4.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('bottom_ad')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
						<div class="home-block" id="mobile_best_model" <?php if ($this->_var['best_model'] != 1): ?> hidden <?php endif; ?>>
							<div class="block-content">
								<div class="block-name">精品推荐</div>
							</div>
							<img class="block-img" src="images/best_goods.jpg" draggable="false"> 
							<div class="editbox">
								<a href="javascript:del('best_model')"><img src="images/icon-delete.png"></a>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="choose-box">
			  <div class="choose-list">
				<div class="choose-header">可选模块</div>
				<div class="choose-body">
					<div class="bigbox">
						<?php $_from = $this->_var['module_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
						<div class="module-item">
							<div class="module-name"><?php echo $this->_var['list']['region']; ?></div>
							
							<div class="module-btn">
								<?php if ($this->_var['list']['goods_cate']): ?>
								<button style="color:red" onclick="show_number()">选择</button>
								<?php endif; ?>
								<?php if ($this->_var['list']['article']): ?>
								<button style="color:red" onclick="select_article_cat()">选择</button>
								<?php endif; ?>
								<button onclick="add('<?php echo $this->_var['list']['library']; ?>','<?php echo $this->_var['list']['region']; ?>')">添加</button>
								
								<button style="color:red" onclick="edit('<?php echo $this->_var['list']['library']; ?>')">编辑</button>
								
								<div class="clearfix"></div>
							</div>
						</div>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						
				  </div>
				</div>
			  </div>
			</div>
			<div class="right-box" style="margin-left: 25px; width: 460px;background-color: white;">
				<div class="rightmain">
					<div class="editor">
						<div class="editor-header">搜索框自定义</div>
						<div class="edit-body">
							<div id="goods_cate" hidden style="padding-top:5px;">
								<?php if ($this->_var['cate_goods']): ?>
								<span style="display:inline-block;width:60px;">商品分类</span>
								<select  id="cate_id" style="margin-bottom:10px;margin-left:0;">
									<option>选择商品分类</option>
									
										<?php echo $this->_var['cate_goods']; ?>
									
								</select>
								<br>
								<span style="display:inline-block;width:63px;">排序</span><input style="border: solid 1px #ddd;line-height: 20px;padding:1px 3px;margin-bottom:10px;"  type="text" id="sort" name="" value="1">	
								<br>
								<span style="display:inline-block;width:63px;">显示数量</span><input style="border: solid 1px #ddd;line-height: 20px;padding:1px 3px;margin-bottom:10px;"  type="text" id="number" value="0" name="number">
								<?php endif; ?>
							</div>
							<div id="article_cat" hidden style="padding-top:5px;">
								<?php if ($this->_var['article']): ?>
								<span style="display:inline-block;width:60px;">文章分类</span>
								<select  id="acate_id" style="margin-bottom:10px;margin-left:0;">
									<option>选择文章分类</option>
									
										<?php echo $this->_var['article']; ?>
									
								</select>
								<br>
								<span style="display:inline-block;width:63px;">排序</span><input style="border: solid 1px #ddd;line-height: 20px;padding:1px 3px;margin-bottom:10px;"  type="text" id="asort" name="" value="1">	
								<br>
								<span style="display:inline-block;width:63px;">显示数量</span><input style="border: solid 1px #ddd;line-height: 20px;padding:1px 3px;margin-bottom:10px;"  type="text" id="anumber" value="0" name="number">
								<?php endif; ?>
							</div>
							<div id="index_ad1" hidden>
								<p>手机端首页广告1-1 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=24">编辑</a></p>
								<p>手机端首页广告1-2 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=25">编辑</a></p>
								<p>手机端首页广告1-3 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=26">编辑</a></p>
							</div>
							<div id="index_ad2" hidden>
								<p>手机端首页广告2-1 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=27">编辑</a></p>
								<p>手机端首页广告2-2 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=28">编辑</a></p>
								<p>手机端首页广告3-2 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=40">编辑</a></p>
								<p>手机端首页广告3-3 &nbsp&nbsp&nbsp&nbsp<a href="mobile_ads.php?act=edit&id=41">编辑</a></p>
							</div>
						</div>
					</div>
				</div>
				<!-- <button class="submit-btn">保存</button>
				<div class="text-muted"> 提示： <br>
					提示文字提示文字提示文字提示文字提示文字提示文字提示文字提示文字提示文字提示文字提示文字提示文字提示文字
				</div> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<script type="text/javascript">

	function edit(ad){
		if(ad=='banner_ad'){
			window.location.href="mobile_ads.php?act=list&pid=31";
		}
		if(ad=='bottom_ad'){
			window.location.href="mobile_ads.php?act=edit&id=53";
		}
		if(ad=='menu_bar'){
			window.location.href="mobile_menu_bar.php?act=list";
		}
		if(ad=='top_ad'){
			window.location.href="mobile_ads.php?act=list&pid=3";
		}
		if(ad=='menu'){
			window.location.href="menu.php?act=list";
		}
		if(ad=='brand_model'){
			window.location.href="brand.php?act=list";
		}
		if(ad=='cuxiao_model'){
			window.location.href="goods.php?act=list";
		}
		if(ad=='hot_model'){
			window.location.href="goods.php?act=list";
		}
		if(ad=='new_model'){
			window.location.href="goods.php?act=list";
		}
		if(ad=='best_model'){
			window.location.href="goods.php?act=list";
		}

		if(ad=='ad1'){
			$("#index_ad1").show();
			$("#index_ad2").hide();
			$("#goods_cate").hide();
		}
		if(ad=='ad2'){
			$("#index_ad2").show();
			$("#index_ad1").hide();
			$("#goods_cate").hide();
		}
	}

	function add(library,region){
		var cat_id=$("#cate_id").val();
		var sort=$("#sort").val();
		var number=$("#number").val();
		if(library=='goods_model'){
			if($("#goods_cate").is(":hidden")){
				alert('请先选择商品分类模块！');
				return false;
			}
		}
		if(library=='top_news'){
			if($("#article_cat").is(":hidden")){
				alert('请先选择文章分类模块！');
				return false;
			}else{
				cat_id=$("#acate_id").val();
				sort=$("#asort").val();
				number=$("#anumber").val();
			}
		}
		Ajax.call('mobile_template.php?act=add_model','region='+region+'&library='+library+'&cat_id='+cat_id+'&number='+number+'&sort='+sort,add_back,"GET","JSON");	
	}
	function add_back(res){
		console.log(res)
		if(res.status==1){
			if(res.library=='goods_model' && res.id>0){
				location.reload();
			}else{
				var id=res.library;
				$("#mobile_"+id).show();
			}
		}else{
			alert(res.msg);
		}
	}

	function show_number(){
		$("#goods_cate").show();
		$("#index_ad1").hide();
		$("#index_ad2").hide();
	}
	function select_article_cat(){
		$("#article_cat").show();
		$("#index_ad1").hide();
		$("#index_ad2").hide();
		$("#goods_cate").hide();
	}
	function del(type){
		Ajax.call('mobile_template.php?act=del_model','type='+type,del_back,"GET","JSON");
	}

	function del_back(res){
		console.log(res)
		if(res.status==1){
			var id=res.type;
			console.log(id)
			$("#mobile_"+id).hide();
		}else{
			alert(res.msg);
		}
	}
	function del_cat(cat_id){
		Ajax.call('mobile_template.php?act=del_cat','id='+cat_id,del_cat_back,"GET","JSON");
	}
	function del_cat_back(res){

		console.log(res)
		if(res.status ==1){
			var id=res.id;
			$("#cat_"+id).remove();
		}else{
			alert(res.msg);
		}
	}
	
</script>
</body>
<?php echo $this->fetch('pagefooter.htm'); ?>
