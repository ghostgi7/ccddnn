<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{type_name} - 文章列表 - {cms_title}</title>
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
				<h2>小说专区:{type_name}</h2>
			</div> 
			<div class="list_article">
				<ul>
					{book_list:20}
					<li><a target="_blank" href="{list_view}">{list_name}</a><span>{list_time}</span></li>
					 {/book_list}
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




