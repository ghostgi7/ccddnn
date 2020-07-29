<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
</head>
<body>
 {include file="header.php"}
  
 <div class="maxbox" style="margin-top:5px;">
  <div class="vodbox">
    <div class="indexbox">
      <div class="title">视频分类：{type_name}|公告： {cms_notice}</div>
        {video_list:12}
            <ul>
				<a href="{list_view}"target="_blank"><img src="{list_pic}" width="217" height="134"/>
				<h3>{list_name}</h3>
				<span class="time"><font color="red">{list_time}</font></span></a>
			</ul>
     {/video_list}

            </div>
    <div class="indexright">
      <div class="title">{type_name}-热门推荐</div>

        {video_list:18}
    <ul>
        <li class="num">热</li>
        <li class="tit"><a href="{list_view}"  target="_blank">{list_name}</a></li>

    </ul>
        {/video_list}

 </div>
	   
	   
<div class="page">
    <a href="{cms_page:first}">首页</a>
    <a href="{cms_page:prev}">上一页</a>
    <a href="javascript:;">共{cms_page:count}页</a>
    <a href="javascript:;">当前 {cms_page:current}页</a>
    <a href="{cms_page:next}">下一页</a>
    <a href="{cms_page:last}">尾页</a>
</div>	   
	   
  </div>
  <div style="clear:both"></div>

</div>
{include file="footer.php"}
</body>
</html>		