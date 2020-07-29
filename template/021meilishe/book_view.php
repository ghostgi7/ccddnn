
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{cmsobj_name} - 在线阅读</title>
    <meta name="keywords" content="{cmsobj_name} - 在线阅读" />
    <meta name="description" content="{cmsobj_name} - 在线阅读" />
    {include file="include.php"}
</head>
<body id="page-top">
{include file="header.php"}
<!--当前位置-->
<div id="wrapper">
    <!-- Sidebar -->
    {include file="left.php"}
    <div id="content-wrapper">
        <div class="container-fluid">
            {cms_banner_a}
            <div class="video-block section-padding">
                <div class="row">
                    <!-- 剧情介绍 -->
                    <div class="ui-box marg" id="juqing" style="padding: 16px">
                        <div class="ui-title">
                            <h3>{cmsobj_name}</h3>
                        </div>
                        <div class="tjuqing">

                            {cmsobj_content}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




{include file="footer.php"}
</body>
</html>