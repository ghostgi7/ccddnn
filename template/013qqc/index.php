<!DOCTYPE html>
<html lang="zh-CN">
 <head>
	<meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link href="{cms_template}/css/style.css" rel="stylesheet">

 </head>
 <body>
{include file="header.php"}

<!--最新上传 开始-->
<div class="new margin-top-35">
    <div class="container uk-padding-remove">
        {video_hot}
            <!--最新上传 标题 开始-->
            <div class="new-title margin-bottom-10 clearfix">
                <span class="uk-display-block uk-float-left icon-new"></span>
                <h3 class="uk-display-block uk-float-left">{type_name}</h3>
            </div>
            <!--最新上传 标题 结束-->
            <!--最新上传 内容 缩略图 开始-->
            <div class="new-content clearfix">
                <!--视频一-->
                 {video_list:10}
                    <div class="new-video uk-float-left margin-bottom-10">
                        <a href=" {list_view}" class="quick-view " id="rotate_31180_0_1_recent">
                            <div class="yk-pack p-list ">
                                <!--视频缩略图-->
                                <div class="p-thumb">

                                    <i class="bg"></i>
                                    <img class="quic" src="{list_pic}">
                                </div>
                                <!--视频标题-->
                                <div class="new-title">
                                    <h4 class="uk-display-block uk-margin-remove">{list_name}</h4>
                                    <div class="clearfix">
                                        <p class="play-times uk-margin-remove uk-float-left"><span>  {list_hit} </span>&nbsp;播放</p>
                                        <p class="like-times uk-margin-remove uk-float-right uk-padding-right clearfix">
                                            <span class="uk-display-block uk-float-left uk-margin-small-right icon-like"></span>
                                            <span class="uk-display-block uk-float-left">  {list_hit} </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--视频一-->
                 {/video_list}
            </div>
            
        {/video_hot}



        
        {if $cms_config['live_status']=='1'}

            <!--最新上传 标题 开始-->
            <div class="new-title margin-bottom-10 clearfix">
                <span class="uk-display-block uk-float-left icon-new"></span>
                <h3 class="uk-display-block uk-float-left">直播推荐</h3>
            </div>
            <!--最新上传 标题 结束-->
            <!--最新上传 内容 缩略图 开始-->
            <div class="new-content clearfix">
                
                {live_hot_list:10}


                    <div class="new-video uk-float-left margin-bottom-10">
                        <a href=" {list_view}" class="quick-view " id="rotate_31180_0_1_recent">
                            <div class="yk-pack p-list ">
                                <!--视频缩略图-->
                                <div class="p-thumb">
                                    <i class="bg"></i>
                                    <img class="quic" src=" {list_pic}">
                                </div>
                                <!--视频标题-->
                                <div class="new-title">
                                    <h4 class="uk-display-block uk-margin-remove"> {list_name} </h4>
                                    <div class="clearfix">
                                        <p class="play-times uk-margin-remove uk-float-left"><span>  {list_hit} </span>&nbsp;人观看中</p>
                                        <p class="like-times uk-margin-remove uk-float-right uk-padding-right clearfix">
                                            <span class="uk-display-block uk-float-left uk-margin-small-right icon-like"></span>
                                            <span class="uk-display-block uk-float-left">  {list_hit} </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--视频一-->

                		 {/live_hot_list}


            </div>
            
        {/if}



            <h4>友情链接</h4>
            <div>
                <ul class="f-links">
                    {cms_link}
                </ul>
                
            </div>
			

    </div>
</div>




 
 {include file="footer.php"}
 </body>
</html>

