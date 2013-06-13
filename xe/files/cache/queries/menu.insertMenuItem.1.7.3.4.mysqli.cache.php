<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl173_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl173_argument'}->checkFilter('number');
${'menu_item_srl173_argument'}->checkNotNull();
if(!${'menu_item_srl173_argument'}->isValid()) return ${'menu_item_srl173_argument'}->getErrorMessage();
if(${'menu_item_srl173_argument'} !== null) ${'menu_item_srl173_argument'}->setColumnType('number');

${'parent_srl174_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl174_argument'}->checkFilter('number');
${'parent_srl174_argument'}->ensureDefaultValue('0');
if(!${'parent_srl174_argument'}->isValid()) return ${'parent_srl174_argument'}->getErrorMessage();
if(${'parent_srl174_argument'} !== null) ${'parent_srl174_argument'}->setColumnType('number');

${'menu_srl175_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl175_argument'}->checkFilter('number');
${'menu_srl175_argument'}->checkNotNull();
if(!${'menu_srl175_argument'}->isValid()) return ${'menu_srl175_argument'}->getErrorMessage();
if(${'menu_srl175_argument'} !== null) ${'menu_srl175_argument'}->setColumnType('number');

${'name176_argument'} = new Argument('name', $args->{'name'});
${'name176_argument'}->checkNotNull();
if(!${'name176_argument'}->isValid()) return ${'name176_argument'}->getErrorMessage();
if(${'name176_argument'} !== null) ${'name176_argument'}->setColumnType('text');
if(isset($args->url)) {
${'url177_argument'} = new Argument('url', $args->{'url'});
if(!${'url177_argument'}->isValid()) return ${'url177_argument'}->getErrorMessage();
} else
${'url177_argument'} = NULL;if(${'url177_argument'} !== null) ${'url177_argument'}->setColumnType('varchar');

${'is_shortcut178_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut178_argument'}->ensureDefaultValue('N');
${'is_shortcut178_argument'}->checkNotNull();
if(!${'is_shortcut178_argument'}->isValid()) return ${'is_shortcut178_argument'}->getErrorMessage();
if(${'is_shortcut178_argument'} !== null) ${'is_shortcut178_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window179_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window179_argument'}->isValid()) return ${'open_window179_argument'}->getErrorMessage();
} else
${'open_window179_argument'} = NULL;if(${'open_window179_argument'} !== null) ${'open_window179_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand180_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand180_argument'}->isValid()) return ${'expand180_argument'}->getErrorMessage();
} else
${'expand180_argument'} = NULL;if(${'expand180_argument'} !== null) ${'expand180_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn181_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn181_argument'}->isValid()) return ${'normal_btn181_argument'}->getErrorMessage();
} else
${'normal_btn181_argument'} = NULL;if(${'normal_btn181_argument'} !== null) ${'normal_btn181_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn182_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn182_argument'}->isValid()) return ${'hover_btn182_argument'}->getErrorMessage();
} else
${'hover_btn182_argument'} = NULL;if(${'hover_btn182_argument'} !== null) ${'hover_btn182_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn183_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn183_argument'}->isValid()) return ${'active_btn183_argument'}->getErrorMessage();
} else
${'active_btn183_argument'} = NULL;if(${'active_btn183_argument'} !== null) ${'active_btn183_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls184_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls184_argument'}->isValid()) return ${'group_srls184_argument'}->getErrorMessage();
} else
${'group_srls184_argument'} = NULL;if(${'group_srls184_argument'} !== null) ${'group_srls184_argument'}->setColumnType('text');

${'listorder185_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder185_argument'}->checkNotNull();
if(!${'listorder185_argument'}->isValid()) return ${'listorder185_argument'}->getErrorMessage();
if(${'listorder185_argument'} !== null) ${'listorder185_argument'}->setColumnType('number');

${'regdate186_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate186_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate186_argument'}->isValid()) return ${'regdate186_argument'}->getErrorMessage();
if(${'regdate186_argument'} !== null) ${'regdate186_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl173_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl174_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl175_argument'})
,new InsertExpression('`name`', ${'name176_argument'})
,new InsertExpression('`url`', ${'url177_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut178_argument'})
,new InsertExpression('`open_window`', ${'open_window179_argument'})
,new InsertExpression('`expand`', ${'expand180_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn181_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn182_argument'})
,new InsertExpression('`active_btn`', ${'active_btn183_argument'})
,new InsertExpression('`group_srls`', ${'group_srls184_argument'})
,new InsertExpression('`listorder`', ${'listorder185_argument'})
,new InsertExpression('`regdate`', ${'regdate186_argument'})
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>