<div class="mm-content">
    <header class="header-container border_bootom">
        <div class="row" style="position: relative">
            <div><a href="/">
                    <div class="header_title size_xxxl c_pink" id="logoname">
                        <script>document.write(document.domain);</script>
                    </div>
                </a></div>
            <form action="">
                {cms_search}
                <input name="TXT" class="search-box" placeholder="搜索" onfocus="this.style.width = 'calc(100% - 48px)'" onblur="this.style.width = '42px'">
            </form>
        </div>
    </header>
    <style>
        .row-item{
            height: 44px;
            padding:8px 16px !important;
            box-sizing: content-box;
        }
        .type-title{
            width: 120px;
            font-size: 16px;
            text-align: center;
            display: inline-block;
            float: left;
        }
        .type-title span{
            display: block;
            width: 100%;
            height: 44px;
            line-height: 44px;
            background: #cd5c4e;
            color: #fff;
            border-radius: 8px;
        }
        .type-item{
            display: inline-block;
            width:calc(100% - 120px);
            height: 44px;
            line-height: 44px;
        }
        .type-item li{
            display: inline-block;
            width: 12.5%;
            text-align: center;
            font-size: 16px;
            float: left;
        }
        @media screen and (max-width: 768px){
            .type-title{
                width: 80px;
                font-size: 14px;
            }
            .type-item{
                display: inline-block;
                width:calc(100% - 80px);
                height: 22px;
                line-height: 22px;
            }
            .type-item li{
                width: 25%;
                font-size: 12px;
            }
        }
    </style>
    <div class="row">
        <div class="row-item  odd">
            <div class="type-title">
                <span>
                    在线电影
                </span>
            </div>
            <div class="type-item">
                    <ul>
                        {video_menu}
                        <li class="item"><a href="{menu_link}" target="_blank">{menu_name}</a></li>
                        {/video_menu}
                    </ul>
            </div>
        </div>

        <div class="row-item even ">
            <div class="type-title">
                <span>高清影院</span>
            </div>
            <div class="type-item">
                <ul>
                {hd_menu}
                <li class="item"><a href="{menu_link}" target="_blank">{menu_name}</a></li>
                {/hd_menu}
            </ul>
        </div>
        </div>
        <div class="row-item  odd">
            <div class="type-title">
                <span>图片系列</span>
            </div>
            <div class="type-item">
                <ul>
                {pic_menu}
                <li class="item"><a href="{menu_link}" target="_blank">{menu_name}</a></li>
                {/pic_menu}
            </ul>
        </div>
        </div>

        <div class="row-item even">
            <div class="type-title">
                <span>激情小说</span>
            </div>
            <div class="type-item">
                <ul>
                {book_menu}
                <li class="item"><a href="{menu_link}" target="_blank">{menu_name}</a></li>
                {/book_menu}
            </ul>

        </div>
        </div>

        <div class="row-item odd">
            <div class="type-title">
                <span>直播专区</span>
            </div>
            <div class="type-item">
                <ul>
                {live_menu}
                <li class="item"><a href="{menu_link}" target="_blank">{menu_name}</a></li>
                {/live_menu}
            </ul>

        </div>
        </div>
        <div class="row-item even">
            <div class="type-title">
                <span>棋牌专区</span>
            </div>
            <div class="type-item">
                <ul>
                <li class="item"><a href="javascript:;" target="_blank" style="color:#e66433;">网页发布</a></li>
                <li class="item"><a href="javascript:;" target="_blank">斗地主</a></li>
                <li class="item"><a href="javascript:;" target="_blank">百人牛牛</a></li>
                <li class="item"><a href="javascript:;" target="_blank">炸金花</a></li>
                <li class="item"><a href="javascript:;" target="_blank">德州朴克</a></li>
                <li class="item"><a href="javascript:;" target="_blank">二八杠</a></li>
                <li class="item"><a href="javascript:;" target="_blank">二人麻将</a></li>
                <li class="item"><a href="javascript:;" target="_blank">跑得快</a></li>
            </ul>

        </div>
        </div>

    </div>
    <div class="row">
        <!--顶部开始-->
        {cms_banner_a}
        <!--顶部结束-->
        <div class="alert alert-info" role="alert">公告：{cms_notice}</div>
    </div>
</div>

