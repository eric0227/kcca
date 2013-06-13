<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl211_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl211_argument'}->checkFilter('number');
${'document_srl211_argument'}->checkNotNull();
if(!${'document_srl211_argument'}->isValid()) return ${'document_srl211_argument'}->getErrorMessage();
if(${'document_srl211_argument'} !== null) ${'document_srl211_argument'}->setColumnType('number');

${'module_srl212_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl212_argument'}->checkFilter('number');
${'module_srl212_argument'}->ensureDefaultValue('0');
if(!${'module_srl212_argument'}->isValid()) return ${'module_srl212_argument'}->getErrorMessage();
if(${'module_srl212_argument'} !== null) ${'module_srl212_argument'}->setColumnType('number');

${'category_srl213_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl213_argument'}->checkFilter('number');
${'category_srl213_argument'}->ensureDefaultValue('0');
if(!${'category_srl213_argument'}->isValid()) return ${'category_srl213_argument'}->getErrorMessage();
if(${'category_srl213_argument'} !== null) ${'category_srl213_argument'}->setColumnType('number');

${'lang_code214_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code214_argument'}->ensureDefaultValue('');
if(!${'lang_code214_argument'}->isValid()) return ${'lang_code214_argument'}->getErrorMessage();
if(${'lang_code214_argument'} !== null) ${'lang_code214_argument'}->setColumnType('varchar');

${'is_notice215_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice215_argument'}->ensureDefaultValue('N');
${'is_notice215_argument'}->checkNotNull();
if(!${'is_notice215_argument'}->isValid()) return ${'is_notice215_argument'}->getErrorMessage();
if(${'is_notice215_argument'} !== null) ${'is_notice215_argument'}->setColumnType('char');

${'title216_argument'} = new Argument('title', $args->{'title'});
${'title216_argument'}->checkNotNull();
if(!${'title216_argument'}->isValid()) return ${'title216_argument'}->getErrorMessage();
if(${'title216_argument'} !== null) ${'title216_argument'}->setColumnType('varchar');

${'title_bold217_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold217_argument'}->ensureDefaultValue('N');
if(!${'title_bold217_argument'}->isValid()) return ${'title_bold217_argument'}->getErrorMessage();
if(${'title_bold217_argument'} !== null) ${'title_bold217_argument'}->setColumnType('char');

${'title_color218_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color218_argument'}->ensureDefaultValue('N');
if(!${'title_color218_argument'}->isValid()) return ${'title_color218_argument'}->getErrorMessage();
if(${'title_color218_argument'} !== null) ${'title_color218_argument'}->setColumnType('varchar');

${'content219_argument'} = new Argument('content', $args->{'content'});
${'content219_argument'}->checkNotNull();
if(!${'content219_argument'}->isValid()) return ${'content219_argument'}->getErrorMessage();
if(${'content219_argument'} !== null) ${'content219_argument'}->setColumnType('bigtext');

${'readed_count220_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count220_argument'}->ensureDefaultValue('0');
if(!${'readed_count220_argument'}->isValid()) return ${'readed_count220_argument'}->getErrorMessage();
if(${'readed_count220_argument'} !== null) ${'readed_count220_argument'}->setColumnType('number');

${'blamed_count221_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count221_argument'}->ensureDefaultValue('0');
if(!${'blamed_count221_argument'}->isValid()) return ${'blamed_count221_argument'}->getErrorMessage();
if(${'blamed_count221_argument'} !== null) ${'blamed_count221_argument'}->setColumnType('number');

${'voted_count222_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count222_argument'}->ensureDefaultValue('0');
if(!${'voted_count222_argument'}->isValid()) return ${'voted_count222_argument'}->getErrorMessage();
if(${'voted_count222_argument'} !== null) ${'voted_count222_argument'}->setColumnType('number');

${'comment_count223_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count223_argument'}->ensureDefaultValue('0');
if(!${'comment_count223_argument'}->isValid()) return ${'comment_count223_argument'}->getErrorMessage();
if(${'comment_count223_argument'} !== null) ${'comment_count223_argument'}->setColumnType('number');

${'trackback_count224_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count224_argument'}->ensureDefaultValue('0');
if(!${'trackback_count224_argument'}->isValid()) return ${'trackback_count224_argument'}->getErrorMessage();
if(${'trackback_count224_argument'} !== null) ${'trackback_count224_argument'}->setColumnType('number');

${'uploaded_count225_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count225_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count225_argument'}->isValid()) return ${'uploaded_count225_argument'}->getErrorMessage();
if(${'uploaded_count225_argument'} !== null) ${'uploaded_count225_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password226_argument'} = new Argument('password', $args->{'password'});
if(!${'password226_argument'}->isValid()) return ${'password226_argument'}->getErrorMessage();
} else
${'password226_argument'} = NULL;if(${'password226_argument'} !== null) ${'password226_argument'}->setColumnType('varchar');

${'nick_name227_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name227_argument'}->checkNotNull();
if(!${'nick_name227_argument'}->isValid()) return ${'nick_name227_argument'}->getErrorMessage();
if(${'nick_name227_argument'} !== null) ${'nick_name227_argument'}->setColumnType('varchar');

${'member_srl228_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl228_argument'}->checkFilter('number');
${'member_srl228_argument'}->ensureDefaultValue('0');
if(!${'member_srl228_argument'}->isValid()) return ${'member_srl228_argument'}->getErrorMessage();
if(${'member_srl228_argument'} !== null) ${'member_srl228_argument'}->setColumnType('number');

${'user_id229_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id229_argument'}->ensureDefaultValue('');
if(!${'user_id229_argument'}->isValid()) return ${'user_id229_argument'}->getErrorMessage();
if(${'user_id229_argument'} !== null) ${'user_id229_argument'}->setColumnType('varchar');

