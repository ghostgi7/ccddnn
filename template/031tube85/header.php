<div class="header">
    <div class="logo"><a href="/" style="background: transparent;"><img src="{cms_logo}" alt=""></a></div>

    <div class="search">
        <form>
            {cms_search}
            <button type="submit" style="border: none" class="search-button">搜索</button>
            <div class="search-text">
                <input type="text" name="TXT" placeholder="搜索" value=""/>
            </div>
        </form>
    </div>
</div>
<nav>
    <div class="navigation">
        <button class="button"><span class="icon"><span class="ico-bar"></span><span class="ico-bar"></span><span
                    class="ico-bar"></span></span></button>
        <ul class="primary">
            <li {if $cms_controller == 'index'}class="selected"{/if}><a href="/" id="item1">首页</a></li>
            <li {if $cms_controller == 'vod'}class="selected"{/if}><a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}" id="item2">电影</a></li>
            <li {if $cms_controller == 'book'}class="selected"{/if}><a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}" id="item4">小说</a></li>
            <li {if $cms_controller == 'pic'}class="selected"{/if}><a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}" id="item6">图片</a></li>
            <li {if $cms_controller == 'live'}class="selected"{/if}><a href="{:U('live','type',$cms_menu['live'][0]['id'],1)}" id="item11">直播</a></li>


        </ul>
        <ul class="secondary"></ul>
    </div>
</nav>

{if $cms_controller == 'vod'}
<div class="box tags-cloud">
    {video_menu}
    <a href="{menu_link}" style="font-weight: bold; font-size: 12px;">{menu_name}</a>            &nbsp;&nbsp;
    {/video_menu}
    {hd_menu}
    <a href="{menu_link}" style="font-weight: bold; font-size: 12px;">{menu_name}</a>            &nbsp;&nbsp;
    {/hd_menu}
</div>
{elseif $cms_controller == 'pic'}
<div class="box tags-cloud">
    {pic_menu}
    <a href="{menu_link}" style="font-weight: bold; font-size: 12px;">{menu_name}</a>            &nbsp;&nbsp;
    {/pic_menu}
</div>
{elseif $cms_controller == 'book'}
<div class="box tags-cloud">
    {book_menu}
    <a href="{menu_link}" style="font-weight: bold; font-size: 12px;">{menu_name}</a>            &nbsp;&nbsp;
    {/book_menu}
</div>
{elseif $cms_controller == 'live'}
<div class="box tags-cloud">
    {live_menu}
    <a href="{menu_link}" style="font-weight: bold; font-size: 12px;">{menu_name}</a>            &nbsp;&nbsp;
    {/live_menu}
</div>
{/if}
{cms_banner_a}