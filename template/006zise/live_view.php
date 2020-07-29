<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}

  <div id="warp">
<div id="main">
		<div class="box">
			<div id="content1" class="border"><div class="title"><h4>本直播为实时直播！</h4></div></div>
	</div>


	<div class="box">

			<div id="content">
				<div class="intro">
					<div class="player">
						{cmsobj_content}
					</div>
				</div>
	        </div>
	</div>
	<div class="top_js">
		{cms_banner_b}
	</div>
	
</div>

</div>

{include file="footer.php"}
 
</body>
</html>