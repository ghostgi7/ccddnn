<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>
        {cmsobj_name}在线观看 - 直播区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
{include file="toplink.php"}
<div class="container">
    {include file="header.php"}
    <div class="content">
        <div class="headline">
            <h1>{cmsobj_name}</h1>
        </div>
        <div class="block-video">
            <div class="video-holder">
                <div class="video-holder">
                    <div class="player" style="position:relative;width: 100%;padding-bottom: 56.25%;">
                        <div style="position: absolute;bottom: 0;top: 0;left: 0;right: 0">
                            {cmsobj_content}
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="related-videos" id="list_videos_related_videos">
            {cms_banner_b}
            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                <li><span>相關影片</span></li>


            </ul>

            <div class="box">
                <div class="list-videos">
                    <div class="margin-fix" id="list_videos_related_videos_items">
                        {live_list:12}
                        <div class="item  ">
                            <a href="{list_view}" title="{list_name}">
                                <div class="img">
                                    <img class="thumb lazy-load"
                                         src="{list_pic}"
                                         data-original="{list_pic}"
                                         alt="{list_name}"
                                         data-preview="{list_pic}"
                                         width="320" height="180" style="display: block;">
                                </div>
                                <strong class="title">
                                    {list_name}
                                </strong>

                                <div class="wrap">
                                    <div class="added"><em>{list_time}</em></div>
                                    <div class="views">{list_hit}</div>
                                </div>
                            </a>
                        </div>
                        {/live_list}

                    </div>
                </div>
            </div>
        </div>
    </div>
    {include file="footer.php"}
</body>
</html>