<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroupsExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl5_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl5_argument'}->checkFilter('number');
${'module_srl5_argument'}->checkNotNull();
${'module_srl5_argument'}->createConditionValue();
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx6_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'notin');
${'var_idx6_argument'}->checkFilter('number');
${'var_idx6_argument'}->createConditionValue();
if(!${'var_idx6_argument'}->isValid()) return ${'var_idx6_argument'}->getErrorMessage();
} else
${'var_idx6_argument'} = NULL;if(${'var_idx6_argument'} !== null) ${'var_idx6_argument'}->setColumnType('number');
if(isset($args->eid)) {
${'eid7_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid7_argument'}->createConditionValue();
if(!${'eid7_argument'}->isValid()) return ${'eid7_argument'}->getErrorMessage();
} else
${'eid7_argument'} = NULL;if(${'eid7_argument'} !== null) ${'eid7_argument'}->setColumnType('varchar');

${'sort_index8_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index8_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index8_argument'}->isValid()) return ${'sort_index8_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`', '`module_srl`')
,new SelectExpression('`var_idx`', '`idx`')
,new SelectExpression('`eid`', '`eid`')
));
$query->setTables(array(
new Table('`xe_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl5_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx6_argument,"notin", 'and')
,new ConditionWithArgument('`eid`',$eid7_argument,"equal", 'and')))
));
$query->setGroups(array(
'`module_srl`' ,'`var_idx`' ,'`eid`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index8_argument'}, "asc")
));
$query->setLimit();
return $query; ?>