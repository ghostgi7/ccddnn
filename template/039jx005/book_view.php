<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{cmsobj_name}在线阅读 - {cms_title}</title>
    <meta name="description" content="{cmsobj_name}在线阅读,{cms_description}" />
    <meta name="keywords" content="{cmsobj_name}在线阅读,{cms_keywords}" />
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
                <div class="video-info">
                    <div class="info-holder expanded">
                        <div id="tab_video_info" style="display: block;">
                            <div class="block-details">
                                <div class="info">
                                    <div class="item" style="display: block">
                                        <span>套图分类:<em>{cmsobj_typename}</em></span>
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
                <div class="player-book">
                       {cmsobj_content}
                </div>
            </div>
        </div>


        <div class="related-videos" id="list_videos_related_videos">
            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                <li>
                    <span>猜你喜欢</span>
                </li>
            </ul>
            <div class="box">
                <div class="book-list">
                    <ul>
                        {book_list:10}
                            <a href="{list_view}" target="_blank">
                                <li style="white-space: normal;text-overflow: ellipsis;overflow: hidden">
                                            <div class="book-name">【{cmsobj_typename}】{list_name}</div>
                                            <div class="book-time" style="text-align: right">{list_time}</div>
                                        </li>
                                    </a>
                                {/book_list}
                    </ul>
                </div>
            </div>
            
        </div>

        </div>

    </div>
    {include file="footer.php"}

</body>

</html>
