<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="googlebot" content="noindex,nofollow" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
 {include file="header.php"}
 <div class="wrap mt20">
	<div class="box movie2_list">
		<div class="title"><div style="color:#ffffff; background-color:#008b8b"><h3>视频分类：{type_name}</b></h3></div></div>

<ul>
			 {video_list:12}
<li><a href=" {list_view}" target="_blank"><img src="{list_pic}"/><h3> {list_name}</h3><div align="center"><span class="movie_date"><!--[if lt IE 9 ]><span class="bg_top"><![endif]--> {list_time}<!--[if lt IE 9 ]></span></div><span class="bg_tail"></span><![endif]--></span></a></li>
 
					 {/video_list}

 

</ul>		

</div>
</div>
 <div class="wrap mt20">
        <div class="pagination">
            <a href="{cms_page:first}">首页</a>
            <a href="{cms_page:prev}">上一页</a>
            <a href="javascript:;">共{cms_page:count}页</a>
            <a href="javascript:;">当前第 {cms_page:current}页</a>
            <a href="{cms_page:next}">下一页</a>
            <a href="{cms_page:last}">尾页</a>
		</div>
</div>
{include file="footer.php"}
</body>
</html>		
