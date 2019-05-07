<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title></title>
<link href="../v/js/style.css?v=1.1" rel="stylesheet"/>
<script src="../v/js/jquery.min.js" type="text/javascript"></script>
<script src="../v/js/style.js?v=1.1" type="text/javascript"></script>
<script src="../dy/css/put.js"></script>
<script>
function alss(){
var alss = getId('a')?getId('a'):"tv";
if(alss==null || alss==''){alss='tv';}else{alss=alss;};
return alss;
}
function flss(){
var flss = getId('url')?getId('url'):getId('url');
if(flss==null || flss==''){flss='';}else{flss=flss;};
return flss;
}
function clss(){
var clss = getId('c')?getId('c'):"";
if(clss==null || clss==''){clss='';}else{clss=clss;};
return clss;
}
function th(){
var h=window.screen.height;document.cookie="screen="+h;var h1=h-200;var h2=h-190;var h3=h-180;var h4=h-170;var h5=h-160;var h6=h-150;var h7=h-140;var h8=h-130;
var hht = window.screen.height;
return h3;
}
function getId( s ) { var re = new RegExp( s + "=([^\&]*)"); re.exec(document.location.href); return RegExp.$1;}
function WMXZ(url){ $('#WANG').attr('src',decodeURIComponent(decodeURIComponent(url))).show(); } 
function src(){
var trl="A";
var src1 = '../v/' + trl + '/?url=' + flss;
var krc = '../v/ck.php?&f=' + flss;
if( flss.indexOf(".rm"||".flv"||".f4v"||".wmv"||".mpv"||".mp4"||".3gb"||".3gb2"||".avi"||".mkv"||".mov"||".mp3"||".mpeg"||".webm"||".rmvb"||".m3u") >0 ) src = krc;
else if(flss.indexOf("rtmp:"||"rtsp:") >0 ) src=krc;else if( alss=='m3u8' || alss=='tv'|| alss=='stv') src=krc;
else src = src1;
return src;
}
var h=th();
var flss = flss();
var alss = alss();
</script>
</head>
<body style="overflow-y:hidden;height:100%;">
<div class="panel">
<a href="javascript:WMXZ('../v/A/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【A】</a>
<a href="javascript:WMXZ('../v/B/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【B】</a>
<a href="javascript:WMXZ('../v/C/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【C】</a>
<a href="javascript:WMXZ('../v/E/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【E】</a>
<a href="javascript:WMXZ('../v/F/?url=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【F】</a>
<a href="javascript:WMXZ('./k.php?f=<?php echo $url=$_GET['f']?$_GET['f']:$_GET['url'];?>')">【ck】</a>
</div>
<p class="slide"><a class="WMXZ-WANG">播放线路</a></p>
<div style="margin:-36px auto;width:100%;height:100%;">
<script>
var src = src();
document.write('<iframe id="WANG" scrolling="no" allowtransparency="true" frameborder="0" src="'+src+'" width="100%" height="'+h+'"></iframe>');
window.focus();
</script>
</body>
</html>