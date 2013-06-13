<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl258_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl258_argument'}->checkFilter('number');
${'document_srl258_argument'}->checkNotNull();
${'document_srl258_argument'}->createConditionValue();
if(!${'document_srl258_argument'}->isValid()) return ${'document_srl258_argument'}->getErrorMessage();
if(${'document_srl258_argument'} !== null) ${'document_srl258_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl258_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>