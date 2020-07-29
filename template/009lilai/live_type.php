<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
 {include file="header.php"}
 <main class="main"> 
   <section class="section wapper_wide"> 
    <h2 class="h2 iconfont icon_lastest" style="height:18px;">直播分类：{type_name} </h2>
    <div class="content"> 
     <div class="flex_row"> 
		{live_list:20}
		  <a class="showcase" href=" {list_view}">
		   <div class="div"> 
			<div class="img_wapper"> <img class="img" src=" {list_pic}"/> </div>
			<p class="des" title=" {list_name} "> {list_name} </p>
			<div class="sub_des"> <span class="icon_show iconfont">  {list_hit} </span> <span class="icon_time iconfont">直播中</span> </div>
		   </div> 
		  </a> 
				 {/live_list}
     </div> 
    </div> 
	
<div class="pagenotes flex_row">
    <a class="link" href="{cms_page:first}">首页</a>
    <a class="link" href="{cms_page:prev}">上一页</a>
    <a class="link active" href="javascript:;">共 {cms_page:count}页</a>
    <a class="link active" href="javascript:;">当前第 {cms_page:current}页</a>
    <a class="link" href="{cms_page:next}">下一页</a>
    <a class="link" href="{cms_page:last}">尾页</a>
</div>	
	
	
   </section> 
 

  </main>  
 
 
{include file="footer.php"}
</body>
</html>		
