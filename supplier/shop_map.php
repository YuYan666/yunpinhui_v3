<?php 

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if(empty($_REQUEST['act'])){
	
	$_REQUEST['act'] ='list_edit';
}
if ($_REQUEST['act'] == 'list_edit'){

    // 检查权限
    admin_priv('shop_base');

    $sql = "SELECT * FROM " . $ecs->table('supplier') . " WHERE supplier_id=".$_SESSION['supplier_id'];
    $supplier = $db->getRow($sql);

    $sql = "SELECT * FROM " . $ecs->table('supplier_shop_config') . " WHERE supplier_id=".$_SESSION['supplier_id'];
    $result = $db->getAll($sql);

    $config = array();
    foreach ($result as $key => $res) {
        $config[$res['code']] = $res['value'];
    }

    $shop_province = get_region_name($config['shop_province']);
    $shop_city = get_region_name($config['shop_city']);

    $shop_address = $shop_province . $shop_city . $config['shop_address'];

    $smarty->assign('supplier', $supplier);
    $smarty->assign('shop_city', $shop_city);
    $smarty->assign('shop_address', $shop_address);
    $smarty->assign('ur_here', $_LANG['09_map']);
    $smarty->assign('use_map', true);

    $smarty->display("shop_map.html");
}
else if ($_REQUEST['act'] == 'post'){
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    if ($latitude && $longitude) {
        $sql = "UPDATE ". $ecs->table('supplier') ." SET latitude='". $latitude . "',longitude='". $longitude ."' WHERE supplier_id=".$_SESSION['supplier_id'];
        $result = $db->query($sql);
        
        $links[] = array('text' => $_LANG['09_map'], 'href' => 'shop_map.php?act=list_edit');
        sys_msg($_LANG['save_success'], 0, $links);
    } else {
        $links[] = array('text' => $_LANG['09_map'], 'href' => 'shop_map.php?act=list_edit');
        sys_msg("请先标注地图", 0, $links);
    }
}


function get_region_name($region_id){
    global $db, $ecs, $_LANG;

    $sql = "SELECT * FROM " . $ecs->table('region') . " WHERE region_id=".$region_id;
    $region = $db->getRow($sql);

    return $region['region_name'];
}



 ?>