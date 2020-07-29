<div class="container">
    <div class="header">
        <div class="logo">
            <a href="/">
                   <img src="{cms_logo}" alt="{cms_title}">
            </a>
        </div>
        <div class="social-bookmarks">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                <a class="addthis_button_preferred_1"></a>
                <a class="addthis_button_preferred_2"></a>
                <a class="addthis_button_preferred_3"></a>
                <a class="addthis_button_preferred_4"></a>
                <a class="addthis_button_compact"></a>
            </div>
            <script type="text/javascript">
                    var addthis_config = {
                        ui_language:''
                    }
                </script>
            <script type="text/javascript" src="//s7.addthis.com/js/250/addthis_widget.js" defer></script>
            <!-- AddThis Button END -->
        </div>
        <div class="search">
            <form id="search" method="GET" onSubmit="return qrsearch();">
                <input class="search-button" id="searchbutton" type="submit" value=""/>
                {cms_search}
                <div class="search-text">
                    <input type="text"  name="TXT" placeholder="请输入影片名或演员名" value=""/>
                </div>
            </form>
        </div>
    </div>
    <nav>
    <div class="navigation">
        <a href="#menu">
            <button class="button">
            <span class="icon">
            <span class="ico-bar"></span>
            <span class="ico-bar"></span>
            <span class="ico-bar"></span>
            </span>
            </button>
        </a>

        <ul class="primary">
            <li><a href="/" >首页</a></li>
            <li><a href="javascript:void(0)" >在线视频</a>
                <table cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td>
                        <ul>
                            {video_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/video_menu}
                        </ul>
                  </td>
                  </tr>
                  </tbody>
                </table>
            </li>
            <li><a href="javascript:void(0)" >高清影院</a>
                <table cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td>
                        <ul>
                            {hd_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/hd_menu}
                        </ul>
                  </td>
                  </tr>
                  </tbody>
                </table>
            </li>
            <li><a href="javascript:void(0)" >图片自拍</a>
                <table cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td>
                        <ul>
                            {pic_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/pic_menu}
                        </ul>
                  </td>
                  </tr>
                  </tbody>
                </table>
            </li>
            <li><a href="javascript:void(0)" >小说阅读</a>
                <table cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td>
                        <ul>
                            {book_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/book_menu}
                        </ul>
                  </td>
                  </tr>
                  </tbody>
                </table>
            </li>
            {if $cms_config['live_status'] == '1'}
            <li><a href="javascript:void(0)" >激情直播</a>
                <table cellpadding="0" cellspacing="0">
                  <tbody><tr>
                    <td>
                        <ul>
                            {live_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/live_menu}
                        </ul>
                  </td>
                  </tr>
                  </tbody>
                </table>
            </li>
            {/if}

            {if $cms_config['user_status'] == '1'}
            <li>
                <a href="{:U('user','info',1,1)}" >
                <i class="layui-icon layui-icon-user"></i>个人中心
                </a>
            </li>
            {/if}          
        </ul>
    </div>
    </nav>
    <div class="bannerAd">
        {cms_banner_a}
    </div>

    <nav id="menu">
                <ul>
                    {if $cms_config['user_status'] == '1'}
                    <li>
                        <a href="{:U('user','info',1,1)}" >
                        <i class="layui-icon layui-icon-user"></i>个人中心
                        </a>
                    </li>
                    {/if}

                    <li class="Selected">
                        <a href="JavaScript:;">在线视频</a>
                        <ul>
                            {video_menu}
                                <li>
                                    <a href="{menu_link}">{menu_name}</a>
                                </li>
                            {/video_menu}
                        </ul>
                    </li>

                    <li class="Selected">
                        <a href="JavaScript:;">高清影院</a>
                        <ul>
                            {hd_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/hd_menu}
                        </ul>
                    </li>

                    <li class="Selected">
                        <a href="JavaScript:;">图片自拍</a>
                        <ul>
                            {pic_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/pic_menu}
                        </ul>
                    </li>

                    <li class="Selected">
                        <a href="JavaScript:;">小说阅读</a>
                        <ul>
                            {book_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/book_menu}
                        </ul>
                    </li>
                    
                    {if $cms_config['live_status'] == '1'}
                    <li class="Selected">
                        <a href="JavaScript:;">激情直播</a>
                        <ul>
                            {live_menu}
                            <li>
                                <a href="{menu_link}">{menu_name}</a>
                            </li>
                            {/live_menu}
                        </ul>
                    </li>
                    {/if}

                </ul>
            </nav>

        <script type="text/javascript">
            $(function() {
                $('nav#menu').mmenu({
                    slidingSubmenus: false
                });
            });
        </script>
