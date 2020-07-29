<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" />
  <meta name="renderer" content="webkit" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <title>
      {cmsobj_name} - {cms_title}
  </title>
  <meta name="keywords" content="{cms_keywords}" />
  <meta name="description" content="{cms_description}" />
  <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>

<body>
  {include file="header.php"}

  <main class="main">
    <section class="section wapper_wide">

      <div class="content art-box">
          <h2 class="h2" style="height:18px;text-align: center;font-size: 22px;">
              {cmsobj_name}
          </h2>
          <div class="book-content">
              <p>
                  <span>{cmsobj_content}</span>
              </p>
          </div>
      </div>

    </section>


  </main>

  {include file="footer.php"}
</body>

</html>