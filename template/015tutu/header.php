  <div class="headed"></div>
  <header class="itopbar">
   <div class="container border0 bgnone shadownone">
    <h1 class="ilogo"><a href="/" title="logo"><img src="{cms_logo}" alt="{cms_title}" /><span>{cms_title}</span></a></h1>
    <nav class="mainnav">
     <a href="/" class="item cur">首页</a>
     <a href="javascript:;" class="item mainnav1" data-id="1">视频专区</a>
     <a href="javascript:;" class="item mainnav2" data-id="2">高清专区</a>
     <a href="javascript:;" class="item mainnav3" data-id="3">小说专区</a>
	 <a href="javascript:;" class="item mainnav4" data-id="4">图片专区</a>

        {if $cms_config['live_status']=='1'}
            
            <a href="javascript:;" class="item mainnav5" data-id="5">直播专区</a>

        {/if}
        

    </nav>
    <div class="sitenav  nav-article subnav1" data-id="1">
     <div class="nav-container">
		 <ul>
             {video_menu}
             <li> <a class="dl" href="{menu_link}">{menu_name}</a></li>
             {/video_menu}
		 </ul>
     </div>

    </div>
    <div class="sitenav nav-article subnav2" data-id="2">
     <div class="nav-container">
      <ul>
          {hd_menu}
          <li> <a class="dl" href="{menu_link}">{menu_name}</a></li>
          {/hd_menu}
      </ul>
     </div>
    </div>
    <div class="sitenav nav-article subnav3" data-id="3">
     <div class="nav-container">
      <ul>
          {book_menu}
          <li> <a class="dl" href="{menu_link}">{menu_name}</a></li>
          {/book_menu}
      </ul>
     </div>
    </div>
    <div class="sitenav nav-article subnav4" data-id="4">
     <div class="nav-container">
      <ul>
          {pic_menu}
          <li> <a class="dl" href="{menu_link}">{menu_name}</a></li>
          {/pic_menu}
      </ul>
     </div>
    </div>



       {if $cms_config['live_status']=='1'}
           
           <div class="sitenav nav-article subnav5" data-id="5">
               <div class="nav-container">
                   <ul>
                       {live_menu}
                           <li> <a class="dl" href="{menu_link}">{menu_name}</a></li>
                       {/live_menu}
                   </ul>
               </div>
           </div>

       {/if}
       
    <form name="formsearch" class="searchform"method="GET" autocomplete="off">
        {cms_search}
     <input class="ipt" placeholder="输入影片名或演员名" name="TXT" type="text" id="wd" required="" />
     <a href="javascript:" class="ibtn" title="搜索" onclick="$('.searchform').submit();"><i class="iconfont icon-sousuo"></i></a>
    </form>
		
   </div>
   
  </header>
  <div class="container" style="margin-bottom:auto;">

   <div class="public">
    <span class="pub mr0" id="pubLink"><a href="{cms_domain1}" style="color: #f00;">【发布地址1】</a><a href="{cms_domain2}"  style="color: #f00;">【发布地址2】</a></span>
   </div>
   <div class="notice">
    <marquee direction="left" behavior="scroll">公告： {cms_notice}</marquee>
   </div>
  </div>
<div class="container" style="margin-bottom:auto;">
{cms_banner_a}
 </div>
 
