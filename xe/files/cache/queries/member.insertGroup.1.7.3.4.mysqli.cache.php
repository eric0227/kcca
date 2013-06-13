<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl41_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl41_argument'}->ensureDefaultValue('0');
${'site_srl41_argument'}->checkNotNull();
if(!${'site_srl41_argument'}->isValid()) return ${'site_srl41_argument'}->getErrorMessage();
if(${'site_srl41_argument'} !== null) ${'site_srl41_argument'}->setColumnType('number');

${'group_srl42_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl42_argument'}->checkNotNull();
if(!${'group_srl42_argument'}->isValid()) return ${'group_srl42_argument'}->getErrorMessage();
if(${'group_srl42_argument'} !== null) ${'group_srl42_argument'}->setColumnType('number');

${'group_srl43_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl43_argument'}->checkNotNull();
if(!${'group_srl43_argument'}->isValid()) return ${'group_srl43_argument'}->getErrorMessage();
if(${'group_srl43_argument'} !== null) ${'group_srl43_argument'}->setColumnType('number');

${'title44_argument'} = new Argument('title', $args->{'title'});
${'title44_argument'}->checkNotNull();
if(!${'title44_argument'}->isValid()) return ${'title44_argument'}->getErrorMessage();
if(${'title44_argument'} !== null) ${'title44_argument'}->setColumnType('varchar');

${'is_default45_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default45_argument'}->ensureDefaultValue('N');
${'is_default45_argument'}->checkNotNull();
if(!${'is_default45_argument'}->isValid()) return ${'is_default45_argument'}->getErrorMessage();
if(${'is_default45_argument'} !== null) ${'is_default45_argument'}->setColumnType('char');

${'is_admin46_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin46_argument'}->ensureDefaultValue('N');
${'is_admin46_argument'}->checkNotNull();
if(!${'is_admin46_argument'}->isValid()) return ${'is_admin46_argument'}->getErrorMessage();
if(${'is_admin46_argument'} !== null) ${'is_admin46_argument'}->setColumnType('char');

${'regdate47_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate47_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate47_argument'}->isValid()) return ${'regdate47_argument'}->getErrorMessage();
if(${'regdate47_argument'} !== null) ${'regdate47_argument'}->setColumnType('date');

${'description48_argument'} = new Argument('description', $args->{'description'});
${'description48_argument'}->ensureDefaultValue('');
if(!${'description48_argument'}->isValid()) return ${'description48_argument'}->getErrorMessage();
if(${'description48_argument'} !== null) ${'description48_argument'}->setColumnType('text');

${'image_mark49_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark49_argument'}->ensureDefaultValue('');
if(!${'image_mark49_argument'}->isValid()) return ${'image_mark49_argument'}->getErrorMessage();
if(${'image_mark49_argument'} !== null) ${'image_mark49_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl41_argument'})
,new InsertExpression('`group_srl`', ${'group_srl42_argument'})
,new InsertExpression('`list_order`', ${'group_srl43_argument'})
,new InsertExpression('`title`', ${'title44_argument'})
,new InsertExpression('`is_default`', ${'is_default45_argument'})
,new InsertExpression('`is_admin`', ${'is_admin46_argument'})
,new InsertExpression('`regdate`', ${'regdate47_argument'})
,new InsertExpression('`description`', ${'description48_argument'})
,new InsertExpression('`image_mark`', ${'image_mark49_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>