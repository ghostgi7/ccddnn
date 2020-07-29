<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
</head>
<body>
 {include file="header.php"}
 <div id="header_box"></div>
<div id="top_box"></div>
<div class="wrap mt10">
	<div class="box cat_pos clearfix">
		<span class="cat_pos_l">视频分类：{type_name} </h2></span><span class="cat_pos_r"><em>公告： {cms_notice}</em></span>
	</div>
</div>
<div class="wrap mt10">
	<div class="box movie_list">
		<ul>
		
		 {video_list:24}
			<li><a href="{list_detail}" target="_blank"><img src="{list_pic}" /><h3>{list_name}</h3></a></li>
         {/video_list}

		</ul>
		<div class="clear"></div>
		<div class="pagination">
            <a href="{cms_page:first}">首页</a>
            <a href="{cms_page:prev}">上一页</a>
            <a href="javascript:;">共{cms_page:count}页</a>
            <a href="javascript:;">当前 {cms_page:current}页</a>
            <a href="{cms_page:next}">下一页</a>
            <a href="{cms_page:last}">尾页</a>
		</div>
	</div>
</div>
<div id="bottom_box"></div>
<div id="footer_box"></div>


					
	

{include file="footer.php"}
</body>
</html>		