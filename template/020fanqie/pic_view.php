<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>
    {cms_title}
  </title>
  <meta name="keywords" content="{cms_keywords}" />
  <meta name="description" content="{cms_description}" />
    <link href="{cms_template}/css/style.css" rel="stylesheet">
    <link href="{cms_template}/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  {include file="header.php"}


  <div id="container">


    <section class="sectionContent">
      <div class="videoGroup long newVideo">
        <div class="section-title grayBorder">
          <h4 style="    margin: 0 auto;">
              {cmsobj_name}
          </h4>
        </div>
        <div id="new_cover" class="video-wrapper showMe">
            <div class="img-content">
                <p>
                    {cmsobj_content}
                </p>
            </div>
            <!--
            <div class='page-ctrl'>
              <a href="" class="prev">上一篇:<span>文章标题</span></a>
          
              <a href="" class="next">下一篇:<span>文章标题</span></a>
          </div>-->

        </div>
      </div>
    </section>
    
  </div>

  {include file="footer.php"}


</body>

</html>