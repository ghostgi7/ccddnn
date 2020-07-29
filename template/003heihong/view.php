<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
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
		<span class="cat_pos_l">您的位置：视频播放<h1>{cmsobj_name}</h1></span>
	</div>
</div>

<div class="wrap mt10">
	<div class="box play">
		<div class="player">
			<div  align="center" style="height:400px">
			{cmsobj_content}
			
			</div>
		
			<div class="clear"></div>
		</div>
		<div class="copyright">	
<font size="3" color="red"><strong>部分当日更新影片需要完成转码后才能播放，如遇到不能播放的情况建议24小时之后在进行观看。</strong></font>
	</div>
	{cms_banner_b}
</div>
</div>
<div class="wrap mt10">
	<div class="box movie_list">
		<div class="title"><b class="sp_pri movie_ico"></b><h2>推荐视频|<strong>公告： {cms_notice}</strong></h2></div>
		<ul>
            {video_list:8}
            <li><a href="{list_detail}" target="_blank"><img src="{list_pic}" /><h3>{list_name}</h3></a></li>
            {/video_list}

		</ul>
	</div>
</div>
<div id="bottom_box"></div>
<div id="footer_box"></div>


{include file="footer.php"}
 
</body>
</html>
