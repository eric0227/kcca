<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','setting.html') ?>
<?php if($__Context->li->site_template=='carousel'){ ?>
	<div class="navbar-wrapper">
		<div class="container">
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','navbar.html') ?>
		</div>
	</div>
	<?php if(($__Context->li->carousel_mobile_use=='no' && $__Context->is_not_mv) || $__Context->li->carousel_mobile_use=='yes'){ ?><div<?php if($__Context->li->carousel_mobile_use=='no'){ ?> class="hidden-phone hidden-tablet"<?php } ?>>
		<?php if($__Context->li->carousel_place){;
if(in_array($__Context->mid,$__Context->carousel_place)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','main_carousel.html');
} ?>
		<?php }else{;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','main_carousel.html');
} ?>
	</div><?php } ?>
<?php } ?>
<?php if($__Context->li->site_template=='default'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','navbar.html');
} ?>
<?php if($__Context->li->site_template=='usual1'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','header.html') ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','navbar.html') ?>
<?php } ?>
<div class="container">
	<?php if($__Context->li->site_template=='usual2'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','navbar.html');
} ?>
		<div class="content">
			<?php if($__Context->li->custom_top_html=='yes'){;
} ?>
			<?php if($__Context->li->frame!='fixed'){ ?><div class="row-fluid clear" id="container_row"><?php } ?>
				<?php if($__Context->li->frame=='fluid' && $__Context->is_not_mv){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','sidebar.html');
} ?>
				
				<div class="<?php if($__Context->li->frame!='fixed'){ ?>span<?php echo 12-$__Context->li->sb_width ?> <?php } ?>content" id="content">
					<?php if($__Context->li->custom_content_top=='yes'){;
} ?>
					
					<?php if($__Context->li->use_main_bc=='yes'){ ?><div class="breadcrumb main_bc hidden-phone hidden-tablet">
						<div class="pull-left">
							<a href="<?php echo getSiteUrl() ?>"><i class="icon-sitemap"></i></a>
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected']){ ?><ul>
								<li><a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['link'] ?></a> <?php if($__Context->val1['list']){ ?><span class="divider">/</span><?php } ?></li>
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['selected']){ ?>
									<li><a href="<?php echo $__Context->val2['href'] ?>"><?php echo $__Context->val2['link'] ?></a><?php if($__Context->val2['list']){ ?><span class="divider">/</span><?php } ?></li>
									<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['selected']){ ?>
										<li><a href="<?php echo $__Context->val3['href'] ?>"><?php echo $__Context->val3['link'] ?></a></li>
									<?php }} ?>
								<?php }} ?>
							</ul><?php }} ?>
						</div>
						<?php if($__Context->grant->manager){ ?><ul class="pull-right">
							<li><a href="<?php echo getUrl('','module','admin') ?>" target="_blank"><i class="icon-cog"></i> <?php echo $__Context->lang->cmd_management ?></a>
							<?php if($__Context->li->xe_version!='xe17'){ ?>
								<span class="divider">/</span></li>
								<li><a href="<?php echo getUrl('act','dispAdminTheme') ?>" target="_blank"><i class="icon-magic"></i> <?php echo $__Context->lang->tb_theme ?> <?php echo $__Context->lang->cmd_setup ?></a></li>
							<?php } ?>
						</ul><?php } ?>
						<div class="clearfix"></div>
					</div><?php } ?>
					<?php if($__Context->li->site_template!='carousel' && $__Context->li->carousel_use!='no'){ ?>
						<?php if(($__Context->li->carousel_mobile_use=='no' && $__Context->is_not_mv )|| $__Context->li->carousel_mobile_use=='yes'){ ?>
							<?php if($__Context->li->carousel_place){;
if(in_array($__Context->mid,$__Context->carousel_place)){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','main_carousel.html');
} ?>
							<?php }else{;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','main_carousel.html');
} ?>
						<?php } ?>
					<?php } ?>
					<article><div>
						<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="alert <?php if("{$__Context->XE_VALIDATOR_MESSAGE_TYPE}"=="info"){ ?>alert-info<?php }elseif("{$__Context->XE_VALIDATOR_MESSAGE_TYPE}"=="error"){ ?>alert-error<?php } ?>">
							<a class="close" data-dismiss="alert">&times;</a>
							<?php echo $__Context->XE_VALIDATOR_MESSAGE ?>
						</div><?php } ?>
						<?php echo $__Context->content ?>
						<div class="clearfix"></div>
					</div></article>
					<?php if($__Context->li->custom_content_bottom=='yes'){;
} ?>
				</div>
				<?php if($__Context->li->frame=='fluid2'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/the_bootstrap','sidebar.html');
} ?>
			<?php if($__Context->li->frame!='fixed'){ ?></div><?php } ?>
			<?php if($__Context->li->custom_bottom_html=='yes'){;
} ?>
		</div>
