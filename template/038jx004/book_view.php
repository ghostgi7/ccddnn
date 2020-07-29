<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>{cmsobj_name}在线阅读 - {cms_title}</title>
    <meta name="description" content="{cmsobj_name}在线阅读,{cms_description}" />
    <meta name="keywords" content="{cmsobj_name}在线阅读,{cms_keywords}" />
    {include file="include.php"}
</head>
<body>
    {include file="header.php"}
    <div style="clear:both:">
    </div>
    <div class="content">
        <div class="top">
        </div>
        <div class="headline book-title">
            <h1>{cmsobj_name}</h1>
            <br>
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
        <div class="video-holder">
            <div class="player">
                <div class="player-holder">
                    <div id="book_box">
                        {cmsobj_content}
                    </div>
                </div>
            </div>
            
        </div>

        <div class="related-videos" id="list_videos_related_videos">
            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                <li><span>猜你喜欢</span></li>
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
        {9CCMS-include:Footer}
    </body>
    </html>