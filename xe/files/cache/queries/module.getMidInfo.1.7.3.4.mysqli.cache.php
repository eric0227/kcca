<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid139_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid139_argument'}->createConditionValue();
if(!${'mid139_argument'}->isValid()) return ${'mid139_argument'}->getErrorMessage();
} else
${'mid139_argument'} = NULL;if(${'mid139_argument'} !== null) ${'mid139_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl140_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl140_argument'}->createConditionValue();
if(!${'module_srl140_argument'}->isValid()) return ${'module_srl140_argument'}->getErrorMessage();
} else
${'module_srl140_argument'} = NULL;if(${'module_srl140_argument'} !== null) ${'module_srl140_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl141_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl141_argument'}->createConditionValue();
if(!${'site_srl141_argument'}->isValid()) return ${'site_srl141_argument'}->getErrorMessage();
} else
${'site_srl141_argument'} = NULL;if(${'site_srl141_argument'} !== null) ${'site_srl141_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid139_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl140_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl141_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>