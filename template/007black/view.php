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
	<div class="position"><span>您的位置：视频播放{cmsobj_name}</span></div>
	<div class="box980">
	   <div class="show_video" style="height:400px">
           {cmsobj_content}
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

			 <div class="caoporn_mcfive_Ct">
			  <ul class="caoporn_video">
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/1.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/2.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/3.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/1.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/1.jpg"></a></li>
			  </ul>
			 </div>			 
		 </div>	 
		<center>
			{cms_banner_b}
		</center>		 
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
