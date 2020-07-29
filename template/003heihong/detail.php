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
			<span class="cat_pos_l">您的位置：<h1>{cmsobj_name}</h1></span>
	</div>
</div>
<div class="wrap mt10">
	<div class="box">
		<div class="film_info clearfix">
			<dl>
				<dt><img src="{cmsobj_pic}"  style="width:400px; height:260px;"/></dt>
				<dd class="film_title">{cmsobj_name}</dd>
				<dd>类型：<span> {cmsobj_typename}</span></dd>
				<dd>更新时间：<font size="2" color="red"><strong> {cmsobj_time}</strong></font></dd>
				<dd>重要说明：<font size="2" color="blue"><strong>部分当日更新影片需要完成转码后才能播放，如遇到不能播放的情况建议24小时之后在进行观看。</strong></font><span></dd>
				<dd>本站公告：<font size="2" color="red"><strong>本站发布地址一：{cms_domain1}请狼友们收藏避免丢失<span></dd>
			</dl>

		</div>

		<div class="film_bar clearfix"><span>视频播放线路-<font color="#FF0000" size="3">共二线</strong></font>
			<ul>
				<li><a href="{cmsobj_view}" target="_blank">在线播放</a></li>
				<li><a href="{cmsobj_view}" target="_blank">备用线路</a></li>
			</ul>
		</div>
		<div class="film_photo"></div>
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
