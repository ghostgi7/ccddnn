<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
</head>
<body>
 {include file="header.php"}
 
 <div class="maxbox" style="margin-top:5px;">
     {video_hot}
         <div class="vodbox">
             <div class="indexbox">
                 <div class="title">{type_name}|公告： {cms_notice}</div>
                  {video_list:12}
                     <ul>
                         <a href="{list_view}"target="_blank"><img src="{list_pic}" width="217" height="134"/>
                             <h3>{list_name}</h3>
                             <span class="time"><font color="red">{list_time}</font></span></a>
                     </ul>
                 {/video_list}

             </div>
             <div class="indexright">
                 <div class="title">{type_name}-热门推荐</div>
                 {video_list:18}
                     <ul>
                         <li class="num">热</li>
                         <li class="tit"><a href="{list_view}"  target="_blank">{list_name}</a></li>

                     </ul>
                 {/video_list}
             </div>
         </div>
         <div style="clear:both"></div>
         
     {/video_hot}



     
     {if $cms_config['live_status']=='1'}

         <div class="vodbox">
             <div class="indexbox">
                 <div class="title">直播频道|公告： {cms_notice}</div>
                 
                {live_hot_list:12}
                     <ul>
                         <a href=" {list_view}"target="_blank"><img src=" {list_pic}" width="217" height="134"/>
                             <h3> {list_name} </h3>
                             <span class="time"><font color="red">直播中</font></span></a>
                     </ul>
                     


                 {/live_hot_list}
                 	 </div>
             <div class="indexright">
                 <div class="title">直播频道-热门推荐</div>
                 {live_hot_list:18}

                     <ul>
                         <li class="num">热</li>
                         <li class="tit"><a href=" {list_view}"  target="_blank">直播- {list_name} </a></li>

                     </ul>
                 {/live_hot_list}
             </div>
         </div>
         <div style="clear:both"></div>
         
     {/if}



</div>
<!--this one--> 
 <div class="maxbox" style="margin-top:5px;">
  <div class="vodbox"> 

    <!--友情链接-->
    <div class="web_list"> 
 {cms_link}

</div>
    
    <!--友情链接end--> 
  </div>
  <div style="clear:both"></div>
</div>

{include file="footer.php"}
</body>
</html>	
