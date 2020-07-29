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



        <div class="v-read" style="margin-top: 0rem; ">


            {video_hot}
                <!-- 视频分类 开始 -->
                <!-- 标题 -->
                <div class="v-type-title uk-clearfix">
                    <h3 class="uk-float-left">{type_name}</h3>
                    <a class="addr_post" href="{cms_domain1}">发布地址1</a>
                    <a class="addr_post" href="{cms_domain2}">发布地址2</a>
                    <a href="{type_more}" class="uk-float-right a-more">更多 <span class="icon iconfont icon-right"></span></a>
                </div>
                <!-- 视频缩略图 -->
                <ul class="v-list uk-clearfix uk-display-block">

                     {video_list:10}
                        <li class="v-item v-item">
                            <a href=" {list_detail}" class="uk-display-block">
                                <div class="v-cover lazy" data-original="{list_pic}">

                                </div>
                                <h3 class="v-title">{list_name}</h3>
                                <div class="uk-clearfix v-icon">
                                    <p class="uk-float-left uk-margin-right">
                                        <i class="icon iconfont icon-play"></i>
                                        <span>  {list_hit} </span>
                                    </p>
                                    <p class="uk-float-left uk-margin-top-remove">
                                        <i class="icon iconfont icon-zan"></i>
                                        <span>  {list_hit} </span>
                                    </p>
                                </div>
                            </a>
                        </li>

                    		 {/video_list}

                </ul>


                <!-- 视频分类 结束 -->
                
            {/video_hot}
            {if $cms_config['live_status']=='1'}

                <!-- 视频分类 开始 -->

                <!-- 标题 -->
                <div class="v-type-title uk-clearfix">
                    <h3 class="uk-float-left">时实直播</h3>
                    <a href="/?m=zhibo-type-24-1.html" class="uk-float-right a-more">更多 <span class="icon iconfont icon-right"></span></a>
                </div>
                <!-- 视频缩略图 -->
                <ul class="v-list uk-clearfix uk-display-block">
                    {live_hot_list:10}
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
                        


                    {/live_hot_list}



                </ul>


                <!-- 视频分类 结束 -->
                
            {/if}



        </div>




<div class="v-read uk-margin-small-top">
	<div class="v-type-title uk-clearfix">
      <h3 class="uk-float-left">友情链接</h3>
    </div>

  <ul class="links-list uk-display-block uk-clearfix">
   {cms_link}

  </ul>
  

</div>

{include file="footer.php"}

    </body>
</html>
</html>
