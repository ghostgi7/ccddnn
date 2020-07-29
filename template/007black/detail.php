<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}
<div id="main">
	<div class="position"><span>您的位置：视频介绍{cmsobj_name}</span></div>
	<div class="box980">
	   <div class="show_video">
			<dl>
				 <dt><img src=" {cmsobj_pic}" alt="{cms_title}" /></dt>
				 <dd class="showtitle"><span>片名：</span><h1>{cmsobj_name}</h1></dd>
				 <dd><span>影片分类：</span><a> {cmsobj_typename}</a></dd>
				 <dd><span>更新时间：</span><a> {cmsobj_time}</a></dd>
				<dd><span>点击：</span><a>  {cmsobj_hit} </a></dd>
				<dd><span>网站公告：</span><a>{cms_notice}</a></dd>
				<dd><span>发布地址一：</span><a>{cms_domain1}</a></dd>
				<dd><span>发布地址二：</span><a>{cms_domain2}</a></dd>
				<dd><span>注意：</span><a>无法播放请刷新等待5-8秒或更换其他影片</a></dd>
			</dl>
	   </div>
	   <div id="vlink_1" class="playBar">
		<div class="playBar_title">
		 <span>在线观看</span>
		</div>
		<ul>
		 <li><a href="{cmsobj_view}">在线播放</a></li>
		 <li><a href="{cmsobj_view}">备用地址</a></li>
		</ul>
	   </div>
		<div class="caoporn_Maincontentfive">
			 <div class="caoporn_mcfive_title">
			  <h2>推荐视频</h2>
			 </div>
			 <div class="caoporn_mcfive_Ct">
			  <ul class="caoporn_video">
				 {video_list:10}
					<li><a href=" {list_detail}" target="_blank"><h3>{list_name}</h3><img alt="{list_name}" src="{list_pic}" /><img class="hd" src="{cms_template}/images/hd.png" alt="{list_name}" /><p><b>{list_time}</b></p><span></span></a></li>
				 {/video_list}
			  </ul>
			 </div>			 
		 </div>
  </div>
{include file="footer.php"}
 
</body>
</html>
