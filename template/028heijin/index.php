<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cms_title}</title>
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
                {video_hot}
                        <div class="list-videos uk-margin-top uk-margin-bottom">
                            <div class="video-head uk-clearfix"><h3 class="h3-color uk-float-left">{type_name}</h3><p class="title-tips uk-float-right">公告： {cms_notice}</p></div>
                            <div class="video-content uk-grid uk-grid-small">
                                 {video_list:12}

                                    <div class="uk-width-1-3 uk-margin-bottom">
                                        <a href=" {list_detail}" class="video-pic uk-display-block">
                                            <span class="live-tag"></span>
                                            <img src="{list_pic}" alt="{list_name}">
                                        </a>
                                        <div class="video-title">
                                            <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block"> {list_name}</a>
                                            <div class="uk-clearfix uk-margin-small-top">
                                                <p class="video-play uk-float-left">
                                                    <i class="icon iconfont icon-play"></i>
                                                    <span>  {list_hit} </span>
                                                </p>
                                                <p class="video-like uk-float-left uk-margin-left">
                                                    <i class="icon iconfont icon-like"></i>
                                                    <span>  {list_hit} </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                		 {/video_list}
                            </div>
                        </div>

                    {/video_hot}

                    {if $cms_config['live_status']=='1'}
                        
                        <!-- 视频分类 -->
                        <div class="list-videos uk-margin-top uk-margin-bottom">
                            <div class="video-head uk-clearfix"><h3 class="h3-color uk-float-left">时实直播</h3></div>
                            <div class="video-content uk-grid uk-grid-small">
{live_hot_list:12}


                                    <div class="uk-width-1-3 uk-margin-bottom">
                                        <a href="{list_view}" class="video-pic uk-display-block">
                                            <span class="live-tag"></span>
                                            <img src=" {list_pic}" alt=" {list_name} ">
                                        </a>
                                        <div class="video-title">
                                            <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block"> {list_name} </a>
                                            <div class="uk-clearfix uk-margin-small-top">
                                                <p class="video-play uk-float-left">
                                                    <i class="icon iconfont icon-play"></i>
                                                    <span>直播频道</span>
                                                </p>
                                                <p class="video-like uk-float-left uk-margin-left">
                                                    <i class="icon iconfont icon-like"></i>
                                                    <span>时实直播</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                {/live_hot_list}
                                
                            </div>
                        </div>
                        <!-- 视频结束 -->

                    {/if}
                
			 <!-- 视频结束 -->




















                <div class="line">
                    <hr>
                </div>
                <!-- 友情链接 -->
                <div class="list-videos uk-margin-top uk-margin-bottom">
                    <div class="video-head uk-clearfix">
                        <h3 class="h3-color uk-float-left">友情链接</h3>
                    </div>
                    <ul class="links-list uk-display-block uk-clearfix">
					{cms_link}

                    </ul>
                </div>

            </div>
        </div>
    </div>
	

{include file="footer.php"}
</body>
</html>	
