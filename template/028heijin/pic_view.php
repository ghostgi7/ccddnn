<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}-图片内容-{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{cms_template}/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{cms_template}/css/common.min.css" />
    <link rel="stylesheet" href="{cms_template}/font/iconfont.css" />
    <script src="{cms_template}/js/jquery.js"></script>
    <script src="{cms_template}/js/uikit.min.js"></script>
</head>
<body>
{include file="header.php"}
           <!-- 视频列表 -->
            <div class="right-container">
                <!-- 视频分类 -->
                <div class="list-videos uk-margin-top uk-margin-bottom">
                    <div class="video-head uk-margin-bottom uk-clearfix">
                        <!-- 面包屑 -->
                        <div class="bred uk-float-left">
                            <p>
                                <i class="icon iconfont icon-home"></i>
                                <span>您当前位置：</span>
                                <a>{cms_title}</a>
                                <i class="icon iconfont icon-right"></i>
                                <a>图片专区</a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">{cmsobj_name}</span>
                            </p>
                        </div>
                        <p class="title-tips uk-float-right">
                            公告： {cms_notice}
                        </p>
                    </div>
                    <div class="video-content art-content">
                        <h3 class="uk-text-center">{cmsobj_name}</h3>
                            {cmsobj_content}
                    </div>

                </div>

                
                <div class="line">
                    <hr>
                </div>


                <div class="line">
                    <hr>
                </div>

            </div>
            <!-- 向上 -->
            <a href="javascript:;"  class="icon iconfont icon-arrow-top toTop"></a>
        </div>



    </div>

{include file="footer.php"}
 
</body>
</html>
