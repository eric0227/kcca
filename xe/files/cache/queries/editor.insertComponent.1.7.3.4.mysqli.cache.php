<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name125_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name125_argument'}->checkNotNull();
if(!${'component_name125_argument'}->isValid()) return ${'component_name125_argument'}->getErrorMessage();
if(${'component_name125_argument'} !== null) ${'component_name125_argument'}->setColumnType('varchar');

${'enabled126_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled126_argument'}->ensureDefaultValue('N');
if(!${'enabled126_argument'}->isValid()) return ${'enabled126_argument'}->getErrorMessage();
if(${'enabled126_argument'} !== null) ${'enabled126_argument'}->setColumnType('char');

${'list_order127_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order127_argument'}->ensureDefaultValue($sequence);
if(!${'list_order127_argument'}->isValid()) return ${'list_order127_argument'}->getErrorMessage();
if(${'list_order127_argument'} !== null) ${'list_order127_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name125_argument'})
,new InsertExpression('`enabled`', ${'enabled126_argument'})
,new InsertExpression('`list_order`', ${'list_order127_argument'})
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>