<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /> 
  <meta name="referrer" content="never" /> 
  <title></title>
  <style type="text/css">body,html,.dplayer{padding:0;margin:0;width:100%;height:100%;background-color:#000}a{text-decoration:none}</style> 
 </head> 
 <body> 
 <link rel="stylesheet" href="https://cdn.bskchina.cn/dplayer/DPlayer.min.css">
<div id="dplayer"></div>
<script src="../css/p2p.js"></script>
<script src="../css/dplayer.js"></script>
<script>
function getId( w ) { var re = new RegExp( w + "=([^\&]*)"); re.exec(document.location.href); return RegExp.$1;}
    var rurl = getId("f")?getId("f"):getId("url")?getId("url"):video.src;
    var hlsjsConfig = {
        debug: false,
        maxBufferHole: 3,
        p2pConfig: {
            logLevel: 'warn',
            announce: "https://tracker.klink.tech",
            wsSignalerAddr: 'wss://signal.klink.tech/ws',
        }
    };
    var hls;
    var dp = new DPlayer({
        container: document.getElementById('dplayer'),
        autoplay:true,
        loop:true,
        screenshot:true,
        hotkey:true,
        preload:'auto',
        video: {
            url: rurl,
            type: 'customHls',
            customType: {
                'customHls': function (video, player) {
                    var isMobile = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
                    if (isMobile) {
                        var html = '<video src="'+video.src+'" controls="controls" autoplay="autoplay" width="100%" height="100%"></video>';
                        document.getElementById('dplayer').innerHTML = html;
                    }else{
                        hls = new Hls(hlsjsConfig);
                        hls.loadSource(video.src);
                        hls.attachMedia(video);
                        hls.engine.on('stats', function (data) {
                            var size = hls.engine.fetcher.totalP2PDownloaded;
                            hls.engine.fetcher.totalP2PDownloaded=0;
                            if(size>0){
                                hls.engine.signaler.signalerWs.send({action:'stat',size:size});
                            }
                        })
                    }
                }
            }
        }
    });
</script>
</body>
</html>
