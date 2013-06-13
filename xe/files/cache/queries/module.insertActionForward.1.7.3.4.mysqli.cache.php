<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act34_argument'} = new Argument('act', $args->{'act'});
${'act34_argument'}->checkNotNull();
if(!${'act34_argument'}->isValid()) return ${'act34_argument'}->getErrorMessage();
if(${'act34_argument'} !== null) ${'act34_argument'}->setColumnType('varchar');

${'module35_argument'} = new Argument('module', $args->{'module'});
${'module35_argument'}->checkNotNull();
if(!${'module35_argument'}->isValid()) return ${'module35_argument'}->getErrorMessage();
if(${'module35_argument'} !== null) ${'module35_argument'}->setColumnType('varchar');

${'type36_argument'} = new Argument('type', $args->{'type'});
${'type36_argument'}->checkNotNull();
if(!${'type36_argument'}->isValid()) return ${'type36_argument'}->getErrorMessage();
if(${'type36_argument'} !== null) ${'type36_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act34_argument'})
,new InsertExpression('`module`', ${'module35_argument'})
,new InsertExpression('`type`', ${'type36_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>