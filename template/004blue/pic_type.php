<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cms_title}-文章列表</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
	
</head>
<body>
{include file="header.php"}
 
 <div class="maxbox" style="margin-top:5px;">
  <div class="vodbox">

      <div class="title">图片专区:{type_name}|公告： {cms_notice}</div>
	  
	  
	  
<div class="atrlist"> 
{pic_list:20}
<ul>
  <li class="pic"></li>
  <li class="name"><a href="{list_view}" title="{list_name}" target="_blank">{list_name}</a></li>
<li class="time"><font color="red">{list_time}</font></li>
</ul>
{/pic_list}
		 
		          

  </div>	 <div class="page">
          <a href="{cms_page:first}">首页</a>
          <a href="{cms_page:prev}">上一页</a>
          <a href="javascript:;">共{cms_page:count}页</a>
          <a href="javascript:;">当前 {cms_page:current}页</a>
          <a href="{cms_page:next}">下一页</a>
          <a href="{cms_page:last}">尾页</a>
</div>	   
	   
  </div>
  <div style="clear:both"></div>

</div>
 
 
 
{include file="footer.php"}
	
</body>
</html>		
	