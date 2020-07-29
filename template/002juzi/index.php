<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>
            {cms_title}
      </title>
      <meta name="keywords" content="{cms_keywords}" />
      <meta name="description" content="{cms_description}" />
      <link href="{cms_template}/css/style.css" rel="stylesheet">
      <script src="{cms_template}/js/home.js"></script>
</head>

<body>
      <div class="main">
            {include file="header.php"}
            <section>
                  <div class="container">


                      {video_hot}
                          <div class="home-img-box">

                              <div class="category-count">
                                  <h3 class="title">
                                      {type_name}
                                  </h3>
                                  <a><span class="home-link"></span></a>
                              </div>
                              <div class="post-list">
                                  {video_list:8}
                                      <div class="col-md-3 col-sm-6 col-xs-6">
                                          <div class="video-item">
                                              <div class="featured-content-image">
                                                  <a href="{list_view}"
                                                     rel="bookmark">
                                                      <img class="lazy" src="{list_pic}" />
                                                      <div class="link-overlay"></div>
                                                  </a>
                                                  <span class="model-view">
                                                            {type_name}</span>
                                              </div>
                                          </div>
                                          <div class="entry-title">
                                              <a href="{list_view}"
                                                 rel="bookmark">
                                                  {list_name}</a>
                                              {list_time}
                                          </div>
                                      </div>
                                  {/video_list}

                              </div>

                              <div class="clearfix"></div>
                          </div>
                      {/video_hot}
                          
                      {if $cms_config['live_status']=='1'}

                          <div class="home-img-box">
                              <div class="category-count">
                                  <h3 class="title">直播推荐</h3>
                                  <a><span class="home-link"></span></a>
                              </div>
                              <div class="post-list">
                                  
                                  {live_hot_list:8}


                                      <div class="col-md-3 col-sm-6 col-xs-6">
                                          <div class="video-item">
                                              <div class="featured-content-image">
                                                  <a href=" {list_view}"
                                                     rel="bookmark">
                                                      <img class="lazy" src="{list_pic}" />
                                                      <div class="link-overlay"></div>
                                                  </a>
                                                  <span class="model-view">时时直播</span>
                                              </div>
                                          </div>
                                          <div class="entry-title">
                                              <a href=" {list_view}"
                                                 rel="bookmark">
                                                   {list_name} </a>
                                          </div>
                                      </div>

                                  {/live_hot_list}


                              </div>

                              <div class="clearfix"></div>
                          </div>
                          
                      {/if}
                  </div>
            </section>

            <footer>
                  <div class="footer-menu">
                        <div class="container">
                        </div>
                  </div>
                  <div class="footer">
                        <div class="container">
                              <div class="col-md-12">
                                    <div class="footer-item newest-keyword">
                                          <b style="color: #F99A16;">友情链接</b>
                                    </div>
                                    <div class="footer-item feature-list" style="border-top:1px solid #333333;">
                                          <div class="row" style="margin-top: 10px;">
                                                 {cms_link}</div>
                                    </div>
                                    {include file="footer.php"}
                              </div>
                              <div class="col-md-3"></div>
                        </div>
                  </div>
            </footer>
      </div>
</body>

</html>