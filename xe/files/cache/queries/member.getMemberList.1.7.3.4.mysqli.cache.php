<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin51_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin51_argument'}->createConditionValue();
if(!${'is_admin51_argument'}->isValid()) return ${'is_admin51_argument'}->getErrorMessage();
} else
${'is_admin51_argument'} = NULL;if(${'is_admin51_argument'} !== null) ${'is_admin51_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied52_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied52_argument'}->createConditionValue();
if(!${'is_denied52_argument'}->isValid()) return ${'is_denied52_argument'}->getErrorMessage();
} else
${'is_denied52_argument'} = NULL;if(${'is_denied52_argument'} !== null) ${'is_denied52_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls53_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls53_argument'}->createConditionValue();
if(!${'member_srls53_argument'}->isValid()) return ${'member_srls53_argument'}->getErrorMessage();
} else
${'member_srls53_argument'} = NULL;if(${'member_srls53_argument'} !== null) ${'member_srls53_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id54_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id54_argument'}->createConditionValue();
if(!${'s_user_id54_argument'}->isValid()) return ${'s_user_id54_argument'}->getErrorMessage();
} else
${'s_user_id54_argument'} = NULL;if(${'s_user_id54_argument'} !== null) ${'s_user_id54_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name55_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name55_argument'}->createConditionValue();
if(!${'s_user_name55_argument'}->isValid()) return ${'s_user_name55_argument'}->getErrorMessage();
} else
${'s_user_name55_argument'} = NULL;if(${'s_user_name55_argument'} !== null) ${'s_user_name55_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name56_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name56_argument'}->createConditionValue();
if(!${'s_nick_name56_argument'}->isValid()) return ${'s_nick_name56_argument'}->getErrorMessage();
} else
${'s_nick_name56_argument'} = NULL;if(${'s_nick_name56_argument'} !== null) ${'s_nick_name56_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name57_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name57_argument'}->createConditionValue();
if(!${'html_nick_name57_argument'}->isValid()) return ${'html_nick_name57_argument'}->getErrorMessage();
} else
${'html_nick_name57_argument'} = NULL;if(${'html_nick_name57_argument'} !== null) ${'html_nick_name57_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address58_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address58_argument'}->createConditionValue();
if(!${'s_email_address58_argument'}->isValid()) return ${'s_email_address58_argument'}->getErrorMessage();
} else
${'s_email_address58_argument'} = NULL;if(${'s_email_address58_argument'} !== null) ${'s_email_address58_argument'}->setColumnType('varchar');
if(isset($args->s_extra_vars)) {
${'s_extra_vars59_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars59_argument'}->createConditionValue();
if(!${'s_extra_vars59_argument'}->isValid()) return ${'s_extra_vars59_argument'}->getErrorMessage();
} else
${'s_extra_vars59_argument'} = NULL;if(${'s_extra_vars59_argument'} !== null) ${'s_extra_vars59_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate60_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate60_argument'}->createConditionValue();
if(!${'s_regdate60_argument'}->isValid()) return ${'s_regdate60_argument'}->getErrorMessage();
} else
${'s_regdate60_argument'} = NULL;if(${'s_regdate60_argument'} !== null) ${'s_regdate60_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login61_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login61_argument'}->createConditionValue();
if(!${'s_last_login61_argument'}->isValid()) return ${'s_last_login61_argument'}->getErrorMessage();
} else
${'s_last_login61_argument'} = NULL;if(${'s_last_login61_argument'} !== null) ${'s_last_login61_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more62_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more62_argument'}->createConditionValue();
if(!${'s_regdate_more62_argument'}->isValid()) return ${'s_regdate_more62_argument'}->getErrorMessage();
} else
${'s_regdate_more62_argument'} = NULL;if(${'s_regdate_more62_argument'} !== null) ${'s_regdate_more62_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less63_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less63_argument'}->createConditionValue();
if(!${'s_regdate_less63_argument'}->isValid()) return ${'s_regdate_less63_argument'}->getErrorMessage();
} else
${'s_regdate_less63_argument'} = NULL;if(${'s_regdate_less63_argument'} !== null) ${'s_regdate_less63_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more64_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more64_argument'}->createConditionValue();
if(!${'s_last_login_more64_argument'}->isValid()) return ${'s_last_login_more64_argument'}->getErrorMessage();
} else
${'s_last_login_more64_argument'} = NULL;if(${'s_last_login_more64_argument'} !== null) ${'s_last_login_more64_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less65_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less65_argument'}->createConditionValue();
if(!${'s_last_login_less65_argument'}->isValid()) return ${'s_last_login_less65_argument'}->getErrorMessage();
} else
${'s_last_login_less65_argument'} = NULL;if(${'s_last_login_less65_argument'} !== null) ${'s_last_login_less65_argument'}->setColumnType('date');

${'page68_argument'} = new Argument('page', $args->{'page'});
${'page68_argument'}->ensureDefaultValue('1');
if(!${'page68_argument'}->isValid()) return ${'page68_argument'}->getErrorMessage();

${'page_count69_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count69_argument'}->ensureDefaultValue('10');
if(!${'page_count69_argument'}->isValid()) return ${'page_count69_argument'}->getErrorMessage();

${'list_count70_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count70_argument'}->ensureDefaultValue('20');
if(!${'list_count70_argument'}->isValid()) return ${'list_count70_argument'}->getErrorMessage();

${'sort_index66_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index66_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index66_argument'}->isValid()) return ${'sort_index66_argument'}->getErrorMessage();

${'sort_order67_argument'} = new SortArgument('sort_order67', $args->sort_order);
${'sort_order67_argument'}->ensureDefaultValue('asc');
if(!${'sort_order67_argument'}->isValid()) return ${'sort_order67_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin51_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied52_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls53_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id54_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name55_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name56_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name57_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address58_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars59_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate60_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login61_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more62_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less63_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more64_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less65_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index66_argument'}, $sort_order67_argument)
));
$query->setLimit(new Limit(${'list_count70_argument'}, ${'page68_argument'}, ${'page_count69_argument'}));
return $query; ?>