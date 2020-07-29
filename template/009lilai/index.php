<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
 </head> 
 <body> 
 {include file="header.php"}

  <main class="main">
      {video_hot}
          <section class="section wapper_wide">
              <h2 class="h2 iconfont icon_lastest" style="height:18px;"> {type_name} <a class="link iconfont icon_more2" href="/?m=vod-type-5-0.html">更多</a> </h2>
              <div class="content">
                  <div class="flex_row">
                       {video_list:10}
                          <a class="showcase" href=" {list_view}">
                              <div class="div">
                                  <div class="img_wapper"> <img class="img" src="{list_pic}"/> </div>
                                  <p class="des" title="{list_name}">{list_name}</p>
                                  <div class="sub_des"> <span class="icon_show iconfont">  {list_hit} </span> <span class="icon_time iconfont">{list_time}</span> </div>
                              </div>
                          </a>
                      		 {/video_list}
                  </div>
              </div>
          </section>

      {/video_hot}




      {if $cms_config['live_status']=='1'}

          <section class="section wapper_wide">
              <h2 class="h2 iconfont icon_lastest" style="height:18px;">直播专区 <a class="link iconfont icon_more2" href="/?m=zhibo-type-24-1.html">更多</a> </h2>
              <div class="content">
                  <div class="flex_row">
                      {live_hot_list:10}
                          <a class="showcase" href=" {list_view}">
                              <div class="div">
                                  <div class="img_wapper"> <img class="img" src=" {list_pic}"/> </div>
                                  <p class="des" title=" {list_name} "> {list_name} </p>
                                  <div class="sub_des"> <span class="icon_show iconfont">  {list_hit} </span> <span class="icon_time iconfont">时时直播</span> </div>
                              </div>
                          </a>



                      {/live_hot_list}



                  </div>
              </div>
          </section>

      {/if}


   
<!--
 友情链接预留调用方式：链接=友联URL  标题=友联名称
-->   
    
    <section class="section wapper_wide">
          <h2 class="h2 iconfont icon_lastest" style="height:18px;">友情链接</h2> 
          <ul class="f-links">
		       {cms_link}
          </ul>
    </section>




  </main> 

{include file="footer.php"}
 </body>
</html>
