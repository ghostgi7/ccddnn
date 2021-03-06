<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{cms_title}</title>
	<meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    {include file="include.php"}
</head>

<body class="no-touch">
    {include file="header.php"}

    <div class="container">
        <div class="content">
            <div class="main-content">
                <div class="main-container">
                	{video_hot}
                    <div id="list_videos_most_recent_videos">
                        <div class="headline">
                            <h2>{type_name}</h2>
                            <div class="line">
                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                <span></span>
                            </div>
                        </div>

                        <div class="box">
                            <div class="list-videos">
                                <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                	{video_list:15}
                                    <div class="item  ">
                                        <a href="{list_detail}" title="{list_name}">
                                            <div class="img">
                                                <img class="thumb lazy-load" src="{list_pic}" alt="">
                                                <span class="ico-fav-0 "></span>
                                                <span class="ico-fav-1 "></span>
                                                <span class="is-hd">HD</span>
                                            </div>
                                            <strong class="title">
                                                {list_name}
                                            </strong>
                                            <div class="wrap">
                                                <div class="views">
                                                	{list_hit}
                                            	</div>
                                                <div class="rating positive"><?php  echo rand(5, 10000); ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    {/video_list}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/video_hot}

                </div>
            </div>


        </div>

        <div class="footer-margin">
            <div class="headline">
                <h2>友情链接</h2>
                <div class="line">
                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                    <span></span>
                </div>
            </div>
            <div>
            	{cms_link}
            </div>
        </div>
    </div>
    {include file="footer.php"}

</body>

</html>
