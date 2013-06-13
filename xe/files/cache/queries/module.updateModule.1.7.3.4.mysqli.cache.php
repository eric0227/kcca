<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module261_argument'} = new Argument('module', $args->{'module'});
${'module261_argument'}->checkNotNull();
if(!${'module261_argument'}->isValid()) return ${'module261_argument'}->getErrorMessage();
if(${'module261_argument'} !== null) ${'module261_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl262_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl262_argument'}->isValid()) return ${'module_category_srl262_argument'}->getErrorMessage();
} else
${'module_category_srl262_argument'} = NULL;if(${'module_category_srl262_argument'} !== null) ${'module_category_srl262_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl263_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl263_argument'}->isValid()) return ${'layout_srl263_argument'}->getErrorMessage();
} else
${'layout_srl263_argument'} = NULL;if(${'layout_srl263_argument'} !== null) ${'layout_srl263_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin264_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin264_argument'}->isValid()) return ${'skin264_argument'}->getErrorMessage();
} else
${'skin264_argument'} = NULL;if(${'skin264_argument'} !== null) ${'skin264_argument'}->setColumnType('varchar');

${'is_skin_fix265_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix265_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix265_argument'}->isValid()) return ${'is_skin_fix265_argument'}->getErrorMessage();
if(${'is_skin_fix265_argument'} !== null) ${'is_skin_fix265_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin266_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin266_argument'}->isValid()) return ${'mskin266_argument'}->getErrorMessage();
} else
${'mskin266_argument'} = NULL;if(${'mskin266_argument'} !== null) ${'mskin266_argument'}->setColumnType('varchar');

${'is_mskin_fix267_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix267_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix267_argument'}->isValid()) return ${'is_mskin_fix267_argument'}->getErrorMessage();
if(${'is_mskin_fix267_argument'} !== null) ${'is_mskin_fix267_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl268_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl268_argument'}->checkFilter('number');
if(!${'menu_srl268_argument'}->isValid()) return ${'menu_srl268_argument'}->getErrorMessage();
} else
${'menu_srl268_argument'} = NULL;if(${'menu_srl268_argument'} !== null) ${'menu_srl268_argument'}->setColumnType('number');

${'mid269_argument'} = new Argument('mid', $args->{'mid'});
${'mid269_argument'}->checkNotNull();
if(!${'mid269_argument'}->isValid()) return ${'mid269_argument'}->getErrorMessage();
if(${'mid269_argument'} !== null) ${'mid269_argument'}->setColumnType('varchar');

${'browser_title270_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title270_argument'}->checkNotNull();
if(!${'browser_title270_argument'}->isValid()) return ${'browser_title270_argument'}->getErrorMessage();
if(${'browser_title270_argument'} !== null) ${'browser_title270_argument'}->setColumnType('varchar');

${'description271_argument'} = new Argument('description', $args->{'description'});
${'description271_argument'}->ensureDefaultValue('');
if(!${'description271_argument'}->isValid()) return ${'description271_argument'}->getErrorMessage();
if(${'description271_argument'} !== null) ${'description271_argument'}->setColumnType('text');

${'is_default272_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default272_argument'}->ensureDefaultValue('N');
${'is_default272_argument'}->checkNotNull();
if(!${'is_default272_argument'}->isValid()) return ${'is_default272_argument'}->getErrorMessage();
if(${'is_default272_argument'} !== null) ${'is_default272_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content273_argument'} = new Argument('content', $args->{'content'});
if(!${'content273_argument'}->isValid()) return ${'content273_argument'}->getErrorMessage();
} else
${'content273_argument'} = NULL;if(${'content273_argument'} !== null) ${'content273_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent274_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent274_argument'}->isValid()) return ${'mcontent274_argument'}->getErrorMessage();
} else
${'mcontent274_argument'} = NULL;if(${'mcontent274_argument'} !== null) ${'mcontent274_argument'}->setColumnType('bigtext');

${'open_rss275_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss275_argument'}->ensureDefaultValue('Y');
${'open_rss275_argument'}->checkNotNull();
if(!${'open_rss275_argument'}->isValid()) return ${'open_rss275_argument'}->getErrorMessage();
if(${'open_rss275_argument'} !== null) ${'open_rss275_argument'}->setColumnType('char');

${'header_text276_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text276_argument'}->ensureDefaultValue('');
if(!${'header_text276_argument'}->isValid()) return ${'header_text276_argument'}->getErrorMessage();
if(${'header_text276_argument'} !== null) ${'header_text276_argument'}->setColumnType('text');

${'footer_text277_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text277_argument'}->ensureDefaultValue('');
if(!${'footer_text277_argument'}->isValid()) return ${'footer_text277_argument'}->getErrorMessage();
if(${'footer_text277_argument'} !== null) ${'footer_text277_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl278_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl278_argument'}->isValid()) return ${'mlayout_srl278_argument'}->getErrorMessage();
} else
${'mlayout_srl278_argument'} = NULL;if(${'mlayout_srl278_argument'} !== null) ${'mlayout_srl278_argument'}->setColumnType('number');

${'use_mobile279_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile279_argument'}->ensureDefaultValue('N');
if(!${'use_mobile279_argument'}->isValid()) return ${'use_mobile279_argument'}->getErrorMessage();
if(${'use_mobile279_argument'} !== null) ${'use_mobile279_argument'}->setColumnType('char');

${'site_srl280_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl280_argument'}->checkFilter('number');
${'site_srl280_argument'}->ensureDefaultValue('0');
${'site_srl280_argument'}->checkNotNull();
${'site_srl280_argument'}->createConditionValue();
if(!${'site_srl280_argument'}->isValid()) return ${'site_srl280_argument'}->getErrorMessage();
if(${'site_srl280_argument'} !== null) ${'site_srl280_argument'}->setColumnType('number');

${'module_srl281_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl281_argument'}->checkFilter('number');
${'module_srl281_argument'}->checkNotNull();
${'module_srl281_argument'}->createConditionValue();
if(!${'module_srl281_argument'}->isValid()) return ${'module_srl281_argument'}->getErrorMessage();
if(${'module_srl281_argument'} !== null) ${'module_srl281_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module261_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl262_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl263_argument'})
,new UpdateExpression('`skin`', ${'skin264_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix265_argument'})
,new UpdateExpression('`mskin`', ${'mskin266_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix267_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl268_argument'})
,new UpdateExpression('`mid`', ${'mid269_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title270_argument'})
,new UpdateExpression('`description`', ${'description271_argument'})
,new UpdateExpression('`is_default`', ${'is_default272_argument'})
,new UpdateExpression('`content`', ${'content273_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent274_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss275_argument'})
,new UpdateExpression('`header_text`', ${'header_text276_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text277_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl278_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile279_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl280_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl281_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>