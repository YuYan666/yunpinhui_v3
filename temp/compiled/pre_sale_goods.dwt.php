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
<link rel="stylesheet" type="text/css" href="themes/wwwwe10cn/css/pre_sale.css" />
<script type="text/javascript" src="themes/wwwwe10cn/js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/magiczoom.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/gw_totop.js" ></script>
<script type="text/javascript" src="themes/wwwwe10cn/js/pre_sale.js" ></script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,transport.js,jquery.countdown-2.5.3.min.js')); ?>
</head>
<body>

<input type="hidden" id="chat_goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="margin-w1210 clearfix">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
  <div id="product-intro" class="goods-info">
      <div id="preview">
        <div class="goods-img" id="li_<?php echo $this->_var['goods']['goods_id']; ?>"> 
        	<a href="<?php if ($this->_var['pictures']['0']['img_original']): ?><?php echo $this->_var['pictures']['0']['img_original']; ?><?php else: ?><?php echo $this->_var['goods']['original_img']; ?><?php endif; ?>" class="MagicZoom" id="zoom" rel="zoom-position: right;"> 
          <?php if ($this->_var['pictures']): ?> 
          <img src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" width="400" height="400" /> 
          <?php else: ?> 
          <img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" width="400" height="400" /> 
          <?php endif; ?> 
          </a> 
        </div>
        <div style="height:10px; line-height:10px; clear:both;"></div>
         
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
        
        <div class="goods-gallery-bottom">
        	 <?php if ($this->_var['cfg']['show_goodssn']): ?>
        	<div class="goods-sn fl">
            	<span class="goods-sn-color">商品货号</span>
                <span><?php echo $this->_var['goods']['goods_sn']; ?></span>
            </div>
            <?php endif; ?> 
            <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" class="goods-col <?php if ($this->_var['goods']['is_collet'] == 1): ?>goods-col-t<?php endif; ?> fr">
            	<b></b><i><?php if ($this->_var['goods']['is_collet'] == 1): ?>已<?php endif; ?>收藏 (<?php if ($this->_var['collect_num'] != 0): ?><?php echo $this->_var['collect_num']; ?><?php else: ?>0<?php endif; ?>)</i>
            </a>   
            <div class="bdsharebuttonbox fr">
        		<a class="bds_more" href="#" data-cmd="more" style="background: transparent url(themes/wwwwe10cn/images/goods-icon.png) no-repeat -110px -166px;color: #999;line-height: 25px;height: 25px; margin: 0px 10px; padding-left:20px; display: block;">分享</a>
            </div>
        </div>
		<script type="text/javascript">
        	window._bd_share_config = {
			"common": {
				"bdSnsKey": {},
				"bdText": "",
				"bdMini": "2",
				"bdMiniList": false,
				"bdPic": "",
				"bdStyle": "0",
				"bdSize": "16"
			},
			"share": {}
		};
		with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~ (-new Date() / 36e5)];
        </script>
      </div>
      <div class="goods-detail-info">
          <form action="javascript:;" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
          	<div class="goods-name">
            	<h1><?php echo $this->_var['goods']['goods_name']; ?></h1>
            </div>
            <?php if ($this->_var['goods']['goods_brief']): ?>
            <div class="goods-brief"><span><?php echo $this->_var['goods']['goods_brief']; ?></span></div>
            <?php endif; ?>
            <div id="goods-price">
            	<div class="mar-l">
                    <p> 
                    	<span>预售价</span>
                        <strong class="p-price" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['formated_cur_price']; ?></strong> 
                    </p>
                    <span class="rule"><i></i>预售规则</span> 
					<?php echo $this->fetch('library/pre_sale_rule.lbi'); ?> 
                </div>
                <?php if ($this->_var['goods']['deposit'] > 0): ?>
                <div class="show-price">
                    <div class="market-prices-spe"> 
                    	<span>定金</span>
                        <font class="market-price"><?php echo $this->_var['goods']['formated_deposit']; ?></font> 
                    </div>
                </div>
                <?php endif; ?> 
            </div>
            <div id="summary-jiage"> 
                 
                <?php if ($this->_var['goods']['price_ladder_count'] > 1): ?>
            	<div class="jieti-jiage"> 
                    <?php $_from = $this->_var['goods']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?>
                    <div class="jieti-renshu <?php if ($this->_foreach['name']['iteration'] % 3 == 0): ?> <?php else: ?>jieti-Rbian<?php endif; ?> <?php if ($this->_var['goods']['cur_price'] == $this->_var['item']['price']): ?> st jieti-Bbian<?php else: ?> xuti jieti-BBbian<?php endif; ?>" > 满<?php echo $this->_var['item']['amount']; ?>人 <br/>
                      <span ><?php echo $this->_var['item']['formated_price']; ?></span> 
                    </div>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </div>
                <div class="jieti-xianshi"></div>
                <a href="javascript:" class="jieti-anniu"><div class="jieti_anniu"></div></a> 
                 
                <?php else: ?> 
                
                <div class="presell-wrap" id="summary-presell">
                    <div id="presell-detail">
                      <div class="mt"> 
                      	<strong>定金：</strong> 
                        <span id="dingjin"><?php echo $this->_var['goods']['deposit']; ?> +</span> 
                        <span class="presell-balance hide" style="display:inline;"> 
                        	<strong>尾款：</strong> 
                            <span id="weikuan"><?php echo $this->_var['goods']['formated_cur_price-$goods']['deposit']; ?> </span> 
                        </span> 
                      </div>
                      <div id="summary-presell-stage2" class="mc">预定人数：<span><?php echo $this->_var['goods']['valid_order']; ?>人</span></div>
                      <div class="mb">
                        <div class="presell-countdown-wrap"> 
                          <?php if ($this->_var['goods']['status'] == 0): ?> 
                          预售活动尚未开始... 
                          <?php elseif ($this->_var['goods']['status'] == 1): ?> 
                          预售活动火热进行中！ 
                          <?php elseif ($this->_var['goods']['status'] == 2): ?> 
                          <span style="color: red; font-weight: bold;">活动已结束，等待处理...</span> 
                          <?php elseif ($this->_var['goods']['status'] == 3): ?> 
                          <span style="color: red; font-weight: bold;">活动已成功结束！</span> 
                          <?php elseif ($this->_var['goods']['status'] == 4): ?> 
                          <span style="color: red; font-weight: bold;">亲，活动失败了！</span> 
                          <?php endif; ?> 
                        </div>
                      </div>
                    </div>
                  </div>
                   
                  <?php endif; ?> 
            </div>
            <div id="summary-qita">
                  <ul class="qita">
                    <li>
                      <p>累积评价<span><?php echo $this->_var['goods']['comment_count']; ?>人评价</span></p>
                    </li>
                    <li>
                      <p>累计销量<span><?php echo $this->_var['goods']['sale_count']; ?></span></p>
                    </li>
                    <?php if ($this->_var['goods']['give_integral_2'] == '-1'): ?>
                    <li style="border:none">
                      <p>赠送积分<span><font id="ECS_GOODS_AMOUNT_jf"><?php echo $this->_var['goods']['give_integral']; ?></font></span></p>
                      <?php elseif ($this->_var['goods']['give_integral_2'] > 0): ?>
                    <li style="border:none">
                      <p>赠送积分<span><?php echo $this->_var['goods']['give_integral']; ?></span></p>
                    </li>
                    <?php else: ?>
                    <li style="border:none">
                      <p>赠送积分<span>0</span></p>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
                <?php if ($this->_var['goods']['is_shipping']): ?>
                <ul id="summary">
                    <li> <?php echo $this->_var['lang']['goods_free_shipping']; ?></li>
                </ul>
                <?php endif; ?>
                <ul id="choose">
                   
                  <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['name']['iteration']++;
