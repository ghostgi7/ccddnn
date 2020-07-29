

<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 days" />
		<title>{cms_title}</title>
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



    

        <!-- 视频分类 开始 -->
            <!-- 标题 -->
            <div class="v-type-title uk-clearfix">
                <h3 class="uk-float-left">视频分类：{type_name}</h3>
               
            </div>
            <!-- 视频缩略图 -->
            <ul class="v-list uk-clearfix uk-display-block">


			 {live_list:20}


							<li class="v-item v-item">
								<a href=" {list_view}" class="uk-display-block">
									<div class="v-cover lazy" data-original=" {list_pic}">
							
									</div>
									<h3 class="v-title"> {list_name} </h3>
									<div class="uk-clearfix v-icon">
										<p class="uk-float-left uk-margin-right">
											<i class="icon iconfont icon-play"></i>
											<span>直播频道</span>
										</p>
										<p class="uk-float-left uk-margin-top-remove">
											<i class="icon iconfont icon-zan"></i>
											<span>时实直播</span>
										</p>
									</div>
								</a>
							</li>						

			{/live_list}


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

{include file="footer.php"}

    </body>
</html>
</html>