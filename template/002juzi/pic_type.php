<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>
            {cms_title}--图片列表
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
                        <div class="home-img-box">

                              <div class="category-count">
                                    <h3 class="title">
                                          图片专区-{type_name}
                                    </h3>
                                    <a><span class="home-link"></span></a>
                              </div>
                              <div class="post-list">
                                    <ul class="art-list">
                                          {pic_list:20}
                                          <li>
                                                <p>
                                                      <a href="{list_view}" target="_blank">
                                                      {list_name}
                                                      </a>
                                                </p>
                                                <span>{list_time}</span>
                                          </li>
                                          {/pic_list}
                                    </ul>
                              </div>

                              <!-- 分页 --> 
                              <nav style="display: flex; justify-content: center;">
                                    <ul class="pagination">
                                        <li><a href="{cms_page:first}">首页</a></li>
                                        <li><a href="{cms_page:prev}">上一页</a></li>
                                        <li><a href="javascript:;">共{cms_page:count}页</a></li>
                                        <li><a href="javascript:;">当前第{cms_page:current}页</a></li>
                                        <li><a href="{cms_page:next}">下一页</a></li>
                                        <li><a href="{cms_page:last}">尾页</a></li>
                                    </ul>
                              </nav>

                              <div class="clearfix"></div>
                        </div>
                  </div>
            </section>

            <footer>
                  <div class="footer">
                        <div class="container">
                              <div class="col-md-12 uk-margin-top">
                                    {include file="footer.php"}
                              </div>
                        </div>
                  </div>
            </footer>
      </div>
</body>

</html>