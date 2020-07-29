<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>正在播放 {cmsobj_name}</title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />
<link href="{cms_template}/css/style.css" rel="stylesheet">

</head>
<body>
{include file="header.php"}
<div class="player uk-padding-remove container">
    <!--视频播放区域-->
    <div class="player-area margin-bottom-10 clearfix">
        <!--播放器区域-->
        <div class="player-l uk-float-left uk-position-relative text-white">

                                <div class="player-player" id="player" style="background-color: rgb(0, 0, 0); width: 800px; height: 450px; cursor: pointer;">
									 {cmsobj_content}
								</div>
                        <div class="player-favorite clearfix">
                <a href="javascript:void(0);" class="uk-display-block uk-float-left uk-margin-top uk-margin-left btn-video-favorite clearfix"><span class="uk-display-block uk-float-left"></span>
                    <p class="uk-margin-remove">收藏影片</p></a>
                
                <a href="javascript:void(0);" class="uk-display-block uk-float-left uk-margin-top uk-margin-left btn-video-likes clearfix current-btn-video-likes"><span class="uk-display-block uk-float-left"></span>
                    {cmsobj_hit}</a>
                <p class="uk-float-right uk-float-left player-num">播放：<span> {cmsobj_hit} </span></p>
            </div>
        </div>
        <!--相关视频-->
                    <div class="player-r uk-float-right">
                <h3>相关视频</h3>
                <div class="video-list scrollbar" id="style-3">
                    <!--相关视频一-->
	 	{video_list:10}
                            <div class="video-item margin-bottom-10 clearfix">
                                <a class="video-img uk-float-left uk-margin-right" href=" {list_view}">
                                    <img src="{list_pic}">
                                </a>
                                <div class="video-info uk-float-left">
                                    <a href=" {list_view}" class="video-title" ><h4 class="title-truncate">{list_name}</h4></a>
                                    <p>播放：<span> {list_hit} </span></p>
                                    <a href="javascript:void(0);" onclick="clickVideoLikes(this,23575)" class="video-likes uk-display-block btn-video-likes">
                                        <span class="icon-video-likes uk-display-block uk-float-left"></span>
                                        <span class="num-video-likes uk-display-block uk-float-left likes-video">推荐</span>
                                    </a>
                                </div>
                            </div>
	 {/video_list}                                                                        </div>
            </div>
			
			
			
  {cms_banner_b}
 			
            </div>
    <!--视频信息-->
    
</div>


{include file="footer.php"}
</body>
</html>
