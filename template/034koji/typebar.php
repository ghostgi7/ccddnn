<style>
    .typebar{
        position: relative;
    }
.typemenu{
    display: inline-block;
    width: 11.5%;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background: white;
    margin: 4px 0;
    border-radius: 8px;
    text-decoration-line: none;
}

@media (max-width: 640px) {
    .typemenu{
        display: inline-block;
        width: 24%;
    }
}
</style>
<div class="typebar">
    {if $cms_controller == 'vod'}
    {hd_menu}
    <a class="typemenu" href="{menu_link}">{menu_name}</a>
    {/hd_menu}
    {video_menu}
    <a class="typemenu" href="{menu_link}">{menu_name}</a>
    {/video_menu}
    {/if}
    {if $cms_controller == 'book'}
    {book_menu}
    <a class="typemenu" href="{menu_link}">{menu_name}</a>
    {/book_menu}
    {/if}
    {if $cms_controller == 'pic'}
    {pic_menu}
    <a class="typemenu" href="{menu_link}">{menu_name}</a>
    {/pic_menu}
    {/if}
    {if $cms_controller == 'live'}
    {live_menu}
    <a class="typemenu" href="{menu_link}">{menu_name}</a>
    {/live_menu}
    {/if}
</div>
{cms_banner_a}