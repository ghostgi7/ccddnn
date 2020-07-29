<link href="https://cdn.bootcss.com/app-loading/0.0.51/app-loading.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/app-loading/0.0.51/app-loading.min.js"></script>
<script>
  if(/webOS|iPhone|iPad|iPod/i.test(navigator.userAgent)){
    document.addEventListener('click',function(event){
      noddy=event.target;
      while(noddy.nodeName!=='A'&& noddy.nodeName!=='HTML')
        noddy=noddy.parentNode;
      if('href' in noddy && noddy.href.indexOf('http')!==-1 && noddy.href.indexOf(document.location.host)!==-1){
        event.preventDefault();
        appLoading.start('#fe6977');
        document.location.href=noddy.href;
        setTimeout(function () {
          appLoading.stop();
        },8000);
      }
    },false);
    document.addEventListener('touchstart',function(event){
      touch = event.touches[0];
      clientX = touch.clientX;
      clientY = touch.clientY;
    })
    document.addEventListener('touchend',function(event){
      touch = event.changedTouches[0];
      X = touch.clientX-clientX;
      Y = touch.clientY-clientY;
      Y = Math.abs(Y);
      if(X>50&&Y<20&&location.search!=""&&!!history.go(-1)){
        appLoading.start('#fe6977');
        setTimeout(function () {
          appLoading.stop();
        },8000);
      }

    })
  }

</script>
<header id="header">
<!--  <div class="header-container">
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
  </div>-->
   {if $cms_controller =='index' || $cms_controller == 'search'}
  <nav class="path_bar">
    <div class="word_wrapper">
      <ul class="menu_container">
        <li class="menu_items active"> <a class="type gold" href="/">首页</a></li>
        {hd_menu}
        <li class="menu_items"> <a class="type gold" href="{menu_link}">{menu_name}</a></li>
          {/hd_menu}
      </ul>
    </div>
  </nav>
   {else}

      <nav class="path_bar">
          <div class="word_wrapper">
              <ul class="menu_container">

                  {loop $cms_menu[$cms_controller]}
                      <li class="menu_items  {if $K == '0'}active{/if}"> <a class="type gold" href="{:U($cms_controller,'type',$V['id'],'1')}">{$V[name]}</a></li>
                  {/loop}
              </ul>
          </div>
      </nav>

  {/if}






<div class="search"><i class="fa fa-search"></i></div>

</header>
<div class="search-box">
  <form id="search">
      {cms_search}
    <input type="text" name="TXT" class="search-input" placeholder="请输入影片名或演员名">
  </form>
</div>
<script>
  document.querySelector(".search").addEventListener("click",function () {
    document.querySelector(".search-box").classList.toggle("active");
  })
  document.querySelector(".search-input").addEventListener("keydown",function (e) {
    if (e.keyCode==13){
      document.querySelector("#search").submit();
    }
  })
</script>
{cms_banner_a}