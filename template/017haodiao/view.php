<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}
<div id="container">
<div id="content">
 <div class="clear">
<div class="span-755">
  <div class="clear">
    <div style="margin-top:10px;margin-bottom:10px;">
	<div class="wrap mt20">
	<div class="box cat_pos clearfix">
<span class="cat_pos_l"><font size="4">{cmsobj_name}</font></div>
	<div class="wrap mt20">
	<div class="box" style="height:300px">
	{cmsobj_content}
	</div>
	</div>	
	
	
	{cms_banner_b}
	
	
	
	
	
	
	
	
            <!-- new videos -->
            <div class="box">
				  <div class="bmenu">
					<div class="bmenul" style="width:300px;"><h2 style="float:left;">视频推荐</h2></div>
					<div class="clear"></div>
				  </div>
				  <div style="margin-left:14px;">
				  
			 	{video_list:10}
						<div class="video_box"> 
						<a href=" {list_view}" target="_blank"><img src="{list_pic}" width="160" height="120"><br>
						<span class="font-13 ">{list_name}</span><br></a>
	
						<div class="clear_right"></div>
						<div class="box_left">时间：{list_time}</div>
						</div>
					 {/video_list}

				<div class="clear_left"></div>
				</div>
			</div>





<div align="center"></div>
</div>



</div></div></div></div></div>





{include file="footer.php"}
</body>
</html>
