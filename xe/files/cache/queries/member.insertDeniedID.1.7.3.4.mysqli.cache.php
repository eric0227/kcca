<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id112_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id112_argument'}->checkNotNull();
if(!${'user_id112_argument'}->isValid()) return ${'user_id112_argument'}->getErrorMessage();
if(${'user_id112_argument'} !== null) ${'user_id112_argument'}->setColumnType('varchar');

${'regdate113_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate113_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate113_argument'}->isValid()) return ${'regdate113_argument'}->getErrorMessage();
if(${'regdate113_argument'} !== null) ${'regdate113_argument'}->setColumnType('date');

${'description114_argument'} = new Argument('description', $args->{'description'});
${'description114_argument'}->ensureDefaultValue('');
if(!${'description114_argument'}->isValid()) return ${'description114_argument'}->getErrorMessage();
if(${'description114_argument'} !== null) ${'description114_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order115_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order115_argument'}->isValid()) return ${'list_order115_argument'}->getErrorMessage();
} else
${'list_order115_argument'} = NULL;if(${'list_order115_argument'} !== null) ${'list_order115_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id112_argument'})
,new InsertExpression('`regdate`', ${'regdate113_argument'})
,new InsertExpression('`description`', ${'description114_argument'})
,new InsertExpression('`list_order`', ${'list_order115_argument'})
));
$query->setTables(array(
new Table('`xe_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>