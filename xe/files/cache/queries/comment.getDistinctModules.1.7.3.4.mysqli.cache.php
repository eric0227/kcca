<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDistinctModules");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('DISTINCT(`module_srl`)')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>