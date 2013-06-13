<?php if(!defined("__XE__"))exit;?>
<!--#Meta:layouts/xecenter/js/jquery.cookie.js--><?php $__tmp=array('layouts/xecenter/js/jquery.cookie.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<!--#Meta:layouts/xecenter/js/default.js--><?php $__tmp=array('layouts/xecenter/js/default.js','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
<?php if($__Context->layout_info->colorset == 'black'){ ?><!--#Meta:layouts/xecenter/css/black.css--><?php $__tmp=array('layouts/xecenter/css/black.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset == 'red'){ ?><!--#Meta:layouts/xecenter/css/red.css--><?php $__tmp=array('layouts/xecenter/css/red.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<!-- 로그인 박스 -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/xecenter/object/login_box','login_box.html') ?>
<!-- 에러 메세지 출력 -->
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="bg_error" onclick="jQuery('.bg_error').fadeOut('100')">
	<div class="bg_msg_error"></div>
	<div class="msg_error"><img src="/kcca/xe/layouts/xecenter/img/error_green.png" alt="error_msg"/><?php echo $__Context->XE_VALIDATOR_MESSAGE ?> <br /><br />화면 클릭시 메세지가 사라집니다</div>
</div><?php } ?>
<!-- 심플 메뉴 -->
<?php if($__Context->layout_info->simple_menu_use_wrap != 'no'){ ?><div class="simple_menu">
	<ul>
		<?php if($__Context->layout_info->simple_menu1_use != 'no'){ ?><li>
			<?php if(!$__Context->layout_info->simple_menu1_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu1_url ?>" <?php if($__Context->layout_info->simple_menu1_new == 'yes'){ ?>target="_blank"<?php } ?>>심플메뉴1<img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu1_icon ?>"  alt="simple_menu" /></a><?php } ?>
			<?php if($__Context->layout_info->simple_menu1_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu1_url ?>" <?php if($__Context->layout_info->simple_menu1_new == 'yes'){ ?>target="_blank"<?php } ?>><?php echo $__Context->layout_info->simple_menu1_text ?><img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu1_icon ?>"  alt="simple_menu" /></a><?php } ?>
		</li><?php } ?>
		<?php if($__Context->layout_info->simple_menu2_use != 'no'){ ?><li>
			<?php if(!$__Context->layout_info->simple_menu2_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu2_url ?>" <?php if($__Context->layout_info->simple_menu2_new == 'yes'){ ?>target="_blank"<?php } ?>>심플메뉴2<img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu2_icon ?>"  alt="simple_menu" /></a><?php } ?>
			<?php if($__Context->layout_info->simple_menu2_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu2_url ?>"<?php if($__Context->layout_info->simple_menu2_new == 'yes'){ ?>target="_blank"<?php } ?>><?php echo $__Context->layout_info->simple_menu2_text ?><img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu2_icon ?>"  alt="simple_menu" /></a><?php } ?>
		</li><?php } ?>
		<?php if($__Context->layout_info->simple_menu3_use != 'no'){ ?><li>
			<?php if(!$__Context->layout_info->simple_menu3_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu3_url ?>" <?php if($__Context->layout_info->simple_menu3_new == 'yes'){ ?>target="_blank"<?php } ?>>심플메뉴3<img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu3_icon ?>"  alt="simple_menu" /></a><?php } ?>
			<?php if($__Context->layout_info->simple_menu3_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu3_url ?>" <?php if($__Context->layout_info->simple_menu3_new == 'yes'){ ?>target="_blank"<?php } ?>><?php echo $__Context->layout_info->simple_menu3_text ?><img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu3_icon ?>"  alt="simple_menu" /></a><?php } ?>
		</li><?php } ?>
		<?php if($__Context->layout_info->simple_menu4_use != 'no'){ ?><li>
			<?php if(!$__Context->layout_info->simple_menu4_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu4_url ?>" <?php if($__Context->layout_info->simple_menu4_new == 'yes'){ ?>target="_blank"<?php } ?>>심플메뉴4<img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu4_icon ?>"  alt="simple_menu" /></a><?php } ?>
			<?php if($__Context->layout_info->simple_menu4_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu4_url ?>" <?php if($__Context->layout_info->simple_menu4_new == 'yes'){ ?>target="_blank"<?php } ?>><?php echo $__Context->layout_info->simple_menu4_text ?><img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu4_icon ?>"  alt="simple_menu" /></a><?php } ?>
		</li><?php } ?>
		<?php if($__Context->layout_info->simple_menu5_use != 'no'){ ?><li>
			<?php if(!$__Context->layout_info->simple_menu5_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu5_url ?>" <?php if($__Context->layout_info->simple_menu5_new == 'yes'){ ?>target="_blank"<?php } ?>>심플메뉴5<img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu5_icon ?>"  alt="simple_menu" /></a><?php } ?>
			<?php if($__Context->layout_info->simple_menu5_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu5_url ?>" <?php if($__Context->layout_info->simple_menu5_new == 'yes'){ ?>target="_blank"<?php } ?>><?php echo $__Context->layout_info->simple_menu5_text ?><img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu5_icon ?>"  alt="simple_menu" /></a><?php } ?>
		</li><?php } ?>
		<?php if($__Context->layout_info->simple_menu6_use != 'no'){ ?><li>
			<?php if(!$__Context->layout_info->simple_menu6_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu6_url ?>" <?php if($__Context->layout_info->simple_menu6_new == 'yes'){ ?>target="_blank"<?php } ?>>심플메뉴6<img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu6_icon ?>"  alt="simple_menu" /></a><?php } ?>
			<?php if($__Context->layout_info->simple_menu6_text){ ?><a href="<?php echo $__Context->layout_info->simple_menu6_url ?>" <?php if($__Context->layout_info->simple_menu6_new == 'yes'){ ?>target="_blank"<?php } ?>><?php echo $__Context->layout_info->simple_menu6_text ?><img src="/kcca/xe/layouts/xecenter/img/simple/<?php echo $__Context->layout_info->simple_menu6_icon ?>"  alt="simple_menu" /></a><?php } ?>
		</li><?php } ?>
	</ul>
</div><?php } ?>
<?php if($__Context->grant->manager && $__Context->layout_info->colorset_test_use != 'no'){ ?>
	
	
	<!--#Meta:layouts/xecenter/object/colorpicker/css/layout.css--><?php $__tmp=array('layouts/xecenter/object/colorpicker/css/layout.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
	<!--#Meta:layouts/xecenter/object/colorpicker/css/colorpicker.css--><?php $__tmp=array('layouts/xecenter/object/colorpicker/css/colorpicker.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp); ?>
	<script type="text/javascript" src="/kcca/xe/layouts/xecenter/object/colorpicker/js/colorpicker.js"></script>
	<script type="text/javascript" src="/kcca/xe/layouts/xecenter/object/colorpicker/js/eye.js"></script>
	<script type="text/javascript" src="/kcca/xe/layouts/xecenter/object/colorpicker/js/utils.js"></script>
	<script type="text/javascript" src="/kcca/xe/layouts/xecenter/object/colorpicker/js/layout.js"></script>
	<div class="color_picker" style="z-index:10;">
		<div id="colorSelector"><div style="background-color: #fff"></div></div>
		<select id="color_picker_target" >
			<option value="">변경대상</option>
			<option value=".menu, .content_top, .content_bottom, .menu_bottom, .simple_menu li a">★원터치★</option>
			<option value="body">배경화면</option>
			<option value=".menu">메인메뉴</option>
			<option value=".content_top">컨텐츠상단</option>
			<option value=".content_bottom">컨텐츠하단</option>
			<option value=".menu_bottom">하단메뉴</option>
			<option value=".bg_bottom">하단</option>
			<option value=".simple_menu li a">심플메뉴</option>
		</select>
	</div>
	
	<div class="preview_pattern">
		<select id="preview_pattern" >
			<option value="">대상 패턴변경</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern0.png)">패턴없음</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern1.png)">1번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern2.png)">2번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern3.png)">3번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern4.png)">4번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern5.png)">5번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern6.png)">6번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern7.png)">7번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern8.png)">8번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern9.png)">9번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern10.png)">10번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern11.png)">11번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern12.png)">12번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern13.png)">13번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern14.png)">14번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern15.png)">15번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern16.png)">16번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern17.png)">17번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern18.png)">18번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern19.png)">19번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern20.png)">20번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern21.png)">21번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern22.png)">22번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/pattern23.png)">23번 패턴</option>
			<option value="url(./layouts/xecenter/img/pattern/45-1.png)">그라데이션45-1</option>
			<option value="url(./layouts/xecenter/img/pattern/45-2.png)">그라데이션45-2</option>
			<option value="url(./layouts/xecenter/img/pattern/45-3.png)">그라데이션45-3</option>
			<option value="url(./layouts/xecenter/img/pattern/45-4.png)">그라데이션45-4</option>
			<option value="url(./layouts/xecenter/img/pattern/25-1.png)">그라데이션25-1</option>
			<option value="url(./layouts/xecenter/img/pattern/25-2.png)">그라데이션25-2</option>
			<option value="url(./layouts/xecenter/img/pattern/25-3.png)">그라데이션25-3</option>
			<option value="url(./layouts/xecenter/img/pattern/25-4.png)">그라데이션25-4</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern1.png)">이미지 패턴1</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern2.png)">이미지 패턴2</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern3.png)">이미지 패턴3</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern4.png)">이미지 패턴4</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern5.png)">이미지 패턴5</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern6.png)">이미지 패턴6</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern7.png)">이미지 패턴7</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern8.png)">이미지 패턴8</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern9.png)">이미지 패턴9</option>
			<option value="url(./layouts/xecenter/img/pattern/img_pattern10.png)">이미지 패턴10</option>
		</select>
	</div>		
