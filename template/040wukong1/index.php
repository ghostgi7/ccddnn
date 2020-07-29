<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{cms_title}</title>
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
<body>
<!-- // 引入头部-->
{include file="header.php"} 
<!-- 结束 -->

<div class="content">
    <div class="container">
        <div class="panel">
            <form class="ff-search">
			{cms_search}
                <div class="navbar-search">
                    <input class="search-control ff-wd" type="text" name="search" id="keyword" placeholder="请输入影片名称"/>
                    <button class="search-button" type="submit">搜索</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="panel">
            <div class="latest-primary">
                <ul class="latest-tabs clearfix">
                    <li id="latest1" onmouseover="setTab('latest',1,5);" class="active">今日推荐</li>
                    <li id="latest2" onmouseover="setTab('latest',2,5);">最近更新</li>
                    <li id="latest3" onmouseover="setTab('latest',3,5);">直播推荐</li>
                    <li id="latest4" onmouseover="setTab('latest',4,5);">精品国产</li>
                    <li id="latest5" onmouseover="setTab('latest',5,5);">精品动漫</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-panel" id="con_latest_1" style="display: block;">
    <ul class="thumbnail-group clearfix">
        {rand_list:vod,7}
        <li>
            <a target="_blank" class="thumbnail" href="{list_detail}">
                 <img class="ff-img loading" src="{cms_template}/static/image/no.jpg" data-original="{list_pic}" alt="{list_name}">
                <span class="video-grade">{list_time}</span>
            </a>
            <div class="video-info">
                <h5><a href="{list_detail}" title="{list_name}" target="_blank">{list_name}</a>
                </h5>
            </div>
        </li>
        {/rand_list} 
    </ul>
    <ul class="list-group list-group-dot clearfix">
        
          {cms_banner_a}
        
    </ul>
</div>
<div class="tab-panel" id="con_latest_2">
    <ul class="thumbnail-group clearfix">
        {new_list:vod,7}
        <li>
            <a target="_blank" class="thumbnail" href="{list_detail} ">
                  <img class="ff-img loading" src="{cms_template}/static/image/no.jpg" data-original="{list_pic}" alt="{list_name}">
                <span class="video-grade"> {list_time} </span>
            </a>
            <div class="video-info">
                <h5><a href="{list_detail}" title=" {list_name} " target="_blank">{list_name}</a>
                </h5>
            </div>
        </li>
        {/new_list} 
    </ul>
    <ul class="list-group list-group-dot clearfix">
       {cms_banner_a}
    </ul>
</div>
<div class="tab-panel" id="con_latest_3">
    <ul class="thumbnail-group clearfix">
        {live_hot_list:7}
        <li>
            <a target="_blank" class="thumbnail" href="{list_view}">
                <img src="{list_pic} " alt=" {list_name}  ">
                <span class="video-grade">{list_time} </span>
            </a>
            <div class="video-info">
                <h5><a href="{list_view}" title=" {list_name}  " target="_blank"> {list_name} </a>
                </h5>
            </div>
        </li>
        {/live_hot_list}
    </ul>
    <ul class="list-group list-group-dot clearfix">
       {cms_banner_a}
        
    </ul>
</div>
<div class="tab-panel" id="con_latest_4">
    <ul class="thumbnail-group clearfix">
        {type_list:vod,10,7}
        <li>
            <a target="_blank" class="thumbnail" href="{list_detail}">
                  <img class="ff-img loading" src="{cms_template}/static/image/no.jpg" data-original="{list_pic}" alt="{list_name}">
                <span class="video-grade"> {list_time}</span>
            </a>
            <div class="video-info">
                <h5><a href="{list_detail}" title="{list_name}" target="_blank">{list_name}</a>
                </h5>
            </div>
        </li>
		{/type_list} 
    </ul>
    <ul class="list-group list-group-dot clearfix">
          {cms_banner_a}
    </ul>
</div>
<div class="tab-panel" id="con_latest_5">
    <ul class="thumbnail-group clearfix">
        {type_list:vod,5,7}
        <li>
            <a target="_blank" class="thumbnail" href="{list_detail}">
                <img src="{list_pic}" alt="{list_name}">
                <span class="video-grade"> {list_time}</span>
            </a>
            <div class="video-info">
                <h5><a href="{list_detail}" title="{list_name}" target="_blank">{list_name}</a>
                </h5>
            </div>
        </li>
		{/type_list} 
    </ul>
    <ul class="list-group list-group-dot clearfix">
        {cms_banner_a}
    </ul>
</div>
                </div>
            </div>
        </div>
		  {video_hot}
		 <div class="panel clearfix">
            <div class="panel-main">
                <div class="panel-heading clearfix">
                    <h3 class="panel-title"><a href="{type_more}">{type_name}</a></h3>
                    <div class="panel-more">
                        <a class="text-primary" href="{type_more}">更多<i class="iconfont iconfont-more"></i></a>
                    </div>
                </div>
                <ul class="thumbnail-group clearfix">
                     {video_list:12}
                    <li>
                        <a class="thumbnail" href="{list_detail}">
                            <img class="ff-img loading" src="{cms_template}/static/image/no.jpg" data-original="{list_pic}" alt="{list_name}">
                            <span class="video-grade">{list_time}</span>
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
            <div class="panel-aside">
			  <h3">{type_name}</a></h3>
                <ul class="rank-group clearfix">
                    {video_list:20}
                    <li>
                        <span class="rank-title"><a href="javascript:;" title="{list_name}">{list_name}</a></span>
                        <span class="rank-grade"><strong>9</strong>.5</span>
                    </li>
                    {/video_list} 
                </ul>
            </div>
        </div>
		 {/video_hot}
		 <!-- // 引入尾部-->
		 {include file="footer.php"} 
		 <!-- 结束 -->

</body>
</html>