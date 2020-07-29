<html style="font-size: 53.3333px;">
<head>
    <title>
        {cmsobj_name}在线观看 - 电影区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div id="viewVideo" class="page">
    {include file="searchbar.php"}
    <div class="has-sub-header page-content">
        {include file="header.php"}
        <div class="page-content">
            <div class="container banner"><!----></div>
            <div id="notice" class="container notice"><!----><!----></div>
            <div class="container">
                <div class="category-wrap">

                    <div class="category-list">
                        {hd_menu}
                        <span class="category-item"><a href="{menu_link}">{menu_name}</a></span>
                        {/hd_menu}
                        {video_menu}
                        <span class="category-item"><a href="{menu_link}">{menu_name}</a></span>
                        {/video_menu}

                    </div>
                </div>
            </div>
            <div class="container clearfix view-video-container">

                <div class="main-title recommend-title"><a class="main-title-name">{cmsobj_name}</a>
                </div>
                <div class="video-wrapper mt20" style="width: 100%;padding-bottom:56.25%;position: relative ">
                    <div style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;overflow: hidden">
                        <img src="{cmsobj_pic}" width="100%">
                        <a href="{cmsobj_view}" style="position:absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);display: block;width: 150px;line-height:44px;text-align:center;color:#fff;height: 44px;border-radius: 5px;background: #c37200 ">在线播放</a>
                    </div>
                </div>

                <div class="video-wrapper recommend-wrap">
                    <div class="comment-title"><span class="comment-title-span active">相关推荐</span></div>
                    <div>
                        <div class="recommend clearfix">
                            <div class="recommend-list">
                                <div class="video-item-row">
                                    {video_list:10}
                                    <a href="{list_detail}">
                                        <div class="video-item-col col-5">
                                            <div class="video-item">
                                                <div class="video-img"><!---->
                                                    <div class="pre-img" style="visibility: visible; height: unset">

                                                        <img data-src="{list_pic}"
                                                             src="{list_pic}"
                                                             lazy="loaded">
                                                        <div class="video-img-desc">
                                                            <div class="right">HD</div>
                                                        </div><!---->
                                                    </div>
                                                </div>
                                                <div class="video-desc">
                                                    <div class="video-desc-content">
                                                        {list_name}
                                                    </div>
                                                    <div class="video-desc-comment"><span>{list_hit}观看</span><span>{list_time}</span>
                                                        <!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    {/video_list}
                                </div>

                            </div>
                        </div>

                    </div>
                    <div style="display: none;"><!----></div>
                </div>
            </div>
            {include file="footer.php"}
        </div>
    </div>


</body>
</html>