<?php } ?>
<!-- 사이트 배경-->
<div class="site_pattern"><div class="site_pattern">
	
	
	<?php if($__Context->layout_info->site_image_autosize == 'yes'){ ?><div style="position:absolute; z-index:-1;"><!-- 사용여부 조건문-->
		<?php if($__Context->layout_info->site_image){ ?><img src="<?php echo $__Context->layout_info->site_image ?>" alt="site_background" class="bg_full"/><?php } ?>
	</div><?php } ?> 
	<!-- 넓이고정 -->
	<div class="fix_width">
		<!-- 상단 -->
		<div id="header">
			<!-- 배너 -->
			<?php if($__Context->layout_info->banner_img){ ?><div class="banner fix_width"> <!--조건문-->
				<div<?php if($__Context->layout_info->banner_position == 'center'){ ?> class="banner_float"<?php };
if($__Context->layout_info->banner_position != 'center'){ ?> class="position"<?php } ?>> <!--조건문 + 위치조정-->
					<img src="<?php echo $__Context->layout_info->banner_img ?>" alt="banner" onclick="window.location.href='<?php echo $__Context->layout_info->banner_url ?>'" />
				</div>	
			</div><?php } ?>	
			<!-- 메뉴바 -->
			<div class="menu">
				<div class="gnb fix_width">
					
					<div class ="logo" onclick="window.location.href='<?php if($__Context->layout_info->logo_url == ''){ ?>http://xecenter.com<?php };
