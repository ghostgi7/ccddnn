
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{cmsobj_name}正在直播 - 高清视频在线观看 - {cms_title}</title>
    <meta name="description" content="主播正在直播 - 高清视频在线观看 - {cms_title}" />
    <meta name="keywords" content="主播正在直播 - 高清视频在线观看 - {cms_title}" />
    <meta name="author" content="{cms_title}" />
    <!-- Favicon Icon -->
    {include file="include.php"}
</head>
<body id="page-top" class="">
{include file="header.php"}
<div id="wrapper">
    <!-- Sidebar -->
    {include file="left.php"}
    <div id="content-wrapper">

        <div class="container-fluid pb-0">
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-9">
                        <div class="single-video-left">
                            {cms_banner_a}
                            <div class="single-video">
                                <div class="embed-responsive" style="margin-bottom: 20px;">
                                    <div style="width:100%;height:100%;position: relative;" id="a2">
                                        <div class="embed-responsive-item" id="a1" allowfullscreen="" style="position: absolute;">
                                            {cmsobj_content}
                                            <style>

                                            </style>
                                            <script type="text/javascript">
                                                function IsPC() {
                                                    var userAgentInfo = navigator.userAgent;
                                                    var Agents = ["Android", "iPhone",
                                                        "SymbianOS", "Windows Phone",
                                                        "iPad", "iPod"];
                                                    var flag = true;
                                                    for (var v = 0; v < Agents.length; v++) {
                                                        if (userAgentInfo.indexOf(Agents[v]) > 0) {
                                                            flag = false;
                                                            break;
                                                        }
                                                    }
                                                    return flag;
                                                }
                                            </script>
                                            <script type="text/javascript">
                                                //加载时适应浏览器高度
                                                $(document).ready(function() {
                                                    //模块尺寸
                                                    $('#a1').css('height', $('#a1').width()*0.65);
                                                    $('#a2').css('height', $('#a2').width()*0.65);
                                                })
                                                //改变窗体大小时适应浏览器高度
                                                $(window).resize(function() {
                                                    //模块尺寸
                                                    $('#a1').css('height', $('#a1').width()*0.65);
                                                    $('#a2').css('height', $('#a2').width()*0.65);
                                                });
                                                function setvideoheight() {
                                                    if($('.prism-player').length>0){
                                                        $('.prism-player').css('height','100%');
                                                    }else{
                                                        setTimeout(setvideoheight,500);
                                                    }
                                                }
                                                setvideoheight();
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {cms_banner_b}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single-video-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title">
                                        <h6>{cmsobj_typename}热门推荐</h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {live_list:12}
                                        <div class="video-card video-card-list">
                                            <div class="video-card-image">
                                                <a class="play-icon" href="{list_view}"><i class="fas fa-play-circle"></i></a>
                                                <a href="{list_view}"> <img class="img-fluid lazy1" style="max-height: 100%;width: auto;height: 100%" src="{list_pic}" alt="{list_name}" data-original="{list_pic}" /> </a>
                                            </div>
                                            <div class="video-card-body">
                                                <div class="video-title">
                                                    <a href="{list_view}">{list_name}</a>
                                                </div>
                                                <div class="video-view">
                                                    <i class="fas fa-fire" style="color: red"></i> {list_hit} 次观看 &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    {/live_list}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {include file="footer.php"}
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- /#wrapper -->

</body>
</html>