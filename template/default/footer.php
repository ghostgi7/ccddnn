
<div class="qr-footer layui-show-xs-block layui-hide-sm">
    <ul class="qr-footer-menu">
        <li><a href="/"><p><i class="layui-icon layui-icon-home"  style="font-size: 20px"></i></p><p>首页</p></a></li>
        <li><a href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}"><p><i class="layui-icon layui-icon-play"  style="font-size: 20px"></i></p><p>视频</p></a></li>
        {if $cms_config['live_status']=='1'}
        <li class="send"><a href="{:U('live','type',$cms_config['live'],'1')}"><i class="layui-icon layui-icon-video"  style="font-size: 28px"></i></a></li>
        {/if}
        <li><a href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}"><p><i class="layui-icon layui-icon-carousel"  style="font-size: 20px"></i></p><p>图片</p></a></li>
        <li><a href="{:U('book','type',$cms_menu['book'][0]['id'],1)}"><p><i class="layui-icon layui-icon-template"  style="font-size: 20px"></i></p><p>小说</p></a></li>

    </ul>
</div>
<div class="layui-footer" style="margin-top: 24px;border-top:#fe6977 1px solid">
    <div class="qr-content">

        <div class="layui-row">
            <div class="layui-col-xs12" style="height: 56px;line-height: 56px;text-align: center">
                Copyright {cms_tj} &copy; {cms_title}
            </div>
        </div>
    </div>
</div>
</body>
</html>