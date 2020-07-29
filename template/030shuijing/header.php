<header style="padding-top: 10px; padding-bottom: 15px;">
    <div class="smcms-wrap">
        <h1>
            <a href="/" class="header-title">{cms_title}</a>
        </h1>
        <div class="search-wrap" style="margin-top: -1.5px; display: block;">
            <form action="">
                {cms_search}
                <input type="text" name="TXT" id="searchInput">
                <button id="searchBtn" type="submit"><i class="layui-icon"></i></button>
                <button id="menuBtn" type="button"><i class="layui-icon layui-icon-shrink-right"></i></button>
            </form>

        </div>
    </div>
</header>
<div class="smcms-wrap" id="cats">
    <div class="group-box" style="background: rgba(190, 202, 238, 0.4);">

        <div class="cat-wrap">
            <a href="javascript:;" class="cat-title"><i class="layui-icon layui-icon-diamond"></i> 在线视频</a>
            {video_menu}
            <a class="cat-item" href="{menu_link}">{menu_name}</a>
            {/video_menu}

        </div>

        <div class="cat-wrap">
            <a href="javascript:;" class="cat-title"><i class="layui-icon layui-icon-diamond"></i> 高清影院</a>
            {hd_menu}
            <a class="cat-item" href="{menu_link}">{menu_name}</a>
            {/hd_menu}

        </div>

        <div class="cat-wrap">
            <a href="javascript:;" class="cat-title"><i class="layui-icon layui-icon-diamond"></i>&nbsp;小说阅读</a>
            {book_menu}
            <a class="cat-item" href="{menu_link}">{menu_name}</a>
            {/book_menu}
        </div>


        <div class="cat-wrap">
            <a href="javascript:;" class="cat-title"><i class="layui-icon layui-icon-diamond"></i>&nbsp;美图专区</a>
            {pic_menu}
            <a class="cat-item" href="{menu_link}">{menu_name}</a>
            {/pic_menu}
        </div>
        {if $cms_config['live_status'] == '1'}
            <div class="cat-wrap">
                <a href="javascript:;" class="cat-title"><i class="layui-icon layui-icon-diamond"></i>&nbsp;激情直播</a>
                {live_menu}
                <a class="cat-item" href="{menu_link}">{menu_name}</a>
                {/live_menu}
            </div>
        {/if}
        <div class="cat-wrap">
            <a href="javascript:;" class="cat-title"><i class="layui-icon layui-icon-diamond"></i>&nbsp;热门标签</a>

            <a class="cat-item" href="{key:淫穴}">淫穴</a>
            <a class="cat-item" href="{key:另类}">另类</a>
            <a class="cat-item" href="{key:全裸}">全裸</a>
            <a class="cat-item" href="{key:宅男}">宅男</a>
            <a class="cat-item" href="{key:医院}">医院</a>
            <a class="cat-item" href="{key:淑女}">淑女</a>
            <a class="cat-item" href="{key:姐姐}">姐姐</a>
            <a class="cat-item" href="{key:初恋}">初恋</a>
            <a class="cat-item" href="{key:女友}">女友</a>
            <a class="cat-item" href="{key:素人}">素人</a>
            <a class="cat-item" href="{key:灌醉}">灌醉</a>
            <a class="cat-item" href="{key:骚逼}">骚逼</a>
            <a class="cat-item" href="{key:长腿}">长腿</a>
            <a class="cat-item" href="{key:妹纸}">妹纸</a>
            <a class="cat-item" href="{key:嫩逼}">嫩逼</a>
            <a class="cat-item" href="{key:厕所}">厕所</a>
            <a class="cat-item" href="{key:无码}">无码</a>
            <a class="cat-item" href="{key:露脸}">露脸</a>
            <a class="cat-item" href="{key:纹身}">纹身</a>
            <a class="cat-item" href="{key:俱乐部}">俱乐部</a>
            <a class="cat-item" href="{key:电车}">电车</a>
            <a class="cat-item" href="{key:情趣}">情趣</a>
            <a class="cat-item" href="{key:淫水}">淫水</a>
            <a class="cat-item" href="{key:捆绑}">捆绑</a>
            <a class="cat-item" href="{key:C仔}">C仔</a>
            <a class="cat-item" href="{key:搭讪}">搭讪</a>
            <a class="cat-item" href="{key:自慰}">自慰</a>
            <a class="cat-item" href="{key:肤白}">肤白</a>
            <a class="cat-item" href="{key:表姐}">表姐</a>
            <a class="cat-item" href="{key:白丝}">白丝</a>
            <a class="cat-item" href="{key:约炮}">约炮</a>
            <a class="cat-item" href="{key:高挑}">高挑</a>
            <a class="cat-item" href="{key:后门}">后门</a>
            <a class="cat-item" href="{key:拜金女}">拜金女</a>
            <a class="cat-item" href="{key:透明}">透明</a>
        </div>

        <div class="cat-wrap">

            <a href="//{cms_domain1}" target="_blank" class="cat-title">发布地址1：{cms_domain1}</a>


            <a href="//{cms_domain2}" target="_blank" class="cat-title">发布地址2：{cms_domain2}</a>

        </div>

    </div>
    {cms_banner_a}
</div>
<style>
    .page_wrap{
        width: 100%;
        text-align: center;
        margin: 20px 0;
    }
    .page_wrap li{
        display: inline-block;
    }
    .page_wrap li a{
        padding: 5px 10px 4px 10px!important;
        display: inline-block;
        color: #ccc;
        font-size: 16px;
        line-height: 16px;
        border-radius: 2px;
    }
    .page_wrap li a i.layui-icon{
        color: #ddd;
        font-size: 16px;
        line-height: 16px;
        margin:0;
        padding:0;
    }
    .page_wrap li a.activepage{
        background-color: #1e9fff;
        color:#fff;
        cursor:not-allowed;
        margin-right: 5px;
        padding: 5px 15px 4px 15px!important;
    }
    .page_wrap li a.pageitem{
        background: rgba(99,99,99,0.2);
        margin-right: 5px;
        padding: 5px 15px 4px 15px!important;
    }
    .page_wrap .jump-btn{
        background-color: #1e9fff;
        color:#eee;
        cursor: pointer;
    }
    .page_wrap .jump-btn:hover,.page_wrap li a.pageitem:hover{
        background-color: red;
        color:#efefef;
    }
    .bluebg{
        background-color: #1e9fff;
    }
    .greybg{
        background-color: #999!important;
    }
    .images-wrap{
        color: #ccc;
        width: 98%;
        padding: 5px 1%;
    }
    .images-wrap img{
        width: 100%!important;
        margin-bottom: 10px;
    }
</style>