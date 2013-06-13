<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl76_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl76_argument'}->checkFilter('number');
${'member_srl76_argument'}->checkNotNull();
if(!${'member_srl76_argument'}->isValid()) return ${'member_srl76_argument'}->getErrorMessage();
if(${'member_srl76_argument'} !== null) ${'member_srl76_argument'}->setColumnType('number');

${'user_id77_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id77_argument'}->checkFilter('userid');
${'user_id77_argument'}->checkNotNull();
if(!${'user_id77_argument'}->isValid()) return ${'user_id77_argument'}->getErrorMessage();
if(${'user_id77_argument'} !== null) ${'user_id77_argument'}->setColumnType('varchar');

${'email_address78_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address78_argument'}->checkFilter('email');
${'email_address78_argument'}->checkNotNull();
if(!${'email_address78_argument'}->isValid()) return ${'email_address78_argument'}->getErrorMessage();
if(${'email_address78_argument'} !== null) ${'email_address78_argument'}->setColumnType('varchar');

${'password79_argument'} = new Argument('password', $args->{'password'});
${'password79_argument'}->checkNotNull();
if(!${'password79_argument'}->isValid()) return ${'password79_argument'}->getErrorMessage();
if(${'password79_argument'} !== null) ${'password79_argument'}->setColumnType('varchar');

${'email_id80_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id80_argument'}->checkNotNull();
if(!${'email_id80_argument'}->isValid()) return ${'email_id80_argument'}->getErrorMessage();
if(${'email_id80_argument'} !== null) ${'email_id80_argument'}->setColumnType('varchar');

${'email_host81_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host81_argument'}->checkNotNull();
if(!${'email_host81_argument'}->isValid()) return ${'email_host81_argument'}->getErrorMessage();
if(${'email_host81_argument'} !== null) ${'email_host81_argument'}->setColumnType('varchar');

${'user_name82_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name82_argument'}->checkNotNull();
if(!${'user_name82_argument'}->isValid()) return ${'user_name82_argument'}->getErrorMessage();
if(${'user_name82_argument'} !== null) ${'user_name82_argument'}->setColumnType('varchar');

${'nick_name83_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name83_argument'}->checkNotNull();
if(!${'nick_name83_argument'}->isValid()) return ${'nick_name83_argument'}->getErrorMessage();
if(${'nick_name83_argument'} !== null) ${'nick_name83_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question84_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question84_argument'}->isValid()) return ${'find_account_question84_argument'}->getErrorMessage();
} else
${'find_account_question84_argument'} = NULL;if(${'find_account_question84_argument'} !== null) ${'find_account_question84_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer85_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer85_argument'}->isValid()) return ${'find_account_answer85_argument'}->getErrorMessage();
} else
${'find_account_answer85_argument'} = NULL;if(${'find_account_answer85_argument'} !== null) ${'find_account_answer85_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage86_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage86_argument'}->isValid()) return ${'homepage86_argument'}->getErrorMessage();
} else
${'homepage86_argument'} = NULL;if(${'homepage86_argument'} !== null) ${'homepage86_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog87_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog87_argument'}->isValid()) return ${'blog87_argument'}->getErrorMessage();
} else
${'blog87_argument'} = NULL;if(${'blog87_argument'} !== null) ${'blog87_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday88_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday88_argument'}->isValid()) return ${'birthday88_argument'}->getErrorMessage();
} else
${'birthday88_argument'} = NULL;if(${'birthday88_argument'} !== null) ${'birthday88_argument'}->setColumnType('char');

${'allow_mailing89_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing89_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing89_argument'}->isValid()) return ${'allow_mailing89_argument'}->getErrorMessage();
if(${'allow_mailing89_argument'} !== null) ${'allow_mailing89_argument'}->setColumnType('char');

${'allow_message90_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message90_argument'}->ensureDefaultValue('Y');
if(!${'allow_message90_argument'}->isValid()) return ${'allow_message90_argument'}->getErrorMessage();
if(${'allow_message90_argument'} !== null) ${'allow_message90_argument'}->setColumnType('char');

${'denied91_argument'} = new Argument('denied', $args->{'denied'});
${'denied91_argument'}->ensureDefaultValue('N');
if(!${'denied91_argument'}->isValid()) return ${'denied91_argument'}->getErrorMessage();
if(${'denied91_argument'} !== null) ${'denied91_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date92_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date92_argument'}->isValid()) return ${'limit_date92_argument'}->getErrorMessage();
} else
${'limit_date92_argument'} = NULL;if(${'limit_date92_argument'} !== null) ${'limit_date92_argument'}->setColumnType('date');

${'regdate93_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate93_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate93_argument'}->isValid()) return ${'regdate93_argument'}->getErrorMessage();
if(${'regdate93_argument'} !== null) ${'regdate93_argument'}->setColumnType('date');

${'change_password_date94_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date94_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date94_argument'}->isValid()) return ${'change_password_date94_argument'}->getErrorMessage();
if(${'change_password_date94_argument'} !== null) ${'change_password_date94_argument'}->setColumnType('date');

${'last_login95_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login95_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login95_argument'}->isValid()) return ${'last_login95_argument'}->getErrorMessage();
if(${'last_login95_argument'} !== null) ${'last_login95_argument'}->setColumnType('date');

${'is_admin96_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin96_argument'}->ensureDefaultValue('N');
if(!${'is_admin96_argument'}->isValid()) return ${'is_admin96_argument'}->getErrorMessage();
if(${'is_admin96_argument'} !== null) ${'is_admin96_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description97_argument'} = new Argument('description', $args->{'description'});
if(!${'description97_argument'}->isValid()) return ${'description97_argument'}->getErrorMessage();
} else
${'description97_argument'} = NULL;if(${'description97_argument'} !== null) ${'description97_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars98_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars98_argument'}->isValid()) return ${'extra_vars98_argument'}->getErrorMessage();
} else
${'extra_vars98_argument'} = NULL;if(${'extra_vars98_argument'} !== null) ${'extra_vars98_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order99_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order99_argument'}->isValid()) return ${'list_order99_argument'}->getErrorMessage();
} else
${'list_order99_argument'} = NULL;if(${'list_order99_argument'} !== null) ${'list_order99_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl76_argument'})
,new InsertExpression('`user_id`', ${'user_id77_argument'})
,new InsertExpression('`email_address`', ${'email_address78_argument'})
,new InsertExpression('`password`', ${'password79_argument'})
,new InsertExpression('`email_id`', ${'email_id80_argument'})
,new InsertExpression('`email_host`', ${'email_host81_argument'})
,new InsertExpression('`user_name`', ${'user_name82_argument'})
,new InsertExpression('`nick_name`', ${'nick_name83_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question84_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer85_argument'})
,new InsertExpression('`homepage`', ${'homepage86_argument'})
,new InsertExpression('`blog`', ${'blog87_argument'})
,new InsertExpression('`birthday`', ${'birthday88_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing89_argument'})
,new InsertExpression('`allow_message`', ${'allow_message90_argument'})
,new InsertExpression('`denied`', ${'denied91_argument'})
,new InsertExpression('`limit_date`', ${'limit_date92_argument'})
,new InsertExpression('`regdate`', ${'regdate93_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date94_argument'})
,new InsertExpression('`last_login`', ${'last_login95_argument'})
,new InsertExpression('`is_admin`', ${'is_admin96_argument'})
,new InsertExpression('`description`', ${'description97_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars98_argument'})
,new InsertExpression('`list_order`', ${'list_order99_argument'})
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>