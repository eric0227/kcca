<?php if(!defined("__XE__"))exit;
$__Context->li=$__Context->layout_info;$__Context->dispAdminTheme_link=getUrl('act','dispAdminTheme');
	//$__Context->is_not_mv = !(Mobile::isFromMobilePhone() && !$__Context->_COOKIE['fakeM']);
	$__Context->is_not_mv = !(Mobile::isFromMobilePhone() && !Mobile::isMobilePadCheckByAgent() && !$__Context->_COOKIE['fakeM']);
	$__Context->_program_name = 'the_bootstrap';
	$__Context->_program_version = '3.5.0.1';
	$__Context->_analytics_server = 'http://www.wincomi.com/analytics/xe.php';
	$__Context->_analytics_host_info = '?name='.$__Context->_program_name.'&program_version='.$__Context->_program_version.'&site_domain='.urlencode(getenv('HTTP_HOST')).'&php='.phpversion().'&xe_version='.__XE_VERSION__.'&user_agent='.urlencode(getenv('HTTP_USER_AGENT'));
	$__Context->_analytics_url = $__Context->_analytics_server.$__Context->_analytics_host_info;
	
	Context::set("admin_bar","false");
	$__Context->li->site_frame_content = explode(',',$__Context->li->site_frame_content);
	if(in_array($__Context->mid,$__Context->li->site_frame_content)) $__Context->li->site_frame='content';
 ?>
<?php if($__Context->lang_type=='ko'){ ?>
<?php 
	$__Context->lang->tb_more="더보기";
	$__Context->lang->tb_message="쪽지";
	$__Context->lang->tb_theme="테마";
	$__Context->lang->tb_site="사이트";
	$__Context->lang->tb_message_alaram_title="쪽지 알림";
	$__Context->lang->tb_admin_only_content="";
	$__Context->lang->tb_socialxe_social_info="소셜 정보";
	$__Context->lang->tb_not_readed_message="개의 읽지 않은 쪽지가 있습니다.";
 ?>
<?php }else{ ?>
<?php 
	$__Context->lang->tb_more="More...";
	$__Context->lang->tb_message="Message";	
	$__Context->lang->tb_theme="Theme";
	$__Context->lang->tb_site="Site";
	$__Context->lang->tb_message_alaram_title="New Message";
	$__Context->lang->tb_admin_only_content ="";
	$__Context->lang->tb_socialxe_social_info="Social Infomation";
	$__Context->lang->tb_not_readed_message="";
 ?>
<?php } ?>
<!--#Meta:layouts/the_bootstrap/js/bootstrap.min.js--><?php $__tmp=array('layouts/the_bootstrap/js/bootstrap.min.js','body','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:layouts/the_bootstrap/js/script.min.js--><?php $__tmp=array('layouts/the_bootstrap/js/script.min.js','body','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php if($__Context->li->pretty_print=='yes'){ ?><!--#Meta:layouts/the_bootstrap/css/prettify.css--><?php $__tmp=array('layouts/the_bootstrap/css/prettify.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php if($__Context->li->pretty_print=='yes'){ ?><!--#Meta:layouts/the_bootstrap/js/prettify.js--><?php $__tmp=array('layouts/the_bootstrap/js/prettify.js','body','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php if($__Context->li->custom_js_js=='yes'){ ?><!--#Meta:/custom_js.js--><?php $__tmp=array('/custom_js.js','body','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php 
	if(!$__Context->li->xe_version) $__Context->li->xe_version="xe17";
	if(!$__Context->li->design) $__Context->li->design="default";
	if(!$__Context->li->frame) $__Context->li->frame="fluid";
	if(!$__Context->li->responsive) $__Context->li->responsive="yes";
	if(!$__Context->li->sb_width) $__Context->li->sb_width="2";
	if(!$__Context->li->sb_recent_doc_count) $__Context->li->sb_recent_doc_count='5';
	if(!$__Context->li->sb_recent_comm_count) $__Context->li->sb_recent_comm_count='5';
	if(!$__Context->li->site_template) $__Context->li->site_template='default';
	if(!$__Context->li->logo_title) $__Context->li->logo_title='The Bootstrap';
	if(!$__Context->li->default_bg_img) $__Context->li->default_bg_img="noise_lines";
	if(!$__Context->li->footer_depth) $__Context->li->footer_depth="depth3";
	if($__Context->li->responsive=='no'&&!$__Context->li->container_width) $__Context->li->container_width="940";
	$__Context->force_content = explode(',',$__Context->li->force_content);
	$__Context->carousel_place = explode(',',$__Context->li->carousel_place);
 ?>
<?php if(in_array($__Context->mid, $__Context->force_content)){;
$__Context->li->frame='fixed';
} ?>
<?php if($__Context->li->xe_version=="xe17"){ ?>
	<?php Context::unloadFile('/common/css/bootstrap.min.css','',''); ?>
	<?php Context::unloadFile('/common/css/bootstrap-responsive.min.css','',''); ?>
	<?php echo Context::set("admin_bar", "false") ?>
<?php } ?>
<?php switch($__Context->li->design){;
case  'custom': ?><!--#Meta:/custom_skin.css--><?php $__tmp=array('/custom_skin.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
break;
case  'cerulean': ?><!--#Meta:layouts/the_bootstrap/design/cerulean.min.css--><?php $__tmp=array('layouts/the_bootstrap/design/cerulean.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
break;
case  'simplex': ?><!--#Meta:layouts/the_bootstrap/design/simplex.min.css--><?php $__tmp=array('layouts/the_bootstrap/design/simplex.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
break;
case  'ubuntu': ?><!--#Meta:layouts/the_bootstrap/design/ubuntu.min.css--><?php $__tmp=array('layouts/the_bootstrap/design/ubuntu.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
break;
case  'cosmo': ?><!--#Meta:layouts/the_bootstrap/design/cosmo.min.css--><?php $__tmp=array('layouts/the_bootstrap/design/cosmo.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
break;
default : ?>
			<!--#Meta:layouts/the_bootstrap/css/bootstrap.min.css--><?php $__tmp=array('layouts/the_bootstrap/css/bootstrap.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
	<?php break;
} ?>
<?php if($__Context->li->responsive!='no'){ ?>
	<?php if(!$__Context->_COOKIE['fakeM']){;
Context::addHtmlHeader('<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=yes" />');
} ?>
	<!--#Meta:layouts/the_bootstrap/css/bootstrap-responsive.min.css--><?php $__tmp=array('layouts/the_bootstrap/css/bootstrap-responsive.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php } ?>
<!--#Meta:layouts/the_bootstrap/css/font-awesome-ie7.min.css--><?php $__tmp=array('layouts/the_bootstrap/css/font-awesome-ie7.min.css','','IE 7','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:layouts/the_bootstrap/css/style.min.css--><?php $__tmp=array('layouts/the_bootstrap/css/style.min.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<style id="style_cond"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap/css','style_cond.min.css') ?></style>
<script id="script_cond"><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap/js','script_cond.min.js') ?></script>
<?php if($__Context->li->custom_style_css=='yes'){ ?><!--#Meta:/custom_style.css--><?php $__tmp=array('/custom_style.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php if($__Context->li->fontface=='yes'&&$__Context->is_not_mv){ ?><script src="http://www.google.com/jsapi"></script><?php } ?>