?>
                  <li id="choose-version">
                    <div class="dt"><?php echo $this->_var['spec']['name']; ?>：</div>
                    <div class="dd catt"> 
                       
                      <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?> 
                      
                      <input type="hidden" name="spec_attr_type" value="<?php echo $this->_var['spec_key']; ?>">
                      <input type="hidden" name="attr_types" id="spec_attr_type_<?php echo $this->_var['spec_key']; ?>" value="0">
                      <ul class="ys_xuan" id="xuan_<?php echo $this->_var['spec_key']; ?>">
                        <div class="catt" id="catt_<?php echo $this->_var['spec_key']; ?>"> 
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                          <a onclick="show_attr_status(this,<?php echo $this->_var['goods']['goods_id']; ?>,<?php echo $this->_var['attr_id']; ?>);<?php if ($this->_var['spec_key'] == $this->_var['attr_id']): ?>get_gallery_attr(<?php echo $this->_var['goods']['goods_id']; ?>,<?php echo $this->_var['value']['id']; ?>);<?php endif; ?>"  href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" id="xuan_a_<?php echo $this->_var['value']['id']; ?>"  title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"> <?php if ($this->_var['value']['goods_attr_thumb']): ?>
                          <div style="float:left;cursor:pointer;"><img src="<?php echo $this->_var['value']['goods_attr_thumb']; ?>" width=40 height=40 title="<?php echo $this->_var['value']['label']; ?>" alt="<?php echo $this->_var['value']['label']; ?>" /></div>
                          <label class="spec-name"><?php echo $this->_var['value']['label']; ?></label>
                          <?php else: ?>
                          <div class="value-label"><?php echo $this->_var['value']['label']; ?></div>
                          <?php endif; ?>
                          <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>"  />
                          </a> 
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                        </div>
                      </ul>
                      <div class="clear"></div>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                       
                      <?php else: ?>
                      <select name="spec_<?php echo $this->_var['spec_key']; ?>">
                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      </select>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?> 
                      <?php else: ?> 
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                        <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                        <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                      <br />
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?> 
                    </div>
                  </li>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                   
                  <script type="text/javascript">
                    var myString=new Array();
                    
                    <?php $_from = $this->_var['prod_exist_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('pkey', 'prod');if (count($_from)):
    foreach ($_from AS $this->_var['pkey'] => $this->_var['prod']):
?>
                    myString[<?php echo $this->_var['pkey']; ?>]="<?php echo $this->_var['prod']; ?>";
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
                  </script> 
                   
                  
                  <li id="choose-amount">
                    <div class="dt">数量：</div>
                    <div class="dd">
                      <div class="wrap-input"> 
                        <script language="javascript" type="text/javascript">  function goods_cut(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  if(Num>1)Num=Num-1;  num_val.value=Num;}  function goods_add(){var num_val=document.getElementById('number');  var new_num=num_val.value;  var Num = parseInt(new_num);  Num=Num+1;  num_val.value=Num;} </script> 
                        <a class="btn-reduce" href="javascript:;" onclick="goods_cut();changePrice();">减少数量</a>
                        <input name="number" type="text" class="text"  id="number" value="1" onblur="changePrice();"/>
                        <a class="btn-add" href="javascript:;" onclick="goods_add();changePrice();">增加数量</a> （库存<font id="shows_number"><?php echo $this->_var['goods']['goods_number']; ?> </font>） </div>
                    </div>
                  </li>
                </ul>
                <div class="buyNub-buy-wrap">
                  <div id="choose-btns" class="buyNub-buy">
                    <input type="hidden" id="pre_sale_id" name="pre_sale_id" value="<?php echo $this->_var['goods']['pre_sale_id']; ?>"/>
                     
                    <?php if ($this->_var['goods']['status'] == 0): ?> 
                    <a href="javascript:;" class="u-buy3 u-buy2">活动尚未开始</a> 
                    <?php elseif ($this->_var['goods']['status'] == 1 && $this->_var['goods']['deposit'] > 0 && $this->_var['goods']['status'] < 2): ?> 
                    <?php if ($this->_var['goods']['goods_number'] > 0): ?> 
                    	<a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" class="u-buy2">立刻支付定金</a> 
                    <?php else: ?> 
                    	<a href="javascript:;" class="u-buy3 u-buy2">商品库存不足</a> 
                    <?php endif; ?> 
                    <?php elseif ($this->_var['goods']['status'] < 2): ?> 
                    <?php if ($this->_var['goods']['goods_number'] > 0): ?> 
                    	<a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" name="on_addToCart" class="u-buy1">立刻付款</a> 
                    <?php else: ?> 
                    	<a href="javascript:;" class="u-buy3 u-buy2">商品库存不足</a> 
                    <?php endif; ?> 
                    <?php elseif ($this->_var['goods']['status'] >= 2): ?> 
                    <a href="javascript:" class="u-buy3 u-buy2">活动已结束</a> 
                    <?php endif; ?> 
                    <script type="text/javascript">
                    function justToBuy(){
                        $("#ECS_FORMBUY").attr("action", "pre_sale.php?act=buy");
                        $("#ECS_FORMBUY").submit();
                    }
                </script> 
                  </div>
                </div>
          </form>
      </div>
      <div id="supp_info"> 
        <?php if ($this->_var['goods']['supplier_id']): ?> 
        <?php echo $this->fetch('library/ghs_info.lbi'); ?> 
        <?php else: ?> 
        <?php echo $this->fetch('library/ziying_info.lbi'); ?> 
        <?php endif; ?> 
      </div>
  </div>
  <div id="pre-sale-process">
      <p class="title">预售全过程：</p>
      <ul class="sale-process">
        <?php if ($this->_var['goods']['deposit'] != 0): ?>
        <li class="step1 li-inline">
        	<i></i>
        	<ul class="step-intro">
          		<li class="step-name">
                	付定金<span id="ps_status_label" class="main-color"> 
                    <?php if ($this->_var['goods']['status'] == 0): ?>(未开始!) </span>
                	</li>
                	<li>
                	<span id="ps_cd_deposit" class="J_step1Time"></span>
                    </li>
                  	<?php elseif ($this->_var['goods']['status'] == 1): ?>(预定中!) </span>
                </li>
          		<li><span id="ps_cd_deposit" class="J_step1Time"></span></li>
                      <?php elseif ($this->_var['goods']['status'] == 2): ?></br>
                      活动已结束! 
                      <?php elseif ($this->_var['goods']['status'] == 3): ?></br>
                      活动已成功结束! 
                      <?php elseif ($this->_var['goods']['status'] == 4): ?></br>
                      活动失败了! 
                      <?php endif; ?>
        	</ul>
        </li>
        <script type="text/javascript">
       $().ready(function(){
        if($("#ps_cd_deposit").size() > 0){
          countdown.setLabels(
               '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
               '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
               '',//秒连接符
               '',//其他时间连接符
               '活动结束',
               function(n){ return n.toString()
            });
                var endDate = new Date(<?php echo $this->_var['goods']['local_end_date']; ?>);
                var timerId = countdown(function(ts) {
              $("#ps_cd_deposit").html("剩余：" + ts.toString());
              if(ts == "活动结束"){
                window.clearInterval(timerId);
                $("#ps_cd_deposit").html("");
                $("#ps_status_label").html("活动已结束");
              }
            }, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
        }
         });
      </script>
        <li class="tm-mid-x li-inline "></li>
        <?php endif; ?> 
        <?php if ($this->_var['goods']['deposit'] != 0): ?>
        <li class="step2 li-inline"> <i></i>
          <ul class="step-intro">
            <li class="step-name">付尾款</li>
            <li class="J_step2Time"><?php echo $this->_var['goods']['formated_retainage_start']; ?> - <?php echo $this->_var['goods']['formated_retainage_end']; ?></li>
            <li>实际时间可能提前或延后2小时</li>
          </ul>
        </li>
        <?php else: ?>
        <li class="step2 li-inline"> <i></i>
          <ul class="step-intro">
            <li class="step-name">付全款</li>
            <li class="J_step2Time"><?php echo $this->_var['goods']['formated_start_date']; ?> - <?php echo $this->_var['goods']['formated_end_date']; ?></li>
            <li>实际时间可能提前或延后2小时</li>
          </ul>
        </li>
        <?php endif; ?>
        <li class="tm-mid-x li-inline"></li>
        <li class="step3 li-inline"> <i></i>
          <ul class="step-intro">
            <li class="step-name">组织生产</li>
            <li class="J_step3Time"></li>
          </ul>
        </li>
        <li class="tm-mid-x li-inline "></li>
        <li class="step4 li-inline"> <i></i>
          <ul class="step-intro">
            <li class="step-name">发货</li>
            <li class="J_step4Time"><?php echo $this->_var['goods']['deliver_goods']; ?></li>
          </ul>
        </li>
      </ul>
    </div>
  <?php echo $this->fetch('library/goods_best.lbi'); ?>
  <div class="left-con">
    	<?php echo $this->fetch('library/goods_related_category.lbi'); ?>
        <?php echo $this->fetch('library/goods_similar_brand.lbi'); ?>
        <?php echo $this->fetch('library/goods_new.lbi'); ?>
        <?php echo $this->fetch('library/goods_related.lbi'); ?> 
		<?php echo $this->fetch('library/goods_fittings.lbi'); ?> 
		<?php echo $this->fetch('library/bought_goods.lbi'); ?>
  </div>  
  <div class="right-con">
  	  <?php echo $this->fetch('library/goods_package_ecshop68.lbi'); ?>
      <div id="wrapper">
        <div class="mt" id="main-nav-holder">
          <ul class="tab" id="nav">
            <li class="boldtit-list h-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_canshu">规格参数</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_jieshao" >商品介绍</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_pinglun" >商品评价(<?php echo $this->_var['review_count']; ?>)</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_shouhou" >售后保障</a></li>
          </ul>
          <div class="goods-ce-right"> 
             
            <?php if ($this->_var['goods']['status'] == 0): ?> 
            <a href="javascript:" class="right-add">活动尚未开始</a> 
            <?php elseif ($this->_var['goods']['status'] == 1 && $this->_var['goods']['deposit'] > 0 && $this->_var['goods']['status'] < 2): ?> 
            <?php if (goods.goods_number > 0): ?> <a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" class="right-add">立刻支付定金</a> <?php endif; ?> 
            <?php elseif ($this->_var['goods']['status'] < 2): ?> 
            <?php if (goods.goods_number > 0): ?> <a href="javascript:;" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>, 0, 1, 'pre_sale', '<?php echo $this->_var['goods']['pre_sale_id']; ?>')" name="on_addToCart" class="right-add">立刻付款</a> <?php endif; ?> 
            <?php elseif ($this->_var['goods']['status'] >= 2): ?> 
            <a href="javascript:" class="right-add right-add-end">活动已结束</a> 
            <?php endif; ?>
            <div class="ce-right">
              <ul class="abs-ul">
                <li class="abs-active"><i></i><span>规格参数</span></li>
                <li><i></i><span>产品介绍</span></li>
                <li><i></i><span>商品评价</span></li>
                <li><i></i><span>包装清单</span></li>
                <li><i></i><span>售后服务</span></li>
                <li><i></i><span>常见问题</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="main_widget_1">
          <div class="mc" id="os_canshu">
            <ul class="detail-list">
              <li>商品名称：<?php echo $this->_var['goods']['goods_style_name']; ?></li>
              <li>商品编号：<?php echo $this->_var['goods']['goods_sn']; ?></li>
              <li>品牌：<a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
              <li>上架时间：<?php echo $this->_var['goods']['add_time']; ?></li>
              <li>商品毛重：<?php echo $this->_var['goods']['goods_weight']; ?></li>
              <li>库存： 
                <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                <?php echo $this->_var['lang']['stock_up']; ?> 
                <?php else: ?> 
                <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> 
                <?php endif; ?> 
              </li>
              <?php if ($this->_var['properties']): ?> 
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <li ><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?>
            </ul>
          </div>
          <div class="mc" id="os_jieshao">
            <div class="blank20"></div>
            <div class="detail-content"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
          </div>
          <div class="mc" id="os_pinglun">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/my_comments.lbi'); ?> </div>
          <div class="mc" id="os_advantage">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/packing_list.lbi'); ?> </div>
          <div class="mc" id="os_shouhou">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/pre_baozhang.lbi'); ?> </div>
          <div class="mc" id="os_changjian">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/pre_common_problem.lbi'); ?> </div>
        </div>
      </div>
      <script type="text/javascript">
	  	$(".ce-right").height($("#main_widget_1").height());
		var obj11 = document.getElementById("main-nav-holder");
		var top11 = getTop(obj11);
		var isIE6 = /msie 6/i.test(navigator.userAgent);
		function getTop(e){
			var offset = e.offsetTop;
			if(e.offsetParent != null) offset += getTop(e.offsetParent);
			return offset;
		}
	  </script> 
    </div>
     
</div>
<?php echo $this->fetch('library/right_sidebar.lbi'); ?>
<div class="site-footer">
    <div class="footer-related">
  		<?php echo $this->fetch('library/help.lbi'); ?>
  		<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
<script type="text/javascript">
<?php if (! $_SESSION['user_id'] > 0): ?>
$('.goods-col').click(function(){
	$('.pop-login,.pop-mask').show();	
})
<?php endif; ?>	
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

var goodsId = <?php echo $this->_var['goods']['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  //changePrice();
  changePriceAll();
  fixpng();
  ShowMyComments(<?php echo $this->_var['goods']['goods_id']; ?>,0,1);
  try {onload_leftTime(now_time);}
  catch (e) {}
}


/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty + '&pre_sale_id=<?php echo $this->_var['goods']['pre_sale_id']; ?>', changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    var qty = res.qty;
    
    if(qty != undefined && qty != null && qty >= 0)
    {
    	document.forms['ECS_FORMBUY'].elements['number'].value = qty;
    }
    
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT')){
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
      var price = new String(res.result).replace(/[^0-9\.]/ig,"");
      $("#weikuan").html(parseFloat(price) - parseInt($("#dingjin").html()));
    }
    if(document.getElementById('shows_number')){
	document.getElementById('shows_number').innerHTML = res.attr_num;
    }
    if(document.getElementById('mark_price')){
	document.getElementById('mark_price').innerHTML = res.result1;
    }
  }
}

