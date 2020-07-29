<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
 {include file="header.php"}
<div id="main">
   <div class="caoporn_main">
    <div class="caoporn_Maincontentfive">
     <div class="caoporn_mcfive_title">
      <h2>视频分类：{type_name}</h2>
     </div>
     <div class="caoporn_mcfive_Ct">
      <ul class="caoporn_video">
		 {video_list:20}
			<li><a href=" {list_detail}" target="_blank"><h3>{list_name}</h3><img alt="{list_name}" src="{list_pic}" /><img class="hd" src="{cms_template}/images/hd.png" alt="{list_name}" /><p><b>{list_time}</b></p><span></span></a></li>
		 {/video_list}
      </ul>
     </div>
	<div class="page">
        <a href="{cms_page:first}">首页</a>
        <a href="{cms_page:prev}">上一页</a>
        <a href="javascript:;">共{cms_page:count}页</a>
        <a href="javascript:;">当前 {cms_page:current}页</a>
        <a href="{cms_page:next}">下一页</a>
        <a href="{cms_page:last}">尾页</a>
	</div>	 
    </div>
   </div>
</div>
{include file="footer.php"}
</body>
</html>		