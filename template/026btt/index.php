<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <title>{cms_title}</title>
    <meta name="keywords" content="{cms_keywords}">
    <meta name="description" content="{cms_description}">
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



            <!-- 最近更新 开始 -->
            <h1 class="page-header clearfix">
                <span class="link fa fa-star pull-left">最近更新</span>
            </h1>
            <div class="row update-soon owl-carousel owl-theme" style="position: relative">
                <div class="item">
                {new_list:vod,24}
                    {if $x>0&&($x)%2 == 0}
                        </div>
                        <div class="item">
                    {/if}
                    <a class="col-md-2 col-xs-6 item-video-container " data-target="" data-toggle="modal" href="{list_view}">
                        <div class="item-video">
                            <div class="img_wapper">
                                <img src="{list_pic}">
                                <p class="watch-time-l"> <i class="fa fa-eye"></i> {list_hit}</p>
                                <p class="v-data-r"><i class="fa fa-calendar"></i> {list_time}</p>
                            </div>
                            <div class="title"> {list_name}</div>
                        </div>
                    </a>
                {/new_list}
                </div>
            </div>

            <!-- 猜你喜欢 开始 -->
            {video_hot}
        <h1 class="page-header clearfix">
            <span class="link fa fa-star pull-left">{type_name}</span>
            <a href="{type_more}" class="link-more btn pull-right">更多></a>
        </h1>
        <div class="row may-you-like owl-carousel owl-theme" style="position: relative">
            <div class="item">
                {video_list:24}
                {if $x>0&&($x)%2 == 0}
            </div>
            <div class="item">
                {/if}
                <a class="col-md-2 col-xs-6 item-video-container " data-target="" data-toggle="modal" href="{list_view}">
                    <div class="item-video">
                        <div class="img_wapper">
                            <img src="{list_pic}">
                            <p class="watch-time-l"> <i class="fa fa-eye"></i> {list_hit}</p>
                            <p class="v-data-r"><i class="fa fa-calendar"></i> {list_time}</p>
                        </div>
                        <div class="title"> {list_name}</div>
                    </div>
                </a>
                {/video_list}
            </div>
        </div>
            {/video_hot}

        <div class="row">
            {cms_link}
        </div>
    </div>



</div>
{include file="footer.php"}
</body>

</html>