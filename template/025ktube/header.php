<header>
    <!--Navigation-->
    <nav id="menu" class="navbar">
        <div class="container">
            <div class="navbar-header"><span id="heading" class="visible-xs"><script>document.write(location.host)</script></span>
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/"><i class="fa fa-home"></i> 首页</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-play-circle-o"></i> 电影</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    {video_menu}
                                    <li><a href="{menu_link}">{menu_name}</a></li>
                                    {/video_menu}
                                </ul>
                                <ul class="list-unstyled">
                                    {hd_menu}
                                    <li><a href="{menu_link}">{menu_name}</a></li>
                                    {/hd_menu}
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-book"></i> 小说</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    {book_menu}
                                    <li><a href="{menu_link}">{menu_name}</a></li>
                                    {/book_menu}
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-photo"></i> 图片</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    {pic_menu}
                                    <li><a href="{menu_link}">{menu_name}</a></li>
                                    {/pic_menu}
                                </ul>
                            </div>
                        </div>
                    </li>
                    {if $cms_config['live_status'] == '1'}
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-video-camera"></i> 直播</a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    {live_menu}
                                    <li><a href="{menu_link}">{menu_name}</a></li>
                                    {/live_menu}
                                </ul>
                            </div>
                        </div>
                    </li>
                    {/if}
                    <li>
                        <div class="search-box">
                            <form action="">
                                {cms_search}
                                <input type="text" name="TXT">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="header-slide">
        <div id="owl-demo" class="owl-carousel">
            {new_list:vod,8}
            <div class="item">
                <div class="zoom-container">
                    <div class="zoom-caption">
                        <span>新片推荐</span>
                        <a href="{list_view}">
                            <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                        </a>
                        <p>{list_name}</p>
                    </div>
                    <img src="{list_pic}"/>
                </div>
            </div>
            {/new_list}
        </div>
    </div>
</header>
<div id="page-content" class="index-page">

    <div class="container">
        <div class="row">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <i class="fa fa-bell-o"></i> {cms_notice}
                <a href="{cms_domain1} "> 发布地址1 </a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{cms_domain2} "> 发布地址2 </a>
            </div>
        </div>
    </div>
</div>
<!-- Header -->