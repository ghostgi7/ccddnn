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
                                <a href="javascript:;" class="">视频介绍</a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">{cmsobj_name}</span>
                            </p>
                            
                        </div>
                        <p class="title-tips uk-float-right">
                            公告： {cms_notice}
                        </p>
                    </div>
					<div class="video-content">
                        <div class="read">
                            <div class="read-img">
                                <img src="{cmsobj_pic}" alt="">
                            </div>

                            <!-- 标题 -->
                            <h3 class="uk-text-left uk-margin-bottom">{cmsobj_name}</h3>
                            <!-- 影片信息 -->
                            <div class="read-text uk-margin-top-remove uk-clearfix">
                                <!-- 播放按钮 -->
                                <div class="read-btn uk-margin-bottom uk-float-left">
                                    <a href="{cmsobj_view}" class="uk-float-left uk-margin-large-right uk-button h-line ">在线播放</a>
                                    <a href="{cmsobj_view}" class="uk-float-left uk-margin-large-right uk-button h-line ">备用线路</a>
                                </div>
                                <p class="uk-float-left uk-margin-large-right">影片分类:<span> {cmsobj_typename}</span></p>
                                <p class="uk-float-left uk-margin-large-right">更新时间:<span> {cmsobj_time}</span></p>
                            </div>
                        </div>
                        
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
				<div class="line">
                    <hr>
                </div>



        </div>

</div>
    </div>
</div>

{include file="footer.php"}
 
</body>
</html>
