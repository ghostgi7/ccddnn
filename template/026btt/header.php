<div class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="col-xs-2 navbar-toggle collapsed pull-left" data-target="#sidebar-left" data-toggle="collapse" type="button">菜单</button>
            <a class="col-xs-6 navbar-brand" href="/">
                <script>document.write(location.host)</script>
            </a>
            <div class="search-area col-xs-4 p-3">
                <form action="">
                    {cms_search}
                    <input type="text" name="TXT" class="search-input pull-right" placeholder="搜索我"/>
                    <button class="col-xs-2 pull-right" id="btn-search" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="sidebar collapse navbar-collapse" id="sidebar-left">
    <form id="ffsearch" name="ffsearch"  class="sidebar-search full-width" >
        {cms_search}
        <div class="form-group">
            <input type="text" name="TXT" id="wd" value="" class="form-control f-s-12" placeholder="搜索">
            <button class="btn btn-search" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>

    <div class="title">高清</div>
    <ul class="nav">
        {hd_menu}
        <li class="">
            <a href="{menu_link}">
                <i class="fa fa-lemon-o"></i>
                <span>{menu_name}</span>
            </a>
        </li>
        {/hd_menu}
    </ul>

    <div class="title">视频</div>
    <ul class="nav">
        {video_menu}
        <li class="">
            <a href="{menu_link}">
                <i class="fa fa-play-circle"></i>
                <span>{menu_name}</span>
            </a>
        </li>
        {/video_menu}
    </ul>

    <div class="title">小说</div>
    <ul class="nav">
        {book_menu}
        <li class="">
            <a href="{menu_link}">
                <i class="fa fa-bookmark-o"></i>
                <span>{menu_name}</span>
            </a>
        </li>
        {/book_menu}
    </ul>

    <div class="title">图片</div>
    <ul class="nav">
        {pic_menu}
        <li class="">
            <a href="{menu_link}">
                <i class="fa fa-photo"></i>
                <span>{menu_name}</span>
            </a>
        </li>
        {/pic_menu}
    </ul>

    {if $cms_config['live_status'] == '1'}
        <div class="title">直播</div>
        <ul class="nav">
            {live_menu}
            <li class="">
                <a href="{menu_link}">
                    <i class="fa fa-video-camera"></i>
                    <span>{menu_name}</span>
                </a>
            </li>
            {/live_menu}
        </ul>
    {/if}

</div>