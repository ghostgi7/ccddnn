<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>{cmsobj_name} - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}">
    <meta name="description" content="{cmsobj_name},{cms_description}">
    {include file="include.php"}
</head>
<body>

{include file="header.php"}
<div class="container">
    <div class="row">
        <div style="position:static">
            <div class="layout-box clearfix" style="background: linear-gradient(to right, #c5a073, #dac3a1 20%, #dac3a1 80%,#c5a073);">
                <div class="news_details">
                    <h1 class="text-overflow">{cmsobj_name}</h1>
                    <div class="news_top text-center text-overflow"><span>时间：{cmsobj_time}</span></div>
                </div>
                <div class="details-content text-justify" style="padding: 8px;">
                    {cmsobj_content}
                </div>
                <div class="clearfix"></div>
                <div class="details-page clearfix">
                    <ul class="clearfix">
                        <li class="col-md-6"></li>
                        <li class="col-md-6"></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
{include file="footer.php"}
</body>
</html>