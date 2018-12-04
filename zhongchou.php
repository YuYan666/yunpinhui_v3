<?php

/**
 * ECSHOP 众筹前台文件
 * ============================================================================
 * 版权所有 2005-2011 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: auction.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require(dirname(__FILE__) . '/includes/lib_comment.php');
/*------------------------------------------------------ */
//-- act 操作项的初始化
/*------------------------------------------------------ */
if(empty($_REQUEST['act']))
{
//    print_r($_REQUEST);exit();
    // 没有ID则跳转到众筹商品列表页
    if(empty($_REQUEST['id']))
    {
        $_REQUEST['act'] = 'list';
    }
    // 有ID则跳转到众筹商品详情页
    else
    {
        $_REQUEST['act'] = 'view';
    }
}

/*------------------------------------------------------ */
//-- 众筹活动列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $smarty = $GLOBALS['smarty'];

    $_SESSION['flow_type'] = CART_ZHONGCHOU_GOODS;
    $_SESSION['flow_order']['extension_code'] = 'zhongchou';
    /* 取得众筹活动总数 */
    $count = pre_sale_count();

    if($count > 0)
    {
        /* 取得每页记录数 */
        $size = isset($_CFG['page_size']) && intval($_CFG['page_size']) > 0 ? intval($_CFG['page_size']) : 12;
        
        /* 计算总页数 */
        $page_count = ceil($count / $size);
        
        /* 取得当前页 */
        $page = isset($_REQUEST['page']) && intval($_REQUEST['page']) > 0 ? intval($_REQUEST['page']) : 1;
        $page = $page > $page_count ? $page_count : $page;
        
        /* 缓存id：语言 - 每页记录数 - 当前页 */
        $cache_id = $_CFG['lang'] . '-' . $size . '-' . $page;
        $cache_id = sprintf('%X', crc32($cache_id));
    }
    else
    {
        /* 缓存id：语言 */
        $cache_id = $_CFG['lang'];
        $cache_id = sprintf('%X', crc32($cache_id));
    }
    
    assign_template();
    clear_cache_files();
    /* 如果没有缓存，生成缓存 */
    if(! $smarty->is_cached('pre_sell_list.dwt', $cache_id) || true)
    {
        $ps_list ='';
        if($count > 0)
        {
            /* 取得当前页的众筹活动 */
            $ps_list = pre_sale_list($size, $page);
            
             foreach ($ps_list as $k => $v) {
                /* 众筹进度 青 2017-11-9 11:34:14 */
                $ps_list[$k]['bilv'] = round($v['now_price'] / $v['sell_price'] * 100);
                //店铺名称
                $sql = "SELECT supplier_id FROM ".$GLOBALS['ecs']->table('goods')." WHERE goods_id = ".$v['goods_id'];
                $supplier_id = $GLOBALS['db']->getOne($sql);
                if ($supplier_id > 0) {
                    $sql = "SELECT supplier_name FROM ".$GLOBALS['ecs']->table('supplier')." WHERE supplier_id = ".$supplier_id;
                    $ps_list[$k]['supplier_name'] = $GLOBALS['db']->getOne($sql);
                    if (empty($ps_list[$k]['supplier_name'])) {
                        $ps_list[$k]['supplier_name'] = "商家店铺";
                    }
                }else{
                    $ps_list[$k]['supplier_name'] = "平台自营";
                }

                /* 众筹商品的分类 青 2017-11-9 14:26:54 */
                $sql = "SELECT cat_id FROM ".$GLOBALS['ecs']->table('goods')." WHERE goods_id = ".$v['goods_id'];
                $cat_id = $GLOBALS['db']->getOne($sql);
                $sql = "SELECT cat_name FROM ".$GLOBALS['ecs']->table('category')." WHERE cat_id = ".$cat_id;
                $cat_name = $GLOBALS['db']->getOne($sql);
                if ($cat_name) {
                    $category[] = $cat_name;
                }
            }

            //排序-即将结束
            $ps_list_end_time = $ps_list;
            $sort = array(
                'direction' => 'SORT_ASC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'end_time',       //排序字段
            );
            $arrSort = array();
            foreach($ps_list_end_time AS $uniqid => $row){
                foreach($row AS $key=>$value){
                    $arrSort[$key][$uniqid] = $value;
                }
            }
             if($sort['direction']){
                 array_multisort($arrSort[$sort['field']], constant($sort['direction']), $ps_list_end_time);
             }

             //排序-金额最多
             $ps_list_sell_price = $ps_list;
            $sort = array(
                'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'sell_price',       //排序字段
            );
            $arrSort = array();
            foreach($ps_list_sell_price AS $uniqid => $row){
                foreach($row AS $key=>$value){
                    $arrSort[$key][$uniqid] = $value;
                }
            }
             if($sort['direction']){
                 array_multisort($arrSort[$sort['field']], constant($sort['direction']), $ps_list_sell_price);
             }

             //排序-人数最多
             $ps_list_order_all = $ps_list;
            $sort = array(
                'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'order_all',       //排序字段
            );
            $arrSort = array();
            foreach($ps_list_order_all AS $uniqid => $row){
                foreach($row AS $key=>$value){
                    $arrSort[$key][$uniqid] = $value;
                }
            }
             if($sort['direction']){
                 array_multisort($arrSort[$sort['field']], constant($sort['direction']), $ps_list_order_all);
             }

             //排序-精彩预告
             $ps_list_start_time = $ps_list;
            $sort = array(
                'direction' => 'SORT_DESC', //排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
                'field'     => 'start_time',       //排序字段
            );
            $arrSort = array();
            foreach($ps_list_start_time AS $uniqid => $row){
                foreach($row AS $key=>$value){
                    $arrSort[$key][$uniqid] = $value;
                }
            }
             if($sort['direction']){
                 array_multisort($arrSort[$sort['field']], constant($sort['direction']), $ps_list_start_time);
             }

            $smarty->assign('ps_list', $ps_list);
            $smarty->assign('ps_list_end_time', $ps_list_end_time);
            $smarty->assign('ps_list_sell_price', $ps_list_sell_price);
            $smarty->assign('ps_list_order_all', $ps_list_order_all);
            $smarty->assign('ps_list_start_time', $ps_list_start_time);
            $smarty->assign('category', $category);
            
            /* 设置分页链接 */
            $pager = get_pager('pre_sell.php', array(
                'act' => 'list'
            ), $count, $page, $size);
            $smarty->assign('pager', $pager);
        }


        /* 模板赋值 */
        $smarty->assign('cfg', $GLOBALS['_CFG']);
        assign_template();
        $position = assign_ur_here('pre_sell');
        $smarty->assign('page_title', $position['title']); // 页面标题
        $smarty->assign('ur_here', $position['ur_here']); // 当前位置
        $smarty->assign('categories', get_categories_tree()); // 分类树
        $smarty->assign('helps', get_shop_help()); // 网店帮助
        $smarty->assign('top_goods', get_top10()); // 销售排行
        $smarty->assign('promotion_info', get_promotion_info());
        $smarty->assign('feed_url', ($_CFG['rewrite'] == 1) ? "feed-typepre_sale.xml" : 'feed.php?type=pre_sale'); // RSS// URL

        assign_dynamic('pre_sell_list');
    }


    //判断 弹框登陆 验证码是否显示
    $captcha = intval($_CFG['captcha']);
    if(($captcha & CAPTCHA_LOGIN) && (! ($captcha & CAPTCHA_LOGIN_FAIL) || (($captcha & CAPTCHA_LOGIN_FAIL) && $_SESSION['login_fail'] > 2)) && gd_version() > 0)
    {
        $GLOBALS['smarty']->assign('enabled_captcha', 1);
        $GLOBALS['smarty']->assign('rand', mt_rand());
    }
    /* 显示模板 */
    $smarty->display('crowdfunding.dwt', $cache_id);
}

