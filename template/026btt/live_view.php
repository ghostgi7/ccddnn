<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <title>{cmsobj_name}正在直播 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name}，{cms_keywords}">
    <meta name="description" content="{cmsobj_name}，{cms_description}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    {include file="include.php"}
</head>

<body>
<div class="page-with-sidebar" id="page-container">

    {include file="header.php"}

    <div class="content">
        <div class="alert alert-black alert-dismissible" role="alert" style="font-size: 14px">
            <i class="fa fa-bell-o"></i>
            {cms_notice}
        </div>

        <div class="row">
            {cms_banner_a}
        </div>

        <div class="list-nav">
            <a style="text-decoration:none;">当前位置：</a>
            <a href="/">{cms_title} </a> &gt;
            <a href="{cmsobj_typemore}">{cmsobj_typename} </a> &gt;
            <a href="{cmsobj_view}" class="active">{cmsobj_name}</a>
        </div>

        <!-- 最近更新 开始 -->
        <h1 class="page-header clearfix">
            <span class="link fa fa-star pull-left">视频</span>
        </h1>
        <div class="row " style="position: relative">
            <div class="play-area">


                <div class="mejs__container mejs__video col-md-7 col-xs-12 m-b-10">
                    <div class="player-box" style="position: relative;padding-bottom: 56.25%">
                        <div class="player" style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;">
                            {cmsobj_content}
                        </div>
                    </div>
                </div>

                <div class="video-info col-md-5 col-xs-12 m-b-10">
                    <div class="desc">
                        <p>片名: <span>{cmsobj_name}直播中</span></p>
                        <p>时长: <span>直播</span></p>
                        <p>上映日期: <span>{cmsobj_time}</span></p>
                        <p>观看次数: <span>{cmsobj_hit}</span></p>
                        <div class="v-tag">
                            <p>分类:
                                <span class="btn btn-sm btn-success m-l-10 p-l-10 p-r-10">{cmsobj_typename} <i
                                            class="fa fa-angle-double-right"></i></span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {cms_banner_a}
        </div>
        <!-- 猜你喜欢 开始 -->
        <h1 class="page-header">
            <i class="fa fa-star"></i>
            热门推荐
        </h1>
        <div class="row update-soon owl-carousel owl-theme" style="position: relative">
            {live_list:24}
            <div class="item">

                <a class="col-md-2 col-xs-6 item-video-container " data-target="" data-toggle="modal"
                   href="{list_view}">
                    <div class="item-video">
                        <div class="img_wapper">
                            <img src="{list_pic}">
                            <p class="watch-time-l"><i class="fa fa-eye"></i> {list_hit}</p>
                            <p class="v-data-r"><i class="fa fa-calendar"></i> {list_time}</p>
                        </div>
                        <div class="title"> {list_name}</div>
                    </div>
                </a>

            </div>
            {/live_list}
        </div>

    </div>


</div>
<style>
    #J_prismPlayer.prism-player{
        height: 100% !important;
    }
    video{
        height: 100% !important;
    }
</style>
{include file="footer.php"}
</body>

</html>