<?php if(!defined("__XE__"))exit;?><div class="navbar<?php if(!$__Context->li->navbar_color || $__Context->li->navbar_color=='inverse'){ ?> navbar-inverse<?php };
if($__Context->li->site_template=='default'){ ?> navbar-fixed-top<?php } ?>" id="navbar">
	<div class="navbar-inner">
		<div class="container">
			
			<?php if($__Context->li->logo_title && $__Context->li->site_template!='usual1'){ ?><a class="brand" href="<?php echo $__Context->li->index_url ?>">
				<?php if($__Context->li->logo_img){ ?><img src="<?php echo $__Context->li->logo_img ?>" alt="<?php echo $__Context->li->logo_title ?>" />
				<?php }else{;
echo $__Context->li->logo_title;
} ?>
			</a><?php } ?>
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse#main-nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<?php if(!$__Context->is_logged){ ?><a href="#loginForm" data-toggle="modal" class="btn btn-navbar" style="padding:4px 10px"><i class="icon-user"></i> Login</a><?php } ?>
			<?php if($__Context->is_logged){ ?><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse#mobile-nav" style="padding:4px 10px"><i class="icon-user"></i> ME</a><?php } ?>
			<?php if($__Context->is_logged){ ?><div class="nav-collapse hidden-desktop" id="mobile-nav">
				<ul class="nav">
					<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo getUrl('act',$__Context->key,'member_srl','') ?>"><?php echo Context::getLang($__Context->val) ?></a></li><?php } ?>
					<li><?php if($__Context->li->member_menu_list_socialxe=='yes'){ ?><a href="<?php echo getURL('act','dispSocialxeSocialInfo') ?>"><?php echo $__Context->lang->tb_socialxe_social_info ?></a><?php } ?></li>
					<?php if($__Context->grant->manager){ ?>
						<li><a href="<?php echo getUrl('','module','admin') ?>" target="_blank"><?php echo $__Context->lang->cmd_management ?></a></li>
						<li><?php if($__Context->li->xe_version!='xe17'){ ?><a href="<?php echo getUrl('act','dispAdminTheme') ?>" target="_blank"><?php echo $__Context->lang->tb_theme ?> <?php echo $__Context->lang->cmd_setup ?></a><?php } ?></li>
					<?php } ?>
					<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>" onclick="if(confirm('<?php echo $__Context->lang->confirm_logout ?>')==false) return false;"><?php echo $__Context->lang->cmd_logout ?></a></li>
				</ul>
			</div><?php } ?>
			<div class="nav-collapse" id="main-nav">
				<form action="<?php echo getUrl() ?>" method="get" class="navbar-search hidden-desktop" style="padding-left:.8em;padding-right:.8em"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" />
					<ul class="nav">
						<li>
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="act" value="IS" />
							<input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="search-query input-block-level" placeholder="<?php echo $__Context->lang->cmd_search ?>" style="border-radius:4px;padding-left:10px;papdding-right:10px;" autocomplete="off" />
							<button type="submit" class="hide btn btn-primary"><?php echo $__Context->lang->cmd_search ?></button>
						</li>
					</ul>
				</form>
				<ul class="nav">
					
					<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['text']){ ?>
						<?php if($__Context->val1['link']!="||||"){ ?>
							<li class="<?php if($__Context->val1['list']){ ?>dropdown<?php };
if($__Context->val1['selected']){ ?> active<?php } ?>">
								<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'];
if($__Context->val1['list']){ ?> <b class="caret"></b><?php } ?></a>
								<?php if($__Context->val1['list']){ ?><ul class="dropdown-menu">
									<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){;
if($__Context->val2['link']){ ?>
										<?php if($__Context->val2['link']!="----"){ ?>
											<li class="<?php if($__Context->val2['list']){ ?>dropdown-submenu<?php };
if($__Context->val2['selected']){ ?> active<?php } ?>">
												<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
												<?php if($__Context->val2['list']){ ?><ul class="dropdown-menu">
													<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){;
if($__Context->val3['link']){ ?>
														<?php if($__Context->val3['link']!="----"){ ?>
															<li class="<?php if($__Context->val3['list']){ ?>dropdown-submenu<?php };
if($__Context->val3['selected']){ ?> active<?php } ?>">
																<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
																<?php if($__Context->val3['list']){ ?><ul class="dropdown-menu">
																	<?php if($__Context->val3['list']&&count($__Context->val3['list']))foreach($__Context->val3['list'] as $__Context->key4=>$__Context->val4){;
if($__Context->val4['link']){ ?>
																		<?php if($__Context->val4['link']!="----"){ ?>
																			<li class="<?php if($__Context->val4['list']){ ?>dropdown-submenu<?php };
if($__Context->val4['selected']){ ?> active<?php } ?>">
																				<a href="<?php echo $__Context->val4['href'] ?>"<?php if($__Context->val4['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val4['link'] ?></a>
																			</li>
																		<?php }else{ ?>
																			<li class="divider"></li>
																		<?php } ?>
																	<?php }} ?>
																</ul><?php } ?>
															</li>
														<?php }else{ ?>
															<li class="divider"></li>
														<?php } ?>
													<?php }} ?>
												</ul><?php } ?>
											</li>
										<?php }else{ ?>
											<li class="divider"></li>
										<?php } ?>
									<?php }} ?>
								</ul><?php } ?>
							</li>
						<?php }else{ ?>
							<li class="divider-vertical"></li>
						<?php } ?>
					<?php }} ?>
				</ul>
				<ul class="nav pull-right hidden-phone hidden-tablet">
					
					<?php if($__Context->li->top_search=='default'){ ?><li>
						<form action="<?php echo getUrl() ?>" method="get" class="navbar-search" id="top_search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" />
							<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="act" value="IS" />
							<input type="text" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" class="search-query" placeholder="<?php echo $__Context->lang->cmd_search ?>"  x-webkit-speech />
						</form>
					</li><?php } ?>
					<?php if($__Context->li->site_template=='default'||$__Context->li->site_template=='carousel'||$__Context->li->site_template=='usual2'){ ?>
						<li class="divider-vertical"></li>
						
						<?php if($__Context->li->tb_good_view=='yes' && !Mobile::isMobileCheckByAgent()){ ?><li class="dropdown no-hover hidden-phone hidden-tablet" id="tb_good_view">
							<a href="#" data-toggle="dropdown"><i class="icon-cog"></i>&nbsp;</a>
								<ul class="dropdown-menu">
									<li class="nav-header">Good View</li>
									<?php if($__Context->li->frame!='fixed'){ ?><li><a href="#" id="tgv_aside"><i class="icon-fullscreen"></i> <span>Sidebar <?php if(!$__Context->_COOKIE['tgv_aside']){ ?>Hide<?php }else{ ?>Show<?php } ?></span></a></li><?php } ?>
									<?php if($__Context->li->carousel_use=='yes' && $__Context->li->site_template!='carousel'){ ?><li><a href="#" id="tgv_carousel"><i class="icon-film"></i> <span>Slider <?php if(!$__Context->_COOKIE['tgv_carousel']){ ?>Hide<?php }else{ ?>Show<?php } ?></span></a></li><?php } ?>
									<li class="dropdown-submenu">
										<a href="#"><i class="icon-globe"></i> Languages</a>
										<ul class="dropdown-menu">
											<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key => $__Context->val){;
if($__Context->key!= $__Context->lang_type){ ?>
											<li><a href="#" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;"><?php echo $__Context->val ?></a></li>
											<?php };
} ?>
											<li class="vertical-divider"></li>
											<li><a href="#"><?php echo $__Context->lang_supported[$__Context->lang_type] ?></a></li>
						       			</ul>
									</li>
									<?php if($__Context->grant->manager){ ?>
										<li class="divider"></li>
										<li><a href="<?php echo getUrl('','module','admin') ?>"><i class="icon-cog"></i> <?php echo $__Context->lang->cmd_management ?></a></li>
									<?php } ?>
								</ul>
						</li><?php } ?>
						<?php if($__Context->li->message_list=='yes' && $__Context->is_logged){ ?><li id="message_list" class="dropdown">
							<!--#Meta:/communication.js--><?php $__tmp=array('/communication.js','body','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
							<?php if($__Context->li->message_list=='yes' && $__Context->is_logged){ ?>
								<?php 
									$__Context->db_info = Context::getDBInfo();
									$__Context->oDB = &DB::getInstance();
									$__Context->query = $__Context->oDB->_query('select * from '.$__Context->db_info->master_db[db_table_prefix].'member_message where receiver_srl = '.$__Context->logged_info->member_srl.' AND message_type = "R" ORDER BY regdate DESC limit 0, 5');
									$__Context->result = $__Context->oDB->_fetch($__Context->query);
									$__Context->output = executeQueryArray('addons.message_alarm.getMessageCount', $__Context->aobj);
								 ?>
								<?php if(count($__Context->output->data) && !Mobile::isMobileCheckByAgent()){ ?>
									<script>
										jQuery(function($){$(".navbar a").hover(function(){$("#message_list>a").tooltip('hide');}).tooltip({placement:"bottom",trigger:"manual",title:"<?php echo count($__Context->output->data);
echo $__Context->lang->tb_not_readed_message ?>"}).delay(500).queue(function(){$("#message_list>a").tooltip('show');}).delay(5000).queue(function(){$("#message_list>a").tooltip('hide');})});
									</script>
								<?php } ?>
							<?php } ?>
							<a href="<?php echo getURL('act','dispCommunicationMessages') ?>">
								<i class="icon-envelope-alt"></i>&nbsp;
							</a>
							
							<ul class="dropdown-menu">
								<li class="nav-header">Message List</li>
								<?php if(!$__Context->result){ ?><li style="text-align:center"><?php echo $__Context->lang->msg_no_message ?></li><?php } ?>
								<?php if(is_array($__Context->result)==true){ ?>
									<?php if($__Context->result&&count($__Context->result))foreach($__Context->result as $__Context->key=>$__Context->val){ ?>
									<?php 
										$__Context->oMemberModel =& getModel('member');
										$__Context->member_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->sender_srl);
									 ?>
									<li<?php if($__Context->val->readed=='Y'){ ?> class="readed"<?php } ?>>
										<a href="<?php echo getURL('act','dispCommunicationMessages','message_srl',$__Context->val->message_srl) ?>" class="popover-left" title="<?php echo strip_tags($__Context->val->title) ?>" data-content="<?php echo iconv_substr(strip_tags($__Context->val->content),0,100,'UTF-8') ?>" >
											<?php if($__Context->member_info->profile_image->src){ ?>
												<img src="<?php echo $__Context->member_info->profile_image->src ?>" class="img-polaroid profile_img" alt="profile image" />
											<?php }else{ ?>
												<img src="/kcca/xe/layouts/the_bootstrap/img/profile.gif" class="img-polaroid profile_img" alt="profile image" >
											<?php } ?>
											<span class="content">
												<span class="nickname">
													<?php echo $__Context->member_info->nick_name ?>
												</span>
												<span class="title">
													<?php echo strip_tags($__Context->val->title) ?>...
												</span>
											</span>
											<span class="clear" style="display:block"></span>
											<button type="button" onclick="doSendMessage('<?php echo $__Context->member_info->member_srl ?>','<?php echo $__Context->val->message_srl ?>');return false;" class="btn btn-mini reply_message"><i class="icon-share-alt"></i> <?php echo $__Context->lang->cmd_reply_message ?></button>	
											<button type="button" class="btn btn-mini"><?php echo $__Context->lang->tb_more ?></button>
											<span class="clear" style="display:block"></span>
										</a>
									</li>
								<?php } ?>
								<li class="divider"></li>
								<li class="more"><a href="<?php echo getURL('act','dispCommunicationMessages') ?>"><i class="icon-share-alt"></i> <?php echo $__Context->lang->tb_more ?></a></li>
								<?php }else{ ?>
									<?php 
										$__Context->oMemberModel =& getModel('member');
										$__Context->member_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->result->sender_srl);
									 ?>
									<li<?php if($__Context->result->readed=='Y'){ ?> class="readed"<?php } ?>>
										<a href="<?php echo getURL('act','dispCommunicationMessages','message_srl',$__Context->result->message_srl) ?>" class="popover-left<?php if($__Context->val->readed=='Y'){ ?> readed<?php } ?>" rel="popover" title="<?php echo strip_tags($__Context->result->title) ?>" data-content="<?php echo substr(strip_tags($__Context->result->content),0,100) ?>" >
											<?php if($__Context->member_info->profile_image->src){ ?>
												<img src="<?php echo $__Context->member_info->profile_image->src ?>" class="img-polaroid profile_img" alt="profile image" />
											<?php }else{ ?>
												<img src="/kcca/xe/layouts/the_bootstrap/img/profile.gif" class="img-polaroid profile_img" alt="profile image"/>
											<?php } ?>
											<span class="content">
												<span class="nickname">
													<?php echo $__Context->member_info->nick_name ?>
												</span>
												<span class="title">
													<?php echo strip_tags($__Context->result->title) ?>
												</span>
											</span>
											<span class="clear" style="display:block"></span>
											<button type="button" onclick="doSendMessage('<?php echo $__Context->member_info->member_srl ?>','<?php echo $__Context->val->message_srl ?>');return false;" class="btn btn-mini reply_message"><i class="icon-share-alt"></i> <?php echo $__Context->lang->cmd_reply_message ?></button>
											<button type="button" class="btn btn-mini"><i class="icon-eye-open"></i> <?php echo $__Context->lang->tb_more ?></button>
											<span class="clear" style="display:block"></span>
										</a>
									</li>
									<li class="divider"></li>
									<li class="more"><a href="<?php echo getURL('act','dispCommunicationMessages') ?>"><?php echo $__Context->lang->tb_more ?></a></li>
								<?php } ?>
							</ul>
						</li><?php } ?>
						<?php if($__Context->li->use_social_login!='yes' && !$__Context->is_logged){ ?><li class="dropdown" id="navbar-login-btn">
							<a href="#loginForm" data-toggle="modal"><i class="icon-user"></i>&nbsp;</a>
							<ul class="dropdown-menu">
								<li><a href="#loginForm" data-toggle="modal"><?php echo $__Context->lang->cmd_login ?></a></li>
								<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
								
								<li><a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a></li>
								<li><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
							</ul>
						</li><?php } ?>
						<?php if(!$__Context->is_logged && $__Context->li->use_social_login=='yes'){ ?><li class="dropdown" id="navbar-login-btn"><a href="#" ><i class="icon-user"></i>&nbsp;</a>
							<ul class="dropdown-menu">
								<li class="nav-header">Social Login</li>
								<li>
									<a href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', twitter, 'mode', 'socialLogin', 'query', getNotEncodedFullUrl('', 'mid', $__Context->mid)) ?>">Twitter</a>
								</li>
								<li>
									<a href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', facebook, 'mode', 'socialLogin', 'query', getNotEncodedFullUrl('', 'mid', $__Context->mid)) ?>">Facebook</a>
								</li>
								<li>
									<a href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', me2day, 'mode', 'socialLogin', 'query', getNotEncodedFullUrl('', 'mid', $__Context->mid)) ?>">Me2day</a>
								</li>
								<li>
									<a href="<?php echo getSiteUrl($__Context->domain,'', 'mid', $__Context->mid, 'vid', $__Context->vid, 'act', 'dispSocialxeLogin', 'provider', yozm, 'mode', 'socialLogin', 'query', getNotEncodedFullUrl('', 'mid', $__Context->mid)) ?>">Yozm</a>
								</li>
								<li class="nav-header">Default Login</li>
								<li><a href="#loginForm" data-toggle="modal"><?php echo $__Context->lang->cmd_login ?></a></li>
								<li><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
								<li><a href="<?php echo getUrl('act','dispMemberResendAuthMail') ?>"><?php echo $__Context->lang->cmd_resend_auth_mail ?></a></li>
								<li><a href="<?php echo getUrl('act','dispMemberFindAccount') ?>"><?php echo $__Context->lang->cmd_find_member_account ?></a></li>
							</ul>
						</li><?php } ?>
						<?php if($__Context->is_logged){ ?><li class="dropdown">
							<a href="#"><i class="icon-user-md"></i>&nbsp;</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
								<li class="nav-header">Member</li>
								<li class="profile_img" style="padding-bottom:10px">
									<a href="<?php echo getURL('act','dispMemberInfo') ?>">
										<?php if($__Context->logged_info->profile_image->src){ ?>
										<img src="<?php echo $__Context->logged_info->profile_image->src ?>" class="img-polaroid profile_img" alt="profile image" />
										<?php }else{ ?>
										<img src="/kcca/xe/layouts/the_bootstrap/img/profile.gif" class="img-polaroid profile_img" alt="profile image" />
										<?php } ?>
										<span class="nickname"><?php echo $__Context->logged_info->nick_name ?></span>
									</a>
								</li>
								<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li><a href="<?php echo getUrl('act',$__Context->key,'member_srl','') ?>"><?php echo Context::getLang($__Context->val) ?></a></li><?php } ?>
								<?php if($__Context->li->member_point=='yes'){ ?>
									<li class="nav-header">Point</li>
									<li class="point_statue" style="padding:10px">
										<img class="zbxe_widget_output" widget="point_status" skin="bootstrap" colorset="layout" />
									</li>
								<?php } ?>
								<?php if($__Context->grant->manager){ ?>
									<li class="nav-header">Admin</li>
									<li><a href="<?php echo getUrl('','module','admin') ?>" target="_blank"><?php echo $__Context->lang->cmd_management ?></a></li>
									<li><?php if($__Context->li->xe_version!='xe17'){ ?><a href="<?php echo getUrl('act','dispAdminTheme') ?>" target="_blank"><?php echo $__Context->lang->tb_theme ?> <?php echo $__Context->lang->cmd_setup ?></a><?php } ?></li>
								<?php } ?>
							</ul>
						</li><?php } ?>
						<?php if($__Context->li->top_search=='dropdown'){ ?><li class="search_dropdown dropdown">
							<a href="#" class="dropdown-toggle"><i class="icon-search"></i>&nbsp;</a>
							<script>
								jQuery(function($){
									$('#navbar .search_dropdown').hover(
										function(){$(this).children('div.dropdown-menu').stop(true,true).hide().fadeIn(100);},
										function(){$(this).children('div.dropdown-menu').stop(true,true).fadeOut(100);}
									);
								});
							</script>
							<div class="dropdown-menu" style="padding:10px" id="top_search">
								<form action="<?php echo getUrl() ?>" method="get" style="margin-bottom:0" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" />
									<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
									<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
									<input type="hidden" name="act" value="IS" />
									<input type="search" name="is_keyword" value="<?php echo $__Context->is_keyword ?>" title="<?php echo $__Context->lang->cmd_search ?>" placeholder="<?php echo $__Context->lang->cmd_search ?>" style="margin-bottom:0" />
									<button type="submit" class="hide btn btn-primary"><?php echo $__Context->lang->cmd_search ?></button>
								</form>
							</div>
						</li><?php } ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>