<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name},{cms_description}" />
    <meta name="keywords" content="{type_name},{cms_keywords}" />
    {include file="include.php"}
</head>
<body>
{include file="header.php"}
<div class="content">
    <div class="main-content">
        <div class="main-container">
            <div id="list_videos_common_videos_list">
                <div class="headline">
                    <h1>小说-{type_name}</h1>
                </div>
                <div class="box">
                    <div class="book-list">
                        <ul>
                        {book_list:24}
                            <a href="{list_view}" target="_blank">
                                <li style="white-space: normal;text-overflow: ellipsis;overflow: hidden">
                                    <div class="book-name">【{type_name}】{list_name}</div>
                                    <div class="book-time" style="text-align: right">{list_time}</div>
                                </li>
                            </a>
                        {/book_list}
                        </ul>
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