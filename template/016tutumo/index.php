<!DOCTYPE html>
<html lang="zh-CN">
 <head>
  <meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <link href="{cms_template}/css/app.css" rel="stylesheet" type="text/css" />
  <script src="{cms_template}/js/jquery.js"></script>
  <script src="{cms_template}/js/jquery.lazyload.js"></script>

  <script src="{cms_template}/js/home.js"></script>
 </head>
 <body>
 {include file="header.php"}
  <div class="icon">
   <div class="container">

       {video_hot}
           <section class="imain clearfix">
               <div class="tv-hd">
                   <h2 class="color-tit"><span>{type_name}</span></h2>
               </div>
               <div class="tv-bd a_clist">
                   <div class="aclcon1">
                       <div class="tv-r">
                           <ul class="tv-list aj_item_commend">


                                {video_list:12}
                                   <li class="aj_item">
                                       <div class="v_pic v-pic1">
                                           <img src="{list_pic}" class="thumb aj_img" alt="{list_name}" />
                                           <a href=" {list_view}" title="{list_name}" class="v-playBtn aj_link"><i></i></a>
                                       </div>
                                       <div class="v-txt">
                                           <span class="v-tit"><a class="aj_tit" href=" {list_view}" title="{list_name}">{list_name}</a></span>
                                       </div></li>
                               		 {/video_list}



                           </ul>

                           <div class="list-tags list-video-tags"></div>
                       </div>
                   </div>
               </div>
           </section>

       {/video_hot}
       


       {if $cms_config['live_status']=='1'}
           
           <section class="imain clearfix">
               <div class="tv-hd">
                   <h2 class="color-tit"><span>直播推荐</span></h2>
               </div>
               <div class="tv-bd a_clist">
                   <div class="aclcon1">
                       <div class="tv-r">
                           <ul class="tv-list aj_item_commend">



                               {live_hot_list:10}

                                   

                                   <li class="aj_item">
                                       <div class="v_pic v-pic1">
                                           <img src="  {list_pic}" class="thumb aj_img" alt=" {list_name} " />
                                           <a href=" {list_view}" title=" {list_name} " class="v-playBtn aj_link"><i></i></a>
                                       </div>
                                       <div class="v-txt">
                                           <span class="v-tit"><a class="aj_tit" href=" {list_view}" title=" {list_name} "> {list_name} </a></span>
                                       </div></li>



                               {/live_hot_list}
                               



                           </ul>

                           <div class="list-tags list-video-tags"></div>
                       </div>
                   </div>
               </div>
           </section>

       {/if}
       


	
	  <div class="container" style="padding:0; margin-top: 15px;">
        <h3 class="f-h3">友情链接</h3>
        <ul class="f-links">
			{cms_link}
        </ul>


   <div class="prevlink"></div>
  </div>
	
  </div>
  </div>


{include file="footer.php"}
 </body>
</html>
