<!DOCTYPE HTML>
<?php 
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT'); 
header('Cache-Control: no-cache, must-revalidate'); 
header('Pragma: no-cache'); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" /> 
<title></title>
<link href="../dy/css/common.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php require'./dy/css/top.php'; ?>"></script>
<script type="text/javascript" src="../dy/css/put.js"></script>
</head>
<body style="margin:0;padding:0;position:absolute; width:100%; height:100%; z-index:-1" bgcolor="#454545" topmargin="0" leftmargin="0" scroll="auto"  SCROLLING="yes" oncontextmenu="window.event.returnValue=false"  ondragstart="window.self.event.returnValue=false" oncontextmenu="window.self.event.returnValue=false"
onselectstart="return false">
<div align="center">
<table width="100%" height="100%" border="0" bgcolor="#000000" cellpadding="0" cellspacing="0">
<tr>
<td>
<br>
<div>
<script>
document.write('<iframe name="b" src='+src+' width="100%" height='+h+' bgcolor="#454545" SCROLLING="yes" frameborder="0" paramt='+paramt+'></iframe>');
window.focus();</script>
</td>
<td id="sh" width="7px" bgcolor="#78838B" SCROLLING="yes" style="border-left:0px solid #808080; cursor:hand" onClick="showsubmenu()"><span id="idFlag"><div class="close" id="sh">
<a href="#" title="关闭列表"></a></div></span>
</td>
<td width="16%" height="100%" id="list" SCROLLING="yes" style="border-right-width: 0px; border-top-width: 0px; border-bottom-width:0px">
<script>
document.write('<iframe src='+lists+' width="100%"  height='+th+' frameborder="0" border="0" SCROLLING="yes" name="b1"></iframe>');
window.focus();
</script>
</td>
</table>
</div>
</body>
</html>

