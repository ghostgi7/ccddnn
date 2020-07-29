<header class="sidebar">
  <div class="container">
    <div class="logo">
      <a href="/" title="{cms_title}"><img src="{cms_logo}" alt="{cms_title}" /></a>
    </div>
    <div class="form-search">
      <form role="search" id="search" name="search" method="get">
          {cms_search}
        <div class="input-group">
          <input type="text" name="TXT" class="form-control input-sm keyword" placeholder="搜索..." autocomplete="off"
            value="" />
          <span class="input-group-btn"><button type="submit" class="btn btn-sm btn-search" style="outline: 0;"><span
                class="glyphicon glyphicon-search"></span></button></span>
        </div>
      </form>
    </div>

  </div>
  <div class="nav-main container">
    <div class="header-links header-item">
      <ul class="nav" id="nav">
        <li class='Home cusfont'><a rel="tag" href="javascript:;"><span>视频专区</span></a></li>
        <li class='Home cusfont'><a rel="tag" href="javascript:;"><span>高清专区</span></a></li>
        <li class='Home cusfont'><a rel="tag" href="javascript:;"><span>小说专区</span></a></li>
        <li class='Home cusfont'><a rel="tag" href="javascript:;"><span>图片专区</span></a></li>
        {if $cms_config['live_status']=='1'}
            <li class='Home cusfont'><a rel="tag" href="javascript:;"><span>直播专区</span></a></li>
        {/if}

        <div class="header-mobile">
          <button type="button" class="show-sidebar-left"><i class="glyphicon glyphicon-menu-hamburger"></i></button>
          <a href="/"><img src="{cms_logo}"></a>
        </div>
        <div class="overlay"></div>
      </ul>

      <div class="subnav" id="sub_nav"> 
        <ul class="subnav_ul">
          {video_menu}
          <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/video_menu}
        </ul>
        <ul class="subnav_ul">
          {hd_menu}
          <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
        </ul>
        <ul class="subnav_ul">
          {book_menu}
          <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/book_menu}
        </ul>
        <ul class="subnav_ul">
          {pic_menu}
          <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}
        </ul>
          {if $cms_config['live_status']=='1'}
              <ul class="subnav_ul">
                  {live_menu}
                      <li> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                  {/live_menu}
              </ul>
          {/if}

      </div>
    </div>
  </div>
</header>


<section>

  <div class="container">
    <div class="home-img-box">
      <div class="category-count">
        <h3 class="title">公告：
          {cms_notice}
        </h3>
        <div class="btn-group">
          <a href="{cms_domain1}">发布地址一</a>
          <a href="{cms_domain2}">发布地址二</a>
        </div>
      </div>
      
    </div>
    
  </div>
    <div class="container">
        {cms_banner_a}
    </div>
</section>