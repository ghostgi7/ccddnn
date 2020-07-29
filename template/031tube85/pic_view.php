<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <title>
        {cmsobj_name}在线观看 - 图片区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
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
                        <h2>{cmsobj_name}</h2>
                    </div>
                    <style>
                        .sidebar img{
                            width: 100%;
                        }
                    </style>
                    {cmsobj_content}

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