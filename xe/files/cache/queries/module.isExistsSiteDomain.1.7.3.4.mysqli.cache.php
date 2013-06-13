<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain146_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain146_argument'}->checkNotNull();
${'domain146_argument'}->createConditionValue();
if(!${'domain146_argument'}->isValid()) return ${'domain146_argument'}->getErrorMessage();
if(${'domain146_argument'} !== null) ${'domain146_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain146_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>