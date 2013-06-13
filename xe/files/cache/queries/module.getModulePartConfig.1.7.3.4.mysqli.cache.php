<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module208_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module208_argument'}->checkNotNull();
${'module208_argument'}->createConditionValue();
if(!${'module208_argument'}->isValid()) return ${'module208_argument'}->getErrorMessage();
if(${'module208_argument'} !== null) ${'module208_argument'}->setColumnType('varchar');

${'module_srl209_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl209_argument'}->checkNotNull();
${'module_srl209_argument'}->createConditionValue();
if(!${'module_srl209_argument'}->isValid()) return ${'module_srl209_argument'}->getErrorMessage();
if(${'module_srl209_argument'} !== null) ${'module_srl209_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module208_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl209_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>