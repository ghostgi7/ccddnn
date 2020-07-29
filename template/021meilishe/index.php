<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{cms_title}</title>
    <meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    <meta name="author" content="{cms_title}" />
    {include file="include.php"}
</head>
<body id="page-top" class="">
{include file="header.php"}
<div id="wrapper">
    <!-- Sidebar -->
    {include file="left.php"}
    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="top-category section-padding mb-4">
                <div class="row">
                    <div class="col-md-12">
                        { cms_banner_a }
                    </div>
                </div>
            </div>
            <!--推荐-->
            {video_hot}
                    <hr class="mt-0" />
                    <div class="video-block section-padding">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-title">
                                    <h6>{type_name}</h6>
                                </div>
                            </div>
                            {video_list:12}
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="play-icon" href="{list_view}"><i class="fas fa-play-circle"></i></a>
                                        <a href="{list_view}"> <img class="img-fluid lazy" src="{list_pic}" alt="{list_time}" data-original="{list_pic}" /> </a>
                                        <div class="time">
                                            {type_name}
                                        </div>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="{list_view}">{list_name}</a>
                                        </div>
                                        <div class="video-view">
                                            {list_hit} 次观看
                                            <i class="fas fa-calendar-alt"></i> {list_time}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/video_list}
                        </div>
                    </div>
            {/video_hot}
            <!--直播-->
            {if $cms_config['live_status'] == '1'}
                <hr class="mt-0" />
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6>直播专区</h6>
                            </div>
                        </div>
                        {live_hot_list:12}
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="{list_view}"><i class="fas fa-play-circle"></i></a>
                                    <a href="{list_view}"> <img class="img-fluid lazy" src="{list_pic}" alt="{list_name}" data-original="{list_pic}" /> </a>
                                    <div class="time">
                                        实时直播
                                    </div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="{list_view}">{list_name}</a>
                                    </div>
                                    <div class="video-view">
                                        {list_hit}  次观看
                                        <i class="fas fa-calendar-alt"></i> {list_time}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {/live_hot_list}
                    </div>
                </div>
                {/if}

            <div class="top-category section-padding mb-4">
                <div class="row">
                    <div class="col-md-12" style="padding-top: 8px;padding-bottom: 8px;background: #fff">
                        <h5>友情链接:</h5>
                        {cms_link}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        {include file="footer.php"}
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->
</body>
</html>