<div class="headContainer">
        <div class="header">
            <button class="button menu-btn">
                <span class="icon">
                    <span class="ico-bar"></span>
                    <span class="ico-bar"></span>
                    <span class="ico-bar"></span>
                </span>
            </button>
            <div class="logo">
                <a href="/"><img src="{cms_logo}" alt="{cms_title}"></a>
            </div>

            <div class="header-right">
                <div class="top-links"></div>
                <div class="search" style="display:flex">
                    <form id="search_form" method="get">
                        <div class="search-text">
                            {cms_search}
                            <input type="text" name="TXT" class="search-input" placeholder="请输入影片名或演员名" value=""></div>
                        <button type="submit" class="search-button"></button>
                    </form>
                </div>
            </div>


            <div class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></div>
        </div>
        
    </div>
    <div style="background: #2c2c2a;">
    <nav class="mb-nav">
            <div class="navigation">
                <ul class="primary">
                    <div class="videos_select">
                        <li>
                            <a href="JavaScript:">在线视频</a>
                        </li>
                        <div class="b-dropdown-videos_select">
                            {video_menu}
                                <a  href="{menu_link}" target="_self" class="b-main-nav_link ">{menu_name}</a>
                            {/video_menu}
                        </div>
                    </div>

                    <div class="videos_select">
                        <li>
                            <a href="JavaScript:">高清影院</a>
                        </li>
                        <div class="b-dropdown-videos_select">
                            {hd_menu}
                                <a  href="{menu_link}" target="_self" class="b-main-nav_link ">{menu_name}</a>
                            {/hd_menu}
                        </div>
                    </div>

                    <div class="videos_select">
                        <li>
                            <a href="JavaScript:">图片自拍</a>
                        </li>
                        <div class="b-dropdown-videos_select">
                            {pic_menu}
                                <a  href="{menu_link}" target="_self" class="b-main-nav_link ">{menu_name}</a>
                            {/pic_menu}
                        </div>
                    </div>

                    <div class="videos_select">
                        <li>
                            <a href="JavaScript:">小说阅读</a>
                        </li>
                        <div class="b-dropdown-videos_select">
                            {book_menu}
                                <a  href="{menu_link}" target="_self" class="b-main-nav_link ">{menu_name}</a>
                            {/book_menu}
                        </div>
                    </div>

                    <div class="videos_select">
                        <li>
                            <a href="JavaScript:">激情直播</a>
                        </li>
                        <div class="b-dropdown-videos_select">
                            {live_menu}
                                <a  href="{menu_link}" target="_self" class="b-main-nav_link ">{menu_name}</a>
                            {/live_menu}
                        </div>
                    </div>

                    {if $cms_config['user_status'] == '1'}
                    <div class="videos_select">
                        <li>
                            <a href="{:U('user','info',1,1)}">
                                <i class="layui-icon layui-icon-user"></i>个人中心
                            </a>
                        </li>
                    </div>
                    {/if}
                    
                    <div style="clear:both;"></div>
                </ul>
            </div>
        </nav>
    </div>        

    <div class="container">
        <div class="content" style="margin-top: 85px;">
                    {cms_banner_a}
        </div>
    </div>
