<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>tv播放</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<link rel="stylesheet" type="text/css" href="https://g.alicdn.com/de/prismplayer/2.8.1/skins/default/aliplayer-min.css"/>
<script src="https://player.alicdn.com/resource/base/lib/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://player.alicdn.com/aliplayer/js/playersetting.js" type="text/javascript" charset="utf-8"></script>
<script src="https://g.alicdn.com/de/prismplayer/2.8.1/aliplayer-min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://g.alicdn.com/de/prismplayer/2.8.1/json/json.min.js"></script>
<script src="https://g.alicdn.com/de/prismplayer/2.8.1/hls/aliplayer-vod-anti-min.js"></script>
<script src="https://g.alicdn.com/de/prismplayer/2.8.1/aliplayer-flash-min.js"></script>
<script>
function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}
var flag = IsPC(); //true为PC端，false为手机端
if(flag==false)
{
	width="100%";
	height=height;
}
</script>
</head>
        <div  class="prism-player" id="J_prismPlayer"></div>
<body>
<script type="text/javascript">
function getId( w ) { var re = new RegExp( w + "=([^\&]*)"); re.exec(document.location.href); return RegExp.$1;}
var url = getId("f")?getId("f"):getId("url")?getId("url"):'';
            var player = new Aliplayer({
            id: 'J_prismPlayer',
            isLive: true,
            width: '100%',
            height: "585px",
            autoplay: true,
            source : url,
            vid : '1e067a2831b641db90d570b6480fbc40',
            auto: true
           },function(player){
                console.log('播放器创建好了。')
           });
</script>
<div id="video" style="width:100%;height:100%"></div>
</body>
</html>


