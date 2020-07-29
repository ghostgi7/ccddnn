<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0" name="viewport" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<title>{cms_title}</title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />
<link href="{cms_template}/css/style.css" rel="stylesheet">
 </head> 
 <body> 
  {include file="header.php"}


  <div id="container">
      {video_hot}
          <section class="sectionContent">
              <div class="videoGroup long newVideo">
                  <div class="section-title grayBorder">
                      <h2>{type_name}</h2>
                  </div>
                  <div id="new_cover" class="video-wrapper showMe">
                       {video_list:10}
                          <div class="col-style d-5 m-2">
                              <a class="videoBox" href=" {list_view}">
                                  <div class="videoBox-content" data-vid="TIKC-031">
                                      <div class="videoBox-cover lazyLoad" style="background-image: url({list_pic});" ></div>
                                      <div class="collect glyphicon glyphicon-plus"></div>
                                      <div class="videoBox-bottom">
                                          <div class="videoBox-time">
                                              {list_time}
                                          </div>
                                          <div class="tag_con">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="videoBox-info">
                                      <h4 class="title">{list_name}</h4>
                                  </div> </a>
                          </div>
                       {/video_list}
                  </div>
              </div>
          </section>

      {/video_hot}
      





      {if $cms_config['live_status']=='1'}
          
          <section class="sectionContent">
              <div class="videoGroup long newVideo">
                  <div class="section-title grayBorder">
                      <h2>直播推荐</h2>
                  </div>
                  <div id="new_cover" class="video-wrapper showMe">

                      {live_hot_list:10}
                          <div class="col-style d-5 m-2">
                              <a class="videoBox" href=" {list_view}">
                                  <div class="videoBox-content" data-vid="TIKC-031">
                                      <div class="videoBox-cover lazyLoad" style="background-image: url({list_pic});" ></div>
                                      <div class="collect glyphicon glyphicon-plus"></div>
                                      <div class="videoBox-bottom">
                                          <div class="videoBox-time">
                                              直播频道
                                          </div>
                                          <div class="tag_con">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="videoBox-info">
                                      <h4 class="title"> {list_name} </h4>
                                  </div> </a>
                          </div>
                      		 {/live_hot_list}

                  </div>
              </div>
          </section>

      {/if}
      


  </div> 
  <footer id="footer"> 
   <div class="footer-container"> 
    <div class="footer-upper"> 
     <div class="ft_partner">
       友情链接： <ul> {cms_link}</ul>
     </div> 
    </div> 

   </div> 
  </footer> 

 {include file="footer.php"}


 </body>
</html>

