<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl170_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl170_argument'}->checkFilter('number');
${'module_srl170_argument'}->checkNotNull();
if(!${'module_srl170_argument'}->isValid()) return ${'module_srl170_argument'}->getErrorMessage();
if(${'module_srl170_argument'} !== null) ${'module_srl170_argument'}->setColumnType('number');

${'name171_argument'} = new Argument('name', $args->{'name'});
${'name171_argument'}->checkNotNull();
if(!${'name171_argument'}->isValid()) return ${'name171_argument'}->getErrorMessage();
if(${'name171_argument'} !== null) ${'name171_argument'}->setColumnType('varchar');

${'value172_argument'} = new Argument('value', $args->{'value'});
${'value172_argument'}->checkNotNull();
if(!${'value172_argument'}->isValid()) return ${'value172_argument'}->getErrorMessage();
if(${'value172_argument'} !== null) ${'value172_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl170_argument'})
,new InsertExpression('`name`', ${'name171_argument'})
,new InsertExpression('`value`', ${'value172_argument'})
));
$query->setTables(array(
new Table('`xe_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>