/*------------------------------------------------------ */
//-- 众筹商品 --> 商品详情
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'view')
{

    $smarty = $GLOBALS['smarty'];
    $db = $GLOBALS['db'];
    $ecs = $GLOBALS['ecs'];


    /* 取得参数：众筹活动id */
    $pre_sale_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;


    if($pre_sale_id <= 0)
    {
        ecs_header("Location: pre_sell.php\n");
        exit();
    }

    /* 取得众筹活动信息 */
    $pre_sale = pre_sell_info($pre_sale_id);  
    $pre_sale['days'] = (strtotime($pre_sale['end_time']) - strtotime($pre_sale['start_time'])) /3600/24;//众筹剩余天数
    if ($pre_sale['now_price'] >= $pre_sale['sell_price']) {
        // show_message("该众筹已结束");
    }
    //众筹剩余份额
    $arr_num = count($pre_sale['price_ladder']);
    for ($i=0; $i < $arr_num; $i++) { 
        $a = $pre_sale['price_ladder'][$i]['amount'];
        $pre_sale['price_ladder'][$i]['shengyu'] = $pre_sale['price_ladder'][$i]['limit_num'] - $pre_sale['orders_num'][$a];
    }
// print_r($pre_sale['price_ladder']); exit;

    if(empty($pre_sale))
    {
        ecs_header("Location: pre_sell.php\n");
        exit();
    }

    /* 缓存id：语言，众筹活动id，状态，（如果是进行中）当前数量和是否登录 */
    $cache_id = $_CFG['lang'] . '-' . $pre_sale_id . '-' . $pre_sale['status'];
    // 活动进行中
    if($pre_sale['status'] == PSS_UNDER_WAY)
    {
        $cache_id = $cache_id . '-' . $pre_sale['valid_goods'] . '-' . intval($_SESSION['user_id'] > 0);
    }
    $cache_id = sprintf('%X', crc32($cache_id));
    
    /* 如果没有缓存，生成缓存 */
    if(! $smarty->is_cached('pre_sell_goods.dwt', $cache_id) || true)
    {
        $pre_sale['gmt_end_date'] = $pre_sale['end_date'];
        $now_time = date("Y-m-d H:i:s",time());
        foreach ($pre_sale['price_ladder'] as $k => $v) {
            if ($v['is_choujiang'] == 1) {
                if ($pre_sale['end_time'] >= $now_time) {
                    $pre_sale['price_ladder'][$k]['is_choujiang'] = "等待抽奖";
                }else{
                    $pre_sale['price_ladder'][$k]['is_choujiang'] = "抽奖结束";
                }
            }
        }

        $end_times = strtotime($pre_sale['end_time']);
        $now_times = strtotime($now_time);
        $days = (($now_times - $end_times)/86400);
        if ($days < 0) {
            $days = ceil($days)*(-1);
        }else{
            $days = 0;
        }
        $pre_sale['days'] = $days;
        $smarty->assign('pre_sale', $pre_sale);
        
        /* 取得众筹商品信息 */
        $goods_id = $pre_sale['goods_id'];
        $goods = get_goods_info($goods_id);
        if(empty($goods))
        {
            ecs_header("Location: pre_sell.php\n");
            exit();
        }
        $goods['url'] = build_uri('goods', array(
            'gid' => $goods_id
        ), $goods['goods_name']);
        $goods = array_merge($goods, $pre_sale);
        
        $gift_integral = $pre_sale['gift_integral'];
        
        $goods['give_integral'] = $pre_sale['gift_integral'];
        
        $sql = "SELECT supplier_id FROM ".$GLOBALS['ecs']->table('goods')." WHERE goods_id = ".$pre_sale['goods_id'];
        $supplier_id = $GLOBALS['db']->getOne($sql);
        $smarty->assign('best_goods',          get_recommend_goods('best',$supplier_id)); 
        $smarty->assign('url', $_SERVER["REQUEST_URI"]);
        $smarty->assign('volume_price', $goods_volume_price);
        $smarty->assign('goods_id', $goods['goods_id']);
        $smarty->assign('promote_end_time', $goods['gmt_end_time']);
        $goods_id = $goods['goods_id'];
        $properties = get_goods_properties($goods['goods_id']);  // 获得商品的规格和属性

        $smarty->assign('properties',          $properties['pro']);                              // 商品属性
        $count1 = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('comment') . " where comment_type=0 and id_value ='$goods_id' and status=1");
        $smarty->assign('review_count', $count1); // 评论数
                                                  
        // 评价晒单 增加 by www.we10.cn
        $rank_num['rank_a'] = $GLOBALS['db']->getOne("SELECT COUNT(*) AS num FROM " . $GLOBALS['ecs']->table('comment') . " WHERE id_value = '$goods_id' AND status = 1 AND comment_rank in (5,4)");
        $rank_num['rank_b'] = $GLOBALS['db']->getOne("SELECT COUNT(*) AS num FROM " . $GLOBALS['ecs']->table('comment') . " WHERE id_value = '$goods_id' AND status = 1 AND comment_rank in (3,2)");
        $rank_num['rank_c'] = $GLOBALS['db']->getOne("SELECT COUNT(*) AS num FROM " . $GLOBALS['ecs']->table('comment') . " WHERE id_value = '$goods_id' AND status = 1 AND comment_rank = 1");
        $rank_num['rank_total'] = $rank_num['rank_a'] + $rank_num['rank_b'] + $rank_num['rank_c'];
        $rank_num['rank_pa'] = ($rank_num['rank_a'] > 0) ? round(($rank_num['rank_a'] / $rank_num['rank_total']) * 100, 1) : 0;
        $rank_num['rank_pb'] = ($rank_num['rank_b'] > 0) ? round(($rank_num['rank_b'] / $rank_num['rank_total']) * 100, 1) : 0;
        $rank_num['rank_pc'] = ($rank_num['rank_c'] > 0) ? round(($rank_num['rank_c'] / $rank_num['rank_total']) * 100, 1) : 0;
        $rank_num['shaidan_num'] = $GLOBALS['db']->getOne("SELECT COUNT(*) AS num FROM " . $GLOBALS['ecs']->table('shaidan') . " WHERE goods_id = '$goods_id' AND status = 1");
        $smarty->assign('rank_num', $rank_num);

        $res = $GLOBALS['db']->getAll("SELECT * FROM " . $GLOBALS['ecs']->table('goods_tag') . " WHERE goods_id = '$goods_id' AND state = 1");
        foreach($res as $v)
        {
            $v['tag_num'] = $GLOBALS['db']->getOne("SELECT COUNT(*) AS num FROM " . $GLOBALS['ecs']->table('comment') . " WHERE id_value = '$goods_id' AND status = 1 AND FIND_IN_SET($v[tag_id],comment_tag)");
            $tag_arr[] = $v;
        }
        $tag_arr = array_sort($tag_arr,'tag_num','desc');
        if ($tag_arr)
        {
            foreach ($tag_arr as $key => $val)
            {
                if ($_CFG['tag_show_num'] > 0)
                {
                    if (($key + 1) <= $_CFG['tag_show_num'])
                    {
                        $comment_tags[] = $val; 
                    }
                }
                else
                {
                    $comment_tags[] = $val; 
                }
            }   
        }
        $smarty->assign('comment_tags',$comment_tags);
        /* meta */
        $smarty->assign('keywords', htmlspecialchars($goods['keywords']));
        $smarty->assign('description', htmlspecialchars($goods['goods_brief']));
        
        $goods['goods_style_name'] = add_style($goods['goods_name'], $goods['goods_name_style']);

        //处理图片路径问题
        $goods['goods_thumb'] = get_image_path($goods['goods_id'],$goods['goods_thumb'], true);
        $goods['goods_img'] = get_image_path($goods['goods_id'],$goods['goods_img'], true);
        $smarty->assign('goods', $goods);
        $smarty->assign('goods_id', $goods['goods_id']);

        $smarty->assign('pictures', get_goods_gallery_attr_2($goods_id, $goods_attr_id)); // 商品相册
        
        /* 代码增加_start By www.ecshop68.com */
        $sql_attr = "SELECT a.attr_id, ga.goods_attr_id FROM " . $GLOBALS['ecs']->table('attribute') . " AS a left join " . $GLOBALS['ecs']->table('goods_attr') . "  AS ga on a.attr_id=ga.attr_id  WHERE a.is_attr_gallery=1 and ga.goods_id='" . $goods_id . "' order by ga.goods_attr_id ";
        $goods_attr = $GLOBALS['db']->getRow($sql_attr);
        if($goods_attr)
        {
            $goods_attr_id = $goods_attr['goods_attr_id'];
            $smarty->assign('attr_id', $goods_attr['attr_id']);
        }
        else
        {
            $smarty->assign('attr_id', 0);
        }
        
        $prod_exist_arr = array();
        $sql_prod = "select goods_attr from " . $GLOBALS['ecs']->table('products') . " where product_number>0 and goods_id='$goods_id' order by goods_attr";
        $res_prod = $GLOBALS['db']->query($sql_prod);
        while($row_prod = $GLOBALS['db']->fetchRow($res_prod))
        {
            $prod_exist_arr[] = "|" . $row_prod['goods_attr'] . "|";
        }
        $smarty->assign('prod_exist_arr', $prod_exist_arr);
        
        // 模板赋值
        $smarty->assign('cfg', $GLOBALS['_CFG']);
        assign_template();
        
        $position = assign_ur_here(0, $goods['goods_name']);
        $smarty->assign('page_title', $position['title']); // 页面标题
        $smarty->assign('categories', get_categories_tree()); // 分类树
        $smarty->assign('ur_here', $position['ur_here']); // 当前位置

        $smarty->assign('helps', get_shop_help()); // 网店帮助
        $smarty->assign('top_goods', get_top10()); // 销售排行
        $smarty->assign('promotion_info', get_promotion_info());
        $smarty->assign('lang',             $_LANG);
        $smarty->assign('feed_url', ($_CFG['rewrite'] == 1) ? "feed-typepre_sale.xml" : 'feed.php?type=pre_sale'); // RSS// URL

        /* 代码增加_start By www.we10.cn */
        $goods['supplier_name'] = "网站自营";
        if($goods['supplier_id'] > 0)
        {
            $sql_supplier = "SELECT s.supplier_id,s.supplier_name,s.add_time,sr.rank_name FROM " . $ecs->table("supplier") . " as s left join " . $ecs->table("supplier_rank") . " as sr ON s.rank_id=sr.rank_id WHERE s.supplier_id=" . $goods[supplier_id] . " AND s.status=1";
            $shopuserinfo = $db->getRow($sql_supplier);
            $goods['supplier_name'] = $shopuserinfo['supplier_name'];
            get_dianpu_baseinfo($goods['supplier_id'], $shopuserinfo);
        }
        
        assign_dynamic('pre_sell_goods');
    }

    
    $smarty->assign('now_time', gmtime()); // 当前系统时间
    $smarty->display('detail.html', $cache_id);
}

