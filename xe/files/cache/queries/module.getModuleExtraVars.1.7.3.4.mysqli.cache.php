<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl142_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl142_argument'}->checkNotNull();
${'module_srl142_argument'}->createConditionValue();
if(!${'module_srl142_argument'}->isValid()) return ${'module_srl142_argument'}->getErrorMessage();
if(${'module_srl142_argument'} !== null) ${'module_srl142_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl142_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>