</div>
<?php if($__Context->li->custom_footer_replace=='yes'){;
} ?>
<?php if($__Context->li->custom_footer_replace!='yes'){ ?><footer class="<?php echo $__Context->li->footer_depth ?>" id="footer">
	<div class="container">
		<?php if($__Context->li->footer_depth=='depth3'){ ?><button type="button" class="close hidden-phone hidden-tablet" id="footer-toggle-btn"><i class="icon-chevron-up tooltip-top" data-title="<?php echo $__Context->lang->tb_more ?>" data-trigger="manual"></i></button><?php } ?>
		<div class="fr pull-right ac">
			<ul class="nav nav-list">
				<?php if($__Context->li->responsive!='no'){ ?>
					<?php if(Mobile::isMobileCheckByAgent() && !$__Context->_COOKIE['fakeM']){ ?><li class="fr">
						<a id="pc_view"><i class="icon-resize-full"></i> PC View</a>
					</li><?php } ?>
					<?php if(Mobile::isMobileCheckByAgent() && $__Context->_COOKIE['fakeM']){ ?><li class="fr">
						<a id="mobile_view"><i class="icon-resize-small"></i> MobileView </a>
					</li><?php } ?>
				<?php } ?>
				<?php if($__Context->li->footer_family_site=='yes' && $__Context->family_site->list){ ?><li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bookmark"></i> FamilySite</a>
					<ul class="nav nav-list nav-sub">
						<?php if($__Context->family_site->list&&count($__Context->family_site->list))foreach($__Context->family_site->list as $__Context->key1=>$__Context->val1){ ?>
							<li><a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a></li>
						<?php } ?>
					</ul>
				</li><?php } ?>
				<?php if($__Context->li->footer_lang=='yes'){ ?><li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-globe"></i> Language</a>
					<ul class="nav nav-list nav-sub">
						<li class="active"><a href="#" onclick="return false"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a></li>
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key => $__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?>
						<li><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></a></li>
						<?php };
} ?>
		   			</ul> 
				</li><?php } ?>
				<li>
					<a id="about_this_layout_bottom" href="http://www.wincomi.com" target="_blank"><i class=" icon-exclamation-sign"></i> Layout by Wincomi</a>
				</li>
			</ul>
		</div>
		<?php if($__Context->is_not_mv){ ?><div class="fl pull-left hidden-phone">
			<ul class="nav nav-list ac">
				<?php if($__Context->footer_menu->list&&count($__Context->footer_menu->list))foreach($__Context->footer_menu->list as $__Context->key1=>$__Context->val1){ ?>
					<?php if($__Context->val1['link']!="||||"){ ?>
					<li<?php if($__Context->val1['selected']){ ?> class="active"<?php } ?>>
						<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						<?php if($__Context->val1['list'] && $__Context->li->footer_depth=='depth3'){ ?><ul class="nav nav-list nav-sub">
							<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?>
								<?php if($__Context->val2['link']!="----"){ ?>
								<li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
									<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
									<?php if($__Context->val2['list']){ ?><ul class="nav nav-list nav-sub">
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?>
											<li<?php if($__Context->val3['selected']){ ?> class="active"<?php } ?> >
												<?php if($__Context->val3['link']!="----"){ ?>
												<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
												<?php if($__Context->val3['list']){ ?><ul>
													<?php if($__Context->val3['list']&&count($__Context->val3['list']))foreach($__Context->val3['list'] as $__Context->key4=>$__Context->val4){;
if($__Context->val4['link']){ ?><li<?php if($__Context->val4['selected']){ ?> class="active"<?php } ?>><a href="<?php echo $__Context->val4['href'] ?>"<?php if($__Context->val4['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val4['link'] ?></a></li><?php }} ?>
												</ul><?php } ?>
												<?php }else{ ?>
													<li class="divider"></li>
												<?php } ?>
											</li>
										<?php }} ?>					
									</ul><?php } ?>
								</li>
								<?php }else{ ?>
									<li class="divider"></li>
								<?php } ?>
							<?php }} ?>
						</ul><?php } ?>
					</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div><?php } ?>
		<?php if($__Context->li->copyright){ ?><div class="copyright"><?php echo $__Context->li->copyright ?></div><?php } ?>
	</div>
	<?php if($__Context->grant->manager && $__Context->li->analytics_iframe!='no'){ ?><iframe src="<?php echo $__Context->_analytics_url ?>" id="analytics-iframe" style="margin:0;border:0;width:0;height:0"></iframe><?php } ?>
</footer><?php } ?>
<?php if(!$__Context->is_logged){ ?><div class="modal modal-mini <?php if(!Mobile::isMobileCheckByAgent()){ ?>fade <?php } ?>hide" id="loginForm">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4><?php echo $__Context->lang->cmd_login ?></h4>
	</div>
	<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post"  style="margin:0" class="clear"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
		<div class="modal-body">
			<?php $__Context->member_config=MemberModel::getMemberConfig();$__Context->identifierForm->name=$__Context->member_config->identifier; ?>
			<input type="hidden" name="act" value="procMemberLogin" />
			<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
			<input type="<?php if($__Context->identifierForm->name=='email_address'){ ?>email<?php }else{ ?>text<?php } ?>" name="user_id" id="uid" value="" placeholder="<?php if($__Context->identifierForm->name=='email_address'){;
echo $__Context->lang->email;
}else{;
echo $__Context->lang->user_id;
} ?>" />
			<input type="password" name="password" id="upw" value="" placeholder="<?php echo $__Context->lang->password ?>" />
			<br />
			<input type="checkbox" name="keep_signed" id="keepid_opt" value="Y" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');" />
			<label for="keepid_opt" class="help-inline"><?php echo $__Context->lang->keep_signed ?></label>
		</div>
		<div class="modal-footer">
			<a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>" class="btn"><?php echo $__Context->lang->cmd_signup ?></a>
			<input type="submit" class="btn btn-primary" value="<?php echo $__Context->lang->cmd_login ?>" />
		</div>
	</form>
</div><?php } ?>
<?php if($__Context->is_not_mv && $__Context->li->use_totop!='no'){ ?><div id="toTop" class="tooltip-left" data-title="Top"><i class="icon-caret-up"></i></div><?php } ?>
<!-- <?php if($__Context->_program_name=='the_bootstrap_premium'){ ?>The Bootstrap Premium<?php }else{ ?>The Bootstrap<?php } ?> Layout ver <?php echo $__Context->_program_version ?> by http://www.wincomi.com -->