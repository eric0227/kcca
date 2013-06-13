<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid251_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid251_argument'}->ensureDefaultValue('Y');
${'isvalid251_argument'}->checkNotNull();
if(!${'isvalid251_argument'}->isValid()) return ${'isvalid251_argument'}->getErrorMessage();
if(${'isvalid251_argument'} !== null) ${'isvalid251_argument'}->setColumnType('char');

${'upload_target_srl252_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl252_argument'}->checkFilter('number');
${'upload_target_srl252_argument'}->checkNotNull();
${'upload_target_srl252_argument'}->createConditionValue();
if(!${'upload_target_srl252_argument'}->isValid()) return ${'upload_target_srl252_argument'}->getErrorMessage();
if(${'upload_target_srl252_argument'} !== null) ${'upload_target_srl252_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid251_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl252_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>