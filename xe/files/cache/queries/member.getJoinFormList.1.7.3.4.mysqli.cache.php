<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getJoinFormList");
$query->setAction("select");
$query->setPriority("");

${'sort_index37_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index37_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index37_argument'}->isValid()) return ${'sort_index37_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member_join_form`', '`member_join_form`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index37_argument'}, "asc")
));
$query->setLimit();
return $query; ?>