<?php if(!defined("__XE__")) exit();
$db_info->master_db = array('db_type' => 'mysqli','db_port' => '3306','db_hostname' => 'localhost','db_userid' => 'root','db_password' => 'root123456','db_database' => 'kcca','db_table_prefix' => 'xe_');
$db_info->slave_db = array(array('db_type' => 'mysqli','db_port' => '3306','db_hostname' => 'localhost','db_userid' => 'root','db_password' => 'root123456','db_database' => 'kcca','db_table_prefix' => 'xe_'));
$db_info->default_url = 'http://localhost/kcca/xe/';
$db_info->use_mobile_view = 'Y';
$db_info->use_rewrite = 'Y';
$db_info->time_zone = '+1000';
$db_info->use_prepared_statements = 'Y';
$db_info->qmail_compatibility = 'N';
$db_info->use_db_session = 'N';
$db_info->use_ssl = 'none';
?>