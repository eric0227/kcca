<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByEmailAddress");
$query->setAction("select");
$query->setPriority("");

${'email_address106_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address106_argument'}->checkNotNull();
${'email_address106_argument'}->createConditionValue();
if(!${'email_address106_argument'}->isValid()) return ${'email_address106_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('lower(`email_address`)',$email_address106_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>