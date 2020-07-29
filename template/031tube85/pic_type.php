<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>
        {type_name} - 图片区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
{include file="toplink.php"}
<div class="container">
    {include file="header.php"}
    <div class="content">
            <div class="main-content">
                <div class="sidebar" style="width: 100%">


                    <div class="headline">
                        <h2>{type_name}</h2>
                    </div>
                    <ul class="comments">
                        {pic_list:24}
                            <li style="padding: unset">

                            <div class="comment-info">
                                <div class="username">
                                    <a href="{list_view}">{list_name}</a>
                                </div>
                                <div class="added">
                                    {list_time}
                                </div>
                            </div>
                        </li>
                        {/pic_list}
                    </ul>
                    {include file="page.php"}
                </div>

            </div>
        <p class="text">
            我們最新的網址 {cms_domain1} {cms_domain2} 如發現任何未成年内容請立刻舉報！
        </p>
    </div>

</div>
{include file="footer.php"}
</body>
</html>