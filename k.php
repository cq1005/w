<!DOCTYPE HTML PUBLIC>
<?php 
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT'); 
header('Cache-Control: no-cache, must-revalidate'); 
header('Pragma: no-cache'); 
?>
<html>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="../kk/jquery-1.11.2.min.js" ></script>
<script type="text/javascript" src="../kk/ckplayer.js" ></script>
<script type="text/javascript" src="../kk/share.js" charset="utf-8"></script>		
<head>
<body  onload="kkPlayer()" style="margin:0;padding:0;position:absolute; width:100%; height:100%; z-index:-1" bgcolor="#454545" topmargin="0" leftmargin="0" scroll="auto"  oncontextmenu="window.event.returnValue=false">
<div class="video" id="video" style="width: 100%;height: 100%;"></div>
</head>
<table>
<tr><td>
<script type="text/javascript">
function kkPlayer(){
	var playerLoad = false;
	var videoObject = {
		container: '#video',
		variable: 'player',
                flashplayer:false,
		video: flss,
	        poster:'pic/wdm.jpg',
	        mobileCkControls:true,
	        mobileAutoFull:false,
                h5container:'#videoplayer',
                loaded:'loadedHandler',
		live:false,
                html5m3u8:false,
		autoplay:true
	};
    var player=new ckplayer(videoObject);
	function loadedHandler() { //播放器加载后会调用该函数
		playerLoad = true;
	}
}
</script>
</td></tr>
</table>		
</body> 
</html>
