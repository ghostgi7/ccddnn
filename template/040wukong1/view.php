<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{cmsobj_typename} -{cms_title}</title>
<meta name="keywords" content="{cms_keywords}">
<meta name="description" content="{cms_description}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta http-equiv="Cache-Control" content="no-transform">
<meta name="applicable-device" content="mobile">
		 <!-- // 引入css和js-->
		 {include file="include.php"} 
		 <!-- 结束 -->

<script>var sitePath=''</script>
<script type="text/javascript" src="{cms_template}/static/js/jquery.min.js"></script>
<!--<script type="text/javascript" src="static/js/LazyLoad.js"></script>-->
<script type="text/javascript" src="{cms_template}/static/js/jquery-lazyload.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/base.js"></script>
<script type='text/javascript' src="{cms_template}/static/js/swiper.min.js"></script>
<!--<script type="text/javascript" src="static/js/system.js"></script>-->
<script type="text/javascript" src="{cms_template}/static/js/common.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/function.js"></script>
<script language='javascript' type='text/javascript' src='{cms_template}/static/js/ipquery.js'></script>
<script language='javascript' type='text/javascript'>var city = localAddress.province+localAddress.city;</script>
<!--[if lt IE 9]>
<script src="static/js/html5shiv.min.js"></script>
<script src="static/js/respond.min.js"></script>
<![endif]-->
</head>
<!-- // 引入头部-->
{include file="header.php"} 
<body class="vod-play">
<!-- // header start-->

<!-- // header end-->
<!-- content -->
<div class="content">
    <div class="play">
        <div class="container">
            <h2 class="text-nowrap">
                <a href="{cmsobj_typemore}">{cmsobj_typename} </a>
				 <p>{cmsobj_name}</p>
                <small>HD1280高清</small>
            </h2>
            <div class="player embed-responsive embed-responsive-4by3" id="cms_player">
               {cmsobj_content}
                <iframe width="100%" height="100%" src="" frameborder=0 border=0 marginwidth=0 marginheight=0 allowfullscreen="true" scrolling=no></iframe>
                
            </div>
        </div>
    </div>
	   {cms_banner_b}
    <div class="container">
        <div class="panel play-source">
            <!--在线观看TAB标签组件 -->
            <div class="detail-source">
                <ul class="detail-tab ff-playurl-tab detail-tab-zt clearfix" id="detail-tab"
                    data-active=".ff-playurl-tab-[playlist:i]">
                    
                    <li class="active">
                        <a href="javascript:;" data-target=".ff-playurl-tab-1" data-toggle="tab">最大视频</a>
                    </li>
                    

                </ul>
                <div class="detail-content tab-content" id="detail-content">
                    
                    <ul class="detail-play-list tab-pane ff-playurl clearfix ff-playurl-tab-1 detail-play-list-kehuan active in"
                        data-active="18034-1-3" data-more="60">
                        <li><a title='HD1280高清' href='/play/18034-0-0.html' style="color:red" target="_self">HD1280高清</a></li>
                    </ul>
                    

                </div>
            </div>
        </div>
		        <div class="panel">
            <div class="panel-heading clearfix">
                <h3 class="panel-title">为你推荐同类型的{cmsobj_typename} </h3>
            </div>
            <div class="panel-max detail-hot">
                <ul class="thumbnail-group clearfix">
                   {video_list:6}
                    <li>
                        <a class="thumbnail" href="{list_detail}">
                            <img class="ff-img loading" src="{cms_template}/static/image/no.jpg" data-original="{list_pic}" alt="{list_name}">
                            <span class="video-grade">HD高清</span>
                        </a>
                        <div class="video-info">
                            <h5><a href="{list_detail}" title="{list_name}">{list_name}</a></h5>
                            <p>
                                热度:{list_hit}
                            </p>
                        </div>
                    </li>
                     {/video_list}
                </ul>
            </div>
        </div>
    </div>
</div>
		 <!-- // 引入尾部-->
		 {include file="footer.php"} 
		 <!-- 结束 -->
