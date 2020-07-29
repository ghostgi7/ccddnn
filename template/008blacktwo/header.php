<header id="header">
    <nav class="nav-first container-fluid">
        <div class="container">
            <div class="row">
                <div click="redirect" data-href="/" class="brand text-center col-10 d-flex align-item-center cursor-p">
                    <a href="/"> <img src="{cms_logo}" style="width:200px;height:50px"></a>
                </div>
                <div class="col-28 d-flex justify-content-center align-item-center search-box">
                    <form method="GET" class="search-form form px-0 d-flex justify-content-end align-items-center">
                        {cms_search}
                        <div class="input-group">
                            <input name="TXT" class="form-control" type="search" value="">
                            <div class="input-group-append cursor-p" needAuth>
                                <button class="input-group-text" type="submit"><i class="border-0 fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="user-option col-12 d-flex justify-content-end align-items-center">
                    <a href="{cms_domain1}"><button class="login-btn btn btn-sm btn-outline-secondary ml-3">发布地址一</button></a>
                    <a href="{cms_domain2}"><button class="login-btn btn btn-sm btn-outline-secondary ml-3">发布地址二</button></a>
                </div>

            </div>

        </div>
    </nav>
    <div class="nav-box">
        <div class="nav-left">
            <nav class="nav-second container">
                <ul class="nav mr-auto">
                    <li class="nav-item"><a class="nav-link d-flex align-items-center " href="/">高清专区</a></li>
                    {hd_menu}
                    <li class="nav-item"> <a class="nav-link d-flex align-items-center " href="{menu_link}">{menu_name}</a></li>
                    {/hd_menu}
                </ul>
            </nav>
            
            {if $cms_config['live_status']=='1'}

                <nav class="nav-second container">
                    <ul class="nav mr-auto">
                        <li class="nav-item"><a class="nav-link d-flex align-items-center " href="/">直播专区</a></li>
                        {live_menu}
                            <li class="nav-item"> <a class="nav-link d-flex align-items-center " href="{menu_link}">{menu_name}</a></li>
                        {/live_menu}
                    </ul>
                </nav>
                
           {/if}


            <nav class="nav-second container">
                <ul class="nav mr-auto">
                    <li class="nav-item"><a class="nav-link d-flex align-items-center " href="/">视频专区</a></li>
                    {video_menu}
                    <li class="nav-item"> <a class="nav-link d-flex align-items-center " href="{menu_link}">{menu_name}</a></li>
                    {/video_menu}
                </ul>

            </nav>

            <nav class="nav-second container">
                <ul class="nav mr-auto">
                    <li class="nav-item"><a class="nav-link d-flex align-items-center " href="/">小说专区</a></li>
                    {book_menu}
                    <li class="nav-item"> <a class="nav-link d-flex align-items-center " href="{menu_link}">{menu_name}</a></li>
                    {/book_menu}
                </ul>
            </nav>
            <nav class="nav-second container">
                <ul class="nav mr-auto">
                    <li class="nav-item"><a class="nav-link d-flex align-items-center " href="/">图片专区</a></li>
                    {pic_menu}
                    <li class="nav-item"> <a class="nav-link d-flex align-items-center " href="{menu_link}">{menu_name}</a></li>
                    {/pic_menu}
                </ul>
            </nav>

        </div>
    </div>
    <div class="msg">
        <i class="icon iconfont icon-gonggao"></i>
        <div class="marquee ">
            <p>{cms_notice}</p>
        </div>
    </div>
</header>


<center style="max-width: 1200px;margin: 1.5rem auto .5rem;">
    	{cms_banner_a}
</center>