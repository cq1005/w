<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gbk"/>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
  <link rel="stylesheet" href="../dy/css/stylev.css" />
  <title>云解析</title>
  <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
  <script src="../dy/css/code.js"></script>
  <script src="../dy/css/videos.js"></script>
</head>
<body style="overflow: hidden">
  <div id="play_header">
  </div>
  <div class="panel">
    <a class="active" href="#" onclick="goPlay('./v2.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['f'];?>&f=')">【默认】</a>
    <a href="#" onclick="goPlay('https://jx.618g.com/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【A 】</a>
    <a href="#" onclick="goPlay('http://www.82190555.com/index/qqvod.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 B 】</a>
    <a href="#" onclick="goPlay('https://player.gxtstatic.com/vipplay.php?&h=572&url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 C 】</a>
    <a href="#" onclick="goPlay('https://z1.m1907.cn/?jx=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 D 】</a>
    <a href="#" onclick="goPlay('http://jx.du2.cc/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 E 】</a>
    <a href="#" onclick="goPlay('https://jx.wslmf.com/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 F 】</a>
    <a href="#" onclick="goPlay('http://jiexi8.com/vip/index.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 G 】</a>
    <a href="#" onclick="goPlay('http://2gty.com/apiurl/yun.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 H 】</a>
    <a href="#" onclick="goPlay('http://api.nepian.com/ckparse/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 I 】</a>
    <a href="#" onclick="goPlay('http://lejx.cc/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 J 】</a>
    <a href="#" onclick="goPlay('http://jx.ry68.cn/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 K 】</a>
    <a href="#" onclick="goPlay('https://www.kpezp.cn/jlexi.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 L 】</a>
    <a href="#" onclick="goPlay('http://www.jqaaa.com:88/jx.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 M 】</a>
    <a href="#" onclick="goPlay('http://jx.52xftv.cn/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 N 】</a>
    <a href="#" onclick="goPlay('http://api.wlzhan.com/sudu/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 O 】</a>
    <a href="#" onclick="goPlay('http://jx.ph63.com/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 P 】</a>
    <a href="#" onclick="goPlay('http://api.zuilingxian.com/jiexi.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 Q 】</a>
    <a href="#" onclick="goPlay('http://okjx.cc/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 R 】</a>
    <a href="#" onclick="goPlay('http://api.baiyug.vip/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 S 】</a>
    <a href="#" onclick="goPlay('https://okjx.lrkdzx.com/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 T 】</a>
    <a href="#" onclick="goPlay('http://api.kq1f.cn/vip/index.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 U 】</a>
    <a href="#" onclick="goPlay('http://vipjx.pyhj.net/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 V 】</a>
    <a href="#" onclick="goPlay('http://jiexi.071811.cc/jx.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【 W 】</a>
    <a href="#" onclick="goPlay('../ck.php?f=<?php  echo $url=$_GET['f']?$_GET['f']:$_GET['f'];?>')">【 CK 】</a>
    <a href="#" onclick="goPlay('../k.php?f=<?php  echo $url=$_GET['f']?$_GET['f']:$_GET['f'];?>')">【 KK 】</a>
  </div>
  <p class="playmain">
    <a class="WANG-playmain" style="width: 100%;"></a>
  </p>
  <div style="margin-top: -3px;width:100%;height:100%;">
    <script type="text/javascript">
function getto( w ) { var re = new RegExp( w + "=([^\&]*)"); re.exec(document.location.href); return RegExp.$1;}
function ulss(){
var ulss = getto('f')?getto('f'):getto('url');
if(ulss==null|| ulss==''){ulss='';}else{ulss=ulss;};
return ulss;
}
var ulss = ulss();
var ulss0 = "";
var src = "";
var ulss1 ='./v2.php?url='+ ulss;
var ulss2 ='../kk.php?f='+ ulss;

if( ulss.indexOf(".rm"||".flv"||".f4v"||".wmv"||".mpv"||".mp4"||".3gb"||".3gb2"||".avi"||".mkv"||".mov"||".mp3"||".mpeg"||".webm"||".rmvb"||".m3u") >0 ) src = ulss2;
else if(flss.indexOf("rtmp:"||"rtsp:") >0 ) src=ulss2;else src = ulss1;

document.write('<iframe id="PLAYERS" scrolling="no" allowtransparency="true" frameborder="0" src="./v2.php?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>&f=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['f'];?>" width="100%" height="100%" style="overflow: hidden;"></iframe>');
window.focus();
      function goPlay( url ) {
        $( '#PLAYERS' ).attr( 'src', decodeURIComponent( decodeURIComponent( url ) ) ).show();
      }
    </script>
  </div>
 
</body>
</html>
