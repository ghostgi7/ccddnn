<div class="header">
<div class="l logo"><a href="/">{cms_title}</a></div>
<div class="r search"><form id="search" name="search" method="get" action="">
<div class="r input-group">
    {cms_search}
<input type="text" name="TXT" class="input-text search-input mac_wd" value="" placeholder="在此处输入片名或演员名称" /><button id="searchbutton" class="input-so search-button mac_search">搜索</button>
</div></form>
</div>
</div>
<div class="nav"><dd><a href="javascript:;" class="focu">高清专区</a></dd>
{hd_menu}
    <dd><a href="{menu_link}" class="1=0">{menu_name}</a></dd>
{/hd_menu}

    <br />
<dd><a href="#" class="focu">视频专区</a></dd>
    {video_menu}
    <dd><a href="{menu_link}" class="1=0">{menu_name}</a></dd>
    {/video_menu}
    <br />
<dd><a href="#" class="focu">小说专区</a></dd>
    {book_menu}
    <dd><a href="{menu_link}" class="1=0">{menu_name}</a></dd>
    {/book_menu}
    <br />
    <dd><a href="#" class="focu">图片专区</a></dd>
    {pic_menu}
    <dd><a href="{menu_link}" class="1=0">{menu_name}</a></dd>
    {/pic_menu}
    <br />
    {if $cms_config['live_status'] == '1'}
    <dd><a href="#" class="focu">直播专区</a></dd>
    {live_menu}
    <dd><a href="{menu_link}" class="1=0">{menu_name}</a></dd>
    {/live_menu}
    <br />
    {/if}
</div>
<div class="clearfix"></div>
<div class="top_ads">{cms_banner_a}</div>