<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl132_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl132_argument'}->checkFilter('number');
${'menu_srl132_argument'}->checkNotNull();
if(!${'menu_srl132_argument'}->isValid()) return ${'menu_srl132_argument'}->getErrorMessage();
if(${'menu_srl132_argument'} !== null) ${'menu_srl132_argument'}->setColumnType('number');

${'site_srl133_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl133_argument'}->checkFilter('number');
${'site_srl133_argument'}->ensureDefaultValue('0');
${'site_srl133_argument'}->checkNotNull();
if(!${'site_srl133_argument'}->isValid()) return ${'site_srl133_argument'}->getErrorMessage();
if(${'site_srl133_argument'} !== null) ${'site_srl133_argument'}->setColumnType('number');

${'title134_argument'} = new Argument('title', $args->{'title'});
${'title134_argument'}->checkNotNull();
if(!${'title134_argument'}->isValid()) return ${'title134_argument'}->getErrorMessage();
if(${'title134_argument'} !== null) ${'title134_argument'}->setColumnType('varchar');

${'listorder135_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder135_argument'}->checkNotNull();
if(!${'listorder135_argument'}->isValid()) return ${'listorder135_argument'}->getErrorMessage();
if(${'listorder135_argument'} !== null) ${'listorder135_argument'}->setColumnType('number');

${'regdate136_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate136_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate136_argument'}->isValid()) return ${'regdate136_argument'}->getErrorMessage();
if(${'regdate136_argument'} !== null) ${'regdate136_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl132_argument'})
,new InsertExpression('`site_srl`', ${'site_srl133_argument'})
,new InsertExpression('`title`', ${'title134_argument'})
,new InsertExpression('`listorder`', ${'listorder135_argument'})
,new InsertExpression('`regdate`', ${'regdate136_argument'})
));
$query->setTables(array(
new Table('`xe_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>