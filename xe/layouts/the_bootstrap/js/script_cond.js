	<!--@if($li->fontface=='yes'&&!Mobile::isMobileCheckByAgent())-->
		google.load("webfont","1");google.setOnLoadCallback(function(){WebFont.load({custom:{families:["{$li->fontface}"],urls:["http://fontface.kr/{$li->fontface}/css"]}})});
	<!--@end-->
	jQuery(function($){
		<!--@if($li->use_login_tooltip!='no' && !$is_logged)-->
			$("#navbar-login-btn").tooltip({title:"{$lang->cmd_login}",placement:"bottom",trigger:"manual"}).tooltip("show").hover(function(){
				$(this).tooltip("hide");
			});
		<!--@end-->
		<!--@if($li->site_template=='carousel'&&!Mobile::isMobileCheckByAgent()&&!preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT']) )-->
			var stickyTop = $('.navbar-wrapper').offset().top;$(window).scroll(function(){var windowTop=$(window).scrollTop();if(stickyTop<windowTop){$(".navbar-wrapper").css("opacity","1").find("#navbar").addClass("navbar-fixed-top");}else{$(".navbar-wrapper").css("opacity",".95").find("#navbar").removeClass("navbar-fixed-top");}});
		<!--@end-->
		<!--@if($li->use_totop!='no')-->
		$(window).scroll(function(){if($(this).scrollTop()>20){$('#toTop').fadeIn()}else{$('#toTop').fadeOut()}});
		$('#toTop').click(function(){$('body,html').animate({scrollTop:0},700)});
		<!--@end-->
		<!--@if($li->carousel_use)-->
			<!--@if($li->carousel_interval)-->
				$("#main_carousel").carousel({interval:{$li->carousel_interval}});
			<!--@else-->
				$("#main_carousel").carousel({interval:5000});
			<!--@end-->
		<!--@end-->
		<!--@if($li->tb_good_view=='yes'&&!Mobile::isMobileCheckByAgent())-->
			var tgv = $("#tb_good_view");
			tgv.find("#tvg_aside").click(function(){
				$(this).attr("disabled","disabled");
				<!--@if($li->frame!='fixed')-->
					if(!$.cookie("tgv_aside")){
						$(this).find("span").text("Sidebar Show");
						$("aside#sb").hide({direction: 'left'},function(){
							$("#content").removeClass("span10",{direction:'left'});
							$.cookie("tgv_aside","hide");
						});
					} else {
						$(this).find("span").text("Sidebar Hide");
						$("aside#sb").show({direction: 'right'});
						$("#content").addClass("span10",{direction:'right'});
						$.cookie("tgv_aside",null);
					}
				});
				if($.cookie("tgv_aside")){
					$("aside#sb").hide();
					$("#content").removeClass("span10");
				}
			<!--@end-->
			<!--@if($li->carousel_use=='yes' && $li->site_template!='carousel')-->
				tgv.find("#tgv_carousel").click(function(){
					$("#main_carousel:not(:animated)").fadeToggle();
					if(!$.cookie("tgv_carousel")){
						$(this).find("span").text("Slider Hide");
						$.cookie("tgv_carousel","hide");
					} else {
						$(this).find("span").text("Slider Show");
						$.cookie("tgv_carousel",null);
					}
				});
				if($.cookie("main_carousel")){
					$("#main_carousel").hide();
				}
			<!--@end-->
	<!--@end-->
	});