/*------------------------------------------------------ */
//-- 众筹商品 --> 出价
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'bid')
{
    include_once(ROOT_PATH . 'includes/lib_order.php');

    /* 取得参数：众筹活动id */
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if ($id <= 0)
    {
        ecs_header("Location: ./\n");
        exit;
    }

    /* 取得众筹活动信息 */
    $auction = auction_info($id);
    if (empty($auction))
    {
        ecs_header("Location: ./\n");
        exit;
    }

    /* 活动是否正在进行 */
    if ($auction['status_no'] != UNDER_WAY)
    {
        show_message($_LANG['au_not_under_way'], '', '', 'error');
    }

    /* 是否登录 */
    $user_id = $_SESSION['user_id'];
    if ($user_id <= 0)
    {
        show_message($_LANG['au_bid_after_login']);
    }
    $user = user_info($user_id);

    /* 取得出价 */
    $bid_price = isset($_POST['price']) ? round(floatval($_POST['price']), 2) : 0;
    if ($bid_price <= 0)
    {
        show_message($_LANG['au_bid_price_error'], '', '', 'error');
    }

    /* 如果有一口价且出价大于等于一口价，则按一口价算 */
    $is_ok = false; // 出价是否ok
    if ($auction['end_price'] > 0)
    {
        if ($bid_price >= $auction['end_price'])
        {
            $bid_price = $auction['end_price'];
            $is_ok = true;
        }
    }

    /* 出价是否有效：区分第一次和非第一次 */
    if (!$is_ok)
    {
        if ($auction['bid_user_count'] == 0)
        {
            /* 第一次要大于等于起拍价 */
            $min_price = $auction['start_price'];
        }
        else
        {
            /* 非第一次出价要大于等于最高价加上加价幅度，但不能超过一口价 */
            $min_price = $auction['last_bid']['bid_price'] + $auction['amplitude'];
            if ($auction['end_price'] > 0)
            {
                $min_price = min($min_price, $auction['end_price']);
            }
        }

        if ($bid_price < $min_price)
        {
            show_message(sprintf($_LANG['au_your_lowest_price'], price_format($min_price, false)), '', '', 'error');
        }
    }

    /* 检查联系两次众筹人是否相同 */
    if ($auction['last_bid']['bid_user'] == $user_id && $bid_price != $auction['end_price'])
    {
        show_message($_LANG['au_bid_repeat_user'], '', '', 'error');
    }

    /* 是否需要保证金 */
    if ($auction['deposit'] > 0)
    {
        /* 可用资金够吗 */
        if ($user['user_money'] < $auction['deposit'])
        {
            show_message($_LANG['au_user_money_short'], '', '', 'error');
        }

        /* 如果不是第一个出价，解冻上一个用户的保证金 */
        if ($auction['bid_user_count'] > 0)
        {
            log_account_change($auction['last_bid']['bid_user'], $auction['deposit'], (-1) * $auction['deposit'],
                0, 0, sprintf($_LANG['au_unfreeze_deposit'], $auction['act_name']));
        }

        /* 冻结当前用户的保证金 */
        log_account_change($user_id, (-1) * $auction['deposit'], $auction['deposit'],
            0, 0, sprintf($_LANG['au_freeze_deposit'], $auction['act_name']));
    }

    /* 插入出价记录 */
    $auction_log = array(
        'act_id'    => $id,
        'bid_user'  => $user_id,
        'bid_price' => $bid_price,
        'bid_time'  => gmtime()
    );
    $db->autoExecute($ecs->table('auction_log'), $auction_log, 'INSERT');
	$act_count = $_POST['act_count'] + 1;
	$db->query("UPDATE " . $ecs->table('goods_activity') . " SET act_count = " . $act_count . " WHERE act_id = " . $id);

    /* 出价是否等于一口价 */
    if ($bid_price == $auction['end_price'])
    {
        /* 结束众筹活动 */
        $sql = "UPDATE " . $ecs->table('goods_activity') . " SET is_finished = 1 WHERE act_id = '$id' LIMIT 1";
        $db->query($sql);
    }

    /* 跳转到活动详情页 */
    ecs_header("Location: auction.php?act=view&id=$id\n");
    exit;
}

