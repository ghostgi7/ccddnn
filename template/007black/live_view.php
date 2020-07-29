<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}
<div id="main">
	<div class="position"><span>本直播为实时直播！</span></div>
	<div class="box980">
	   <div class="show_video" >
			{cmsobj_content}
	   </div>
	   <div id="vlink_1" class="playBar">
		<div class="playBar_title">
		 <span>本直播为实时直播！</span>
		</div>

	   </div>
	   
		<div class="caoporn_Maincontentfive">

			 <div class="caoporn_mcfive_Ct">
			  <ul class="caoporn_video">
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/zb.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/zb1.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/zb2.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/zb1.jpg"></a></li>
					<li  style="height:150px"><a  style="height:130px"><img style="height:130px" src="{cms_template}/images/zb.jpg"></a></li>
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