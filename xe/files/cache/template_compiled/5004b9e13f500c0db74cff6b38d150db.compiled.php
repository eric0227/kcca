<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->layout_info->colorset == 'black'){ ?><!--#Meta:layouts/xecenter/object/login_box/css/black.css--><?php $__tmp=array('layouts/xecenter/object/login_box/css/black.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php if($__Context->layout_info->colorset == 'red'){ ?><!--#Meta:layouts/xecenter/object/login_box/css/red.css--><?php $__tmp=array('layouts/xecenter/object/login_box/css/red.css','','','');Context::loadFile($__tmp,'','','');unset($__tmp);
} ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('layouts/xecenter/object/login_box/filter','login.xml');$__xmlFilter->compile(); ?>
<?php $__Context->member_config=MemberModel::getMemberConfig();$__Context->identifierForm->name=$__Context->member_config->identifier; ?> 
<div class="login_wrap">
	<div class="login_bg" onclick="jQuery('.login_wrap').fadeOut('slow')"></div>
	<div class="login_box">
		
		<?php if($__Context->layout_info->colorset == 'black'){ ?><img src="/kcca/xe/layouts/xecenter/object/login_box/img/close_black.png" class="close" alt="close_btn" onclick="jQuery('.login_wrap').fadeOut('slow')" /><?php } ?>
		<?php if($__Context->layout_info->colorset == 'red'){ ?><img src="/kcca/xe/layouts/xecenter/object/login_box/img/close_red.png" class="close" alt="close_btn" onclick="jQuery('.login_wrap').fadeOut('slow')" /><?php } ?>
		
		<?php Context::addJsFile("./files/ruleset/login.xml", FALSE, "", 0, "body", TRUE, "") ?><form method="post" action="./" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment()) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@login" />
			<input type="hidden" name="act" value="procMemberLogin" />
			<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
			
			<div class="id_password">
				<div class="wrap">
					<a><?php if($__Context->member_config->identifier != 'email_address'){;
echo $__Context->lang->user_id;
}else{;
echo $__Context->lang->email_address;
} ?></a>
					<input name="user_id" type="text" id="user_id" />
					<label for="user_id" style="position:absolute; line-height:30px; left:150px; visibility:visible; color:gray;" class="id_hidden" ><?php if($__Context->member_config->identifier != 'email_address'){;
echo $__Context->lang->user_id;
}else{;
echo $__Context->lang->email_address;
} ?>를 입력해주세요</label>
				</div>
				<div class="wrap">
					<a>비밀번호</a>
					<input name="password" type="password" id="password" />
					<label for="password" style="position:absolute; line-height:30px; left:150px; visibility:visible; color:gray;" class="pw_hidden" >비밀번호를 입력해주세요</label>
				</div>	
			</div>
			<!-- // 나머지 -->
			<div class="etc_wrap">
					
				<input name="" type="submit" value="로그인" class="submit" />
				
				<div class="keep">
					<input name="keep_sined" id="keep_sined" type="checkbox" value="Y" onclick="if(this.checked) return confirm('<?php echo $__Context->lang->about_keep_signed ?>');" />
					<label for="keep_sined" style="cursor:pointer;">자동로그인</label>
					
				</div>
				
				<a  class="find" href="<?php echo getUrl('act','dispMemberFindAccount') ?>">아이디/비밀번호 찾기</a>
				
				<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="error"><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></div><?php } ?>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
jQuery(function($){
	$('#user_id').focus(function(){
		$('.id_hidden').css('visibility','hidden');
	});
	$('#password').focus(function(){
		$('.pw_hidden').css('visibility','hidden');
	});
	
	
	$('#user_id').blur(function(){
		if($(this).val() == ''){
			$('.id_hidden').css('visibility','visible');
		}
	});
	$('#password').blur(function(){
		if($(this).val() == ''){
			$('.pw_hidden').css('visibility','visible');
		}
	});
	
});
</script>
