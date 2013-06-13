<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress107_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress107_argument'}->createConditionValue();
if(!${'ipaddress107_argument'}->isValid()) return ${'ipaddress107_argument'}->getErrorMessage();
} else
${'ipaddress107_argument'} = NULL;if(${'ipaddress107_argument'} !== null) ${'ipaddress107_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress107_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>