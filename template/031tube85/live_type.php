<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>
        {type_name} - 直播区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
{include file="toplink.php"}
<div class="container">
    {include file="header.php"}
    <div class="content">
        <div class="main-content">
            <div class="main-container">

                <div class="headline">
                    <h1> {type_name} </h1>

                </div>

                <div class="box">
                    <div class="list-videos">
                        <div class="margin-fix" id="list_videos_videos_watched_right_now_items">
                            {live_list:24}
                            <div class="item  ">
                                <a href="{list_view}" title="{list_name}">
                                    <div class="img">
                                        <img class="thumb lazy-load"
                                             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                                             data-original="{list_pic}"
                                             alt="{list_name}"
                                             width="320" height="180"/>
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
{include file="page.php"}
            </div>
        </div>


        <p class="text">
            我們最新的網址 {cms_domain1} {cms_domain2} 如發現任何未成年内容請立刻舉報！
        </p>
    </div>

</div>
{include file="footer.php"}
</body>
</html>