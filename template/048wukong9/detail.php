<!DOCTYPE html><html mip><head><meta charset="utf-8"><meta name="applicable-device" content="pc,mobile"><meta name="MobileOptimized" content="width" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="shortcut icon" href="{9CCMS:$WEBUrl}/favicon.ico" type="image/x-icon" />
<title>	正在打开页面 - {cms_title}</title>
{include file="include.php"}
{include file="header.php"} 
<form name=loading>

　<p align=center> <font color="FC0000" size="4">正在打开页面，请耐心等待</font><font color="FC0000" size="3" face="Arial">...</font>

　　<input type=text name=chart size=54 style="font-family:Arial; font-weight:bolder; color:#FC0000; background-color:#fef4d9; padding:0px; border-style:none;">

　　

　　<input type=text name=percent size=55 style="color:#FC0000; text-align:center; border-width:medium; border-style:none;">

　　<script>　

var bar=0　

var line="||"　

var amount="||"　

count()　

function count(){　

bar=bar+2　

amount =amount + line　

document.loading.chart.value=amount　

document.loading.percent.value=bar+"%"　

if (bar<99)　

{setTimeout("count()",100);}　

else　

{window.location = "{cmsobj_view}";}　

}</script>

　</p>

</form>
<br>
<p align="center"> 如果您的浏览器不支持跳转,<a style="text-decoration: none" href="{cmsobj_view}"><font color="#FF0000">请点这里</font></a>.</p>
{include file="footer.php"} 