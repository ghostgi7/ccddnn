<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow" />
        <meta name="revisit-after" content="1 days" />
		<title>正在播放 {cmsobj_name}</title>
		<meta name="keywords" content="{cms_keywords}" />
		<meta name="description" content="{cms_description}" />
        <script src="{cms_template}/js/jquery.min.js"></script>
        <script src="{cms_template}/js/uikit.min.js"></script>
        <link rel="stylesheet" href="{cms_template}/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="{cms_template}/css/iconfont.css" />
		<link rel="stylesheet" type="text/css" href="{cms_template}/fonts/iconfont.css" />
		<link rel="stylesheet" href="{cms_template}/css/uikit.css"> 		
        <link rel="stylesheet" href="{cms_template}/css/m.style.css">
      	<style>
          .propa_left1,.propa_right1{display:none}	
        </style>
    </head>
    <body>
    {include file="header.php"}
<div class="v-type">
			 <center>
					{cms_banner_a}
			</center> 
</div>	











		<div class="v-read" style="margin-top:0">
            <!-- 标题 -->
            <div class="v-type-title uk-clearfix">
                <p class="bead ">
                    <span class="icon iconfont icon-home"></span>
                    位置：
                    <a href="javascript:;" class="">{cms_title}</a>
                    <span class="icon iconfont icon-right"></span>
                    <a href="javascript:;">{cmsobj_name}</a>
                </p>
            </div>
            
            <!-- 影片介绍 -->
            <div class="read-info">
                <div class="read-img">
                    <img src="{cmsobj_pic}" alt="">
                </div>
                <!-- 视频标题 -->
                <h3 class="read-title uk-margin-top uk-margin-small-bottom">{cmsobj_name}</h3>
                <div class="read-text uk-margin-top-remove uk-clearfix">
                    <p class="uk-float-left">影片分类:<span> {cmsobj_typename}</span></p>
                    <p class="uk-float-left">更新时间:<span> {cmsobj_time}</span></p>
                </div>
                
                <div class="read-btn uk-margin-top uk-margin-bottom uk-clearfix">
                    <a href="{cmsobj_view}" class="uk-float-left">手机播放</a>
                    <a href="{cmsobj_view}" class="uk-float-right">电脑播放</a>
                </div>
            </div>

            
        </div>
		
        <!-- 推荐视频 -->
        <div class="v-type-favorite uk-clearfix">
            <!-- 相关视频 标题 -->
            <div class="v-type-title uk-clearfix uk-margin-top uk-margin-small-bottom">
                <h3 class="uk-float-left">推荐视频</h3>
            </div>
            <!-- 视频缩略图 -->
            <ul class="recom recom-play">

					{video_list:10}
						<li>
							<a href=" {list_detail}" class="uk-display-block ">
								<div class="re-pic uk-float-left">
									<img src="{list_pic}" alt="">
								</div>
								<div class="re-info">
									<div class="re-h uk-margin-top-remove">{list_name}</div>
									<div class="re-detail">
										<span>
											<i class="icon iconfont icon-play"></i>
											  {list_hit}
										</span>
										<span>
											<i class="icon iconfont icon-weibiaoti--"></i>
											{list_time}
										</span>
										<span>
											<i class="icon iconfont icon-zan"></i>
											  {list_hit}
										</span>
									</div>
								</div>
							</a>
						</li>
							 {/video_list}
			
			


            </ul>



            
        </div>
        <!-- 热门结束 -->		
		

{include file="footer.php"}
    </body>
</html>


