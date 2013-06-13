<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url282_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url282_argument'}->checkNotNull();
${'url282_argument'}->createConditionValue();
if(!${'url282_argument'}->isValid()) return ${'url282_argument'}->getErrorMessage();
if(${'url282_argument'} !== null) ${'url282_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut283_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut283_argument'}->createConditionValue();
if(!${'is_shortcut283_argument'}->isValid()) return ${'is_shortcut283_argument'}->getErrorMessage();
} else
${'is_shortcut283_argument'} = NULL;if(${'is_shortcut283_argument'} !== null) ${'is_shortcut283_argument'}->setColumnType('char');

${'site_srl284_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl284_argument'}->checkNotNull();
${'site_srl284_argument'}->createConditionValue();
if(!${'site_srl284_argument'}->isValid()) return ${'site_srl284_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url282_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut283_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`xe_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl284_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>