<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
	<title>{type_name} - 文章列表 - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <link href="{cms_template}/css/app.css" rel="stylesheet" type="text/css" />
  <script src="{cms_template}/js/jquery.js"></script>
  <script src="{cms_template}/js/jquery.lazyload.js"></script>

  <script src="{cms_template}/js/home.js"></script>
</head>
<body>
{include file="header.php"}
   <div class="toped"></div>
   
  <div class="icon">
   <div class="container">

	<div class="tv-hd">
      <h2 class="color-tit"><span>小说专区:{type_name}</span></h2>
     </div>
    <section class="art-top clearfix">
		<div class="tv-bd">
		<ul class="txtlist clearfix" style="clear:both;">
			{book_list:20}
			<li><p><a href="{list_view}" title="{list_name}">{list_name}</a></p></li>
		 {/book_list}
		</ul>
		<div class="v-page clearfix">


		<a href="{cms_page:first}">首页</a>
		<a href="{cms_page:prev}">上一页</a>
        <a href="javascript:;">共{cms_page:count}页</a>
        <a href="javascript:;">当前 {cms_page:current}页</a>
		<a href="{cms_page:next}">下一页</a>
		<a href="{cms_page:last}">尾页</a>

			
       </div>
		
		</div>
	</section>
	</div>

    <div class="mided mided1 mt20"></div>
    <div class="mided mided2 mt0"></div>
    <div class="mided mided3 mt0"></div>

  </div> 
  
{include file="footer.php"}
</body>
</html>		




