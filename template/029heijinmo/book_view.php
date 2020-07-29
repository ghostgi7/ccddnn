<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 days" />
        <title>{cmsobj_name}-文章内容-{cms_title}</title>
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



        <!-- 文章详情 -->
        <div class="art-detail">
            <h3 class="uk-text-center uk-margin-large-top">{cmsobj_name}</h3>
                <span>{cmsobj_content}</span>
        </div>

{include file="footer.php"}
    </body>
</html>
