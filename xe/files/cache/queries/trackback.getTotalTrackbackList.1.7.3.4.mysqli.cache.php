<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalTrackbackList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trackbackSrlList)) {
${'trackbackSrlList9_argument'} = new ConditionArgument('trackbackSrlList', $args->trackbackSrlList, 'in');
${'trackbackSrlList9_argument'}->checkFilter('number');
${'trackbackSrlList9_argument'}->createConditionValue();
if(!${'trackbackSrlList9_argument'}->isValid()) return ${'trackbackSrlList9_argument'}->getErrorMessage();
} else
${'trackbackSrlList9_argument'} = NULL;if(${'trackbackSrlList9_argument'} !== null) ${'trackbackSrlList9_argument'}->setColumnType('number');
if(isset($args->s_module_srl)) {
${'s_module_srl10_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl10_argument'}->createConditionValue();
if(!${'s_module_srl10_argument'}->isValid()) return ${'s_module_srl10_argument'}->getErrorMessage();
} else
${'s_module_srl10_argument'} = NULL;if(${'s_module_srl10_argument'} !== null) ${'s_module_srl10_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl11_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl11_argument'}->createConditionValue();
if(!${'exclude_module_srl11_argument'}->isValid()) return ${'exclude_module_srl11_argument'}->getErrorMessage();
} else
${'exclude_module_srl11_argument'} = NULL;if(${'exclude_module_srl11_argument'} !== null) ${'exclude_module_srl11_argument'}->setColumnType('number');
if(isset($args->s_url)) {
${'s_url12_argument'} = new ConditionArgument('s_url', $args->s_url, 'like');
${'s_url12_argument'}->createConditionValue();
if(!${'s_url12_argument'}->isValid()) return ${'s_url12_argument'}->getErrorMessage();
} else
${'s_url12_argument'} = NULL;if(${'s_url12_argument'} !== null) ${'s_url12_argument'}->setColumnType('varchar');
if(isset($args->s_blog_name)) {
${'s_blog_name13_argument'} = new ConditionArgument('s_blog_name', $args->s_blog_name, 'like');
${'s_blog_name13_argument'}->createConditionValue();
if(!${'s_blog_name13_argument'}->isValid()) return ${'s_blog_name13_argument'}->getErrorMessage();
} else
${'s_blog_name13_argument'} = NULL;if(${'s_blog_name13_argument'} !== null) ${'s_blog_name13_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title14_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title14_argument'}->createConditionValue();
if(!${'s_title14_argument'}->isValid()) return ${'s_title14_argument'}->getErrorMessage();
} else
${'s_title14_argument'} = NULL;if(${'s_title14_argument'} !== null) ${'s_title14_argument'}->setColumnType('varchar');
if(isset($args->s_excerpt)) {
${'s_excerpt15_argument'} = new ConditionArgument('s_excerpt', $args->s_excerpt, 'like');
${'s_excerpt15_argument'}->createConditionValue();
if(!${'s_excerpt15_argument'}->isValid()) return ${'s_excerpt15_argument'}->getErrorMessage();
} else
${'s_excerpt15_argument'} = NULL;if(${'s_excerpt15_argument'} !== null) ${'s_excerpt15_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate16_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate16_argument'}->createConditionValue();
if(!${'s_regdate16_argument'}->isValid()) return ${'s_regdate16_argument'}->getErrorMessage();
} else
${'s_regdate16_argument'} = NULL;if(${'s_regdate16_argument'} !== null) ${'s_regdate16_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress17_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress17_argument'}->createConditionValue();
if(!${'s_ipaddress17_argument'}->isValid()) return ${'s_ipaddress17_argument'}->getErrorMessage();
} else
${'s_ipaddress17_argument'} = NULL;if(${'s_ipaddress17_argument'} !== null) ${'s_ipaddress17_argument'}->setColumnType('varchar');

${'page19_argument'} = new Argument('page', $args->{'page'});
${'page19_argument'}->ensureDefaultValue('1');
if(!${'page19_argument'}->isValid()) return ${'page19_argument'}->getErrorMessage();

${'page_count20_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count20_argument'}->ensureDefaultValue('10');
if(!${'page_count20_argument'}->isValid()) return ${'page_count20_argument'}->getErrorMessage();

${'list_count21_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count21_argument'}->ensureDefaultValue('20');
if(!${'list_count21_argument'}->isValid()) return ${'list_count21_argument'}->getErrorMessage();

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_trackbacks`', '`trackbacks`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trackback_srl`',$trackbackSrlList9_argument,"in")
,new ConditionWithArgument('`module_srl`',$s_module_srl10_argument,"in", 'and')
,new ConditionWithArgument('`module_srl`',$exclude_module_srl11_argument,"notin", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`url`',$s_url12_argument,"like")
,new ConditionWithArgument('`blog_name`',$s_blog_name13_argument,"like", 'or')
,new ConditionWithArgument('`title`',$s_title14_argument,"like", 'or')
,new ConditionWithArgument('`excerpt`',$s_excerpt15_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate16_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress17_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index18_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count21_argument'}, ${'page19_argument'}, ${'page_count20_argument'}));
return $query; ?>