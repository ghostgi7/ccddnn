<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
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
		<span class="cat_pos_l">直播频道<h1>{cmsobj_name}直播中</h1></span>
	</div>
</div>
<div class="wrap mt10">
	<div class="box play">
		<div class="player">
			<div  align="center" >
                {cmsobj_content}
			</div>
		
			<div class="clear"></div>
		</div>
		<div class="copyright">	
<font size="3" color="red"><strong>【本直播为实时直播！】</strong></font>

	</div>
			<div class="copyright">	

<font size="1" color="red"><strong>SMBB值:{cmsobj_id} </strong></font>
	</div>
	{cms_banner_b}
</div>
</div>
<div class="wrap mt10">
	<div class="box movie_list">
		<div class="title"><h2><strong>公告： {cms_notice}</strong></h2></div>
		<ul>
		

			<li><a><img src="{cms_template}/images/zb.jpg" /></a></li>
			<li><a><img src="{cms_template}/images/zb1.jpg" /></a></li>
			<li><a><img src="{cms_template}/images/zb2.jpg" /></a></li>
			<li><a><img src="{cms_template}/images/zb.jpg" /></a></li>
	

		</ul>
	</div>
</div>

<div id="bottom_box"></div>
<div id="footer_box"></div>

{include file="footer.php"}
 
</body>
</html>