<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 days" />
		<title>{cmsobj_name}正在直播中 {cms_title}</title>
		<meta name="keywords" content="{cms_keywords}" />
		<meta name="description" content="{cms_description}" />
        <script src="{cms_template}/js/jquery.min.js"></script>
        <script src="{cms_template}/js/uikit.min.js"></script>
        <link rel="stylesheet" href="{cms_template}/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="{cms_template}/css/iconfont.css" />
        <link rel="stylesheet" type="text/css" href="{cms_template}/fonts/iconfont.css" />
        <link rel="stylesheet" href="{cms_template}/css/uikit.css">
        <link rel="stylesheet" href="{cms_template}/css/m.style.css">
    </head>
    <body>
    {include file="header.php"}
<div class="v-type">
			 <center>
					{cms_banner_a}
			</center> 
</div>



        <!-- 播放器 -->
        <div class="player" >
            {cmsobj_content}
        </div>

        <!-- 简介 -->
        <div class="desc uk-display-block">
            

            <hr>
            <!-- 标题 -->
            <div class="desc-title uk-clearfix uk-margin-small-bottom">
                <h3 class="uk-margin-remove uk-float-left">{cms_title}</h3>
            </div>
            <!-- 功能按钮 -->
            <div class="v-func uk-clearfix">
                <a href="javascript:;">
                    <i class="icon iconfont icon-fenxiang"></i>
                    <span>分享</span>
                </a>
                <a href="javascript:;">
                    <i class="icon iconfont icon-shoucang"></i>
                    <span>收藏</span>
                </a>

            </div>

        </div>
{include file="footer.php"}
    </body>
</html>




