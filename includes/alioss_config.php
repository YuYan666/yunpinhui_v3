<?php
define('OSS_ACCESS_ID', $GLOBALS['_CFG']['oss_access_id']); //Access Key ID
define('OSS_ACCESS_KEY', $GLOBALS['_CFG']['oss_access_key']); //Access Key Secret
define('oss_bucket', $GLOBALS['_CFG']['oss_bucket']); //Access Key Secret
define('OSS_DOMAIN', "https://".$GLOBALS['_CFG']['oss_bucket']."."."oss-cn-beijing.aliyuncs.com"."/");
define('OSS_DISPLAY_MODE', $GLOBALS['_CFG']['oss_display_mode']); 
define('OSS_BINDING_DOMAIN', $GLOBALS['_CFG']['oss_binding_domain']."/"); 
final class Config
{

    const OSS_ACCESS_ID = OSS_ACCESS_ID;
    const OSS_ACCESS_KEY = OSS_ACCESS_KEY;
    const OSS_ENDPOINT = 'oss-cn-beijing.aliyuncs.com';
    const OSS_TEST_BUCKET = oss_bucket;
}
?>