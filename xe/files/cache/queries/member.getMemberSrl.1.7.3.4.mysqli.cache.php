<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_id)) {
${'user_id72_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id72_argument'}->createConditionValue();
if(!${'user_id72_argument'}->isValid()) return ${'user_id72_argument'}->getErrorMessage();
} else
${'user_id72_argument'} = NULL;if(${'user_id72_argument'} !== null) ${'user_id72_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address73_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address73_argument'}->createConditionValue();
if(!${'email_address73_argument'}->isValid()) return ${'email_address73_argument'}->getErrorMessage();
} else
${'email_address73_argument'} = NULL;if(${'email_address73_argument'} !== null) ${'email_address73_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name74_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name74_argument'}->createConditionValue();
if(!${'nick_name74_argument'}->isValid()) return ${'nick_name74_argument'}->getErrorMessage();
} else
${'nick_name74_argument'} = NULL;if(${'nick_name74_argument'} !== null) ${'nick_name74_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id72_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address73_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name74_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>