/**
* 获取商品范围价格
*/
function changePriceAll()
{
	var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
	var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
	Ajax.call('goods.php', 'act=allprice&id=' + goodsId + '&attr=' + attr + '&number=1' + '&pre_sale_id=<?php echo $this->_var['goods']['pre_sale_id']; ?>', changePriceResponse, 'GET', 'JSON');
}



</script>
<script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js" type="text/javascript"></script>
<script type="text/javascript">
Ajax.call('goods.php', 'act=get_pickup_info&province='+remote_ip_info.province+'&city='+remote_ip_info.city+'&district='+remote_ip_info.district,
		function(res){
			if(res.error == 0) {
				var result = '<ul>';
				if (res.result)
				{
					for(var i=0; i<res.result.length; i++)
					{
						result += '<li>店名：'+res.result[i].shop_name+'<br>联系人：'+res.result[i].contact+'&nbsp;&nbsp;联系方式：'+res.result[i].phone + '<br>地址：'+res.result[i].address+'</li>';
					}
					result += '</ul>';
				}
				result = "<div style='padding:10px 0;text-align:center;'>请选择区县</div>";
				document.getElementById('pickup_point_list').innerHTML = result;
				document.getElementById('province').innerHTML = res.city_info.province;
				document.getElementById('province').onclick = function(){
					get_area_list(<?php echo $this->_var['shop_country']; ?>, '');
				}
				document.getElementById('city').innerHTML = res.city_info.city;
				document.getElementById('city').onclick = function(){
					get_area_list(res.city_info.province_id, res.city_info.province);
				}
				document.getElementById('area_label').innerHTML = res.city_info.province + '&nbsp;' + res.city_info.city;
				get_area_list(res.city_info.city_id, res.city_info.city);
			}
		}, 'GET', 'JSON');
	function show_list()
	{
		document.getElementById('pickup_point').style.borderBottom = "1px solid #fff";
		document.getElementById('pickup_point_list').style.display = "block";
	}
	function hide_list()
	{
		document.getElementById('pickup_point').style.borderBottom = "1px solid #ccc";
		document.getElementById('pickup_point_list').style.display = "none";
	}
	function get_area_list(parent_id, name)
	{
		Ajax.call('goods.php', 'act=get_area_list&parent_id='+parent_id, function(res) {
			var result = '';
			for(var i=0; i<res.length; i++)
			{
				result += '<li';
				if(res[i].region_name.length>5)
					result += ' style="widht:170px;"';
				result += '><a href="javascript:void(0)" ';
				if(res[i].region_type == 3)
				{
					result += 'onclick="get_pickup_point_list('+res[i].region_id+', this)">';
				}
				else
				{
					result += 'onclick="get_area_list('+res[i].region_id+', \''+res[i].region_name+'\')">';
				}
				result+=res[i].region_name+'</a></li>';
			}
			result += '';
			document.getElementById('area_list').innerHTML = result;

			switch(res[0].region_type)
			{
				case '1':
					document.getElementById('province').onclick = function(){get_area_list(parent_id, name);};
					document.getElementById('city').innerHTML = '市';
					document.getElementById('district').innerHTML = '区';
					switch_hover('province');
					break;
				case '2':
					document.getElementById('city').onclick = function(){get_area_list(parent_id, name);};
					document.getElementById('province').innerHTML = name;
					document.getElementById('city').innerHTML = '市';
					document.getElementById('district').innerHTML = '区';
					switch_hover('city');
					break;
				case '3':
					document.getElementById('city').innerHTML = name;
					document.getElementById('district').innerHTML = '区';
					switch_hover('district');
					break;
			}
			hide_list();
			//show_area();
		}, 'GET', 'JSON');
	}

	function switch_hover(sel)
	{
		if(sel == 'province')
		{
			document.getElementById('city').className = '';
			document.getElementById('district').className = '';
			document.getElementById('province').className = 'hover';
		}
		else if(sel == 'city')
		{
			document.getElementById('city').className = 'hover';
			document.getElementById('district').className = '';
			document.getElementById('province').className = '';
		}
		else
		{
			document.getElementById('city').className = '';
			document.getElementById('district').className = 'hover';
			document.getElementById('province').className = '';
		}
	}

	function get_pickup_point_list(region_id, obj)
	{
		var name = obj.innerHTML;
		document.getElementById('district').innerHTML = name;
		var label = document.getElementById('province').innerHTML + '&nbsp;' +
					document.getElementById('city').innerHTML + '&nbsp;' +
					document.getElementById('district').innerHTML;
		document.getElementById('area_label').innerHTML = label;
		
		Ajax.call('goods.php', 'act=get_pickup_point_list&district_id='+region_id, function(res) {
			var result = '<ul>';
				if(res.length > 0)
				{
					for(var i=0; i<res.length; i++)
					{
						result += '<li>'+res[i].shop_name+'&nbsp;&nbsp;地址：'+res[i].address+
									'<br>联系人：'+res[i].contact+'&nbsp;&nbsp;联系方式：'+res[i].phone + '</li>';
					}
					result += '</ul>';
					document.getElementById('pickup_point_list').innerHTML = result;
				}
				else
					document.getElementById('pickup_point_list').innerHTML = '<div style="padding:10px 0;text-align:center;">该地区尚未开放自提点</div>';

				hide_area();
				show_list();
		}, 'GET', 'JSON');
	}
	function show_area()
	{
		document.getElementById('area_label').style.borderBottom = "1px #fff solid";
		document.getElementById('area_list_wrap').style.display = "block";
	}
	function hide_area()
	{
		document.getElementById('area_label').style.borderBottom = "1px solid #ccc";
		document.getElementById('area_list_wrap').style.display = "none";
	}
</script>

</html>
