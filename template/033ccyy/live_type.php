<!DOCTYPE html>
<html>
<head>
    <title>
        {type_name} - 直播区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
{include file="include.php"}
</head>
<body>
<div class="vwbg">
    {include file="header.php"}
    <div class="mycate">
        {live_menu}
        <a href="{menu_link}" >{menu_name}</a>
        {/live_menu}
    </div>

    <div class="myvod">
        <p>{type_name}</p>
        <ul>
            {live_list:20}
            <li>
                <a class="uzimg" href="{list_view}" title="{list_name}">
                    <img class="lazy" data-original="{list_pic}"
                         src="{cms_template}/images/load.gif" alt="{list_name}">
                    <span class="title">在线</span>
                </a>
                <h4><a href="{list_view}" title="{list_name}">{list_name}</a></h4>
            </li>
            {/live_list}

        </ul>
    </div>
    {include file="page.php"}
    {include file="footer.php"}
</div>
</body>
</html>