<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name},{cms_description}" />
    <meta name="keywords" content="{type_name},{cms_keywords}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    {include file="include.php"}
</head>
<body>

    {include file="header.php"}
    <div class="main">
        <h1 class="title title-pd">
            小说-{type_name}
        </h1>
        <div class="book-list clearfix">
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
        <div class="page mb clearfix">
            <div id="wr-page">
                {include file="page.php"}
            </div>
        </div>
    </div>

{include file="footer.php"}

</body>
</html>
