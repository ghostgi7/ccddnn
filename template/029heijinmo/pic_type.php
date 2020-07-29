<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 days" />
		<title>{type_name} - 文章列表 - {cms_title}</title>
		<meta name="keywords" content="{cms_keywords}" />
		<meta name="description" content="{cms_description}" />
        <script src="{cms_template}/js/jquery.min.js"></script>
        <script src="{cms_template}/js/uikit.min.js"></script>
        <link rel="stylesheet" href="{cms_template}/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="{cms_template}/css/iconfont.css" />
        <link rel="stylesheet" href="{cms_template}/css/m.style.css">
    </head>
    <body>

       {include file="header.php"}

  <div class="v-type ">

			 <center>
					{cms_banner_a}
			</center> 
	</div>

            <!-- 标题 -->
            <div class="v-type-title uk-margin-bottom uk-clearfix">
                <h3 class="uk-float-left">图片专区-{type_name}</h3>

            </div>
            <!-- 视频缩略图 -->
            <ul class="v-list v-list-art uk-clearfix uk-display-block">


	{pic_list:20}


				<li class="uk-margin-small-bottom"><a href="{list_view}">{list_name}更新时间：{list_time}</a></li>

			 {/pic_list}
		 

                
            </ul>
            <!-- 分页 -->
            <ul class="uk-pagination">
                <li><a href="{cms_page:first}">首页</a></li>
                <li><a href="{cms_page:prev}"><i class="icon iconfont icon-arrowleft"></i></a></li>
                <li><a href="javascript:;">共{cms_page:count}页</a></li>
                <li><a href="javascript:;">当前第{cms_page:current}页</a></li>
                <li><a href="{cms_page:next}"><i class="icon iconfont icon-arrowright"></i></a></li>
                <li><a href="{cms_page:last}">尾页</a></li>
            </ul>	
        </div>
        <!-- 激情小说 结束 -->
        

        



{include file="footer.php"}
    </body>
</html>
</html>


	