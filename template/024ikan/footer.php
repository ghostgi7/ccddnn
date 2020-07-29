<div class="foot clearfix">
    <ul class="extra clearfix">
        <li><a class="backtop" href="javascript:scroll(0,0)" title="返回顶部"><span class="top_ico"><i class="iconfont">&#xe628;</i></span></a>
        </li>
        <li class="hidden_xs"><a class="mobil_q" href="javascript:void(0)" title="手机访问"><span class="m_ico"><i
                        class="iconfont">&#xe620;</i></span></a>
            <div class="sideslip">
                <div class="cans"></div>
                <div class="col_pd"><p class="qrcode"></p>
                    <p class="text_center">扫码用手机访问</p></div>
            </div>
        </li>
    </ul>
    <div class="hidden_xs fo_t"><p><i class="iconfont">&#xe635;</i>警告：如果您未滿18歲或您當地法律許可之法定年齡、或是對情色反感或是衛道人士建議您離開本站！ 本站歸類為限制級、限定為成年者已具有完整行為能力且願接受本站內影音內容、及各項條款之網友才可瀏覽，未滿18歲謝絕進入。</p>
        <p>本站已遵照「iWIN網路內容防護機構」進行分類，如有家長發現未成年兒童／少年瀏覽此站、請按照此方法過濾本站內容 >>『網站分級制度』</p>
        <p>{cms_title}&nbsp;联系邮箱：{cms_email}</p></div>
    <div class="hidden_mb fo_t"><p><i class="iconfont">&#xe635;</i>警告：如果您未滿18歲或您當地法律許可之法定年齡、或是對情色反感或是衛道人士建議您離開本站！ </p>
        <p>本站歸類為限制級、限定為成年者已具有完整行為能力且願接受本站內影音內容、及各項條款之網友才可瀏覽，未滿18歲謝絕進入。</p>
        <p>本站已遵照「iWIN網路內容防護機構」進行分類，如有家長發現未成年兒童／少年瀏覽此站、請按照此方法過濾本站內容 >>『網站分級制度』</p>
        <p>联系邮箱：{cms_email}&nbsp;我们将第一时间处理。</p></div>
    <style> .masked h5 {
            display: block;
            background-image: -webkit-linear-gradient(left, #3498db, #f47920 10%, #d71345 20%, #f7acbc 30%, #ffd400 40%, #3498db 50%, #f47920 60%, #d71345 70%, #f7acbc 80%, #ffd400 90%, #3498db);
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            background-size: 200% 100%;
            animation: masked-animation 4s infinite linear;
        }

        @keyframes masked-animation {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: -100% 0;
            }
        } </style>
</div>
<div class="history_pop"></div>
<div class="hide">
    {cms_tj}
</div>
<div class="foot_mnav hidden_mb">
    <ul class="foot_rows">
        <li class="foot_text"><a class="{if $cms_controller == 'index'}active{/if}" href="/"><i class="iconfont">&#xe634;</i><span
                    class="foot_font">首页</span></a></li>
        <li class="foot_text"><a class="{if $cms_controller == 'vod'}active{/if}" href="{:U('vod','type',$cms_menu['vod'][0]['id'],1)}"><i class="iconfont">&#xe64a;</i><span
                    class="foot_font">电影</span></a></li>
        <li class="foot_text"><a class="{if $cms_controller == 'pic'}active{/if}" href="{:U('pic','type',$cms_menu['pic'][0]['id'],1)}"><i class="iconfont">&#xe648;</i><span
                    class="foot_font">图片</span></a></li>
        <li class="foot_text"><a class="{if $cms_controller == 'book'}active{/if}" href="{:U('book','type',$cms_menu['book'][0]['id'],1)}"><i class="iconfont">&#58926;</i><span
                    class="foot_font">小说</span></a></li>
        {if $cms_config['live_status'] == '1'}
        <li class="foot_text"><a class="{if $cms_controller == 'live'}active{/if}" href="{:U('live','type',$cms_config['live'],'1')}"><i class="iconfont">&#xe649;</i><span
                        class="foot_font">直播</span></a></li>
        {/if}
    </ul>
</div>
<div id="show" style="display: none;">
    <div class="copy-tip"><p>耶～～复制成功</p></div>
</div>
<div class="jq_content" style="display: none;"><input id="wx_name" value="扫码手机观看">
    <input id="shareurl" value="">
    <input id="site_wxewmtext" value="亲，扫描上方二维码，跟我一起看大片"></div>
<script type="text/javascript" src="{cms_template}/static/js/jquery.stem.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/scroll.stem.js"></script>