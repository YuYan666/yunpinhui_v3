<?php

	$sql = "SELECT api_data FROM " . $ecs->table('sharegoods_module') . " WHERE class = 'taobao'";
	$vo = $db->getOne($sql);
	$vo = unserialize($vo);
	$code_tdj=$vo['code_tdj'];
	$smarty->assign('code_tdj',$code_tdj);


?>