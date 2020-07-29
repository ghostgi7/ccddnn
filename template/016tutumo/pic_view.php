<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cmsobj_name}-文章内容-{cms_title}</title>
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
  <div class="icon">
   <div class="container">
    <div class="imain clearfix">
     <div class="breadcumb">您的位置：图片专区{cmsobj_name}</div>
     <div class="conte">
      <header class="article-header">
       <h1 class="article-title">{cmsobj_name}</h1>
      </header>
      <article class="article-content">
      {cmsobj_content}
      </article>
	  		<center>
			{cms_banner_b}
		</center>	
     </div>
    </div>
   </div>
  </div>

{include file="footer.php"}
 
</body>
</html>
