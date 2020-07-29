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
<link href="{cms_template}/css/font-awesome.min.css" rel="stylesheet">
 </head>
 <body> 
  {include file="header.php"}


  <div id="container">


      {video_hot}
          <section class="sectionContent">
              <div class="videoGroup long newVideo">

                  <div id="new_cover" class="video-wrapper showMe">
                       {video_list:10}
                          <div class="col-style d-5 m-2">
                              <div class="userinfo">
                                  <span>{type_name}</span>
                              </div>
                              <a class="videoBox" href=" {list_view}">
                                  <div class="videoBox-content" data-vid="TIKC-031">
                                      <div class="videoBox-info">
                                          <span class="title">{list_name}</span>
                                      </div>
                                      <div class="videoBox-cover lazyLoad" style="background-image: url({list_pic});background-size: cover" ></div>
                                      <div class="collect glyphicon glyphicon-plus"></div>
                                      <div class="videoBox-bottom">
                                          <div class="videoBox-bar">
                                              <ul>
                                                  <li><i class="fa fa-eye"></i> {list_hit}</li>
                                                  <li><i class="fa fa fa-thumbs-o-up"></i>  {list_hit} </li>
                                                  <li><i class="fa fa fa-thumbs-o-down"></i> 踩</li>
                                              </ul>
                                          </div>
                                          <div class="tag_con">
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>
                       {/video_list}
                  </div>

              </div>
          </section>
          
      {/video_hot}


      
      {if $cms_config['live_status']=='1'}

          <section class="sectionContent">
              <div class="videoGroup long newVideo">

                  <div id="new_cover" class="video-wrapper showMe">
                      
                      {live_hot_list:12}


                          <div class="col-style d-5 m-2">
                              <div class="userinfo">
                                  <span>直播</span>
                              </div>
                              <a class="videoBox" href=" {list_view}">
                                  <div class="videoBox-content" data-vid="TIKC-031">
                                      <div class="videoBox-info">
                                          <span class="title"> {list_name} 正在直播哦，哥哥快来看看吧~</span>
                                      </div>
                                      <div class="videoBox-cover lazyLoad" style="background-image: url( {list_pic});" ></div>
                                      <div class="collect glyphicon glyphicon-plus"></div>
                                      <div class="videoBox-bottom">
                                          <div class="videoBox-bar">
                                              <ul>
                                                  <li><i class="fa fa-eye"></i>  {list_hit} </li>
                                                  <li><i class="fa fa fa-thumbs-o-up"></i>   {list_hit}</li>
                                                  <li><i class="fa fa fa-thumbs-o-down"></i> 踩</li>
                                              </ul>
                                          </div>
                                          <div class="tag_con">
                                          </div>
                                      </div>
                                  </div></a>
                          </div>
                      		 {/live_hot_list}

                  </div>
              </div>
          </section>
          
      {/if}



  </div>


 {include file="footer.php"}


 </body>
</html>

