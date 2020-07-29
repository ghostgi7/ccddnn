<!DOCTYPE html>
<html lang="zh-CN">
 <head>
    <meta charset="utf-8" />
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
  <link href="{cms_template}/css/app.css" rel="stylesheet" type="text/css" />
  <link href="{cms_template}/css/iconfont.css" rel="stylesheet" type="text/css" />
  <script src="{cms_template}/js/jquery.js"></script>
  <script src="{cms_template}/js/jquery.lazyload.js"></script>

  <script src="{cms_template}/js/home.js"></script>


 </head>
 <body>
 {include file="header.php"}


  <div class="toped"></div>
  <div class="icon">
      {video_hot}
          <div class="container">
              <section class="imain clearfix">
                  <div class="col-l">
                      <div class="tv-hd">
                          <h2><img class="iconf home_icon1" src="{cms_template}/images/zhanzhang.png" />{type_name}</h2>
                          <div class="imore">
                              <a href="{type_more}">更多<i class="iconfont icon-double-right"></i></a>
                          </div>
                      </div>
                      <div class="tv-bd a_clist col_body">
                          <ul class="tv-list tv-featured aj_item_commend">
                               {video_list:15}
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
                      </div>
                  </div>
                  <div class="col-r">
                      <div class="tv-hd">
                          <h2>{type_name} • 推荐</h2>
                      </div>
                      <div class="tv-bd">
                          <ul class="v-rank clearfix">
                               {video_list:12}
                                  <li><i class="i-rank_num">火</i><em class="v-num">推荐</em><span class="v-tit"><a href=" {list_view}" title="{list_name}">{list_name}</a></span></li>
                              		 {/video_list}
                          </ul>
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </section>
          </div>
          
      {/video_hot}
      


      
      {if $cms_config['live_status']=='1'}
          
          <div class="container">
              <section class="imain clearfix">
                  <div class="col-l">
                      <div class="tv-hd">
                          <h2><img class="iconf home_icon1" src="{cms_template}/images/zhanzhang.png" />直播频道</h2>
                          <div class="imore">
                              <a href="{type_more}">更多<i class="iconfont icon-double-right"></i></a>
                          </div>
                      </div>
                      <div class="tv-bd a_clist col_body">
                          <ul class="tv-list tv-featured aj_item_commend">
                              

                              {live_hot_list:15}

                                  

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
                      </div>
                  </div>
                  <div class="col-r">
                      <div class="tv-hd">
                          <h2>直播 • 推荐</h2>
                      </div>
                      <div class="tv-bd">
                          <ul class="v-rank clearfix">
                              

                              {live_hot_list:12}

                                  
                                  <li><i class="i-rank_num">火</i><em class="v-num">推荐</em><span class="v-tit"><a href=" {list_view}" title=" {list_name} "> {list_name} </a></span></li>
                                  


                              {/live_hot_list}
                              

                          </ul>
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </section>
          </div>
          
      {/if}
      










 </div>
  <div class="container">
    <h3 class="f-h3">友情链接</h3>
    <ul class="f-links">
		 {cms_link}
    </ul>
   <div class="prevlink"></div>
  </div>

{include file="footer.php"}
 </body>
</html>
