<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl248_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl248_argument'}->createConditionValue();
if(!${'module_srl248_argument'}->isValid()) return ${'module_srl248_argument'}->getErrorMessage();
} else
${'module_srl248_argument'} = NULL;if(${'module_srl248_argument'} !== null) ${'module_srl248_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl249_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl249_argument'}->createConditionValue();
if(!${'member_srl249_argument'}->isValid()) return ${'member_srl249_argument'}->getErrorMessage();
} else
${'member_srl249_argument'} = NULL;if(${'member_srl249_argument'} !== null) ${'member_srl249_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress250_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress250_argument'}->createConditionValue();
if(!${'ipaddress250_argument'}->isValid()) return ${'ipaddress250_argument'}->getErrorMessage();
} else
${'ipaddress250_argument'} = NULL;if(${'ipaddress250_argument'} !== null) ${'ipaddress250_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl248_argument,"equal")
,new ConditionWithArgument('`member_srl`',$member_srl249_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress250_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>