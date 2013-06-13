/*jshint eqnull:true */
/*!
 * jQuery Cookie Plugin v1.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function(e,b){var a=/\+/g;function d(f){return f}function c(f){return decodeURIComponent(f.replace(a," "))}e.cookie=function(k,j,o){if(arguments.length>1&&(!/Object/.test(Object.prototype.toString.call(j))||j==null)){o=e.extend({},e.cookie.defaults,o);if(j==null){o.expires=-1}if(typeof o.expires==="number"){var l=o.expires,n=o.expires=new Date();n.setDate(n.getDate()+l)}j=String(j);return(b.cookie=[encodeURIComponent(k),"=",o.raw?j:encodeURIComponent(j),o.expires?"; expires="+o.expires.toUTCString():"",o.path?"; path="+o.path:"",o.domain?"; domain="+o.domain:"",o.secure?"; secure":""].join(""))}o=j||e.cookie.defaults||{};var f=o.raw?d:c;var m=b.cookie.split("; ");for(var h=0,g;(g=m[h]&&m[h].split("="));h++){if(f(g.shift())===k){return f(g.join("="))}}return null};e.cookie.defaults={}})(jQuery,document);

jQuery(function($){
	window.prettyPrint && prettyPrint();
	$("link[rel=stylesheet][href*='common/css/xe.min.css']").remove();
	// navbar dropdown
	$('.navbar ul.nav>li.dropdown').hover(
		function(){$(this).children('ul').stop(true,true).hide().fadeIn(100);},
		function(){$(this).children('ul').stop(true,true).fadeOut(100);}
	);
	//$('.navbar li.dropdown li').unbind('mouseover').unbind('mouseout');
	
	/* xe default btn fix */
	$("#content .btn>button,#content .btn>a,#content .btn>input").addClass("btn").parents(".btn").removeClass("btn");
	
	/* popover */
	$(".popover-top").popover({placement:"top",trigger:"hover",html:true});
	$(".popover-right").popover({placement:"right",trigger:"hover",html:true});
	$(".popover-left").popover({placement:"left",trigger:"hover",html:true});
	$(".popover-bottom").popover({placement:"bottom",trigger:"hover",html:true});
	
	/* tooltip */
	$("[rel='tooltip'],.tooltip-top").tooltip({html:true});
	$("[rel='tooltip-right'],.tooltip-right").tooltip({placement:"right",html:true});
	$("[rel='tooltip-left'],.tooltip-left").tooltip({placement:"left",html:true});
	$("[rel='tooltip-bottom'],.tooltip-bottom").tooltip({placement:"bottom",html:true});
	
	/* loginForm modal input focus */
	$('#loginForm').on('shown',function(){
		$("#loginForm [name='user_id']").focus();
	});

	/* Mobile View */
	$("footer #pc_view").click(function(){
		$.cookie('fakeM',true);
		location.reload();
	});
	$("footer #mobile_view").click(function(){
		$.cookie('fakeM',null);
		location.reload();
	});
	/* footer */
	$("footer").hover(function(){
		$("footer #footer-toggle-btn>i").tooltip("show");
	},function(){
		$("footer #footer-toggle-btn>i").tooltip("hide");
	});
	$("footer #footer-toggle-btn").toggle(function(){
		$("body>.container,#navbar").fadeTo("normal","0.1");
		$("footer #footer-toggle-btn>i").removeClass("icon-chevron-up").addClass("icon-chevron-down");
		$("html, body").stop().animate({scrollTop:$("html").height()}, 500);
		$("footer").animate({maxHeight:"1000px"},300);
	},function(){
		$("footer #footer-toggle-btn>i").removeClass("icon-chevron-down").addClass("icon-chevron-up");
		$("footer").animate({maxHeight:"50px"},300);
		$("body>.container,#navbar").fadeTo("normal","1");
	});
});