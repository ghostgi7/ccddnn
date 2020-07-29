<div id="pageTop" class="propaganda"></div>
<header class="page_top" id="top">
    <div class="bg_layer">
        <div class="wapper_wide flex_row">
            <a href="/" class="logo logo_t"><img src="{cms_logo}" style="height:40px;width:100%"></a>
            <div class="logo slogan">
                <a class="fb-a" href="{cms_domain2}" target="_blank">发布地址二</a>
                <a class="fb-a" href="{cms_domain1}" target="_blank">发布地址一</a>
            </div>
            <div class="search ">
                <form method="GET" id="searchForm">
                    {cms_search}
                    <input class="input" type="text" name="TXT" id="kd" autocomplete="off" />
                    <button class="btn iconfont icon_search" type="submit"></button>
                </form>




            </div>
        </div>
        <nav class="nav wapper_wide iconfont icon_swap">
            <a class="link index" href="/">首页</a>
            <a class="link index" href="/"></a>

            <div class="shade"></div>
            <ul class="ul">
                <li class="li"> <a class="link index" href="/">首页</a> </li>
                <li class="li">
                    <a class="link index" href="/"></a>
                </li>
                <li class="li has_sub"> <a class="link" href="javascript:;">视频专区</a>
                    <div class="sub_nav less_1024">
                        <div class="flex_row flex_nowarp">

                            {video_menu}
                <a class="link" href="{menu_link}">{menu_name}</a>
                            {/video_menu}

                        </div>
                    </div>
                </li>
                <li class="li has_sub"> <a class="link" href="javascript:;">高清专区</a>
                    <div class="sub_nav less_1024">
                        <div class="flex_row flex_nowarp">
                            {hd_menu}
                            <a class="link" href="{menu_link}">{menu_name}</a>
                            {/hd_menu}
                        </div>
                    </div>
                </li>
                <li class="li has_sub"> <a class="link" href="javascript:;">小说专区</a>
                    <div class="sub_nav less_1024">
                        <div class="flex_row flex_nowarp">
                            {book_menu}
                        <a class="link" href="{menu_link}">{menu_name}</a>
                            {/book_menu}
                        </div>
                    </div>
                </li>
                <li class="li has_sub"> <a class="link" href="javascript:;">图片专区</a>
                    <div class="sub_nav less_1024">
                        <div class="flex_row flex_nowarp">
                            {pic_menu}
                            <a class="link" href="{menu_link}">{menu_name}</a>
                            {/pic_menu}
                        </div>
                    </div>
                </li>


                {if $cms_config['live_status']=='1'}

                    <li class="li has_sub"> <a class="link" href="javascript:;">直播专区&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        <div class="sub_nav less_1024">
                            <div class="flex_row flex_nowarp">
                                {live_menu}
                                    <a class="link" href="{menu_link}">{menu_name}</a>
                                {/live_menu}
                            </div>
                        </div>
                    </li>

                {/if}



            </ul>
        </nav>
    </div>

    <div class="screen_roll">
        <div class="flex_row wapper_wide iconfont icon_anounce">
            <div class="marquee">
                <p class="p">公告：
                    {cms_notice}
                </p>
            </div>
        </div>
    </div> <br><br>
    <div class="banner wapper_wide">
        	{cms_banner_a}
    </div>
</header>