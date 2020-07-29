<!DOCTYPE html>
<html>

<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>
            {cms_title}--图片内容
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

                              <div class="category-count" style="text-align:center;">
                                    <h3 class="title">
                                          {cmsobj_name}
                                    </h3>
                                    <a><span class="home-link"></span></a>
                              </div>
                              <div class="post-list">
                                    <div class="img-content">
                                                <span>
                                                      {cmsobj_content}
                                                </span>
                                    </div>
                              </div>

                              

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