<?php
/**
 * 配置文件
 */
// database host

$db_host   = "#DB_HOST#:3306";

// database name
$db_name   = "#DB_NAME#";

// database username
$db_user   = "#DB_USER#";

// database password
$db_pass   = "#DB_PWD#";

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

define('LICENCE', '#LICENCE#');

define('LICENCE_TIME', '2016-05-16 21:57:12');
