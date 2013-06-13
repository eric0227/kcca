<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl285_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl285_argument'}->isValid()) return ${'menu_srl285_argument'}->getErrorMessage();
} else
${'menu_srl285_argument'} = NULL;if(${'menu_srl285_argument'} !== null) ${'menu_srl285_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl286_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl286_argument'}->isValid()) return ${'parent_srl286_argument'}->getErrorMessage();
} else
${'parent_srl286_argument'} = NULL;if(${'parent_srl286_argument'} !== null) ${'parent_srl286_argument'}->setColumnType('number');

${'name287_argument'} = new Argument('name', $args->{'name'});
${'name287_argument'}->checkNotNull();
if(!${'name287_argument'}->isValid()) return ${'name287_argument'}->getErrorMessage();
if(${'name287_argument'} !== null) ${'name287_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url288_argument'} = new Argument('url', $args->{'url'});
if(!${'url288_argument'}->isValid()) return ${'url288_argument'}->getErrorMessage();
} else
${'url288_argument'} = NULL;if(${'url288_argument'} !== null) ${'url288_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut289_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut289_argument'}->isValid()) return ${'is_shortcut289_argument'}->getErrorMessage();
} else
${'is_shortcut289_argument'} = NULL;if(${'is_shortcut289_argument'} !== null) ${'is_shortcut289_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window290_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window290_argument'}->isValid()) return ${'open_window290_argument'}->getErrorMessage();
} else
${'open_window290_argument'} = NULL;if(${'open_window290_argument'} !== null) ${'open_window290_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand291_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand291_argument'}->isValid()) return ${'expand291_argument'}->getErrorMessage();
} else
${'expand291_argument'} = NULL;if(${'expand291_argument'} !== null) ${'expand291_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn292_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn292_argument'}->isValid()) return ${'normal_btn292_argument'}->getErrorMessage();
} else
${'normal_btn292_argument'} = NULL;if(${'normal_btn292_argument'} !== null) ${'normal_btn292_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn293_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn293_argument'}->isValid()) return ${'hover_btn293_argument'}->getErrorMessage();
} else
${'hover_btn293_argument'} = NULL;if(${'hover_btn293_argument'} !== null) ${'hover_btn293_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn294_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn294_argument'}->isValid()) return ${'active_btn294_argument'}->getErrorMessage();
} else
${'active_btn294_argument'} = NULL;if(${'active_btn294_argument'} !== null) ${'active_btn294_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls295_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls295_argument'}->isValid()) return ${'group_srls295_argument'}->getErrorMessage();
} else
${'group_srls295_argument'} = NULL;if(${'group_srls295_argument'} !== null) ${'group_srls295_argument'}->setColumnType('text');

${'menu_item_srl296_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl296_argument'}->checkFilter('number');
${'menu_item_srl296_argument'}->checkNotNull();
${'menu_item_srl296_argument'}->createConditionValue();
if(!${'menu_item_srl296_argument'}->isValid()) return ${'menu_item_srl296_argument'}->getErrorMessage();
if(${'menu_item_srl296_argument'} !== null) ${'menu_item_srl296_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl285_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl286_argument'})
,new UpdateExpression('`name`', ${'name287_argument'})
,new UpdateExpression('`url`', ${'url288_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut289_argument'})
,new UpdateExpression('`open_window`', ${'open_window290_argument'})
,new UpdateExpression('`expand`', ${'expand291_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn292_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn293_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn294_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls295_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl296_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>