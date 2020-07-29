<header id="header">
  <div class="header-container">
    <div class="logo_switch">
      <a href="/" class="header_link"> <span class="header_logo cn" style="background-image: url({cms_logo});}"></span>
      </a>
    </div>

    <div class="global_language" style="color: #F6A623;">公告：
      {cms_notice}
    </div>
    <div class="login_menu"> <a id="jav_login" href="{cms_domain1}" class="login-button"> <span class="link">发布地址一</span>
      </a> </div>
    <div class="login_menu"><a id="jav_login" href="{cms_domain2}" class="login-button"> <span class="link">发布地址二</span>
      </a> </div>
  </div>

  <nav class="path_bar">
    <div class="word_wrapper">
      <ul class="menu_container">
        <li class="menu_items"> <a class="type gold" href="/">高清专区</a></li>
        {hd_menu}
        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/hd_menu}
      </ul>
      <div class="arrow_right_mobile"></div>
    </div>
  </nav>


    {if $cms_config['live_status']=='1'}
        
        <nav class="path_bar">
            <div class="word_wrapper">
                <ul class="menu_container">
                    <li class="menu_items"> <a class="type gold" href="/">直播专区</a></li>
                    {live_menu}
                        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
                    {/live_menu}
                </ul>
                <div class="arrow_right_mobile"></div>
            </div>
        </nav>

    {/if}
    


  <nav class="path_bar">
    <div class="word_wrapper">
      <ul class="menu_container">
        <li class="menu_items"> <a class="type gold" href="/">视频专区</a></li>
        {video_menu}
        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/video_menu}

        
      </ul>
      <div class="arrow_right_mobile"></div>
    </div>
  </nav>



  <nav class="path_bar">
    <div class="word_wrapper">
      <ul class="menu_container">
        <li class="menu_items"> <a class="type gold" href="/">小说专区</a></li>
        {book_menu}
        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/book_menu}
      </ul>
      <div class="arrow_right_mobile"></div>
    </div>
  </nav>
  <nav class="path_bar">
    <div class="word_wrapper">
      <ul class="menu_container">
        <li class="menu_items"> <a class="type gold" href="/">图片专区</a></li>
        {pic_menu}
        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/pic_menu}
      </ul>
      <div class="arrow_right_mobile"></div>
    </div>
  </nav>


  {cms_banner_a}

</header>