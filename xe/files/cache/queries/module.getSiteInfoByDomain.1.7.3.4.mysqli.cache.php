<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteInfoByDomain");
$query->setAction("select");
$query->setPriority("");

${'domain297_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain297_argument'}->checkNotNull();
${'domain297_argument'}->createConditionValue();
if(!${'domain297_argument'}->isValid()) return ${'domain297_argument'}->getErrorMessage();
if(${'domain297_argument'} !== null) ${'domain297_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`sites`.`site_srl`', '`site_srl`')
,new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`sites`.`index_module_srl`', '`index_module_srl`')
,new SelectExpression('`sites`.`default_language`', '`default_language`')
,new SelectExpression('`modules`.*')
));
$query->setTables(array(
new Table('`xe_sites`', '`sites`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sites`.`domain`',$domain297_argument,"equal")
,new ConditionWithoutArgument('`modules`.`module_srl`','`sites`.`index_module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>