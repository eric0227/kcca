<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point259_argument'} = new Argument('point', $args->{'point'});
if(!${'point259_argument'}->isValid()) return ${'point259_argument'}->getErrorMessage();
} else
${'point259_argument'} = NULL;if(${'point259_argument'} !== null) ${'point259_argument'}->setColumnType('number');

${'member_srl260_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl260_argument'}->checkFilter('number');
${'member_srl260_argument'}->checkNotNull();
${'member_srl260_argument'}->createConditionValue();
if(!${'member_srl260_argument'}->isValid()) return ${'member_srl260_argument'}->getErrorMessage();
if(${'member_srl260_argument'} !== null) ${'member_srl260_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point259_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl260_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>