/*------------------------------------------------------ */
//-- 众筹商品 --> 购买
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'buy')
{
    /* 查询：取得参数：众筹活动id */
    $zhongchou_price = isset($_POST['price']) ? intval($_POST['price']) : 0;
    $zhongchou_id = isset($_POST['act_id']) ? intval($_POST['act_id']) : 0;
    $zhongchou_status = isset($_POST['status']) ? intval($_POST['status']) : 0;
    $buy_num = isset($_POST['buy_num']) ? intval($_POST['buy_num']) : 0;
    if ($zhongchou_id <= 0 )
    {
        ecs_header("Location: ./\n");
        exit;
    }
 
//    /* 查询：取得数量 */
//    $number = isset($_POST['number']) ? intval($_POST['number']) : 1;

    /* 查询：取得众筹活动信息 */
    $zhongchou = zhongchou_info($zhongchou_id, $zhongchou_status);
    
    if (empty($zhongchou))
    {
        ecs_header("Location: ./\n");
        exit;
    }

    //判断该价位众筹人数是否满额 青 2017-10-11 10:04:53
    foreach ($zhongchou['price_ladder'] as $k => $v) {
        if ($zhongchou_price == $v['price']) {
            $sql = "SELECT count(id) FROM ".$GLOBALS['ecs']->table('zhongchou_order')." WHERE order_price = ".$v['price'];
            $zhongchou_order_num = $GLOBALS['db']->getOne($sql);
            if ($zhongchou_order_num > $v['limit_num']) {
                show_message("该价位的众筹商品已经满额");
            }
        }
    }
    
     //众筹个数限制
//   if($pt_id ==0  &&  $zhongchou_level!=0){
//          $sql = "select count(*) from ". $GLOBALS['ecs']->table('pintuan') . " where status=0 and act_id=".$zhongchou_id. " and user_id =".$_SESSION['user_id'];
//          $total =$GLOBALS['db']->getOne($sql);
//          if ($total>=$zhongchou['open_limit']  && $zhongchou['open_limit']!=0){
//              $_SESSION['pt_tips']="抱歉！您已经有 ".$total." 个进行中的众筹。 暂时不能继续发起众筹，快快点击左下方\"我的众筹\"把您的众筹分享给好友吧。";
//              ecs_header("Location: zhongchou.php?act=view&act_id=$zhongchou_id\n");
//          }
//   }

    /* 查询：检查众筹活动是否是进行中 */
    if ($zhongchou['status'] != GBS_UNDER_WAY)
    {
        show_message($_LANG['gb_error_status'], '', '', 'error');
    }

    /* 查询：取得众筹商品信息 */
    $goods = goods_info($zhongchou['goods_id']);
    if (empty($goods))
    {
        ecs_header("Location: ./\n");
        exit;
    }

//    /* 查询：判断数量是否足够 */
//    if (($zhongchou['restrict_amount'] > 0 && $number > ($zhongchou['restrict_amount'] - $zhongchou['valid_goods'])) || $number > $goods['goods_number'])
//    {
//        show_message($_LANG['gb_error_goods_lacking'], '', '', 'error');
//    }

    /* 查询：取得规格 */
    $specs = '';
    
    
    
    foreach ($_POST as $key => $value)
    {
        if (strpos($key, 'spec_') !== false)
        {
            $specs .= ',' . intval($value);
        }
    }
    $specs = trim($specs, ',');

    /* 查询：如果商品有规格则取规格商品信息 配件除外 */
    if ($specs)
    {
        $_specs = explode(',', $specs);
        $product_info = get_products_info($goods['goods_id'], $_specs);
    }

    empty($product_info) ? $product_info = array('product_number' => 0, 'product_id' => 0) : '';

    /* 查询：判断指定规格的货品数量是否足够 */
    if ($specs && $number > $product_info['product_number'])
    {
        show_message($_LANG['gb_error_goods_lacking'], '', '', 'error');
    }

    /* 查询：查询规格名称和值，不考虑价格 */
    $attr_list = array();
    $sql = "SELECT a.attr_name, g.attr_value " .
            "FROM " . $ecs->table('goods_attr') . " AS g, " .
                $ecs->table('attribute') . " AS a " .
            "WHERE g.attr_id = a.attr_id " .
            "AND g.goods_attr_id " . db_create_in($specs);
    $res = $db->query($sql);
    while ($row = $db->fetchRow($res))
    {
        $attr_list[] = $row['attr_name'] . ': ' . $row['attr_value'];
    }
    $goods_attr = join(chr(13) . chr(10), $attr_list);

    /* 更新：清空购物车中所有众筹商品 */
    include_once(ROOT_PATH . 'includes/lib_order.php');
    clear_cart(CART_ZHONGCHOU_GOODS);

    /* 更新：加入购物车 */
    foreach ($zhongchou['org_price_ladder'] as $item)
    {   
        if ($_POST['buy_num'] == $item['amount'])
        {
            $cur_price = $item['price'];
        }
    }
    $zhongchou['cur_price'] = $cur_price;
    
//    $price =  $zhongchou_level>1?$zhongchou['cur_price']:$zhongchou['single_buy_price'];
    
    //获取该众筹信息
    $sql = "SELECT * FROM  " . $GLOBALS['ecs']->table('goods_activity').
            "  WHERE  act_id=".$zhongchou_id;

    $get_zcinfo =$GLOBALS['db']->getRow($sql);
    $get_zcinfo['ext_info'] = unserialize($get_zcinfo['ext_info']);
    $get_zcinfo['price_ladder'] = $get_zcinfo['ext_info']['price_ladder'];
//    print_r($get_zcinfo);exit();

//    $goods_price =  (!empty($get_zcinfo['price']))?$get_zcinfo['price']:$price;

//    print_r($goods);exit();
    $cart = array(
        'user_id'        => $_SESSION['user_id'],
        'session_id'     => SESS_ID,
        'goods_id'       => $zhongchou['goods_id'],
        'product_id'     => $product_info['product_id'],
        'goods_sn'       => addslashes($goods['goods_sn']),
        'goods_name'     => $zhongchou['act_name']?$zhongchou['act_name']:addslashes($goods['goods_name']),
        'market_price'   => $goods['market_price'],
        'goods_price'    => $_POST['price'],
        'goods_number'   => $_POST['buy_num'],
        'goods_attr'     => addslashes($goods_attr),
        'goods_attr_id'  => $specs,
        'is_real'        => $goods['is_real'],
        'extension_code' => PRE_SELL_CODE,
        'parent_id'      => 0,
        'rec_type'       => CART_ZHONGCHOU_GOODS,
        'goods_num'      => $_POST['buy_num'],
        'is_gift'        => 0,
        'is_shipping'    => $goods['is_shipping'],
        'fengcheng'      => $goods['fengcheng']);

    $db->autoExecute($ecs->table('cart'), $cart, 'INSERT');
    $_SESSION['sel_cartgoods'] = $db->insert_id();


    //获取用户昵称、头像
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT u.*,w.nickname,w.headimgurl FROM  " . $GLOBALS['ecs']->table('users') . " u ".
            "left join  " . $GLOBALS['ecs']->table('weixin_user') . " w on u.user_id=w.ecuid ".
            "WHERE  u.user_id='$user_id'";
    $getinfo =$GLOBALS['db']->getRow($sql);
    

    /* 更新：记录购物流程类型：众筹 */
    if($_POST['buy_num']>=1){
        $_SESSION['flow_type'] = CART_ZHONGCHOU_GOODS;
        $_SESSION['extension_code'] = 'zhongchou';
        $_SESSION['extension_id'] = $zhongchou_id;
        $_SESSION['zhongchou_status'] =$_POST['num'];
        $_SESSION['zhongchou_price'] =$_POST['price'];
        $_SESSION['zhongchou_nickname'] = $getinfo['nickname']?$getinfo['nickname']:$getinfo['user_name'];
        $_SESSION['zhongchou_headimgurl'] =$getinfo['headimgurl'];
        $_SESSION['zhongchou_time_limit'] =$zhongchou['time_limit'];
        $_SESSION['zhongchou_act_user']=$get_ptinfo['user_id']?$get_ptinfo['user_id']:$_SESSION['user_id'];
        /* 进入收货人页面 */
        ecs_header("Location: ./flow.php?step=checkout\n");
        exit;
    }else{
        /* 进入购物车页面 */
        unset($_SESSION['extension_code']);
        $_SESSION['flow_type'] = CART_ZHONGCHOU_GOODS;
        ecs_header("Location: ./flow.php?step=checkout\n");
        exit;
    }
}

