<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl108_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl108_argument'}->checkFilter('number');
${'member_srl108_argument'}->checkNotNull();
if(!${'member_srl108_argument'}->isValid()) return ${'member_srl108_argument'}->getErrorMessage();
if(${'member_srl108_argument'} !== null) ${'member_srl108_argument'}->setColumnType('number');

${'last_login109_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login109_argument'}->ensureDefaultValue(date("YmdHis"));
${'last_login109_argument'}->checkNotNull();
if(!${'last_login109_argument'}->isValid()) return ${'last_login109_argument'}->getErrorMessage();
if(${'last_login109_argument'} !== null) ${'last_login109_argument'}->setColumnType('date');

${'member_srl110_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl110_argument'}->checkFilter('number');
${'member_srl110_argument'}->checkNotNull();
${'member_srl110_argument'}->createConditionValue();
if(!${'member_srl110_argument'}->isValid()) return ${'member_srl110_argument'}->getErrorMessage();
if(${'member_srl110_argument'} !== null) ${'member_srl110_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl108_argument'})
,new UpdateExpression('`last_login`', ${'last_login109_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl110_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>