${'user_name230_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name230_argument'}->ensureDefaultValue('');
if(!${'user_name230_argument'}->isValid()) return ${'user_name230_argument'}->getErrorMessage();
if(${'user_name230_argument'} !== null) ${'user_name230_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address231_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address231_argument'}->checkFilter('email');
if(!${'email_address231_argument'}->isValid()) return ${'email_address231_argument'}->getErrorMessage();
} else
${'email_address231_argument'} = NULL;if(${'email_address231_argument'} !== null) ${'email_address231_argument'}->setColumnType('varchar');

${'homepage232_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage232_argument'}->checkFilter('homepage');
${'homepage232_argument'}->ensureDefaultValue('');
if(!${'homepage232_argument'}->isValid()) return ${'homepage232_argument'}->getErrorMessage();
if(${'homepage232_argument'} !== null) ${'homepage232_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags233_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags233_argument'}->isValid()) return ${'tags233_argument'}->getErrorMessage();
} else
${'tags233_argument'} = NULL;if(${'tags233_argument'} !== null) ${'tags233_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars234_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars234_argument'}->isValid()) return ${'extra_vars234_argument'}->getErrorMessage();
} else
${'extra_vars234_argument'} = NULL;if(${'extra_vars234_argument'} !== null) ${'extra_vars234_argument'}->setColumnType('text');

${'regdate235_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate235_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate235_argument'}->isValid()) return ${'regdate235_argument'}->getErrorMessage();
if(${'regdate235_argument'} !== null) ${'regdate235_argument'}->setColumnType('date');

${'last_update236_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update236_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update236_argument'}->isValid()) return ${'last_update236_argument'}->getErrorMessage();
if(${'last_update236_argument'} !== null) ${'last_update236_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater237_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater237_argument'}->isValid()) return ${'last_updater237_argument'}->getErrorMessage();
} else
${'last_updater237_argument'} = NULL;if(${'last_updater237_argument'} !== null) ${'last_updater237_argument'}->setColumnType('varchar');

${'ipaddress238_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress238_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress238_argument'}->isValid()) return ${'ipaddress238_argument'}->getErrorMessage();
if(${'ipaddress238_argument'} !== null) ${'ipaddress238_argument'}->setColumnType('varchar');

${'list_order239_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order239_argument'}->ensureDefaultValue('0');
if(!${'list_order239_argument'}->isValid()) return ${'list_order239_argument'}->getErrorMessage();
if(${'list_order239_argument'} !== null) ${'list_order239_argument'}->setColumnType('number');

${'update_order240_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order240_argument'}->ensureDefaultValue('0');
if(!${'update_order240_argument'}->isValid()) return ${'update_order240_argument'}->getErrorMessage();
if(${'update_order240_argument'} !== null) ${'update_order240_argument'}->setColumnType('number');

${'allow_trackback241_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback241_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback241_argument'}->isValid()) return ${'allow_trackback241_argument'}->getErrorMessage();
if(${'allow_trackback241_argument'} !== null) ${'allow_trackback241_argument'}->setColumnType('char');

${'notify_message242_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message242_argument'}->ensureDefaultValue('N');
if(!${'notify_message242_argument'}->isValid()) return ${'notify_message242_argument'}->getErrorMessage();
if(${'notify_message242_argument'} !== null) ${'notify_message242_argument'}->setColumnType('char');

${'status243_argument'} = new Argument('status', $args->{'status'});
${'status243_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status243_argument'}->isValid()) return ${'status243_argument'}->getErrorMessage();
if(${'status243_argument'} !== null) ${'status243_argument'}->setColumnType('varchar');

${'commentStatus244_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus244_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus244_argument'}->isValid()) return ${'commentStatus244_argument'}->getErrorMessage();
if(${'commentStatus244_argument'} !== null) ${'commentStatus244_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl211_argument'})
,new InsertExpression('`module_srl`', ${'module_srl212_argument'})
,new InsertExpression('`category_srl`', ${'category_srl213_argument'})
,new InsertExpression('`lang_code`', ${'lang_code214_argument'})
,new InsertExpression('`is_notice`', ${'is_notice215_argument'})
,new InsertExpression('`title`', ${'title216_argument'})
,new InsertExpression('`title_bold`', ${'title_bold217_argument'})
,new InsertExpression('`title_color`', ${'title_color218_argument'})
,new InsertExpression('`content`', ${'content219_argument'})
,new InsertExpression('`readed_count`', ${'readed_count220_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count221_argument'})
,new InsertExpression('`voted_count`', ${'voted_count222_argument'})
,new InsertExpression('`comment_count`', ${'comment_count223_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count224_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count225_argument'})
,new InsertExpression('`password`', ${'password226_argument'})
,new InsertExpression('`nick_name`', ${'nick_name227_argument'})
,new InsertExpression('`member_srl`', ${'member_srl228_argument'})
,new InsertExpression('`user_id`', ${'user_id229_argument'})
,new InsertExpression('`user_name`', ${'user_name230_argument'})
,new InsertExpression('`email_address`', ${'email_address231_argument'})
,new InsertExpression('`homepage`', ${'homepage232_argument'})
,new InsertExpression('`tags`', ${'tags233_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars234_argument'})
,new InsertExpression('`regdate`', ${'regdate235_argument'})
,new InsertExpression('`last_update`', ${'last_update236_argument'})
,new InsertExpression('`last_updater`', ${'last_updater237_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress238_argument'})
,new InsertExpression('`list_order`', ${'list_order239_argument'})
,new InsertExpression('`update_order`', ${'update_order240_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback241_argument'})
,new InsertExpression('`notify_message`', ${'notify_message242_argument'})
,new InsertExpression('`status`', ${'status243_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus244_argument'})
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>