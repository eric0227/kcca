<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl254_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl254_argument'}->checkFilter('number');
${'member_srl254_argument'}->checkNotNull();
if(!${'member_srl254_argument'}->isValid()) return ${'member_srl254_argument'}->getErrorMessage();
if(${'member_srl254_argument'} !== null) ${'member_srl254_argument'}->setColumnType('number');

${'point255_argument'} = new Argument('point', $args->{'point'});
${'point255_argument'}->checkFilter('number');
${'point255_argument'}->ensureDefaultValue('0');
${'point255_argument'}->checkNotNull();
if(!${'point255_argument'}->isValid()) return ${'point255_argument'}->getErrorMessage();
if(${'point255_argument'} !== null) ${'point255_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl254_argument'})
,new InsertExpression('`point`', ${'point255_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>