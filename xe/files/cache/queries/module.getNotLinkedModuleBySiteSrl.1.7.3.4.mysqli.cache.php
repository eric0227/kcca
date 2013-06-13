<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNotLinkedModuleBySiteSrl");
$query->setAction("select");
$query->setPriority("");

${'site_srl22_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl22_argument'}->ensureDefaultValue('0');
${'site_srl22_argument'}->checkNotNull();
${'site_srl22_argument'}->createConditionValue();
if(!${'site_srl22_argument'}->isValid()) return ${'site_srl22_argument'}->getErrorMessage();
if(${'site_srl22_argument'} !== null) ${'site_srl22_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`menu_srl`','0',"equal")
,new ConditionWithArgument('`site_srl`',$site_srl22_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>