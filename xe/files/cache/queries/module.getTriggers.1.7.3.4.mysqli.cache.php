<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name204_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name204_argument'}->createConditionValue();
if(!${'trigger_name204_argument'}->isValid()) return ${'trigger_name204_argument'}->getErrorMessage();
} else
${'trigger_name204_argument'} = NULL;if(${'trigger_name204_argument'} !== null) ${'trigger_name204_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position205_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position205_argument'}->createConditionValue();
if(!${'called_position205_argument'}->isValid()) return ${'called_position205_argument'}->getErrorMessage();
} else
${'called_position205_argument'} = NULL;if(${'called_position205_argument'} !== null) ${'called_position205_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name204_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position205_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>