<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl116_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl116_argument'}->checkNotNull();
if(!${'site_srl116_argument'}->isValid()) return ${'site_srl116_argument'}->getErrorMessage();
if(${'site_srl116_argument'} !== null) ${'site_srl116_argument'}->setColumnType('number');

${'addon117_argument'} = new Argument('addon', $args->{'addon'});
${'addon117_argument'}->checkNotNull();
if(!${'addon117_argument'}->isValid()) return ${'addon117_argument'}->getErrorMessage();
if(${'addon117_argument'} !== null) ${'addon117_argument'}->setColumnType('varchar');

${'is_used118_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used118_argument'}->ensureDefaultValue('N');
${'is_used118_argument'}->checkNotNull();
if(!${'is_used118_argument'}->isValid()) return ${'is_used118_argument'}->getErrorMessage();
if(${'is_used118_argument'} !== null) ${'is_used118_argument'}->setColumnType('char');

${'is_used_m119_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m119_argument'}->ensureDefaultValue('N');
if(!${'is_used_m119_argument'}->isValid()) return ${'is_used_m119_argument'}->getErrorMessage();
if(${'is_used_m119_argument'} !== null) ${'is_used_m119_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars120_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars120_argument'}->isValid()) return ${'extra_vars120_argument'}->getErrorMessage();
} else
${'extra_vars120_argument'} = NULL;if(${'extra_vars120_argument'} !== null) ${'extra_vars120_argument'}->setColumnType('text');

${'regdate121_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate121_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate121_argument'}->isValid()) return ${'regdate121_argument'}->getErrorMessage();
if(${'regdate121_argument'} !== null) ${'regdate121_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl116_argument'})
,new InsertExpression('`addon`', ${'addon117_argument'})
,new InsertExpression('`is_used`', ${'is_used118_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m119_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars120_argument'})
,new InsertExpression('`regdate`', ${'regdate121_argument'})
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>