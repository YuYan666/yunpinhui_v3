<?php
/**
 * 配置文件
 */
// database host

$db_host   = "192.168.3.11:3306";

// database name
$db_name   = "yunpinhui_v3";

// database username
$db_user   = "root";

// database password
$db_pass   = "root";

// table prefix
$prefix    = "ecs_";

$timezone    = "Asia/Shanghai";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

if(!defined('ADMIN_PATH'))
{
define('ADMIN_PATH','admin');
}
if(!defined('ADMIN_PATH_M'))
{
define('ADMIN_PATH_M','admin');
}

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2016-05-16 21:50:17');

define('LICENCE', '2292372089');

define('LICENCE_TIME', '2016-05-16 21:57:12');