echo $__Context->layout_info->logo_url ?>';">
						<?php if(!$__Context->layout_info->logo_img){ ?><a ><?php echo $__Context->layout_info->logo_text1 ?></a><?php } ?>
						<?php if(!$__Context->layout_info->logo_img){ ?><a class="text_strong"><?php echo $__Context->layout_info->logo_text2 ?></a><?php } ?>
						<?php if(!$__Context->layout_info->logo_img){ ?><a ><?php echo $__Context->layout_info->logo_text3 ?></a><?php } ?>
						
						<?php if($__Context->layout_info->logo_img){ ?><a>
							<img src="<?php echo $__Context->layout_info->logo_img ?>" alt="logo" />
						</a><?php } ?>
					</div>
					
					
					<ul class="fix_width">
						<?php $__Context->index = 1 ?>
						<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){ ?><li>
							<div class="pipe_wrap">
								<span class="pipe1"></span>
								<span class="pipe2"></span>
							</div>	
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>>
							<!-- 리스트 미니 이미지 -->
							<?php if($__Context->layout_info->menu_li_image_use != 'no'){ ?><img src="/kcca/xe/layouts/xecenter/img/li/li0.png" alt="<?php echo $__Context->val1['list'] ?>" class="li_img<?php echo $__Context->index ?> common" /><?php };
echo $__Context->val1['link'] ?></a><!-- 조건문-->
							<?php if($__Context->val1['list']){ ?><ul>
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
									<?php if($__Context->val2['list']){ ?><span class="view"></span><?php } ?><!-- 3차 메뉴 있을시 표식-->
									<a href="<?php echo $__Context->val2['href'] ?>" class="active_a"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a>
									<?php if($__Context->val2['list']){ ?><ul>
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active_2"<?php } ?>>
											<a href="<?php echo $__Context->val3['href'] ?>" class="active_2a"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val3['link'] ?></a>
										</li><?php } ?>
									</ul><?php } ?>
								</li><?php } ?>
							</ul><?php } ?>
						<?php $__Context->index ++ ?>					
						</li><?php } ?>
					</ul>
					
					<!-- 로그인 정보창 -->
					<div class="info">
						<div class="login_btn">
							<?php if($__Context->layout_info->search_use != 'no' ){ ?><a class="search">
								<?php if($__Context->layout_info->login_info_type != 'text'){ ?><img src="/kcca/xe/layouts/xecenter/img/search.png" alt="search" />검색<?php } ?>
								<?php if($__Context->layout_info->login_info_type == 'text'){ ?><img src="/kcca/xe/layouts/xecenter/img/search_white.png" alt="search" />검색<?php } ?>
							</a><?php } ?>
								<?php if($__Context->layout_info->search_use != 'no' ){ ?><span class="pipe"></span><?php } ?>
							<?php if(!$__Context->is_logged){ ?><a onclick="jQuery('.login_wrap').fadeIn('slow');">로그인</a><?php } ?>
							<?php if($__Context->is_logged){ ?><a class="my_info_btn">
								<?php if($__Context->layout_info->login_info_type != 'text'){ ?><img src="/kcca/xe/layouts/xecenter/img/user_black.png" alt="search" style="margin-top:-2px;"/>내정보<?php } ?>
								<?php if($__Context->layout_info->login_info_type == 'text'){ ?>내정보<?php } ?>
							</a><?php } ?>
								<span class="pipe"></span>
							<?php if(!$__Context->is_logged){ ?><a href="<?php echo getUrl('act','dispMemberSignUpForm') ?>">회원가입</a><?php } ?>
							<?php if($__Context->is_logged){ ?><a href="<?php echo getUrl('act','dispMemberLogout') ?>">로그아웃</a><?php } ?>
						
							
								<?php if($__Context->layout_info->login_info_language_use == 'yes'){ ?><span class="pipe"></span><?php } ?>
							<?php if($__Context->layout_info->login_info_language_use == 'yes'){ ?><a class="language" onclick="jQuery('.language ul').toggle();">
								<?php if($__Context->lang_type == 'ko'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/korea.png" alt="ko"/><?php } ?>
								<?php if($__Context->lang_type == 'en'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/usa.png" alt="en"/><?php } ?>
								<?php if($__Context->lang_type == 'jp'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/japan.png" alt="jp"/><?php } ?>
								<?php if($__Context->lang_type == 'zh-CN'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/china.png" alt="zh-CN"/><?php } ?>
								<ul>
									<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){;
if($__Context->key != $__Context->lang_type){ ?><li>
										<?php if($__Context->key == 'ko'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/korea.png" alt="ko" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;" /><?php } ?>
										<?php if($__Context->key == 'en'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/usa.png" alt="en" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;" /><?php } ?>
										<?php if($__Context->key == 'jp'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/japan.png" alt="jp" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;" /><?php } ?>
										<?php if($__Context->key == 'zh-CN'){ ?><img src="/kcca/xe/layouts/xecenter/img/language/china.png" alt="zh-CN" onclick="doChangeLangType('<?php echo $__Context->key ?>');return false;" /><?php } ?>
									</li><?php }} ?>
								</ul>
							</a><?php } ?>
							
								<?php if($__Context->grant->manager){ ?><span class="pipe"></span><?php } ?>
							<?php if($__Context->layout_info->login_info_type != 'text'){ ?>
							<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','admin') ?>" target="_blank"><img src="/kcca/xe/layouts/xecenter/img/admin_black.png" alt="admin_url" style="margin-top:-2px;"/></a><?php };
} ?>
							<?php if($__Context->layout_info->login_info_type == 'text'){ ?>
							<?php if($__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','admin') ?>" target="_blank"><img src="/kcca/xe/layouts/xecenter/img/admin_white.png" alt="admin_url"/></a><?php };
} ?>
						</div>
					</div>
					
				</div>
				
				<!-- 정보박스 -->
				<div class="bg_info">
					<!-- 검색창 -->
					<div class="search_wrap">
						<form action="<?php echo getUrl() ?>" method="post" class="search_bar"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" />
							<?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?> 
							<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
							<input type="hidden" name="act" value="IS" />
							<input type="hidden" name="search_target" value="title_content" />
							<input name="is_keyword" type="text" class="text" title="keyword" value="검색어를 입력해주세요." onfocus="this.value=''"  />
							<input type="submit" value="검색" class="search_submit"/>
						</form>
					</div>
					<!-- 내정보창 -->
					<?php if($__Context->is_logged){ ?><div class="my_info_wrap fix_width">
						<div class="my_info">
							<div class="common info1">
								<div class="label"><a href="<?php echo getUrl('act','dispMemberInfo') ?>">사진변경</a></div>
								<?php if(!$__Context->logged_info->profile_image->src){ ?><img src="/kcca/xe/layouts/xecenter/img/profile.png" alt="profile" style="border:2px solid #333;" onclick="window.location.href='<?php echo getUrl('act','dispMemberModifyInfo') ?>'" /><?php }else{ ?>
								<img src="<?php echo $__Context->logged_info->profile_image->src ?>" alt="profile" onclick="window.location.href='<?php echo getUrl('act','dispMemberModifyInfo') ?>'" /><?php } ?>
							</div>
							<div class="common info2">
							<?php  $__Context->oPointModel = &getModel('point'); $__Context->point = $__Context->oPointModel->getPoint($__Context->logged_info->member_srl); $__Context->oModuleModel = &getModel('module');  $__Context->config = $__Context->oModuleModel->getModuleConfig('point'); $__Context->level = $__Context->oPointModel->getLevel($__Context->point, $__Context->config->level_step);  ?>
								<div class="info_wrap"> <a style="font-weight:bold;"><?php echo $__Context->logged_info->nick_name ?></a> / <a style="color:#3064ff; font-weight:bold;">  <?php if($__Context->logged_info->group_list&&count($__Context->logged_info->group_list))foreach($__Context->logged_info->group_list as $__Context->key => $__Context->val){;
echo Context::getLang($__Context->val);
} ?></a></div>	
								<div class="info_wrap"> <a style="font-weight:bold;"><?php echo $__Context->config->point_name ?></a> : <a style="font-weight:bold; color:#3064ff;"><?php echo number_format($__Context->point) ?></a></div>
								<div class="info_wrap">	
									<?php  $__Context->nextpoint = $__Context->config->level_step[$__Context->level+1]; $__Context->prepoint = $__Context->config->level_step[$__Context->level]; $__Context->percent = round(($__Context->point-$__Context->prepoint)/($__Context->nextpoint-$__Context->prepoint)*100, 2); ?>
									<a style="font-weight:bold;">레벨 : </a> <a style="font-weight:bold; color:#3064ff;"><?php echo $__Context->level ?> </a><?php if($__Context->nextpoint!=0){ ?>( <a style="color:#888;"><?php echo $__Context->percent ?>%</a> )<?php } ?>
								</div>
							</div>
							<div class="common info3"><?php  $__Context->firstTime = zDate($__Context->logged_info->regdate,'Ymd'); $__Context->thisTime = date('Ymd'); $__Context->someTime = strtotime($__Context->thisTime)-strtotime($__Context->firstTime); ?>
								<div class="info_wrap"><a style="font-weight:bold;">가입일</a> : <a><?php echo zDate($__Context->logged_info->regdate, 'Y-m-d') ?></a> <a style="color:#888;">(<?php echo $__Context->someTime/60/60/24; ?>일 지남)</a> </div>
								<div class="info_wrap"><a style="font-weight:bold;">최근로그인</a> : <a style="color:#d31f1f;"><?php echo zDate($__Context->logged_info->last_login, 'Y-m-d H:i') ?></a> </div>
								<div class="info_wrap"><a class="change" href="<?php echo getUrl('act','dispMemberInfo') ?>">개인정보 관리 및 변경</a> </div>
							</div>
							<div class="common info4">
								<div class="info_wrap"><a href="<?php echo getUrl('act','dispMemberOwnDocument') ?>" style="font-weight:bold;">최근작성글 <img src="/kcca/xe/layouts/xecenter/img/site_map.png" alt="more" style="vertical-align:middle; margin-bottom:2px; margin-left:2px;" /></a> </div>
								<div class="info_wrap"></div>
								<div class="info_wrap"></div>
								<div class="info_wrap"></div>
							</div>
							<div class="common info5">
								<div class="info_wrap"><a href="<?php echo getUrl('act','dispMemberOwnComment') ?>" style="font-weight:bold;">최근작성댓글 <img src="/kcca/xe/layouts/xecenter/img/site_map.png" alt="more" style="vertical-align:middle; margin-bottom:2px; margin-left:2px;" /></a> </div>
								<div class="info_wrap"></div>
								<div class="info_wrap"></div>
								<div class="info_wrap"></div>
							</div>
							<div class="common info6">
								<div class="info_wrap"><a href="<?php echo getUrl('act','dispCommunicationMessages') ?>" style="font-weight:bold;">최근쪽지 <img src="/kcca/xe/layouts/xecenter/img/site_map.png" alt="more" style="vertical-align:middle; margin-bottom:2px; margin-left:2px;" /></a> </div>
								<div class="info_wrap"></div>
								<div class="info_wrap"></div>
								<div class="info_wrap"></div>
							</div>
						</div>
					</div><?php } ?>
				</div>
			
			</div>
			<!-- 메뉴바 끝 -->	
			
		</div>
		<!-- 본문 -->
		<div id="body">
			
			<?php if($__Context->layout_info->side_banner_use == 'yes'){ ?><div class="side_banner">
				<ul>
					<li class="banner1 banner"><?php echo $__Context->layout_info->side_banner1 ?></li>
					<li class="banner2 banner"><?php echo $__Context->layout_info->side_banner2 ?></li>
					<li class="banner3 banner"><?php echo $__Context->layout_info->side_banner3 ?></li>
				</ul>
			</div><?php } ?>
			
			 
			<?php if($__Context->layout_info->move_target_use != 'no'){ ?><div class="move_target">
				<a href="#header" class="move_t"><span></span>맨위로</a>
				<a href="#body" class="move_c"><span></span>컨텐츠</a>
				<a href="#bottom" class="move_b"><span></span>아래로</a>
			</div><?php } ?>
			
			
			<div class="content_top">
				
				<?php if($__Context->layout_info->screen_width_use != 'no' ){ ?>
					<div class="width_change" style="float:right; color:white; margin:5px 25px 0px 0px; cursor:pointer;">
						</div>
					<div class="height_change" style="float:right; color:white; margin:5px 15px 0px 0px; cursor:pointer;">
						</div>
				<?php } ?>
				
				<img src="/kcca/xe/layouts/xecenter/img/news_star.png" alt="news" style="float:left; margin:4px 7px 0px 20px;" />
				<?php echo $__Context->layout_info->update_new_widget ?>
			</div>
			
			
			<div class="wrap">
				
				
				
				<?php if($__Context->layout_info->layout_type == 'sub'){ ?> 
					<?php if($__Context->layout_info->subbar_use == 'yes'){ ?><div class="content_left_bar"> 
						
						<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><div class="lnb"> 
							<p>
								<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
							</p>
							<?php if($__Context->main_menu->list&&count($__Context->main_menu->list))foreach($__Context->main_menu->list as $__Context->key1=>$__Context->val1){;
if($__Context->val1['selected'] && $__Context->val1['list']){ ?><ul>
								<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li<?php if($__Context->val2['selected']){ ?> class="active"<?php } ?>>
								<a href="<?php echo $__Context->val2['href'] ?>"<?php if($__Context->val2['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val2['link'] ?></a> 
									<?php if($__Context->val2['list']){ ?><ul>
										<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li<?php if($__Context->val3['selected']){ ?> class="active_2"<?php } ?>>
										<?php if($__Context->val2['list']){ ?><span class="view"></span><?php } ?><!-- 3차 메뉴 있을시 표식-->
										<a href="<?php echo $__Context->val3['href'] ?>"<?php if($__Context->val3['open_window']=='Y'){ ?> target="_blank"<?php } ?>>　<?php echo $__Context->val3['link'] ?></a> 
										</li><?php } ?>
									</ul><?php } ?>
								</li><?php } ?>
							</ul><?php }} ?>
						</div><?php }} ?>
						
						<div class="left_widget_wrap">
							<div class="widget1 widget"><?php echo $__Context->layout_info->sub_widget1 ?></div>
							<div class="widget2 widget"><?php echo $__Context->layout_info->sub_widget2 ?></div>
							<div class="widget3 widget"><?php echo $__Context->layout_info->sub_widget3 ?></div>
						</div>
					</div><?php } ?>
				
				
					
					<?php if($__Context->layout_info->widget_bar_use == 'yes'){ ?><div class="content_widget_bar">
						<div class="widget_bar_wrap">
							<div class="widget1 widget"><?php echo $__Context->layout_info->wbar_widget1 ?></div>
							<div class="widget2 widget"><?php echo $__Context->layout_info->wbar_widget2 ?></div>
							<div class="widget3 widget"><?php echo $__Context->layout_info->wbar_widget3 ?></div>
							<div class="widget4 widget"><?php echo $__Context->layout_info->wbar_widget4 ?></div>
						</div>
					</div><?php } ?>
				<?php } ?> 
				
				<div class="contents" style="outline:1px solid #ddd;">
					<?php echo $__Context->content ?>
				</div>
				
			</div>
			
			
			<div class="content_bottom">
				<?php if($__Context->layout_info->counter_use != 'no'){ ?>
				<img class="zbxe_widget_output" widget="counter_status" skin="xecenter_status" /><?php } ?>
			</div>
		</div>
		
		
		
		<div class="menu_bottom_wrap">
			<div class="menu_bottom">
				
				<div class="fix_width" style="position:relative;">
					<ul class="auto_float">
						<?php if($__Context->bottom_menu->list&&count($__Context->bottom_menu->list))foreach($__Context->bottom_menu->list as $__Context->key1=>$__Context->val1){ ?><li>
							<div class="pipe"></div>
							<a href="<?php echo $__Context->val1['href'] ?>"<?php if($__Context->val1['open_window']=='Y'){ ?> target="_blank"<?php } ?>><?php echo $__Context->val1['link'] ?></a>
						</li><?php } ?>
					</ul>
					
					<?php if($__Context->layout_info->site_map_use == 'yes'){ ?><div class="site_map_btn"><img src="/kcca/xe/layouts/xecenter/img/site_map.png" alt="site_map" style="margin-right:2px;"/>전체메뉴</div><?php } ?>
					
					
					<?php if($__Context->layout_info->family_site_use == 'yes'){ ?><div class="family_site_btn">패밀리사이트<img src="/kcca/xe/layouts/xecenter/img/family_up.png" alt="family_site"/></div><?php } ?>
					<div class="family_site">
						<div class="family_wrap">
							<?php if($__Context->layout_info->family_site1_name){ ?><a <?php if($__Context->layout_info->family_site1_url){ ?>href="<?php echo $__Context->layout_info->family_site1_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site1_name ?>
								<?php if($__Context->layout_info->family_site1_preview){ ?><img src="<?php echo $__Context->layout_info->family_site1_preview ?>" alt="family_site1_preview"/><?php } ?> </a><?php } ?>
							<?php if($__Context->layout_info->family_site2_name){ ?><a <?php if($__Context->layout_info->family_site2_url){ ?>href="<?php echo $__Context->layout_info->family_site2_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site2_name ?>
								<?php if($__Context->layout_info->family_site2_preview){ ?><img src="<?php echo $__Context->layout_info->family_site2_preview ?>" alt="family_site2_preview"/><?php } ?>	</a><?php } ?>
							<?php if($__Context->layout_info->family_site3_name){ ?><a <?php if($__Context->layout_info->family_site3_url){ ?>href="<?php echo $__Context->layout_info->family_site3_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site3_name ?>
								<?php if($__Context->layout_info->family_site3_preview){ ?><img src="<?php echo $__Context->layout_info->family_site3_preview ?>" alt="family_site3_preview"/><?php } ?>	</a><?php } ?>
							<?php if($__Context->layout_info->family_site4_name){ ?><a <?php if($__Context->layout_info->family_site4_url){ ?>href="<?php echo $__Context->layout_info->family_site4_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site4_name ?>
								<?php if($__Context->layout_info->family_site4_preview){ ?><img src="<?php echo $__Context->layout_info->family_site4_preview ?>" alt="family_site4_preview"/><?php } ?>	</a><?php } ?>
							<?php if($__Context->layout_info->family_site5_name){ ?><a <?php if($__Context->layout_info->family_site5_url){ ?>href="<?php echo $__Context->layout_info->family_site5_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site5_name ?>
								<?php if($__Context->layout_info->family_site5_preview){ ?><img src="<?php echo $__Context->layout_info->family_site5_preview ?>" alt="family_site5_preview"/><?php } ?> </a><?php } ?>
							<?php if($__Context->layout_info->family_site6_name){ ?><a <?php if($__Context->layout_info->family_site6_url){ ?>href="<?php echo $__Context->layout_info->family_site6_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site6_name ?>
								<?php if($__Context->layout_info->family_site6_preview){ ?><img src="<?php echo $__Context->layout_info->family_site6_preview ?>" alt="family_site6_preview"/><?php } ?> </a><?php } ?>
							<?php if($__Context->layout_info->family_site7_name){ ?><a <?php if($__Context->layout_info->family_site7_url){ ?>href="<?php echo $__Context->layout_info->family_site7_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site7_name ?>
								<?php if($__Context->layout_info->family_site7_preview){ ?><img src="<?php echo $__Context->layout_info->family_site7_preview ?>"" alt="family_site7_preview"/> </a>
							<a cond="$layout_info-><?php } ?>family_site8_name" <?php if($__Context->layout_info->family_site8_url){ ?>href="<?php echo $__Context->layout_info->family_site8_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site8_name ?>
								<?php if($__Context->layout_info->family_site8_preview){ ?><img src="<?php echo $__Context->layout_info->family_site8_preview ?>" alt="family_site8_preview"/><?php } ?> </a><?php } ?>
							<?php if($__Context->layout_info->family_site9_name){ ?><a <?php if($__Context->layout_info->family_site9_url){ ?>href="<?php echo $__Context->layout_info->family_site9_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site9_name ?>
								<?php if($__Context->layout_info->family_site9_preview){ ?><img src="<?php echo $__Context->layout_info->family_site9_preview ?>" alt="family_site9_preview"/><?php } ?> </a><?php } ?>
							<?php if($__Context->layout_info->family_site10_name){ ?><a <?php if($__Context->layout_info->family_site10_url){ ?>href="<?php echo $__Context->layout_info->family_site10_url ?>" target="_blank"<?php } ?>><?php echo $__Context->layout_info->family_site10_name ?>
								<?php if($__Context->layout_info->family_site10_preview){ ?><img src="<?php echo $__Context->layout_info->family_site10_preview ?>" alt="family_site10_preview"/><?php } ?> </a><?php } ?>
						</div>
					</div>
				</div>
				
				<?php if($__Context->layout_info->site_map_use == 'yes'){ ?><div class="site_map_bg">
					<div class="fix_width">
						<ul class="sitemap_auto_float" style="position:relative;">
							<?php if($__Context->site_map_menu->list&&count($__Context->site_map_menu->list))foreach($__Context->site_map_menu->list as $__Context->key1=>$__Context->val1){ ?><li>
							<!-- 경계선-->
							<div class="site_map_pipe">
								<div class="pipe_l"></div>
								<div class="pipe_r"></div>
							</div>
							<a href="<?php echo $__Context->val1['href'] ?>"><?php echo $__Context->val1['link'] ?></a>
								<?php if($__Context->val1['list']){ ?><ul>
									<?php if($__Context->val1['list']&&count($__Context->val1['list']))foreach($__Context->val1['list'] as $__Context->key2=>$__Context->val2){ ?><li>
										<a href="<?php echo $__Context->val2['href'] ?>"><?php echo $__Context->val2['link'] ?></a>
										<?php if($__Context->val2['list']){ ?><ul>
											<?php if($__Context->val2['list']&&count($__Context->val2['list']))foreach($__Context->val2['list'] as $__Context->key3=>$__Context->val3){ ?><li>
											<a href="<?php echo $__Context->val3['href'] ?>">
												<?php if($__Context->val2['list']){ ?><span class="view"></span><?php } ?><!-- 3차 메뉴 있을시 표식-->
												<?php echo $__Context->val3['link'] ?>
											</a>
											</li><?php } ?>
										</ul><?php } ?>
									</li><?php } ?>
								</ul><?php } ?>
							</li><?php } ?>
							<!-- 마지막 경계선-->
							<li class="site_map_pipe_final">
								<div class="pipe_l"></div>
								<div class="pipe_r"></div>
							</li>
						</ul>
					</div>
				</div><?php } ?>
				
			</div>
		</div>
		
		<!-- 하단 -->
		<div id="bottom">
			<div class="bg_bottom"></div>
			
			<div class="bottom_logo" onclick="window.location.href='<?php if($__Context->layout_info->bottom_logo_url == ''){ ?>http://xecenter.com<?php };
echo $__Context->layout_info->bottom_logo_url ?>';">
				
				<?php if(!$__Context->layout_info->bottom_logo_img){ ?><a><?php echo $__Context->layout_info->bottom_logo_text ?></a><?php } ?>
				
				<?php if($__Context->layout_info->bottom_logo_img){ ?><a>
					<img src="<?php echo $__Context->layout_info->bottom_logo_img ?>" alt="bottom_logo" />
				</a><?php } ?>
			</div>
			
			<div class="fix_width">
				<div class="copyright_float">
					<?php if($__Context->layout_info->copyright_text){ ?><a class="copyright"><?php echo $__Context->layout_info->copyright_text ?></a><?php } ?>
					<?php if($__Context->layout_info->copyright_text == ''){ ?><a class="copyright">Copyright by Qookrabbit 2013 All rights reserved</a><?php } ?>
				</div>	
			</div>
			
			<?php if($__Context->layout_info->site_term_use != 'no'){ ?><div class="site_term">
				<a<?php if($__Context->layout_info->site_term1_url){ ?> onclick="window.location.href='<?php echo $__Context->layout_info->site_term1_url ?>';"<?php } ?>>이용약관</a>
				<a<?php if($__Context->layout_info->site_term2_url){ ?> onclick="window.location.href='<?php echo $__Context->layout_info->site_term2_url ?>';"<?php } ?>>개인정보취급방침</a>
			</div><?php } ?>
		</div>
	</div>
	
</div></div><!-- 사이트 끝-->
<script type="text/javascript">
var screen_width1 = '<?php if($__Context->layout_info->screen_width1 == ''){ ?>980<?php };
echo $__Context->layout_info->screen_width1 ?>'
var screen_width2 = '<?php if($__Context->layout_info->screen_width2 == ''){ ?>1200<?php };
echo $__Context->layout_info->screen_width2 ?>'
var move_target_width = '<?php if($__Context->layout_info->screen_width1 == ''){ ?>1000<?php }else{;
echo $__Context->layout_info->screen_width1+20;
} ?>px'
var move_target_width2 = '<?php if($__Context->layout_info->screen_width2 == ''){ ?>1220<?php }else{;
echo $__Context->layout_info->screen_width2+20;
} ?>px'
var logo_size = '<?php if($__Context->layout_info->logo_text_hover_size == ''){ ?>23<?php };
echo $__Context->layout_info->logo_text_hover_size ?>px'
var logo_color = '<?php if($__Context->layout_info->logo_text_hover_color == ''){ ?>#ffd800<?php };
echo $__Context->layout_info->logo_text_hover_color ?>'
var logo_size_o = '<?php if($__Context->layout_info->logo_text_size == ''){ ?>23<?php };
echo $__Context->layout_info->logo_text_size ?>px'
var logo_color_o = '<?php if($__Context->layout_info->logo_text_color2 == ''){ ?>#fff<?php };
echo $__Context->layout_info->logo_text_color2 ?>'
var sub_menu_fix = '<?php echo $__Context->layout_info->sub_menu_fix ?>'
var side_banner_fix = '<?php echo $__Context->layout_info->side_banner_fix ?>'
var subbar_select = '<?php echo $__Context->layout_info->subbar_select ?>'
var site_map_use = '<?php echo $__Context->layout_info->site_map_use ?>'
</script>
<?php if($__Context->grant->manager){;
$__Context->program_name = '쿡래빗 공식 레이아웃';	$__Context->program_version = '1.1.2';	$__Context->post_server = 'http://xecenter.com/xe/xecenter_stats.php';	$__Context->host_info = '?program_name='.$__Context->program_name.'&program_version='.$__Context->program_version.'&site_domain='.urlencode(getenv('HTTP_HOST')).'&php_version='.phpversion().'&xe_version='.__XE_VERSION__.'&user_agent='.urlencode(getenv('HTTP_USER_AGENT'));	$__Context->post_url = $__Context->post_server.$__Context->host_info;  ?>
<iframe src="<?php echo $__Context->post_url ?>" style="margin:0;border:0;width:0;height:0;display:none;"></iframe><?php } ?>
<style type="text/css">
<?php if($__Context->layout_info->screen_width1){ ?>
.fix_width{width:<?php echo $__Context->layout_info->screen_width1 ?>px;}<?php } ?>
<?php if($__Context->layout_info->layout_font){ ?>
*{font-family:<?php echo $__Context->layout_info->layout_font ?>;}<?php } ?>
body{background:<?php if($__Context->layout_info->site_bg){;
echo $__Context->layout_info->site_bg;
};
if($__Context->layout_info->site_image && $__Context->layout_info->site_image_autosize != 'yes'){ ?>url(<?php echo $__Context->layout_info->site_image ?>) <?php echo $__Context->layout_info->site_image_repeat ?> <?php echo $__Context->layout_info->site_image_start_A ?> <?php echo $__Context->layout_info->site_image_start_B ?>; background-attachment:<?php echo $__Context->layout_info->site_image_attachment ?>;<?php } ?>}
<?php if($__Context->layout_info->site_bg || $__Context->layout_info->site_image){ ?>
.site_pattern{background:url(layouts/xecenter/img/pattern/<?php echo $__Context->layout_info->site_pattern ?>) repeat;}<?php } ?>
#header .banner img{height:<?php echo $__Context->layout_info->banner_height ?>px; width:<?php echo $__Context->layout_info->banner_width ?>px;}
#header .banner .position{float:<?php echo $__Context->layout_info->banner_position ?>;}
#body .side_banner{<?php if($__Context->layout_info->side_banner_width){ ?>right:-<?php echo $__Context->layout_info->side_banner_width + 10 ?>px;<?php } ?> width:<?php echo $__Context->layout_info->side_banner_width ?>px;}
#body .side_banner .banner{margin-top:<?php echo $__Context->layout_info->side_banner_margin_tb ?>px; margin-bottom:<?php echo $__Context->layout_info->side_banner_margin_tb ?>px; background:<?php echo $__Context->layout_info->side_banner_bg ?>;}
.logo{margin-right:<?php echo $__Context->layout_info->logo_margin ?>px;}
.logo img{width:<?php echo $__Context->layout_info->logo_img_w ?>px; height:<?php echo $__Context->layout_info->logo_img_h ?>px;}
.logo a{font-size:<?php if($__Context->layout_info->logo_text_size == ''){ ?>23<?php };
echo $__Context->layout_info->logo_text_size ?>px; color:<?php if($__Context->layout_info->logo_text_color == ''){ ?>white<?php };
echo $__Context->layout_info->logo_text_color ?>;}
.logo a.text_strong{color:<?php if($__Context->layout_info->logo_text_color2 == ''){ ?>yellow<?php };
echo $__Context->layout_info->logo_text_color2 ?>;}
<?php if($__Context->layout_info->login_info_type == 'text'){ ?>
.menu .login_btn{background:none;}
.menu .login_btn a{color:white; padding:3px 0;}
.menu .login_btn a:hover{border-bottom:none; border-top:2px solid white; }
.menu .info .pipe{border-left:1px solid white;}<?php } ?>
.menu{z-index:<?php echo $__Context->layout_info->menu_zindex ?>;}
<?php if($__Context->layout_info->menu_li1_image){ ?>.gnb .li_img1{background:url(<?php echo $__Context->layout_info->menu_li1_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li2_image){ ?>.gnb .li_img2{background:url(<?php echo $__Context->layout_info->menu_li2_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li3_image){ ?>.gnb .li_img3{background:url(<?php echo $__Context->layout_info->menu_li3_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li4_image){ ?>.gnb .li_img4{background:url(<?php echo $__Context->layout_info->menu_li4_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li5_image){ ?>.gnb .li_img5{background:url(<?php echo $__Context->layout_info->menu_li5_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li6_image){ ?>.gnb .li_img6{background:url(<?php echo $__Context->layout_info->menu_li6_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li7_image){ ?>.gnb .li_img7{background:url(<?php echo $__Context->layout_info->menu_li7_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li8_image){ ?>.gnb .li_img8{background:url(<?php echo $__Context->layout_info->menu_li8_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li9_image){ ?>.gnb .li_img9{background:url(<?php echo $__Context->layout_info->menu_li9_image ?>) right top no-repeat;}<?php } ?>
<?php if($__Context->layout_info->menu_li10_image){ ?>.gnb .li_img10{background:url(<?php echo $__Context->layout_info->menu_li10_image ?>) right top no-repeat;}<?php } ?>
 <?php if($__Context->layout_info->menu_li_type == 'auto'){ ?>
.gnb li a{width:auto; padding:0 15px;}
.gnb li li{float:none; width:110px; width:<?php echo $__Context->layout_info->menu_list_width ?>px;}
.gnb ul ul ul{left:110px; left:<?php echo $__Context->layout_info->menu_list_width ?>px;}
<?php } ?>
 <?php if($__Context->layout_info->menu_li_type != 'auto'){ ?>
.gnb li a{width:<?php echo $__Context->layout_info->menu_list_width ?>px;}
.gnb ul ul ul{left:<?php echo $__Context->layout_info->menu_list_width ?>px;}<?php } ?>
.content_left_bar{min-width:<?php echo $__Context->layout_info->subbar_min_width ?>px; max-width:<?php echo $__Context->layout_info->subbar_max_width ?>px;}
.content_left_bar .widget{margin-top:<?php echo $__Context->layout_info->sub_widget_margin_tb ?>px; margin-bottom:<?php echo $__Context->layout_info->sub_widget_margin_tb ?>px; margin-left:<?php echo $__Context->layout_info->sub_widget_margin_lr ?>px; margin-right:<?php echo $__Context->layout_info->sub_widget_margin_lr ?>px;}
.lnb p{text-indent:<?php echo $__Context->layout_info->sub_menu_text ?>px;}
.content_widget_bar{min-width:<?php echo $__Context->layout_info->widgetbar_min_width ?>px; max-width:<?php echo $__Context->layout_info->widgetbar_max_width ?>px;}
.content_widget_bar .widget{margin-top:<?php echo $__Context->layout_info->wbar_widget_margin_tb ?>px; margin-bottom:<?php echo $__Context->layout_info->wbar_widget_margin_tb ?>px; margin-left:<?php echo $__Context->layout_info->wbar_widget_margin_lr ?>px; margin-right:<?php echo $__Context->layout_info->wbar_widget_margin_lr ?>px;}
#bottom{height:<?php echo $__Context->layout_info->bottom_height ?>px;}
.bg_bottom{background:<?php echo $__Context->layout_info->bottom_color ?>; height:<?php echo $__Context->layout_info->bottom_height ?>px; opacity:0.<?php echo $__Context->layout_info->bottom_opacity ?>; -moz-opacity:0.<?php echo $__Context->layout_info->bottom_opacity ?>; <?php if($__Context->layout_info->bottom_opacity){ ?>filter:alpha(opacity=<?php echo $__Context->layout_info->bottom_opacity ?>0)<?php } ?>;}
#bottom .bottom_logo{float:<?php echo $__Context->layout_info->bottom_logo_position ?>;}
#bottom .bottom_logo a{color:<?php echo $__Context->layout_info->bottom_logo_text_color ?>; cursor:pointer; font-size:<?php echo $__Context->layout_info->bottom_logo_text_size ?>px; line-height:<?php echo $__Context->layout_info->bottom_height ?>px;}
#bottom .copyright{color:<?php echo $__Context->layout_info->copyright_color ?>; font-size:<?php echo $__Context->layout_info->copyright_size ?>px; top:<?php echo $__Context->layout_info->copyright_top ?>px;}
<?php if($__Context->layout_info->site_term_color){ ?>#bottom .site_term a{color:<?php echo $__Context->layout_info->site_term_color ?>;}<?php } ?>
<?php if($__Context->layout_info->site_term_hover){ ?>#bottom .site_term a:hover{border-bottom:2px solid <?php echo $__Context->layout_info->site_term_hover ?>;}<?php } ?>
.simple_menu{z-index:<?php echo $__Context->layout_info->simple_menu_zindex ?>;}
</style>
<?php if($__Context->layout_info->user_common_colorset_use == 'yes' ){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('layouts/xecenter','user_color.html');
} ?>
