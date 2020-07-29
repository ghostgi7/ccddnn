<nav class="mynav">
    <a {if $cms_controller == 'index'}class="on"{/if} href="/">精选</a>
    <a {if $cms_controller == 'vod'}class="on"{/if} href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}">电影</a>
    <a {if $cms_controller == 'pic'}class="on"{/if} href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}">图片</a>
    <a {if $cms_controller == 'book'}class="on"{/if} href="{:U('book','type',$cms_menu['book'][0]['id'],1)}">小说</a>
    <a {if $cms_controller == 'live'}class="on"{/if} href="{:U('live','type',$cms_menu['live'][0]['id'],1)}">直播</a>
</nav>
<div class="mysrh">
    <form class="uzsrh" role="search">
        {cms_search}
        <input type="text" name="TXT" placeholder="请输入关键词 例如: 巨乳" autocomplete="off">
        <button type="submit">搜索</button>
    </form>
</div>
{cms_banner_a}