<!DOCTYPE html>
<html>
<head>
    <title>{cmsobj_name}在线阅读 - 小说区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
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
        <p>{cmsobj_name}</p>
        {cmsobj_content}
    </div>
    {include file="footer.php"}
</div>
</body>
</html>