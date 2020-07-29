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
<div class="maxbox" style="margin-top:5px;">
  <div class="title">您的位置：视频播放{cmsobj_name}|公告： {cms_notice}</div><br><br><br>
  <div class="vodbox">
    <div class="artbody">
      <div style="clear:both"></div>
      <div class="cont">
        <div id="postmessage" class="t_msgfont">
         			<div  align="center" style="height:400px">
						{cmsobj_content}
					</div>
          <br>
         </div>
      </div>


    </div>
		{cms_banner_b}
			<div class="indexbox">
			<div class="title">推荐视频|公告： {cms_notice}</div>
			  {video_list:6}
				<ul>
					<a href="{list_view}"target="_blank"><img src="{list_pic}" width="217" height="134"/>
					<h3>{list_name}</h3>
					<span class="time"><font color="red">{list_time}</font></span></a>
				</ul>
             {/video_list}
        </div>
		    <div class="indexright">
      <div class="title">{cmsobj_typename}-热门推荐</div>

                {video_list:9}
    <ul>
        <li class="num">热</li>
        <li class="tit"><a href="{list_view}"  target="_blank">{list_name}</a></li>

    </ul>
                {/video_list}

 </div>
  </div>

  <div style="clear:both"></div>
</div>



{include file="footer.php"}
 
</body>
</html>
