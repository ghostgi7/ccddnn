<!DOCTYPE html>
<html>
<head>
    <title>
        {cmsobj_name}在线观看 - 直播区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
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

    <div class="myplayer">
        <div style="position: absolute;top: 0;bottom: 0;left: 0;right: 0">
            {cmsobj_content}
        </div>
    </div>

    <div class="mymenu">
        <a href="{cmsobj_view}">在线播放</a>
        <a href="{cmsobj_view}#beiyong">备用线路</a>
    </div>
    {cms_banner_b}
    <div class="myvod">
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
    {include file="footer.php"}
</div>
</body>
</html>