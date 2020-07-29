<!DOCTYPE html>
<html>
<head>
    <title>
        {cmsobj_name}在线观看 - 图片区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
{include file="include.php"}
</head>
<body>
<div class="vwbg">
    {include file="header.php"}
    <div class="mycate">
        {pic_menu}
        <a href="{menu_link}" >{menu_name}</a>
        {/pic_menu}
    </div>

    <div class="myvod">
        <p>{cmsobj_name}</p>
        <style>
            .myvod img{
                max-width: 100%;
            }
        </style>
        {cmsobj_content}
    </div>
    {include file="footer.php"}
</div>
</body>
</html>