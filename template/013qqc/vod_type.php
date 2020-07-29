<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link href="{cms_template}/css/style.css" rel="stylesheet">
</head>
<body>
{include file="header.php"}

<!--最新上传 开始-->
<div class="new margin-top-35">
    <div class="container uk-padding-remove">
        <!--最新上传 标题 开始-->
        <div class="new-title margin-bottom-10 clearfix">
            <span class="uk-display-block uk-float-left icon-new"></span>
            <h3 class="uk-display-block uk-float-left">视频分类：{type_name}</h3>
        </div>
        <!--最新上传 标题 结束-->
        <!--最新上传 内容 缩略图 开始-->
        <div class="new-content clearfix">
                            <!--视频一-->
		 {video_list:20}
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
	  {/video_list}
	 </div>	

<ul class="clearfix uk-float-right uk-display-block uk-margin-large-bottom">
    <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:first}">首页</a></li>
    <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:prev}">上一页</a></li>
    <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="javascript:;">共{cms_page:count}页</a></li>
    <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="javascript:;">当前 {cms_page:current}页</a></li>
    <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:next}">下一页</a></li>
    <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:last}">尾页</a></li>
</ul>

    </div>
</div>


{include file="footer.php"}
</body>
</html>		
