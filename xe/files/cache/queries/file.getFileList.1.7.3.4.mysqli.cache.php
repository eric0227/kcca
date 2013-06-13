<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFileList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_srl)) {
${'s_module_srl22_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl22_argument'}->createConditionValue();
if(!${'s_module_srl22_argument'}->isValid()) return ${'s_module_srl22_argument'}->getErrorMessage();
} else
${'s_module_srl22_argument'} = NULL;if(${'s_module_srl22_argument'} !== null) ${'s_module_srl22_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl23_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl23_argument'}->createConditionValue();
if(!${'exclude_module_srl23_argument'}->isValid()) return ${'exclude_module_srl23_argument'}->getErrorMessage();
} else
${'exclude_module_srl23_argument'} = NULL;if(${'exclude_module_srl23_argument'} !== null) ${'exclude_module_srl23_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid24_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid24_argument'}->createConditionValue();
if(!${'isvalid24_argument'}->isValid()) return ${'isvalid24_argument'}->getErrorMessage();
} else
${'isvalid24_argument'} = NULL;if(${'isvalid24_argument'} !== null) ${'isvalid24_argument'}->setColumnType('char');
if(isset($args->direct_download)) {
${'direct_download25_argument'} = new ConditionArgument('direct_download', $args->direct_download, 'equal');
${'direct_download25_argument'}->createConditionValue();
if(!${'direct_download25_argument'}->isValid()) return ${'direct_download25_argument'}->getErrorMessage();
} else
${'direct_download25_argument'} = NULL;if(${'direct_download25_argument'} !== null) ${'direct_download25_argument'}->setColumnType('char');
if(isset($args->s_filename)) {
${'s_filename26_argument'} = new ConditionArgument('s_filename', $args->s_filename, 'like');
${'s_filename26_argument'}->createConditionValue();
if(!${'s_filename26_argument'}->isValid()) return ${'s_filename26_argument'}->getErrorMessage();
} else
${'s_filename26_argument'} = NULL;if(${'s_filename26_argument'} !== null) ${'s_filename26_argument'}->setColumnType('varchar');
if(isset($args->s_filesize_more)) {
${'s_filesize_more27_argument'} = new ConditionArgument('s_filesize_more', $args->s_filesize_more, 'more');
${'s_filesize_more27_argument'}->createConditionValue();
if(!${'s_filesize_more27_argument'}->isValid()) return ${'s_filesize_more27_argument'}->getErrorMessage();
} else
${'s_filesize_more27_argument'} = NULL;if(${'s_filesize_more27_argument'} !== null) ${'s_filesize_more27_argument'}->setColumnType('number');
if(isset($args->s_filesize_less)) {
${'s_filesize_less28_argument'} = new ConditionArgument('s_filesize_less', $args->s_filesize_less, 'less');
${'s_filesize_less28_argument'}->createConditionValue();
if(!${'s_filesize_less28_argument'}->isValid()) return ${'s_filesize_less28_argument'}->getErrorMessage();
} else
${'s_filesize_less28_argument'} = NULL;if(${'s_filesize_less28_argument'} !== null) ${'s_filesize_less28_argument'}->setColumnType('number');
if(isset($args->s_download_count)) {
${'s_download_count29_argument'} = new ConditionArgument('s_download_count', $args->s_download_count, 'more');
${'s_download_count29_argument'}->createConditionValue();
if(!${'s_download_count29_argument'}->isValid()) return ${'s_download_count29_argument'}->getErrorMessage();
} else
${'s_download_count29_argument'} = NULL;if(${'s_download_count29_argument'} !== null) ${'s_download_count29_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate30_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate30_argument'}->createConditionValue();
if(!${'s_regdate30_argument'}->isValid()) return ${'s_regdate30_argument'}->getErrorMessage();
} else
${'s_regdate30_argument'} = NULL;if(${'s_regdate30_argument'} !== null) ${'s_regdate30_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress31_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress31_argument'}->createConditionValue();
if(!${'s_ipaddress31_argument'}->isValid()) return ${'s_ipaddress31_argument'}->getErrorMessage();
} else
${'s_ipaddress31_argument'} = NULL;if(${'s_ipaddress31_argument'} !== null) ${'s_ipaddress31_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id32_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id32_argument'}->createConditionValue();
if(!${'s_user_id32_argument'}->isValid()) return ${'s_user_id32_argument'}->getErrorMessage();
} else
${'s_user_id32_argument'} = NULL;if(${'s_user_id32_argument'} !== null) ${'s_user_id32_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name33_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name33_argument'}->createConditionValue();
if(!${'s_user_name33_argument'}->isValid()) return ${'s_user_name33_argument'}->getErrorMessage();
} else
${'s_user_name33_argument'} = NULL;if(${'s_user_name33_argument'} !== null) ${'s_user_name33_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name34_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name34_argument'}->createConditionValue();
if(!${'s_nick_name34_argument'}->isValid()) return ${'s_nick_name34_argument'}->getErrorMessage();
} else
${'s_nick_name34_argument'} = NULL;if(${'s_nick_name34_argument'} !== null) ${'s_nick_name34_argument'}->setColumnType('varchar');

${'page36_argument'} = new Argument('page', $args->{'page'});
${'page36_argument'}->ensureDefaultValue('1');
if(!${'page36_argument'}->isValid()) return ${'page36_argument'}->getErrorMessage();

${'page_count37_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count37_argument'}->ensureDefaultValue('10');
if(!${'page_count37_argument'}->isValid()) return ${'page_count37_argument'}->getErrorMessage();

${'list_count38_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count38_argument'}->ensureDefaultValue('20');
if(!${'list_count38_argument'}->isValid()) return ${'list_count38_argument'}->getErrorMessage();

${'sort_index35_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index35_argument'}->ensureDefaultValue('files.file_srl');
if(!${'sort_index35_argument'}->isValid()) return ${'sort_index35_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`files`.*')
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`files`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`files`.`module_srl`',$s_module_srl22_argument,"in")
,new ConditionWithArgument('`files`.`module_srl`',$exclude_module_srl23_argument,"notin", 'and')
,new ConditionWithArgument('`files`.`isvalid`',$isvalid24_argument,"equal", 'and')
,new ConditionWithArgument('`files`.`direct_download`',$direct_download25_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`files`.`source_filename`',$s_filename26_argument,"like", 'or')
,new ConditionWithArgument('`files`.`file_size`',$s_filesize_more27_argument,"more", 'or')
,new ConditionWithArgument('`files`.`file_size`',$s_filesize_less28_argument,"less", 'or')
,new ConditionWithArgument('`files`.`download_count`',$s_download_count29_argument,"more", 'or')
,new ConditionWithArgument('`files`.`regdate`',$s_regdate30_argument,"like_prefix", 'or')
,new ConditionWithArgument('`files`.`ipaddress`',$s_ipaddress31_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`user_id`',$s_user_id32_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_name`',$s_user_name33_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$s_nick_name34_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index35_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count38_argument'}, ${'page36_argument'}, ${'page_count37_argument'}));
return $query; ?>