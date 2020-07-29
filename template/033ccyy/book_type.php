<!DOCTYPE html>
<html>
<head>
    <title>{type_name} - 小说区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
{include file="include.php"}
</head>
<body>
<div class="vwbg">
    {include file="header.php"}
    <div class="mycate">
        {book_menu}
        <a href="{menu_link}" >{menu_name}</a>
        {/book_menu}
    </div>

    <div class="myvod">
        <p>{type_name}</p>
        <ul>
            {book_list:20}
            <li>
                <a class="uzimg" href="{list_view}" title="{list_name}">
                    <img class="lazy" data-original="{cms_template}/images/ndd.jpg"
                         src="{cms_template}/images/load.gif" alt="{list_name}">
                    <span class="title">硬了点这里</span>
                </a>
                <h4><a href="{list_view}" title="{list_name}">{list_name}</a></h4>
            </li>
            {/book_list}

        </ul>
    </div>
    {include file="page.php"}
    {include file="footer.php"}
</div>
</body>
</html>