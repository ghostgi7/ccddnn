<!DOCTYPE html>
<html>
<head>
    <title>{cms_title}</title>
    <meta name="description" content="{cms_description}"/>
    <meta name="keywords" content="{cms_keywords}"/>
{include file="include.php"}
</head>
<body>
<div class="vwbg">
    {include file="header.php"}
    <div class="mycate">
        {hd_menu}
        <a href="{menu_link}" >{menu_name}</a>
        {/hd_menu}
    </div>
    <div class="mycate">
        {video_menu}
        <a href="{menu_link}">{menu_name}</a>
        {/video_menu}
    </div>

    <div class="myvod">
        <p>{type_name}</p>
        <ul>
            {video_list:20}
            <li>
                <a class="uzimg" href="{list_detail}" title="{list_name}">
                    <img class="lazy" data-original="{list_pic}"
                         src="{cms_template}/images/load.gif" alt="{list_name}">
                    <span class="title">高清</span>
                </a>
                <h4><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
            </li>
            {/video_list}

        </ul>
    </div>
    {include file="page.php"}
    {include file="footer.php"}
</div>
</body>
</html>