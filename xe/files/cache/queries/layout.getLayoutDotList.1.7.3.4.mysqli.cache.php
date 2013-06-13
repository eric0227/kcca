<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl128_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl128_argument'}->checkFilter('number');
${'site_srl128_argument'}->ensureDefaultValue('0');
${'site_srl128_argument'}->checkNotNull();
${'site_srl128_argument'}->createConditionValue();
if(!${'site_srl128_argument'}->isValid()) return ${'site_srl128_argument'}->getErrorMessage();
if(${'site_srl128_argument'} !== null) ${'site_srl128_argument'}->setColumnType('number');

${'layout_type129_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type129_argument'}->ensureDefaultValue('P');
${'layout_type129_argument'}->createConditionValue();
if(!${'layout_type129_argument'}->isValid()) return ${'layout_type129_argument'}->getErrorMessage();
if(${'layout_type129_argument'} !== null) ${'layout_type129_argument'}->setColumnType('char');

${'layout130_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout130_argument'}->ensureDefaultValue('.');
${'layout130_argument'}->createConditionValue();
if(!${'layout130_argument'}->isValid()) return ${'layout130_argument'}->getErrorMessage();
if(${'layout130_argument'} !== null) ${'layout130_argument'}->setColumnType('varchar');

${'sort_index131_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index131_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index131_argument'}->isValid()) return ${'sort_index131_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl128_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type129_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout130_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index131_argument'}, "desc")
));
$query->setLimit();
return $query; ?>