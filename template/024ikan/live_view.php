<!DOCTYPE html>
<html>
<head><title>{cmsobj_name}正在直播 - {cms_title}</title>
    <meta name="keywords"
          content="{cmsobj_name}正在直播,{cms_keywords}"/>
    <meta name="description"
          content="{cmsobj_name}正在直播,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div class="hot_banner">
    {include file="header.php"}
</div>
<div class="play_boxbg">
    <div class="play_box play_video" style="display: block">{cms_banner_a}</div>
    <div class="play_box play_video">
        <!-- 播放器  -->
        <div class="left_row fl">
            <div class="player_video embed-responsive embed-responsive-16by9 clearfix">

                <div id="fd_tips" class="fodong_box">
                    <div id="mq" class="fodong_tips">
                        <ul style="margin-top: 0px;">


                            <li>{cmsobj_name} 正在直播……</li>
                            <li>如果无法播放请重新刷新页面，或者<i class="iconfont"></i>切换线路。</li>
                            <li>视频载入速度跟网速有关，请耐心等待几秒钟。</li>
                        </ul>
                    </div>
                    <a class="close_tips" href="javascript:void(0)"><i class="iconfont"></i></a>
                </div>
                <div class="MacPlayer embed-responsive" style="padding-bottom: 56.25%;position: relative">
                    <div style="display: block;position: absolute;left: 0;right: 0;top: 0;bottom: 0">
                        {cmsobj_content}
                    </div>
                </div>
            </div>
            <div class="play_but">
                <ul>
                    <li>
                        <a href="{cmsobj_view}"><i class="iconfont"></i>线路</a>
                        <a href="javascript:;" onclick="location.reload()"><i class="iconfont"></i>刷新</a>
                        <div class="play_share hidden_xs" style="width: 100%;position: relative;">
                            <a href="javascript:;" style="width: 100%;"><i class="iconfont"></i>分享</a>
                            <div class="dropdown">
                                <span style="display: block;padding-bottom: 6px;text-align: left;color: #333;">复制下方链接，去粘贴给好友吧：</span>

                                <span id="short" style="display: block;line-height: 16px;padding: 6px;border: 1px solid #ddd;text-align: left;color: #333;">{cmsobj_name}-手机在线观看-高清影院 <script>document.write(location.href)</script></span>
                                <span id="btn" class="copy_btn" data-clipboard-action="copy" data-clipboard-target="#short">复制链接</span>
                            </div>
                        </div>
                        <a href="javascript:;" class="mac_ulog" onclick="ikan.Fav(location.href,document.name);"><i
                                    class="iconfont"></i>收藏</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right_row fr hidden_xs hidden_mi" style="position: relative;">
            <div class="play_box_right">
                <div class="play_namebox">
                    <h3 class="title">{cmsobj_name}</h3>
                    <span class="fenlei">{cmsobj_typename}</span>
                </div>
                <div class="play_infobox">
                    <div class="play_vlist m_qrcode cblock">
                        <div class="qrcode code_box"></div>
                        <div class="qrcode_text">
                            <p class="qrcode_tips">打开手机扫一扫</p>
                            <p>手机观看更方便</p>
                        </div>
                    </div>
                    <div class="play_clike">猜你喜欢</div>
                    {rand_list:vod,6}
                    <div class="play_vlist cblock">
                        <a href="{list_detail}" title="B-PROJECT">
                            <div class="play_vlist_thumb lazyload"
                                 data-original="{list_pic}"
                                 ></div>
                            <div class="play_vlist_text">
                                <p class="play_vlist_title">{list_name}</p>
                                <p class="play_vlist_now">{list_time}</p>
                            </div>
                        </a>
                    </div>
                    {/rand_list}
                </div>
            </div>
        </div>
        <!-- end 播放器  -->
    </div>
    <div class="play_box">
        <div class="left_row fl">
            <div class="playbtn wx_but hidden_mb">
                <a class="btn_wxgzh" href="javascript:void(0)" title="关注本站">关注本站，精彩自拍福利视频看不停</a>
            </div>
            <div class="pannel play_pan clearfix">
                <div class="player">
                    <div class="player_detail detail play_text">
                        <div class="video_title fl">
                            <h2 class="title margin_0">{cmsobj_name}</h2>
                        </div>
                    </div>
                    <div class="cblock">
                        <p class="data ms_p margin_0">
                            <span class="text_score">5.0</span>
                            <span class="split_line"></span>
                            <span class="text_muted hidden_xs">类型：</span><a
                                    href="{cmsobj_typemore}" target="_blank">{cmsobj_typename}</a>&nbsp;
                            <span class="split_line"></span>

                            <span class="text_muted hidden_xs">时间：</span>{cmsobj_time}&nbsp;
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">{cms_banner_b}</div>
    <div class="left_row fl">
        <!-- 猜你喜欢 -->
        <div class="pannel clearfix">
            <div class="pannel_head clearfix">
                <h3 class="title">
                    猜你喜欢
                </h3>
            </div>
            <ul class="vodlist vodlist_sh list_scroll clearfix">
                {rand_list:vod,8}
                <li class="vodlist_item">
                    <a class="vodlist_thumb lazyload" href="{list_detail}" title="{list_name}"
                       data-original="{list_pic}" >
                        <span class="play hidden_xs"></span>
                        <span class="pic_text text_right">HD</span>
                    </a>
                    <div class="vodlist_titbox">
                        <p class="vodlist_title"><a href="{list_detail}" title="{list_name}">{list_name}</a></p>
                        <p class="vodlist_sub">{list_time}</p>
                    </div>
                </li>
                {/rand_list}
            </ul>
        </div>
        <!-- end 猜你喜欢 -->
        <!-- 相关推荐 -->
        <div class="pannel clearfix">
            <div class="pannel_head clearfix">
                <h3 class="title">
                    相关推荐
                </h3>
            </div>
            <ul class="vodlist vodlist_sh list_scroll clearfix">
                {live_list:8}
                <li class="vodlist_item">
                    <a class="vodlist_thumb lazyload" href="{list_detail}" title="{list_name}"
                       data-original="{list_pic}" >
                        <span class="play hidden_xs"></span>
                        <span class="pic_text text_right">LIVE</span>
                    </a>
                    <div class="vodlist_titbox">
                        <p class="vodlist_title"><a href="{list_detail}" title="{list_name}">{list_name}</a></p>
                        <p class="vodlist_sub">{list_time}</p>
                    </div>
                </li>
                {/live_list}

            </ul>
        </div>
        <!-- end 相关推荐 -->
    </div>
    <div class="right_row fr pa_left hidden_xs hidden_mi">
        <!-- 侧边栏 -->
        <div class="pannel clearfix">
            <div class="pannel_head clearfix">
                <h3 class="title">
                    每日精选榜
                </h3>
            </div>
            <ul class="vodlist clearfix">
                {live_list:1}
                <li class="ranklist_item">
                    <a href="{list_detail}" title="{list_name}">
                        <div class="ranklist_img">
                            <div class="ranklist_thumb lazyload" data-original="{list_pic}"
                                 >
                                <span class="play hidden_xs"></span>
                                <span class="part_nums part_num1"><i class="iconfont"></i></span>
                            </div>
                        </div>
                        <div class="ranklist_txt">
                            <div class="pannel_head clearfix">
                                <h4 class="title">{list_name}</h4>
                            </div>
                            <p class="vodlist_sub">{list_time}</p>
                            <p><span class="vodlist_sub">{list_hit}</span></p>
                        </div>
                    </a>
                </li>
                {/live_list}
                {live_list:15}
                <li class="part_eone">
                    <a href="{list_detail}">
                        <span class="part_nums part_num2"><i class="iconfont"></i></span>{list_name}</a>
                </li>
                {/live_list}
            </ul>
        </div>
        <!-- end 侧边栏 -->
    </div>

    <script type="text/javascript">
        function autoScroll(obj) {
            $(obj).find("ul").animate({
                marginTop: "-0.8rem"
            }, 500, function () {
                $(this).css({marginTop: "0px"}).find("li:first").appendTo(this);
            })
        }

        $(function () {
            setInterval('autoScroll(".fodong_tips")', 3000);
        })
    </script>
    <style>
        #J_prismPlayer.prism-player{
            height: 100% !important;
        }
    </style>
</div>
{include file="footer.php"}
</body>
</html>