<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl143_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl143_argument'}->ensureDefaultValue('0');
${'site_srl143_argument'}->checkNotNull();
${'site_srl143_argument'}->createConditionValue();
if(!${'site_srl143_argument'}->isValid()) return ${'site_srl143_argument'}->getErrorMessage();
if(${'site_srl143_argument'} !== null) ${'site_srl143_argument'}->setColumnType('number');

${'mid144_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid144_argument'}->checkNotNull();
${'mid144_argument'}->createConditionValue();
if(!${'mid144_argument'}->isValid()) return ${'mid144_argument'}->getErrorMessage();
if(${'mid144_argument'} !== null) ${'mid144_argument'}->setColumnType('varchar');

${'module_srl145_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl145_argument'}->ensureDefaultValue('0');
${'module_srl145_argument'}->checkNotNull();
${'module_srl145_argument'}->createConditionValue();
if(!${'module_srl145_argument'}->isValid()) return ${'module_srl145_argument'}->getErrorMessage();
if(${'module_srl145_argument'} !== null) ${'module_srl145_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl143_argument,"equal")
,new ConditionWithArgument('`mid`',$mid144_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl145_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>