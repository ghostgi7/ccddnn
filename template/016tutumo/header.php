  <div class="headed"></div>
  <header class="itopbar">
   <div class="container">
   
    <div class="ilogo">
	
     <a href="/"><img src="{cms_logo}" alt="{cms_logo}" /><span>{cms_logo}</span></a>
    </div>

    <div class="opennav">
     <i></i>
    </div>
   </div>
   <div class="allnav">
    <div class="container subnav" data-id="1">
     <div class="nav-container">
	 
	 
	 
      <div class="subnavtit">
       <a href="javascript:;">视频专区</a>
      </div>
      <div class="subnavcon">
       <div class="item-wrap">
        <ul class="subnavline">
            {video_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/video_menu}
        </ul>
       </div>
      </div>
	  
      <div class="subnavtit">
       <a href="javascript:;">高清专区</a>
      </div>
      <div class="subnavcon">
       <div class="item-wrap">
        <ul class="subnavline">
            {hd_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/hd_menu}
        </ul>
       </div>
      </div>
      <div class="subnavtit">
       <a href="javascript:;">小说专区</a>
      </div>
      <div class="subnavcon">
       <div class="item-wrap">
        <ul class="subnavline">
            {book_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/book_menu}
        </ul>
       </div>
      </div>	  
      <div class="subnavtit">
       <a href="javascript:;">图片专区</a>
      </div>
      <div class="subnavcon">
       <div class="item-wrap">
        <ul class="subnavline">
            {pic_menu}
            <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
            {/pic_menu}
        </ul>
       </div>
      </div>

         {if $cms_config['live_status']=='1'}

             <div class="subnavtit">
                 <a href="javascript:;">直播专区</a>
             </div>
             <div class="subnavcon">
                 <div class="item-wrap">
                     <ul class="subnavline">
                         {live_menu}
                             <li> <a class="dd" href="{menu_link}">{menu_name}</a></li>
                         {/live_menu}
                     </ul>
                 </div>
             </div>

         {/if}


	  
     </div>
    </div>
    <div class="subnavfoot">
     收起菜单
    </div>
   </div>
  </header>
  <div class="toped"></div>
	
    <span class="pub mr0" id="pubLink"><h5><a href="{cms_domain1}" style="color: #f00;"><h1>【发布地址一】</a><a href="{cms_domain2}"  style="color: #f00;">【发布地址二】</a></h5></span>


<div class="container" style="margin-bottom:auto;">
{cms_banner_a}
 </div>
 
