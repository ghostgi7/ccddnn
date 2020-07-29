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
 <div id="header_box"></div>
<div id="top_box"></div>
<div class="wrap mt10">


    {video_hot}
        <div class="box movie_list">
            <div class="title"><b class="sp_pri movie_ico"></b><h2>{type_name}|<strong>公告： {cms_notice}</strong></h2></div>
            <ul>

                 {video_list:8}
                    <li><a href="{list_detail}" target="_blank"><img src="{list_pic}" /><h3>{list_name}</h3></a></li>
                {/video_list}

            </ul>
        </div>

    {/video_hot}
    {if $cms_config['live_status']=='1'}

        <div class="box movie_list">
            <div class="title"><b class="sp_pri movie_ico"></b><h2>直播频道|</h2></div>
            <ul>

            {live_hot_list:8}
                    <li><a href=" {list_view}" target="_blank"><img src=" {list_pic}" /><h3> {list_name} </h3></a></li>
            {/live_hot_list}

            </ul>
        </div>

    {/if}


	
	
	
	
	
	
	
	
	
	
<div class="wrap mt10 clearfix">
	<div class="box movie_list">
<div class="ylink clearfix">
		<div class="title"><h2>友情链接|<strong>公告： {cms_notice}</strong></h2></div>
    
     {cms_link}
</div>
	</section>
</div>
</div>
</div>
<div id="bottom_box"></div>
<div id="footer_box"></div>
{include file="footer.php"}
</body>
</html>	
