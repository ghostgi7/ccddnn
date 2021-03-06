<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{cmsobj_name}正在直播 - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    {include file="include.php"}
</head>

<body class="no-touch">
    {include file="header.php"}

    <div class="container">
        <div class="content">
            <div class="headline">
                <h1>{cmsobj_name}</h1>
            </div>
        <div class="block-video" style="clear: both;">
            <div class="video-holder">
                <div class="player">
                    <div class="player-holder" style="height: 380px;">
                        {cmsobj_content}
                    </div>
                </div>

                <div class="video-info">
                    <div class="info-holder expanded">
                        <div class="tabs-menu">
                            <ul>
                                <li>
                                    <a href="" class="toggle-button active">直播简介</a></li>
                            </ul>
                        </div>
                        <div id="tab_video_info" style="display: block;">
                            <div class="block-details">
                                <div class="info">
                                    <div class="item" style="display: block">
                                        <span>直播分类:<em>{cmsobj_typename}</em></span>
                                    </div>
                                    <div class="item" style="display: block">
                                        <span>更新时间:<em>{cmsobj_time}</em></span>
                                    </div>
                                    <div class="item" style="display: block">
                                        <span>播放量:<em><?php  echo rand(5, 10000); ?></em></span>
                                    </div>
                                    <div class="item" style="display: block">
                                        <span>点赞:<em><?php  echo rand(5, 10000); ?></em></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-video" >
            {cms_banner_b}
        </div>

        <div class="related-videos" id="list_videos_related_videos">
            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                <li>
                    <span>猜你喜欢</span>
                </li>
            </ul>
            <div class="box">
                <div class="list-videos">
                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                {live_list:10}
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
                                {/live_list}
                    </div>
                </div>
            </div>
            
        </div>

        </div>

    </div>
    {include file="footer.php"}

</body>

</html>