/**
 * 取得众筹活动数量
 * @return  int
 */
function auction_count()
{
    $now = gmtime();
    $sql = "SELECT COUNT(*) " .
            "FROM " . $GLOBALS['ecs']->table('goods_activity') .
            "WHERE act_type = '6' " .
            "AND start_time <= '$now' AND end_time >= '$now' AND is_finished < 2";

    return $GLOBALS['db']->getOne($sql);
}

/**
 * 取得某页的众筹活动
 * @param   int     $size   每页记录数
 * @param   int     $page   当前页
 * @return  array
 */
function pre_sale_list ($size, $page)
{
    /* 取得众筹活动 */
    $ps_list = array();
    $now = gmtime();
    $sql = "SELECT b.*, IFNULL(g.goods_thumb, '') AS goods_thumb, b.act_id AS pre_sale_id, " . "b.start_time AS start_date, b.end_time AS end_date, g.shop_price " . "FROM " . $GLOBALS['ecs']->table('goods_activity') . " AS b " . "LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON b.goods_id = g.goods_id " . "WHERE b.act_type = '" . GAT_PRE_SELL . "' " . " AND b.is_finished < '" . PSS_SUCCEED . "' AND g.is_delete = 0 ORDER BY b.is_finished ASC";
    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);
    while($pre_sale = $GLOBALS['db']->fetchRow($res))
    {
        $ext_info = unserialize($pre_sale['ext_info']);
        $pre_sale = array_merge($pre_sale, $ext_info);
        $stat = pre_sale_stat($pre_sale['act_id'], $ext_info['deposit']);
        $pre_sale = array_merge($pre_sale, $stat);
        
        /* 格式化时间 */
        $pre_sale['formated_start_date'] = local_date($GLOBALS['_CFG']['time_format'], $pre_sale['start_time']);
        $pre_sale['formated_end_date'] = local_date($GLOBALS['_CFG']['time_format'], $pre_sale['end_time']);
        
        // 本地时间，用于倒计时显示，符合JS格式
        $pre_sale['local_end_date'] = local_date('Y, m-1, d, H, i, s', $pre_sale['end_time']);
        $pre_sale['local_start_date'] = local_date('Y, m-1, d, H, i, s', $pre_sale['start_time']);

        
        /* 处理价格阶梯 */
        $price_ladder = $pre_sale['price_ladder'];
        if(! is_array($price_ladder) || empty($price_ladder))
        {
            $price_ladder = array(
                array(
                    'amount' => 0, 'price' => 0
                )
            );
        }
        else
        {
            foreach($price_ladder as $key => $amount_price)
            {
                $price_ladder[$key]['formated_price'] = price_format($amount_price['price']);
                $price_ladder[$key]['num_price'] = $amount_price['amount'] * $pre_sale['initial_price'];
            }
        }
        $pre_sale['price_ladder'] = $price_ladder;
        
        /* 计算当前价 */
        $cur_price = $price_ladder[0]['price']; // 初始化
        $cur_amount = $stat['valid_goods']; // 当前数量
        foreach($price_ladder as $amount_price)
        {
            if($cur_amount >= $amount_price['amount'])
            {
                $cur_price = $amount_price['price'];
            }
            else
            {
                break;
            }
        }
        
        $pre_sale['cur_price'] = $cur_price;
        $pre_sale['formated_cur_price'] = price_format($cur_price, false);
        $pre_sale['formated_shope_price'] = price_format($pre_sale['shope_price'], false);
        
        $status = pre_sale_status($pre_sale);

        //计算结束时间判断是众筹活动是否结束
        $one_day = 60*60*24;
        $surplus_seconds = $pre_sale['end_time'] - $now;
        $surplus_days = ceil($surplus_seconds/$one_day);
        if ($surplus_days < 5 && $surplus_days > 0 ){
            $pre_sale['stop'] = 1;
        }

        $pre_sale['start_time'] = local_date($GLOBALS['_CFG']['date_format'], $pre_sale['start_time']);
        $pre_sale['end_time'] = local_date($GLOBALS['_CFG']['date_format'], $pre_sale['end_time']);
        $pre_sale['cur_status'] = $GLOBALS['_LANG']['pss'][$status];
        $pre_sale['status'] = $status;

        /* 计算订单总量*/
        $sql  = 'SELECT order_id , order_price FROM'.$GLOBALS['ecs']->table('zhongchou_order').'WHERE act_id ='.$pre_sale['pre_sale_id'];
        $order_count = $GLOBALS['db']->getAll($sql);
        $pre_sale['order_all'] = count($order_count);

        /* 根据订单价格计算达成率*/
        $price_count = '';
        foreach ($order_count as $value)
        {
            $price_count += $value['order_price'];

        }
        $pre_sale['now_price'] = $price_count;
        $pre_sale['get_rate']  = ceil(($price_count/$pre_sale['sell_price'])*100);


        /* 处理图片 */
        if(empty($pre_sale['goods_thumb']))
        {
            $pre_sale['goods_thumb'] = get_image_path($pre_sale['goods_id'], $pre_sale['goods_thumb'], true);
        }

        /* 处理图片路径*/
        $pre_sale['goods_thumb'] = get_image_path($pre_sale['goods_id'],$pre_sale['goods_thumb'], true);

        /* 处理链接 */
        $pre_sale['url'] = build_uri('pre_sale', array(
            'pre_sale_id' => $pre_sale['pre_sale_id']
        ));
        $pre_sale['order_info'] = $order_info;
        /* 加入数组 */
        $ps_list[]   = $pre_sale;

    }
    return $ps_list;
}

