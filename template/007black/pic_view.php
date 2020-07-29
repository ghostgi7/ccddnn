<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cmsobj_name}-文章内容-{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}
<div id="main">
	<div class="position"><span>您的位置：图片专区{cmsobj_name}</span></div>
	<div class="caoporn_main article-main">
		<div class="article-wrap">
			<h1 class="t-c">{cmsobj_name} </h1>
			<div class="art_content">

				{cmsobj_content}
				</div>
			</div>
		</div>
	

	   
		<div class="caoporn_Maincontentfive">

			 <div class="caoporn_mcfive_Ct">
			  <ul class="caoporn_video">
			 
			  </ul>
			 </div>			 
		 </div>	
		<center>
			{cms_banner_b}
		</center>		 
  </div>

{include file="footer.php"}
 
</body>
</html>
