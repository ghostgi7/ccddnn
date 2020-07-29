<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <title>{cmsobj_name}正在直播中....
        {cms_title}
    </title>
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
                <link rel="stylesheet" href="//g.alicdn.com/de/prismplayer/2.7.2/skins/default/aliplayer-min.css" />
                <div class="player-player" id="player" style="background-color: rgb(0, 0, 0); width: 800px; height: 450px; cursor: pointer;">
                    {cmsobj_content}
                </div>
                <div class="player-favorite clearfix">


                    <a href="javascript:void(0);" class="uk-display-block uk-float-left uk-margin-top uk-margin-left btn-video-likes clearfix current-btn-video-likes"><span
                            class="uk-display-block uk-float-left"></span>
                        {cmsobj_hit}
                    </a>
                    <p class="uk-float-right uk-float-left player-num">本直播为实时直播！</span></p>
                </div>
            </div>
            <!--相关视频-->
            <div class="player-r uk-float-right">
                <h3>欢迎光临</h3>
                <div class="video-list scrollbar" id="style-3">
                    <!--相关视频一-->

                    <div class="video-item margin-bottom-10 clearfix"><a class="video-img uk-float-left uk-margin-right"><img
                                src="{cms_template}/images/zb1.jpg"></a></div>
                    <div class="video-item margin-bottom-10 clearfix"><a class="video-img uk-float-left uk-margin-right"><img
                                src="{cms_template}/images/zb2.jpg"></a></div>

                </div>
            </div>

            {cms_banner_b}

        </div>
        <!--视频信息-->

    </div>

    {include file="footer.php"}

</body>

</html>