/* 代码增加_start  By  www.we10.cn */
/*
 * 获取商品所对应店铺的店铺基本信息
 * @param int $suppid 店铺id
 * @param int $suppinfo 入驻商的信息
 */
function get_dianpu_baseinfo($suppid=0,$suppinfo){
    if(intval($suppid) <= 0){
        return ;
    }
    global $smarty;
    $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('supplier_shop_config'). " WHERE supplier_id = " . $suppid;
    $shopinfo = $GLOBALS['db']->getAll($sql);

    $_goods_attr = array();
    foreach ($shopinfo as $value)
    {
        $_goods_attr[$value['code']] = $value['value'];
    }
    $sql1 = "SELECT AVG(comment_rank) FROM " . $GLOBALS['ecs']->table('comment') . " c" . " LEFT JOIN " . $GLOBALS['ecs']->table('order_info') . " o"." ON o.order_id = c.order_id"." WHERE c.status > 0 AND  o.supplier_id = " . $suppid;
    $avg_comment = $GLOBALS['db']->getOne($sql1);
    $avg_comment = round($avg_comment,1);

    $sql2 = "SELECT AVG(server), AVG(shipping) FROM " . $GLOBALS['ecs']->table('shop_grade') . " s" . " LEFT JOIN " . $GLOBALS['ecs']->table('order_info') . " o"." ON o.order_id = s.order_id"." WHERE s.is_comment > 0 AND  s.server >0 AND o.supplier_id = " . $suppid;
    $row = $GLOBALS['db']->getRow($sql2);

    $avg_server = round($row['AVG(server)'],1);
    $avg_shipping = round($row['AVG(shipping)'],1);

    $sql3 = " SELECT c.comment_rank,s.send,s.shipping FROM ".$GLOBALS['ecs']->table('shop_grade') ." AS s ".
        " LEFT JOIN ". $GLOBALS['ecs']->table('comment') ." AS c ON c.order_id = s.order_id " .
        " LEFT JOIN ". $GLOBALS['ecs']->table('order_info') ." AS o ON o.order_id = s.order_id".
        " WHERE s.is_comment >0 AND  s.server >0 AND o.supplier_id = " . $suppid;

    $h = $GLOBALS['db']->getAll($sql3);
    foreach($h as $key=>$value)
    {
        $count += array_sum($value);
    }

    $haoping = (($count/3)/count($h))/5*100;
    $haoping = round($haoping,1);

    $smarty->assign('ghs_css_path',        'themes/'.$_goods_attr['template'].'/images/ghs/css/ghs_style.css');//入驻商所选模板样式路径
    $shoplogo = empty($_goods_attr['shop_logo']) ? 'themes/'.$_goods_attr['template'].'/images/dianpu.jpg' : $_goods_attr['shop_logo'];
    $smarty->assign('shoplogo',        $shoplogo);//商家logo
    $smarty->assign('shopname',        htmlspecialchars($_goods_attr['shop_name']));//店铺名称
    $smarty->assign('suppid',        $suppinfo['supplier_id']);//商家名称
    $smarty->assign('suppliername',        htmlspecialchars($suppinfo['supplier_name']));//商家名称
    $smarty->assign('userrank',        htmlspecialchars($suppinfo['rank_name']));//商家等级
    $smarty->assign('region', get_province_city($_goods_attr['shop_province'],$_goods_attr['shop_city']));
    $smarty->assign('address', $_goods_attr['shop_address']);
    $qq = $GLOBALS['db']->getAll("SELECT cus_no FROM " . $GLOBALS['ecs']->table('chat_third_customer') . " WHERE is_master = 1 AND cus_type = 0 AND supplier_id = $suppid");
    $ww = $GLOBALS['db']->getAll("SELECT cus_no FROM " . $GLOBALS['ecs']->table('chat_third_customer') . " WHERE is_master = 1 AND cus_type = 1 AND supplier_id = $suppid");
    $arr_qq[] = array();
    $arr_ww = array();
    foreach ($qq as $v)
    {
        $arr_qq[] = $v['cus_no'];
    }
    foreach ($ww as $v)
    {
        $arr_ww[] = $v['cus_no'];
    }
    $smarty->assign('serviceqq', $arr_qq);
    $smarty->assign('serviceww', $arr_ww);
    $smarty->assign('serviceemail', $_goods_attr['service_email']);
    $smarty->assign('servicephone', $_goods_attr['service_phone']);
    $smarty->assign('createtime',      gmdate('Y-m-d',$suppinfo['add_time']));//商家创建时间
    $smarty->assign('c_rank', $avg_comment);
    $smarty->assign('serv_rank', $avg_server);
    $smarty->assign('shipp_rank', $avg_shipping);
    $smarty->assign('haoping', $haoping);
    $suppid = (intval($suppid)>0) ? intval($suppid) : intval($_GET['suppId']);
}

