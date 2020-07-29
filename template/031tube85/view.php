<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>
        {cmsobj_name}在线观看 - 电影区 - {cms_title}</title>
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

                <div class="video-info">
                    <div class="info-holder">
                        <div class="info-buttons">

                            <div class="tabs-menu">
                                <ul>
                                    <li><a href="{cmsobj_view}" class="toggle-button">在线播放</a></li>
                                    <li><a href="{cmsobj_view}#tab_report_rrror" class="toggle-button">备用播放</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab_video_info" class="tab-content" style="display: block;">
                            <div class="block-details">
                                <div class="info">
                                    <div class="item">
                                        <span>觀看次數: <em>{cmsobj_hit}</em></span>
                                        <span>上傳時間: <em>{cmsobj_time}</em></span>
                                        <span class="added-by">用戶:admin</span>
                                    </div>
                                    <div class="item">
                                        說明:
                                        <em>{cmsobj_name}</em>
                                    </div>
                                    <div class="item">
                                        分類:
                                        <a href="{cmsobj_typemore}">{cmsobj_typename}</a>
                                    </div>

                                </div>
                            </div>
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
                        {video_list:12}
                        <div class="item  ">
                            <a href="{list_detail}" title="{list_name}">
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
                        {/video_list}

                    </div>
                </div>
            </div>
        </div>
    </div>
    {include file="footer.php"}
</body>
</html>