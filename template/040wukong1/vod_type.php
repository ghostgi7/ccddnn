<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{type_name}-{cms_title}</title>
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
<!-- content -->
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
            <div class="panel-heading clearfix">
                <h3 class="panel-title">{type_name}<span class="text-primary"></span>
                </h3>
            </div>
            <div class="panel-max">
                <ul class="thumbnail-group clearfix">
                    {video_list:14}
                    <li>
                        <a class="thumbnail" href="{list_detail}">
                            <img class="ff-img loading" src="{cms_template}/static/image/no.jpg" data-original="{list_pic} " alt="{list_name} ">
                            <span class="video-grade">HD高清</span>
                        </a>
                        <div class="video-info">
                            <h5><a href="{list_detail} " title="{list_name} ">{list_name} </a></h5>
                            <p>
                                热度:{list_hit} 
                            </p>
                        </div>
                    </li>
                    {/video_list}
                </ul>
            </div>
            <div class="text-center">
                <ul class="pagination hidden-xs">
                    
                     <li class="page-item"><a class="page-link" href="{cms_page:first}">首页</a></li>
                    <li class="page-item disabled"><a class="page-link" href="{cms_page:prev}">上一页</a></li>
                    <li class="page-item "><a class="page-link" href="{cms_page:next}">下一页</a></li>
                    <li class="page-item"><a class="page-link" href="{cms_page:last}">尾页</a></li>
                    
                </ul>
                <ul class="pagination pager visible-xs">
				  <li><a id="ff-next" href="{cms_page:first}">首页</a></li>
                      <li><a id="ff-next" href="{cms_page:prev}">上一页</a></li>
                    <li><a id="ff-next" href="{cms_page:next}">下一页</a></li>
                <li><a id="ff-next" href="{cms_page:last}">尾页</a></li>
                    
                </ul>
				<p>当前第{cms_page:current}  页/共{cms_page:count} 页</p>
            </div>
        </div>
    </div>
</div>
		 <!-- // 引入尾部-->
		 {include file="footer.php"} 
		 <!-- 结束 -->