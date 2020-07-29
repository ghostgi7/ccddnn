<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name},{cms_description}" />
    <meta name="keywords" content="{type_name},{cms_keywords}" />
    {include file="include.php"}
</head>

<body class="no-touch">
    {include file="header.php"}

    <div class="container">
        <div class="content">
            <div class="main-content">
                <div class="main-container">
                    <div id="list_videos_most_recent_videos">
                        <div class="headline">
                            <h2>小说:{type_name}</h2>
                            <div class="line">
                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                <span></span>
                            </div>
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
                    </div>
                </div>
                <div id="wr-page">{include file="page.php"}</div>
            </div>
        </div>
    </div>
    {include file="footer.php"}
</body>
</html>