/* 取得众筹活动总数 */
function pre_sale_count ()
{
    $now = gmtime();
    // $sql = "SELECT COUNT(*) " . "FROM " .
    // $GLOBALS['ecs']->table('goods_activity') . "WHERE act_type = '" .
    // GAT_PRE_SELL . "' " . "AND start_time <= '$now' AND is_finished < 3";
    $sql = "SELECT COUNT(*) " . "FROM " . $GLOBALS['ecs']->table('goods_activity') . "WHERE act_type = '" . GAT_PRE_SELL . "' " . " AND is_finished < 3";
    
    return $GLOBALS['db']->getOne($sql);
}

function get_goods_gallery_attr_2 ($goods_id, $goods_attr_id)
{
    $sql = 'SELECT img_id, img_original, img_url, thumb_url, img_desc' . ' FROM ' . $GLOBALS['ecs']->table('goods_gallery') . " WHERE goods_id = '$goods_id' and goods_attr_id='$goods_attr_id' LIMIT " . $GLOBALS['_CFG']['goods_gallery_number'];
    $row = $GLOBALS['db']->getAll($sql);
    if(count($row) == 0)
    {
        $sql = 'SELECT img_id, img_original, img_url, thumb_url, img_desc' . ' FROM ' . $GLOBALS['ecs']->table('goods_gallery') . " WHERE goods_id = '$goods_id' and goods_attr_id='0' LIMIT " . $GLOBALS['_CFG']['goods_gallery_number'];
        $row = $GLOBALS['db']->getAll($sql);
    }
    /* 格式化相册图片路径 */
    foreach($row as $key => $gallery_img)
    {
        $row[$key]['img_url'] = get_image_path($goods_id, $gallery_img['img_url'], false, 'gallery');
        $row[$key]['thumb_url'] = get_image_path($goods_id, $gallery_img['thumb_url'], true, 'gallery');
        $row[$key]['img_original'] = get_image_path($goods_id, $gallery_img['img_original'], true, 'gallery');
    }
    return $row;
}
/* 代码增加_end  By  www.we10.cn*/
function zhongchou_info($zhongchou_id, $current_num = 0)
{
    $zhongchou_id = intval($zhongchou_id);
    $sql        = "SELECT *, act_id AS zhongchou_id, act_desc AS zhongchou_desc, start_time AS start_date, end_time AS end_date " . "FROM " . $GLOBALS['ecs']->table('goods_activity') . "WHERE act_id = '$zhongchou_id' " . "AND act_type = '" . GAT_PRE_SELL . "'";
    $zhongchou    = $GLOBALS['db']->getRow($sql);
    if (empty($zhongchou)) {
        return array();
    }


    $ext_info                       = unserialize($zhongchou['ext_info']);
    $zhongchou                        = array_merge($zhongchou, $ext_info);
    $zhongchou['formated_start_date'] = local_date('Y-m-d H:i', $zhongchou['start_time']);
    $zhongchou['formated_end_date']   = local_date('Y-m-d H:i', $zhongchou['end_time']);
//    $zhongchou['formated_deposit']    = price_format($zhongchou['deposit'], false);
    $zhongchou['org_price_ladder']    = $zhongchou['price_ladder'];
    $price_ladder                   = $zhongchou['price_ladder'];
    $i                              = 0;

    if (!is_array($price_ladder) || empty($price_ladder)) {
        $price_ladder = array(
            array(
                'amount' => 0,
                'price' => 0
            )
        );
    } else {
        foreach ($price_ladder as $key => $amount_price) {
            $price_ladder[$key]['formated_price'] = price_format($amount_price['price'], false);
            $i                                    = $i + 1;
        }
    }
   
    $zhongchou['price_ladder']  = $price_ladder;
    $zhongchou['ladder_amount'] = $i;
    $stat                     = zhongchou_stat($zhongchou_id, $zhongchou['deposit']);
    $zhongchou                  = array_merge($zhongchou, $stat);
    $cur_price                = $price_ladder[0]['price'];
    $cur_amount               = $stat['valid_goods'] + $current_num;
    foreach ($price_ladder as $amount_price) {
        if ($cur_amount >= $amount_price['amount']) {
            $cur_price = $amount_price['price'];
        } else {
            break;
        }
    }
    $zhongchou['cur_price']            = $cur_price;
    $zhongchou['formated_cur_price']   = price_format($cur_price, false);
    $zhongchou['trans_price']          = $zhongchou['cur_price'];
    $zhongchou['formated_trans_price'] = $zhongchou['formated_cur_price'];
    $zhongchou['trans_amount']         = $zhongchou['valid_goods'];
    $zhongchou['status']               = zhongchou_status($zhongchou);
    if (isset($GLOBALS['_LANG']['gbs'][$zhongchou['status']])) {
        $zhongchou['status_desc'] = $GLOBALS['_LANG']['gbs'][$zhongchou['status']];
    }
    $zhongchou['start_time'] = $zhongchou['formated_start_date'];
    $zhongchou['end_time']   = $zhongchou['formated_end_date'];
//    print_r($zhongchou);exit();
    return $zhongchou;
}
function zhongchou_stat($pintuan_id, $deposit)
{
    $pintuan_id       = intval($pintuan_id);
    $sql              = "SELECT goods_id " . "FROM " . $GLOBALS['ecs']->table('goods_activity') . "WHERE act_id = '$pintuan_id' " . "AND act_type = '" . GAT_PRE_SELL . "'";
    $pintuan_goods_id = $GLOBALS['db']->getOne($sql);
    $sql              = "SELECT COUNT(*) AS total_order, SUM(g.goods_number) AS total_goods " . "FROM " . $GLOBALS['ecs']->table('order_info') . " AS o, " . $GLOBALS['ecs']->table('order_goods') . " AS g " . " WHERE o.order_id = g.order_id " . "AND o.extension_code = 'zhongchou' " . "AND o.extension_id = '$pintuan_id' " . "AND g.goods_id = '$pintuan_goods_id' " . "AND (order_status = '" . OS_CONFIRMED . "' OR order_status = '" . OS_UNCONFIRMED . "')";
    $stat             = $GLOBALS['db']->getRow($sql);
    if ($stat['total_order'] == 0) {
        $stat['total_goods'] = 0;
    }
    $deposit = floatval($deposit);
    if ($deposit > 0 && $stat['total_order'] > 0) {
        $sql .= " AND (o.money_paid + o.surplus) >= '$deposit'";
        $row                 = $GLOBALS['db']->getRow($sql);
        $stat['valid_order'] = $row['total_order'];
        if ($stat['valid_order'] == 0) {
            $stat['valid_goods'] = 0;
        } else {
            $stat['valid_goods'] = $row['total_goods'];
        }
    } else {
        $stat['valid_order'] = $stat['total_order'];
        $stat['valid_goods'] = $stat['total_goods'];
    }
    return $stat;
}
function zhongchou_status($pintuan)
{
    $now = gmtime();
    if ($pintuan['is_finished'] == 0) {
        if ($now < $pintuan['start_time']) {
            $status = GBS_PRE_START;
        } elseif ($now > $pintuan['end_time']) {
            $status = GBS_FINISHED;
        } else {
            if ($pintuan['restrict_amount'] == 0 || $pintuan['valid_goods'] < $pintuan['restrict_amount']) {
                $status = GBS_UNDER_WAY;
            } else {
                $status = GBS_FINISHED;
            }
        }
    } elseif ($pintuan['is_finished'] == GBS_SUCCEED) {
        $status = GBS_SUCCEED;
    } elseif ($pintuan['is_finished'] == GBS_FAIL) {
        $status = GBS_FAIL;
    }
    return $status;
}
?>