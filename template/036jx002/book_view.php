<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{cmsobj_name}在线阅读 - {cms_title}</title>
    <meta name="description" content="{cmsobj_name}在线阅读,{cms_description}" />
    <meta name="keywords" content="{cmsobj_name}在线阅读,{cms_keywords}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    {include file="include.php"}
</head>
<body>

    {include file="header.php"}  
    <div class="main">
        <h1 class="title">
                <li class="home">
                    <a href="/">首页</a> »
                    <a href="JavaScript:">{cmsobj_typename}</a> »
                    <a href="JavaScript:">{cmsobj_name}</a>
                </li>
        </h1>
    <div class="video-box">    
        <div class="booker mb" >
                {cmsobj_content}
        </div>
        <div style="clear: both;"></div>
    </div>

    <div class="tab-title tab mb clearfix"><ul><li class="on">猜你喜欢</li></ul></div>
            <div class="tab-down mb clearfix">
                <div class="book-list clearfix">
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


{include file="footer.php"}

</body>
</html>