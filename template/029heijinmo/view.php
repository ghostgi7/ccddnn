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



        <!-- 播放器 -->
        <div class="player" style="height:200px">
            	{cmsobj_content}
        </div>

        <!-- 简介 -->
        <div class="desc uk-display-block">
            
            <!-- 广告banner -->
<center>
		{cms_banner_b}
</center>
            <hr>
            <!-- 标题 -->
            <div class="desc-title uk-clearfix uk-margin-small-bottom">
                <h3 class="uk-margin-remove uk-float-left">{cmsobj_name}</h3>
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
                <a href="javascript:;">
                    <i class="icon iconfont icon-zan"></i>
                    <span> {cmsobj_time}</span>
                </a>
            </div>
            <!-- 下拉信息 -->
            <div class="v-info">
                <button class="icon iconfont icon-arrow-bottom v-info-open">展开</button>
                <div class="v-info-box">
                    <div class="uk-margin-small-bottom uk-margin-small-top">
                        <span class="timer icon iconfont icon--eye ">ID: {cmsobj_id}</span>
                        <span class="timer icon iconfont icon-weibiaoti--">{cmsobj_name}</span>
                        <span class="timer icon iconfont icon-shijian"> {cmsobj_time}</span>
                    </div>
                    
                    <div class="v-info-close icon iconfont icon-arrow-top">关闭</div>
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


