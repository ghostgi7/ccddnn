<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
 </head>
 <body class="s-10-1">
 {include file="header.php"}
  <div id="main">
      {video_hot}
          <div class="caoporn_main">
              <div class="box980">
                  <div class="left600 new-vod">
                      <div class="caoporn_title">
                          <h2>{type_name}|公告： {cms_notice}</h2>
                      </div>
                      <ul class="index_video">
                         {video_list:8}
                              <li><a href=" {list_detail}" target="_blank"><img src="{list_pic}" alt="{list_name}" /><p><em>{list_time}</em><b>{type_name}</b></p><h3>{list_name}</h3></a></li>

                          		 {/video_list}		 </ul>
                  </div>
                  <div class="left370 new-art">
                      <div class="caoporn_title">
                          <h2 class="p0">{type_name}-文字推荐</h2>
                      </div>
                      <ul class="index_movie">



                          {video_list:14}
                              <li><a class="title2" href=" {list_detail}" target="_blank">{list_name}</a><span>[{list_time}]</span></li>
                          {/video_list}
                      </ul>
                  </div>
              </div>
          </div>
          
      {/video_hot}




      
      {if $cms_config['live_status']=='1'}

          <div class="caoporn_main">
              <div class="caoporn_Maincontentfive">
                  <div class="caoporn_mcfive_title">
                      <h2>直播频道</h2>
                  </div>
                  <div class="caoporn_mcfive_Ct">
                      <ul class="caoporn_video">

                          {live_hot_list:10}
                              <li><a href=" {list_view}" target="_blank"><h3> {list_name} </h3><img alt=" {list_name} " src=" {list_pic}" /><img class="hd" src="{cms_template}/images/hd.png" alt=" {list_name} " /><p><b>直播中</b></p><span></span></a></li>

                              


                          {/live_hot_list}

                      </ul>
                  </div>
              </div>
          </div>
          
      {/if}


   

  <div class="caoporn_main">
    <div class="caoporn_flink">
     <div class="caoporn_flink_title">
      <span>友情链接</span>
     </div>
     <div class="caoporn_flink_Ct">
      <ul>

	   {cms_link}

	  </ul>
     </div>
    </div>
   </div>
  </div>
{include file="footer.php"}
 </body>
</html>
