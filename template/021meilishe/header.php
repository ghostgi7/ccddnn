
<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    <button type="button" class="d-block d-sm-none btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarToggle" style="background: transparent"><i class="fas fa-bars"></i>&nbsp;导航</button>
    <button class="d-none d-sm-block btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle" > <i class="fas fa-bars" style="color: #ffffff"></i> </button>
    <a class="navbar-brand" href="/" style="margin-right: 1.3rem;"><img class="img-fluid" style="max-width: 65%;" alt="{cms_title}" src="{cms_logo}" /></a>


    <!-- Navbar Search -->
    <form id="search" action="" method="get"  class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
        <div class="input-group">
            {cms_search}
            <input type="text" id="wd" name="TXT" class="form-control" placeholder="输入关键字进行搜索…" />
            <div class="input-group-append">
                <button class="btn btn-light" type="submit"> <i class="fas fa-search"></i> </button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
        <a href="{cms_domain1}" target="_blank" class=" d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarTogglePc" style="background: transparent">发布地址一</a>
        <a href="{cms_domain2}" target="_blank"  style="margin-left: 20px;background: transparent" class=" d-sm-block btn btn-primary border-none btn-sm order-1 order-sm-0" id="sidebarTogglePcDown" >发布地址二</a>

    </ul>
</nav>
<div class="ui-slide-block" style="font-size: 12px;display: none;" id="block-slide">
    <div class="container">
        <div class="table table-sm" style="margin-bottom: 0rem;">
            <div>
                <div style="line-height:20px;padding: .3rem;">
                    <form id="search" method="get" action="" class="form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 ">
                        <div class="input-group">
                            {cms_search}
                            <input class="form-control border-form-control search-input" style="background-color: white;border: none" id="wd" name="TXT" placeholder="输入关键字进行搜索" type="text" />
                            <button type="submit" class="btn btn-danger border-none"> 搜索 </button>
                        </div>
                    </form>
                </div>
                <span style="color: #ffade8;font-size: 16px" target="_blank"><i class="fas fa-fw fa-play-circle"></i>视频专区</span>
                <ul>
                    {video_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/video_menu}
                </ul>
                <span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fas fa-fw fa-fire"></i>高清专区</span>
                <ul>
                    {hd_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/hd_menu}
                </ul>
                <span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fas fa-fw fa-book"></i>小说专区</span>
                <ul>
                    {book_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/book_menu}
                </ul>
                <span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fas fa-fw fa-image"></i>图片专区</span>
                <ul>
                    {pic_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/pic_menu}
                </ul>

                {if $cms_config['live_status'] == '1'}
                    <span style="color: #ffccfa;font-size: 16px;" target="_blank"><i class="fas fa-fw fa-video"></i>直播专区</span>
                    <ul>
                        {live_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                        {/live_menu}
                    </ul>
                {/if}

            </div>
        </div>
    </div>
</div>

<div class="ui-slide-block-pc" id="video">
    <div class="container">
        <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
            <div class="div-pc">
                <ul>
                    {video_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/video_menu}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-slide-block-pc" id="hd">
    <div class="container">
        <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
            <div class="div-pc">
                <ul>
                    {hd_menu}
                            <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/hd_menu}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-slide-block-pc" id="pic">
    <div class="container">
        <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
            <div class="div-pc">
                <ul>
                    {pic_menu}
                        <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/pic_menu}
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="ui-slide-block-pc" id="book">
    <div class="container">
        <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
            <div class="div-pc">
                <ul>
                    {book_menu}
                        <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/book_menu}
                </ul>
            </div>
        </div>
    </div>
</div>
{if $cms_config['live_status'] == '1'}
<div class="ui-slide-block-pc" id="live">
    <div class="container">
        <div class="table table-sm" style="width: 480px;margin-bottom: -0.1rem;">
            <div class="div-pc">
                <ul>
                    {live_menu}
                        <li style="line-height:20px"><a style="color: white;" href="{menu_link}" target="_blank">{menu_name}</a></li>
                    {/live_menu}
                </ul>
            </div>
        </div>
    </div>
</div>
{/if}