<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>{cms_title}</title>
    <meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    {include file="include.php"}
</head>
<body>
{include file="header.php"}
<div class="content">
    <div class="main-content">
        <div class="main-container">
            <div id="list_videos_common_videos_list">
                <div class="headline">
                    <h1>搜索结果-{type_name}</h1>
                </div>
                <div class="box">
                    <div class="list-videos">
                        <div class="margin-fix" id="list_videos_videos_watched_right_now_items">
                            {video_list:24}
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
                            {/video_list}
                        </div>
                    </div>
                </div>
        <div class="pagination" id="list_videos_most_recent_videos_pagination">
            <div class="pagination-holder">
                <div id="wr-page">{include file="page.php"}</div>
            </div>
        </div>
    </div>
</div>
</div></div></div>
{include file="footer.php"}
</body>
</html>
