var browser={
    versions:function(){
        var u = navigator.userAgent, app = navigator.appVersion;
        return {
            trident: u.indexOf('Trident') > -1, //IE内核
            presto: u.indexOf('Presto') > -1, //opera内核
            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
            mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
            android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
            iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
            iPad: u.indexOf('iPad') > -1, //是否iPad
            webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
        };
    }(),
    language:(navigator.browserLanguage || navigator.language).toLowerCase()
}

$(document).ready(function(e) {
	if(browser.versions.mobile)
		window.addEventListener("load",function(){FastClick.attach(document.body)},false);
	// Preload images
	preloadImages = function () {
    		$('img.preload').each(function(i,e){
    			$(e).attr('src', $(this).data('src')).removeClass('preload');
    		})
	};
	preloadImages();
	// Ajax call error handling
	$(document).ajaxError(function (e, xhr, settings, error) {
  		console.log(error);
	});
	// Back to top button
	$('.top').click(function (e) {
  		e.preventDefault();
  		$('html, body').animate({scrollTop: 0}, 800);
	});
	//remove loading
	$('.preloading').fadeOut('fast');
	
	//导航
	$('.togglebtn').hover(function(){
		$(this).addClass('active');
	},function(){
		$(this).removeClass('active');
	})
})