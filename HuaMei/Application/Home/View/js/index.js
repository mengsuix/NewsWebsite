// JavaScript Document
$(function(){
	$('.in_cpzx_ct ul li').hover(function(){
		$(this).find('i').show()
		},function(){
			$(this).find('i').hide()
			});
	$('.in_zxdh').hover(function(){
		$(this).find('p').stop().animate({"left":"-80px"},500)
		$(this).find('span').stop().animate({"left":"-160px"},500)
		},function(){
			$(this).find('p').stop().animate({"left":"0px"},500)
			$(this).find('span').stop().animate({"left":"0px"},500)
			});
	$('.in_erwm').hover(function(){
		$(this).find('strong').stop().show({"right":"90px"},500)
		},function(){
			$(this).find('strong').stop().hide({"right":"0px"},500)
			});
});