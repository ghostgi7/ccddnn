<div class="scroll-mian" id="scroll-mian" style="display: none;"><ul class="scroll-content"><li class="scroll-list"><a class="scroll-item" title="回到顶部" href="javascript:doScroll1()" target="_self"><i class="icon icon_arrow_up"></i></a></li></ul></div>

<header class="container header-container border_bootom">
    <div class="row border_bootom">
        <div class="text-right">
            <p class="c_red"><a href="{cms_domain1}" class="c_red" target="_blank">男人不识本站，上遍色站也枉然</a></p>
        </div>
    </div>
    <div class="row">
        <div class="header_desc size_m">
            <a href="/">
                <div class="header_title size_xxxl c_pink">

                </div>
            </a>
            <p class="c_red">
                <a href="{cms_domain2}" class="c_red" target="_blank">提示：{cms_notice}</a>
        </div>
        <div class="share_box" onclick="configShare();">
            <div class="share_img"></div>
        </div>
    </div>
</header>
<section class="container section section-menu" id="section-menu">
    <div class="row <{menuInfo.key}>-row">
        <div class="row-item odd">
            <div class="row-item-title bg_red"><a href="/" class='c_white' target="_blank">高清区</a></div>
            <ul class="row-item-content">
                {hd_menu}
                    <li class="item">
                        <a href="{menu_link}" target="_blank"> {menu_name} </a>
                    </li>
                {/hd_menu}
            </ul>
        </div>
        <div class="row-item even">
            <div class="row-item-title bg_red"><a href="/" class='c_white' target="_blank">视频区</a></div>
            <ul class="row-item-content">
                {video_menu}
                <li class="item">
                    <a href="{menu_link}" target="_blank"> {menu_name} </a>
                </li>
                {/video_menu}
            </ul>
        </div>
        <div class="row-item odd">
            <div class="row-item-title bg_red"><a href="/" class='c_white' target="_blank">小说区</a></div>
            <ul class="row-item-content">
                {book_menu}
                <li class="item">
                    <a href="{menu_link}" target="_blank"> {menu_name} </a>
                </li>
                {/book_menu}
            </ul>
        </div>
        <div class="row-item even">
            <div class="row-item-title bg_red"><a href="/" class='c_white' target="_blank">图片区</a></div>
            <ul class="row-item-content">
                {pic_menu}
                <li class="item">
                    <a href="{menu_link}" target="_blank"> {menu_name} </a>
                </li>
                {/pic_menu}
            </ul>
        </div>
        {if $cms_config['live_status'] == '1'}
        <div class="row-item odd">
            <div class="row-item-title bg_red"><a href="/" class='c_white' target="_blank">直播区</a></div>
            <ul class="row-item-content">
                {live_menu}
                <li class="item">
                    <a href="{menu_link}" target="_blank"> {menu_name} </a>
                </li>
                {/live_menu}
            </ul>
        </div>
        {/if}
    </div>
</section>
<div id="photo-header-content">
    {cms_banner_a}
</div>