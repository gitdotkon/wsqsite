function is_weixn(){
    var ua = navigator.userAgent.toLowerCase();
    if(ua.match(/MicroMessenger/i)=="micromessenger") {
        return true;
    } else {
        return false;
    }
}

if(is_weixn()){

        var imgUrl = "http://staging.wandastudios.com/images/fx.jpg";
        var lineLink = "http://staging.wandastudios.com/";
        var descContent = '';
        var shareTitle = 'Wanda Studios Qingdao';
        var appid = '';
        
        function shareFriend() {
			if(Xmas.jianfei()){descContent=''}
			//else{descContent=''}
            WeixinJSBridge.invoke('sendAppMessage',{
                "appid": appid,
                "img_url": imgUrl,
                "img_width": "120",
                "img_height": "120",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                Xmas.closefx();
            })
        }
        function shareTimeline() {
			if(Xmas.jianfei()){descContent=''}
            WeixinJSBridge.invoke('shareTimeline',{
                "img_url": imgUrl,
                "img_width": "120",
                "img_height": "120",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                   Xmas.closefx();
            });
        }
        function shareWeibo() {
			if(Xmas.jianfei()){descContent=''}
            WeixinJSBridge.invoke('shareWeibo',{
                "content": descContent,
                "url": lineLink,
            }, function(res) {
                Xmas.closefx();
            });
        }
        // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            // 发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
                shareFriend();
            });
            // 分享到朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                shareTimeline();
            });
            // 分享到微博
            WeixinJSBridge.on('menu:share:weibo', function(argv){
                shareWeibo();
            });
			
        }, false);
}
