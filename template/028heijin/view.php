<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>正在播放 {cmsobj_name}</title>
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
                    <div class="video-head uk-clearfix uk-margin-bottom">
                        <!-- 面包屑 -->
                        <div class="bred uk-float-left">
                            <p>
                                <i class="icon iconfont icon-home"></i>
                                <span>您当前位置：</span>
                                <a href="javascript:;">{cms_title}</a>
                                <i class="icon iconfont icon-right"></i>
                                <a href="javascript:;" class="">视频播放</a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">{cmsobj_name}</span>
                            </p>
                            
                        </div>
                        <p class="title-tips uk-float-right">
                            公告： {cms_notice}
                        </p>
                    </div>
                    <div class="video-content">
                        <!-- 视频标题 -->
                        <div class="play-title">
                            <h3>{cmsobj_name}</h3>
                        </div>
                        <!-- 播放器 -->
                        <div class="player uk-clearfix">
                            <div class="player-l uk-float-left">
                                <div class="player-box">
										{cmsobj_content}
								</div>
                                <!-- 播放器下方功能键 -->
                                <div class="play-func uk-clearfix uk-margin-small-top">
                                    <a href="javascript:;">
                                        <i class="icon iconfont icon-like"></i>
                                        <span>ID: {cmsobj_id}</span>
                                    </a>
                                    <a href="javascript:;">
                                        <i class="icon iconfont icon-shoucang"></i>
                                        <span>分类: {cmsobj_typename}</span>
                                    </a>
                                    <a href="javascript:;">
                                        <i class="icon iconfont icon-shoucang"></i>
                                        <span>无法播放请刷新等待5-8秒或更换其他影片</span>
                                    </a>									
                                    <p class="play-time uk-float-right uk-margin-left">
                                        <i class="icon iconfont icon-play"></i>
                                        <span>  {cmsobj_hit} </span>
                                    </p>
                                    <p class="date uk-float-right">
                                        <i class="icon iconfont icon-weibiaoti--"></i>
                                        <span> {cmsobj_time}</span>
                                    </p>
                                </div>
                            </div>

                            <!-- 播放器右侧 推荐列表--> 
                            <div class="player-r uk-float-right uk-grid uk-grid-small">
                                <div class="uk-width-1-1 uk-margin-small-bottom ">
                                    <a href="javascript:;" class="uk-display-block side-pic">
                                        <img src="{cms_template}/images/1.jpg" alt="video-pic">
                                    </a>
                                    <div class="video-title">
                                        <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block">{cms_title}</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-margin-small-bottom">
                                    <a href="javascript:;" class="uk-display-block side-pic">
                                        <img src="{cms_template}/images/2.jpg" alt="video-pic">
                                    </a>
                                    <div class="video-title">
                                        <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block">{cms_title}</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-margin-small-bottom">
                                    <a href="javascript:;" class="uk-display-block side-pic">
                                        <img src="{cms_template}/images/3.jpg" alt="video-pic">
                                    </a>
                                    <div class="video-title">
                                        <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block">{cms_title}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="line">
                            <hr>
                        </div>

                        <center>
                            {cms_banner_b}
                        </center>
                <div class="line">
                    <hr>
                </div>


            </div>
			
			
					<div class="list-videos uk-margin-top uk-margin-bottom">
                    <div class="video-head uk-clearfix">
                        <h3 class="h3-color uk-float-left">推荐视频</h3>
                        <a href="{:U('vod','type',$type_id,'1')}" class="more">更多推荐视频</a>
                    </div>




                    <div class="video-content uk-grid uk-grid-small">
					

					{video_list:10}
							<div class="uk-width-1-5 uk-margin-bottom">
								<a href=" {list_detail}" class="video-pic video-pic-h uk-display-block"><img src="{list_pic}" alt="{list_name}"></a>
								<div class="video-title">
									<a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block">{list_name}</a>
									<div class="uk-clearfix uk-margin-small-top">
										<p class="video-play uk-float-left"><i class="icon iconfont icon-play"></i><span>  {list_hit} </span></p>
										<p class="video-like uk-float-left uk-margin-left"><i class="icon iconfont icon-like"></i><span>  {list_hit} </span></p>
									</div>
								</div>
							</div>
							 {/video_list}
					




                  
                    </div>
                </div>			
			
			
			
			
			
			
			
			
			
			
        </div>

</div>
    </div>
</div>

{include file="footer.php"}
 
</body>
</html>
