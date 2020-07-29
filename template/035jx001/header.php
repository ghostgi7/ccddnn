<div class="stui-header__top clearfix">                 
    <div class="stui-header__logo">
        <a class="logo" href="/" style="background: url({cms_logo}) no-repeat;background-position: 100%;
    background-size: cover;"></a>
    </div>             
    <div class="stui-header__search">
         <form id="search" method="GET" action=""  >
            {cms_search}
            <input type="text" name="TXT" class="mac_wd form-control"  placeholder="请输入影片名或演员名"/>
            <button class="submit" id="searchbutton" type="submit" name="submit"></button>                        
        </form>
    </div>
    <ul class="stui-header__user hidden-xs">
        <li>
          {if $cms_config['user_status'] == '1'}
            <a  href="{:U('user','info',1,1)}">
              <i class="layui-icon layui-icon-user"></i><span>个人中心</span>
            </a>
          {/if}
        </li>       
    </ul>
</div>
<div class="stui-header__menu clearfix">
    <span class="more hidden-xs">Ctrl+D收藏本站</span>                 
<div class="nav">
<ul>
  <li><a href="/">首页</a></li>
  <li><a href="javascript:void(0)">在线视频</a>
    <table cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td>
            <ul>
                {video_menu}
                <li><a  href="{menu_link}">{menu_name}</a></li>
                {/video_menu}
            </ul>
      </td>
      </tr>
      </tbody>
    </table>
  </li>
  <li><a href="javascript:void(0)">高清影院
    </a>
    <table cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td>
            <ul>
            {hd_menu}
                <li><a  href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
          </ul>
      </td>
      </tr>
    </tbody></table>
  </li>
  <li><a href="javascript:void(0)">图片自拍 
    </a>
    <table cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td><ul>
            {pic_menu}
                <li><a href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}
          </ul></td>
      </tr>
    </tbody></table>
  </li>
  <li><a href="javascript:void(0)">小说阅读
    </a>
    <table cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td><ul>
            {book_menu}
                <li><a href="{menu_link}">{menu_name}</a></li>
            {/book_menu}
          </ul></td>
      </tr>
    </tbody></table>
  </li>
  {if $cms_config['live_status'] == '1'}
  <li><a href="javascript:void(0)">激情直播
    </a>
    <table cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td><ul>
            {live_menu}
                <li><a href="{menu_link}">{menu_name}</a></li>
            {/live_menu}
          </ul></td>
      </tr>
    </tbody></table>
  </li>
  {/if}
</ul>
</div>


</div>


        <!-- 导航 开始 -->
        <div class="nav-warp" >
            <ul class="nav">
                <li class="active"><a href="/" >首页</a></li>
                <li class="nav-parent"><a href="javascript:;" >在线视频</a></li>
                <li class="nav-parent"><a href="javascript:;" >高清影院</a></li>
                <li class="nav-parent"><a href="javascript:;" >图片自拍</a></li>
                <li class="nav-parent"><a href="javascript:;" >小说阅读</a></li>
                {if $cms_config['live_status'] == '1'}
                <li class="nav-parent"><a href="javascript:;" >激情直播</a></li>
                {/if}
            </ul>
            <div class="nav-child-box">
                <ul class="nav-child uk-margin-remove uk-clearfix">
                    {video_menu}
                    <li>
                        <a href="{menu_link}">{menu_name}</a>
                    </li>
                    {/video_menu}
                </ul>
                <ul class="nav-child uk-margin-remove uk-clearfix">
                    {hd_menu}
                    <li><a  href="{menu_link}">{menu_name}</a></li>
                    {/hd_menu}
                </ul>
                <ul class="nav-child uk-margin-remove uk-clearfix">
                    {pic_menu}
                    <li><a href="{menu_link}">{menu_name}</a></li>
                    {/pic_menu} 
                </ul>
                <ul class="nav-child uk-margin-remove uk-clearfix">
                    {book_menu}
                    <li><a href="{menu_link}">{menu_name}</a></li>
                    {/book_menu}
                </ul>
                {if $cms_config['live_status'] == '1'}
                <ul class="nav-child uk-margin-remove uk-clearfix">
                    {live_menu}
                    <li><a href="{menu_link}">{menu_name}</a></li>
                    {/live_menu}
                </ul>
                {/if}        
            </div>
            
        </div>
        <!-- 导航 结束 -->


<div class="partialViewSlider-outerwrapper">
    {cms_banner_a}
</div>
