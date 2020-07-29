<header class="mdui-appbar mdui-shadow-0 mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-white">
        <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#left-drawer', swipe: true}">
            <i class="mdui-icon ion-android-menu"></i>
        </span>
        <a href="/" class="mdui-typo-title logo">
            <img src="{cms_logo}" alt="{cms_title}">
        </a>
        <div class="mdui-toolbar-spacer"></div>
        <div class="mdui-textfield mdui-textfield-expandable top-search" mdui-tooltip="{content: '搜索'}">
            <form name="formsearch" id="formsearch" autocomplete="off">
                <button class="mdui-textfield-icon mdui-btn mdui-btn-icon">
                    <i class="mdui-icon ion-ios-search"></i>
                </button>
                {cms_search}
                <input class="mdui-textfield-input mdui-text-color-black" placeholder="请输入影片名或演员名" name="TXT" type="text" id="keyword" required="">
                <button class="mdui-textfield-close mdui-btn mdui-btn-icon">
                    <i class="mdui-icon ion-ios-close-empty"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="mdui-divider"></div>
</header>
<!-- 顶部工具栏结束 -->
<!-- 左侧抽屉菜单开始 -->
<div id="left-drawer" class="mdui-drawer left-drawer">
    <ul class="mdui-list" mdui-collapse="{accordion: true}">
        {if $cms_config['user_status'] == '1'}
        <a href="{:U('user','info',1,1)}" class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon layui-icon layui-icon-user" style="font-size: 20px;"></i> 
            <div class="mdui-list-item-content">个人中心</div>
        </a>
        {/if}

        <div class="mdui-divider"></div>
        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon ion-ios-videocam-outline"></i>
                <div class="mdui-list-item-content">在线视频</div><i class="mdui-collapse-item-arrow ion-arrow-down-b"></i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                {video_menu}
                <li>
                    <a  href="{menu_link}" class="mdui-list-item mdui-ripple ">{menu_name}</a>
                </li>
                {/video_menu}
            </ul>
        </li>
        <div class="mdui-divider"></div>

        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon ion-ios-videocam-outline"></i>
                <div class="mdui-list-item-content">高清影院</div><i class="mdui-collapse-item-arrow ion-arrow-down-b"></i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                {hd_menu}
                <li>
                    <a  href="{menu_link}" class="mdui-list-item mdui-ripple ">{menu_name}</a>
                </li>
                {/hd_menu}
            </ul>
        </li>
        <div class="mdui-divider"></div>

        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon ion-social-buffer"></i>
                <div class="mdui-list-item-content">图片自拍</div><i class="mdui-collapse-item-arrow ion-arrow-down-b"></i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                {pic_menu}
                <li>
                    <a  href="{menu_link}" class="mdui-list-item mdui-ripple ">{menu_name}</a>
                </li>
                {/pic_menu}
            </ul>
        </li>
        <div class="mdui-divider"></div>

        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon ion-social-rss"></i>
                <div class="mdui-list-item-content">小说阅读</div><i class="mdui-collapse-item-arrow ion-arrow-down-b"></i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                {book_menu}
                <li>
                    <a  href="{menu_link}" class="mdui-list-item mdui-ripple ">{menu_name}</a>
                </li>
                {/book_menu}
            </ul>
        </li>
        <div class="mdui-divider"></div>

        {if $cms_config['live_status'] == '1'}
        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon ion-ios-volume-high"></i>
                <div class="mdui-list-item-content">激情直播</div><i class="mdui-collapse-item-arrow ion-arrow-down-b"></i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                {live_menu}
                <li>
                    <a  href="{menu_link}" class="mdui-list-item mdui-ripple ">{menu_name}</a>
                </li>
                {/live_menu}
            </ul>
        </li>
        <div class="mdui-divider"></div>
        {/if}
    </ul>
</div>
    <!-- 左侧抽屉菜单结束 -->

<div class="mdui-p-t-3 mdui-container main-container">
    <!-- 分割线 -->
    {cms_banner_a}
    <!-- 分割线 -->
</div>
