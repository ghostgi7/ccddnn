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
    <div class="mybbs">
        <p><b>{cms_notice}</b><br><a href="//{cms_domain1}">记住地址发布页 {cms_domain1} 以防失联</a><br><a href="//{cms_domain2}">记住地址发布页 {cms_domain2} 以防失联</a><br>本站完全免费,
            请不要相信任何付费看片的,广告合作 {cms_email}</p>
    </div>
    {video_hot}
    <div class="myvod">
        <p>{type_name}</p>
        <ul>
            {video_list:10}
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
    {/video_hot}
    <div class="myhot">
        <p>友情链接：</p>
        {cms_link}
    </div>
    {include file="footer.php"}
</div>
</body>
</html>