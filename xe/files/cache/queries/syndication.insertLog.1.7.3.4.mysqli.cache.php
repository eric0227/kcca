<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'log_srl22_argument'} = new Argument('log_srl', $args->{'log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'log_srl22_argument'}->ensureDefaultValue($sequence);
if(!${'log_srl22_argument'}->isValid()) return ${'log_srl22_argument'}->getErrorMessage();
if(${'log_srl22_argument'} !== null) ${'log_srl22_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl23_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl23_argument'}->isValid()) return ${'module_srl23_argument'}->getErrorMessage();
} else
${'module_srl23_argument'} = NULL;if(${'module_srl23_argument'} !== null) ${'module_srl23_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl24_argument'} = new Argument('document_srl', $args->{'document_srl'});
if(!${'document_srl24_argument'}->isValid()) return ${'document_srl24_argument'}->getErrorMessage();
} else
${'document_srl24_argument'} = NULL;if(${'document_srl24_argument'} !== null) ${'document_srl24_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title25_argument'} = new Argument('title', $args->{'title'});
if(!${'title25_argument'}->isValid()) return ${'title25_argument'}->getErrorMessage();
} else
${'title25_argument'} = NULL;if(${'title25_argument'} !== null) ${'title25_argument'}->setColumnType('varchar');
if(isset($args->summary)) {
${'summary26_argument'} = new Argument('summary', $args->{'summary'});
if(!${'summary26_argument'}->isValid()) return ${'summary26_argument'}->getErrorMessage();
} else
${'summary26_argument'} = NULL;if(${'summary26_argument'} !== null) ${'summary26_argument'}->setColumnType('varchar');

${'regdate27_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate27_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate27_argument'}->checkNotNull();
if(!${'regdate27_argument'}->isValid()) return ${'regdate27_argument'}->getErrorMessage();
if(${'regdate27_argument'} !== null) ${'regdate27_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`log_srl`', ${'log_srl22_argument'})
,new InsertExpression('`module_srl`', ${'module_srl23_argument'})
,new InsertExpression('`document_srl`', ${'document_srl24_argument'})
,new InsertExpression('`title`', ${'title25_argument'})
,new InsertExpression('`summary`', ${'summary26_argument'})
,new InsertExpression('`regdate`', ${'regdate27_argument'})
));
$query->setTables(array(
new Table('`xe_syndication_logs`', '`syndication_logs`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>