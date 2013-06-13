<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSite");
$query->setAction("update");
$query->setPriority("");
if(isset($args->index_module_srl)) {
${'index_module_srl298_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl298_argument'}->isValid()) return ${'index_module_srl298_argument'}->getErrorMessage();
} else
${'index_module_srl298_argument'} = NULL;if(${'index_module_srl298_argument'} !== null) ${'index_module_srl298_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain299_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain299_argument'}->isValid()) return ${'domain299_argument'}->getErrorMessage();
} else
${'domain299_argument'} = NULL;if(${'domain299_argument'} !== null) ${'domain299_argument'}->setColumnType('varchar');
if(isset($args->default_language)) {
${'default_language300_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language300_argument'}->isValid()) return ${'default_language300_argument'}->getErrorMessage();
} else
${'default_language300_argument'} = NULL;if(${'default_language300_argument'} !== null) ${'default_language300_argument'}->setColumnType('varchar');

${'site_srl301_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl301_argument'}->checkFilter('number');
${'site_srl301_argument'}->checkNotNull();
${'site_srl301_argument'}->createConditionValue();
if(!${'site_srl301_argument'}->isValid()) return ${'site_srl301_argument'}->getErrorMessage();
if(${'site_srl301_argument'} !== null) ${'site_srl301_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`index_module_srl`', ${'index_module_srl298_argument'})
,new UpdateExpression('`domain`', ${'domain299_argument'})
,new UpdateExpression('`default_language`', ${'default_language300_argument'})
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl301_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>