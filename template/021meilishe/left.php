<ul class="sidebar navbar-nav d-none d-sm-block">
    <li class="nav-item active"> <a class="nav-link" href="/"> <i class="fas fa-fw fa-home"></i> <span>首页</span> </a> </li>
    <li class="nav-item"> <a class="nav-link prop" data="video"> <i class="fas fa-fw fa-play-circle"></i> <span>视频专区</span> </a> </li>
    <li class="nav-item"> <a class="nav-link prop" data="hd"> <i class="fas fa-fw fa-fire"></i> <span>高清专区</span> </a> </li>
    <li class="nav-item"> <a class="nav-link prop" data="book">  <i class="fas fa-fw fa-book"></i> <span>小说专区</span> </a> </li>
    <li class="nav-item"> <a class="nav-link prop" data="pic">  <i class="fas fa-fw fa-image"></i> <span>图片专区</span> </a> </li>
    {if $cms_config['live_status'] == '1'}
    <li class="nav-item"> <a class="nav-link prop" data="live"> <i class="fas fa-fw fa-video"></i> <span>直播专区</span> </a> </li>
    {/if}
</ul>