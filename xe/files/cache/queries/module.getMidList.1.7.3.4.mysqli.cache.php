<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl23_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl23_argument'}->createConditionValue();
if(!${'module_srl23_argument'}->isValid()) return ${'module_srl23_argument'}->getErrorMessage();
} else
${'module_srl23_argument'} = NULL;if(${'module_srl23_argument'} !== null) ${'module_srl23_argument'}->setColumnType('number');
if(isset($args->module_srls)) {
${'module_srls24_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls24_argument'}->createConditionValue();
if(!${'module_srls24_argument'}->isValid()) return ${'module_srls24_argument'}->getErrorMessage();
} else
${'module_srls24_argument'} = NULL;if(${'module_srls24_argument'} !== null) ${'module_srls24_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl25_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl25_argument'}->createConditionValue();
if(!${'site_srl25_argument'}->isValid()) return ${'site_srl25_argument'}->getErrorMessage();
} else
${'site_srl25_argument'} = NULL;if(${'site_srl25_argument'} !== null) ${'site_srl25_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module26_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module26_argument'}->createConditionValue();
if(!${'module26_argument'}->isValid()) return ${'module26_argument'}->getErrorMessage();
} else
${'module26_argument'} = NULL;if(${'module26_argument'} !== null) ${'module26_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl27_argument'} = new ConditionArgument('module_category_srl', $args->module_category_srl, 'equal');
${'module_category_srl27_argument'}->createConditionValue();
if(!${'module_category_srl27_argument'}->isValid()) return ${'module_category_srl27_argument'}->getErrorMessage();
} else
${'module_category_srl27_argument'} = NULL;if(${'module_category_srl27_argument'} !== null) ${'module_category_srl27_argument'}->setColumnType('number');

${'sort_index28_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index28_argument'}->ensureDefaultValue('browser_title');
if(!${'sort_index28_argument'}->isValid()) return ${'sort_index28_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl23_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srls24_argument,"in", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl25_argument,"equal")
,new ConditionWithArgument('`module`',$module26_argument,"equal", 'and')
,new ConditionWithArgument('`module_category_srl`',$module_category_srl27_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index28_argument'}, "asc")
));
$query->setLimit();
return $query; ?>