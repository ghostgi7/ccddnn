<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
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
                                <a href="javascript:;" class="">直播频道</a>
                                <i class="icon iconfont icon-right"></i>
                                <span class="right">直播中</span>
                            </p>
                            
                        </div>
                        <p class="title-tips uk-float-right">
                            公告： {cms_notice}
                        </p>
                    </div>
                    <div class="video-content">
                        <!-- 视频标题 -->


                        <!-- 播放器 -->
                        <div class="player uk-clearfix">
                            <div class="player-l uk-float-left">
                                <div class="player-box">
                                    {cmsobj_content}
								</div>
                                <!-- 播放器下方功能键 -->
                                <div class="play-func uk-clearfix uk-margin-small-top">SMBB值:{cmsobj_id} </div>
                            </div>

                            <!-- 播放器右侧 推荐列表--> 
                         <div class="player-r uk-float-right uk-grid uk-grid-small">
                                <div class="uk-width-1-1 uk-margin-small-bottom ">
                                    <a href="javascript:;" class="uk-display-block side-pic">
                                        <img src="{cms_template}/images/zb.jpg" alt="video-pic">
                                    </a>
                                    <div class="video-title">
                                        <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block">{cms_title}</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-margin-small-bottom">
                                    <a href="javascript:;" class="uk-display-block side-pic">
                                        <img src="{cms_template}/images/zb1.jpg" alt="video-pic">
                                    </a>
                                    <div class="video-title">
                                        <a href="javascript:;" class="uk-margin-small-bottom uk-margin-small-top uk-display-block">{cms_title}</a>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-margin-small-bottom">
                                    <a href="javascript:;" class="uk-display-block side-pic">
                                        <img src="{cms_template}/images/zb2.jpg" alt="video-pic">
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


                <div class="line">
                    <hr>
                </div>


            </div>
        </div>

</div>
    </div>
</div>

{include file="footer.php"}
 
</body>
</html>