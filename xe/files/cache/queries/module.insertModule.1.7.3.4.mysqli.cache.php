<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl147_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl147_argument'}->ensureDefaultValue('0');
${'site_srl147_argument'}->checkNotNull();
if(!${'site_srl147_argument'}->isValid()) return ${'site_srl147_argument'}->getErrorMessage();
if(${'site_srl147_argument'} !== null) ${'site_srl147_argument'}->setColumnType('number');

${'module_srl148_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl148_argument'}->checkNotNull();
if(!${'module_srl148_argument'}->isValid()) return ${'module_srl148_argument'}->getErrorMessage();
if(${'module_srl148_argument'} !== null) ${'module_srl148_argument'}->setColumnType('number');

${'module_category_srl149_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl149_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl149_argument'}->isValid()) return ${'module_category_srl149_argument'}->getErrorMessage();
if(${'module_category_srl149_argument'} !== null) ${'module_category_srl149_argument'}->setColumnType('number');

${'mid150_argument'} = new Argument('mid', $args->{'mid'});
${'mid150_argument'}->checkNotNull();
if(!${'mid150_argument'}->isValid()) return ${'mid150_argument'}->getErrorMessage();
if(${'mid150_argument'} !== null) ${'mid150_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin151_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin151_argument'}->isValid()) return ${'skin151_argument'}->getErrorMessage();
} else
${'skin151_argument'} = NULL;if(${'skin151_argument'} !== null) ${'skin151_argument'}->setColumnType('varchar');

${'is_skin_fix152_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix152_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix152_argument'}->isValid()) return ${'is_skin_fix152_argument'}->getErrorMessage();
if(${'is_skin_fix152_argument'} !== null) ${'is_skin_fix152_argument'}->setColumnType('char');

${'is_mskin_fix153_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix153_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix153_argument'}->isValid()) return ${'is_mskin_fix153_argument'}->getErrorMessage();
if(${'is_mskin_fix153_argument'} !== null) ${'is_mskin_fix153_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin154_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin154_argument'}->isValid()) return ${'mskin154_argument'}->getErrorMessage();
} else
${'mskin154_argument'} = NULL;if(${'mskin154_argument'} !== null) ${'mskin154_argument'}->setColumnType('varchar');

${'browser_title155_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title155_argument'}->checkNotNull();
if(!${'browser_title155_argument'}->isValid()) return ${'browser_title155_argument'}->getErrorMessage();
if(${'browser_title155_argument'} !== null) ${'browser_title155_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl156_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl156_argument'}->isValid()) return ${'layout_srl156_argument'}->getErrorMessage();
} else
${'layout_srl156_argument'} = NULL;if(${'layout_srl156_argument'} !== null) ${'layout_srl156_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description157_argument'} = new Argument('description', $args->{'description'});
if(!${'description157_argument'}->isValid()) return ${'description157_argument'}->getErrorMessage();
} else
${'description157_argument'} = NULL;if(${'description157_argument'} !== null) ${'description157_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content158_argument'} = new Argument('content', $args->{'content'});
if(!${'content158_argument'}->isValid()) return ${'content158_argument'}->getErrorMessage();
} else
${'content158_argument'} = NULL;if(${'content158_argument'} !== null) ${'content158_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent159_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent159_argument'}->isValid()) return ${'mcontent159_argument'}->getErrorMessage();
} else
${'mcontent159_argument'} = NULL;if(${'mcontent159_argument'} !== null) ${'mcontent159_argument'}->setColumnType('bigtext');

${'module160_argument'} = new Argument('module', $args->{'module'});
${'module160_argument'}->checkNotNull();
if(!${'module160_argument'}->isValid()) return ${'module160_argument'}->getErrorMessage();
if(${'module160_argument'} !== null) ${'module160_argument'}->setColumnType('varchar');

${'is_default161_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default161_argument'}->ensureDefaultValue('N');
${'is_default161_argument'}->checkNotNull();
if(!${'is_default161_argument'}->isValid()) return ${'is_default161_argument'}->getErrorMessage();
if(${'is_default161_argument'} !== null) ${'is_default161_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl162_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl162_argument'}->checkFilter('number');
if(!${'menu_srl162_argument'}->isValid()) return ${'menu_srl162_argument'}->getErrorMessage();
} else
${'menu_srl162_argument'} = NULL;if(${'menu_srl162_argument'} !== null) ${'menu_srl162_argument'}->setColumnType('number');

${'open_rss163_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss163_argument'}->ensureDefaultValue('Y');
${'open_rss163_argument'}->checkNotNull();
if(!${'open_rss163_argument'}->isValid()) return ${'open_rss163_argument'}->getErrorMessage();
if(${'open_rss163_argument'} !== null) ${'open_rss163_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text164_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text164_argument'}->isValid()) return ${'header_text164_argument'}->getErrorMessage();
} else
${'header_text164_argument'} = NULL;if(${'header_text164_argument'} !== null) ${'header_text164_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text165_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text165_argument'}->isValid()) return ${'footer_text165_argument'}->getErrorMessage();
} else
${'footer_text165_argument'} = NULL;if(${'footer_text165_argument'} !== null) ${'footer_text165_argument'}->setColumnType('text');

${'regdate166_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate166_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate166_argument'}->isValid()) return ${'regdate166_argument'}->getErrorMessage();
if(${'regdate166_argument'} !== null) ${'regdate166_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl167_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl167_argument'}->isValid()) return ${'mlayout_srl167_argument'}->getErrorMessage();
} else
${'mlayout_srl167_argument'} = NULL;if(${'mlayout_srl167_argument'} !== null) ${'mlayout_srl167_argument'}->setColumnType('number');

${'use_mobile168_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile168_argument'}->ensureDefaultValue('N');
if(!${'use_mobile168_argument'}->isValid()) return ${'use_mobile168_argument'}->getErrorMessage();
if(${'use_mobile168_argument'} !== null) ${'use_mobile168_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl147_argument'})
,new InsertExpression('`module_srl`', ${'module_srl148_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl149_argument'})
,new InsertExpression('`mid`', ${'mid150_argument'})
,new InsertExpression('`skin`', ${'skin151_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix152_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix153_argument'})
,new InsertExpression('`mskin`', ${'mskin154_argument'})
,new InsertExpression('`browser_title`', ${'browser_title155_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl156_argument'})
,new InsertExpression('`description`', ${'description157_argument'})
,new InsertExpression('`content`', ${'content158_argument'})
,new InsertExpression('`mcontent`', ${'mcontent159_argument'})
,new InsertExpression('`module`', ${'module160_argument'})
,new InsertExpression('`is_default`', ${'is_default161_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl162_argument'})
,new InsertExpression('`open_rss`', ${'open_rss163_argument'})
,new InsertExpression('`header_text`', ${'header_text164_argument'})
,new InsertExpression('`footer_text`', ${'footer_text165_argument'})
,new InsertExpression('`regdate`', ${'regdate166_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl167_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile168_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>