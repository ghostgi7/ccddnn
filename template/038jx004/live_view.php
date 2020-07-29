<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>{cmsobj_name}正在直播 - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    {include file="include.php"}
</head>
<body>
{include file="header.php"}
<div style="clear:both:">
</div>
<div class="content">
    <div class="top">
    </div>
    <div class="headline">
        <h1>{cmsobj_name}</h1>
        <br>
    </div>
    <div class="video-holder">
        <div class="player">
            <div class="player-holder">
                <div id="bofang_box">
                    {cmsobj_content}
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
        <div class="video-info">
            <div class="info-holder">
                <div id="tab_video_info" class="tab-content">
                    <div class="block-details">
                        <div class="info">
                            <div class="item">
                                <span>分类: <em>{cmsobj_typename}</em></span>
                            </div>
                            <div class="item">
                                <span>更新时间: <em>{cmsobj_time}</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partialViewSlider-outerwrapper">
                {cms_banner_b}
            </div>
    </div>
    <div class="related-videos" id="list_videos_related_videos">
        <ul class="list-sort" id="list_videos_related_videos_filter_list">
            <li><span>猜你喜欢</span></li>
        </ul>
        <div class="box">
                    <div class="list-videos">
                        <div class="margin-fix" id="list_videos_videos_watched_right_now_items">
                        {live_list:12}
                        <div class="item">
                            <a href="{list_detail}" title="{list_name}">
                                <div class="img">
                                    <img class="thumb" src="{list_pic}" alt="{list_name}" style="height: 135px" ;/>
                                </div>
                                <strong class="title">
                                    {list_name}
                                </strong>
                                <div class="wrap">
                                    <!-- <div class="duration">
                                        {9CCMS-Index:Time}
                                    </div> -->
                                    <div class="rating negative">
                                        {list_hit}
                                    </div>
                                    <div class="rating positive">
                                        <?php  echo rand(5, 10000); ?>
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
{include file="footer.php"}
</body>
</html>