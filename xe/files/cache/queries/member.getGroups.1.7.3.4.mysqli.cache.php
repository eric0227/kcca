<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl38_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl38_argument'}->createConditionValue();
if(!${'site_srl38_argument'}->isValid()) return ${'site_srl38_argument'}->getErrorMessage();
} else
${'site_srl38_argument'} = NULL;if(${'site_srl38_argument'} !== null) ${'site_srl38_argument'}->setColumnType('number');

${'sort_index39_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index39_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index39_argument'}->isValid()) return ${'sort_index39_argument'}->getErrorMessage();

${'order_type40_argument'} = new SortArgument('order_type40', $args->order_type);
${'order_type40_argument'}->ensureDefaultValue('asc');
if(!${'order_type40_argument'}->isValid()) return ${'order_type40_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl38_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index39_argument'}, $order_type40_argument)
));
$query->setLimit();
return $query; ?>