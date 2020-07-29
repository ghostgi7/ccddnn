<html style="font-size: 53.3333px;">
<head>
    <title>{cms_title}</title>
    <meta name="description" content="{cms_description}"/>
    <meta name="keywords" content="{cms_keywords}"/>
    {include file="include.php"}
</head>
<body>
<div id="home" class="page">
    {include file="searchbar.php"}
    <div class="has-sub-header page-content">
{include file="header.php"}
        <div class="page-content">
            <div class="container banner"><!----></div>
            <div id="notice" class="container notice"><!----><!----></div>
            <div class="container first">
                <div class="main-title recommend-title"><a class="main-title-name">新片推荐</a>
                </div>
                <div>
                    <div class="recommend clearfix">
                        <div class="recommend-list">
                            <div class="video-item-row">
                                {new_list:vod,10}
                                <a href="{list_detail}"><div class="video-item-col col-5">
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
                                    </div></a>
                                {/new_list}
                            </div>

                        </div>
                    </div>
                </div>

                {video_hot}
                <div class="container">
                    <div class="main-title recommend-title"><a class="main-title-name">{type_name}</a>
                        <div class="right more"><a href="{type_more}">更多视频<i class="iconfont icon-gengduo"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="recommend clearfix">
                            <div class="recommend-list">
                                <div class="video-item-row">
                                    {video_list:10}
                                    <a href="{list_detail}"><div class="video-item-col col-5">
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
                                        </div></a>
                                    {/video_list}
                                </div>
                                <a href="{type_more}" class="show-more clearfix">查看更多</a></div>
                        </div>
                    </div>
                </div>
                {/video_hot}
            </div><!----><!---->
            {include file="footer.php"}
        </div>
    </div>




</body>
</html>