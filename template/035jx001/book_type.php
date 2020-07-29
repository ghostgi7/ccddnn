<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name},{cms_description}" />
    <meta name="keywords" content="{type_name},{cms_keywords}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {include file="include.php"}
</head>
<body>
    <div class="container">
        <div class="row">
            {include file="header.php"}
            <div class="stui-pannel clearfix">
             <!-- 筛选 -->
                <div class="type-list-fl">
                    <ul class="clearfix">
                        <li><a href="javascript:(0)">小说阅读-{type_name}</a></li>
                    </ul>
                </div>
             <!-- end 筛选 -->

            <div class="book-list">
                <!-- 列表 -->         
                <ul class="clearfix">
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

            <div id="wr-page">
                {include file="page.php"}
            </div>

            </div>                          
        </div>
    </div>

{include file="footer.php"}

</body>
</html>
