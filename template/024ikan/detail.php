<!DOCTYPE html>
<html>
<head><title>{cmsobj_name}在线播放 - {cms_title}</title>
    <meta name="keywords"
          content="{cmsobj_name}在线播放,{cms_keywords}"/>
    <meta name="description"
          content="{cmsobj_name}在线播放,{cms_description}"/>
    {include file="include.php"}
</head>
<body>
<div class="hot_banner">

    {include file="header.php"}
    <div class="detail_list_box">
        <div class="detail_list">
            <div class="content_box clearfix">
                <div class="content_thumb fl">
                    <a class="vodlist_thumb lazyload" href="{cmsobj_detail}" title="{cmsobj_name}" data-original="{cmsobj_pic}" style="background-image: url(&quot;{cmsobj_pic}&quot;);"><span class="play hidden_xs"></span>
                    </a>
                </div>
                <div class="content_detail content_top fl">
                    <div class="pannel_head clearfix">
							<span class="text_muted pull_right hidden_xs">
								&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" style="cursor:hand" onclick="ikan.Fav(location.href,document.name);">保存到浏览器</a>
							</span>
                        <span class="text_muted pull_right hidden_mb">
								<a href="javascript:;" class="open-share"><i class="iconfont shaixuan_i"></i>&nbsp;分享</a>
							</span>
                        <h2 class="title">{cmsobj_name}</h2>
                    </div>
                    <div id="detail_rating" class="fn-clear">
                        <div id="rating" class="fn-left" data-mid="1" data-id="59755" data-score="2">
                            <span class="star_tips">5.0</span>
                            <ul class="rating-s">
                                <li class="one  current active-b active" title="很差" val="1">很差</li>
                                <li class="two  current active-b active" title="较差" val="2">较差</li>
                                <li class="three  current active-b active" title="还行" val="3">还行</li>
                                <li class="four  current active-b active" title="推荐" val="4">推荐</li>
                                <li class="five  current active-b active" title="力荐" val="5">力荐</li>
                            </ul>
                        </div>
                        <link href="{cms_template}/static/css/qirebox.css" rel="stylesheet" type="text/css">
                        <script>
                            document.getElementById("bgimage").style.backgroundImage="url('{cmsobj_pic}')";
                        </script>
                    </div>
                </div>
                <div class="content_detail content_min fl">
                    <ul>
                        <li class="data">
                            <span class="text_muted hidden_xs">类型：</span><a href="{cmsobj_typemore}" target="_blank">{cmsobj_typename}</a>&nbsp;<span class="split_line"></span>
                            <span class="text_muted hidden_xs">时间：</span><a href="javascript:;" target="_blank">{cmsobj_time}</a>&nbsp;
                        </li>
                        <li class="data"><span>状态：</span><span class="data_style">HD</span></li>
                        <li class="data"><span>播放量：</span><span class="data_style">{cmsobj_hit}</span></li>
                    </ul>
                </div>
                <div class="content_detail content_min content_btn fl">

                    <div class="playbtn">
                        <a class="btn btn_primary" href="{cmsobj_view}"><i class="iconfont"></i>&nbsp;立即播放</a>
                    </div>
                    <div class="playbtn o_bg">
                        <a class="btn_wxgzh btn btn_primary" href="{cmsobj_view}"><i class="iconfont"></i>&nbsp;备用线路</a>
                    </div>
                    <div class="playbtn o_share hidden_xs">
                        <a class="btn btn_share" href="javascript:;"><i class="iconfont"></i>&nbsp;分享</a>
                        <div class="dropdown">
                            <span style="display: block;padding-bottom: 6px;text-align: left;color: #333;">复制下方链接，去粘贴给好友吧：</span>

                            <span id="short" style="display: block;line-height: 16px;padding: 6px;border: 1px solid #ddd;text-align: left;color: #333;">{cmsobj_name}-手机在线观看-高清影院 <script>document.write(location.href)</script></span>
                            <span id="btn" class="copy_btn" data-clipboard-action="copy" data-clipboard-target="#short">复制链接</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">{cms_banner_a}</div>
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
                    <a class="vodlist_thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" >
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
                {video_list:8}
                <li class="vodlist_item">
                    <a class="vodlist_thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" >
                        <span class="play hidden_xs"></span>
                        <span class="pic_text text_right">HD</span>
                    </a>
                    <div class="vodlist_titbox">
                        <p class="vodlist_title"><a href="{list_detail}" title="{list_name}">{list_name}</a></p>
                        <p class="vodlist_sub">{list_time}</p>
                    </div>
                </li>
                {/video_list}

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
                {video_list:1}
                <li class="ranklist_item">
                    <a href="{list_detail}" title="{list_name}">
                        <div class="ranklist_img">
                            <div class="ranklist_thumb lazyload" data-original="{list_pic}" >
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
                {/video_list}
                {video_list:15}
                <li class="part_eone">
                    <a href="{list_detail}">
                        <span class="part_nums part_num2"><i class="iconfont"></i></span>{list_name}</a>
                </li>
                {/video_list}
            </ul>
        </div>
        <!-- end 侧边栏 -->
    </div>
    <div class="row">{cms_banner_b}</div>
</div>
{include file="footer.php"}
</body>
</html>