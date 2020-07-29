<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <link href="{cms_template}/css/app.css" rel="stylesheet" type="text/css" />
  <script src="{cms_template}/js/jquery.js"></script>
  <script src="{cms_template}/js/jquery.lazyload.js"></script>

  <script src="{cms_template}/js/home.js"></script>
</head>
<body>
{include file="header.php"}
  <div class="icon">
   <div class="container">

  	<div class="tv-hd">
      <h2 class="color-tit"><span>本直播为实时直播</span></h2>
     </div> 
   
   <section class="iplaytop">
    <div class="container border0 bgnone shadownone">
     <div class="col-l">
      <div class="iplays" style="height: 500px;">
          {cmsobj_content}
      </div>

     </div>

    </div>
		<div class="tv-hd">
      <h2 class="color-tit"><span>广告</span></h2>
     </div> 
   </section>
 		<center>
			{cms_banner_b}
		</center>	  

	
    <div class="mided mided1 mt20"></div>
    <div class="mided mided2 mt0"></div>
    <div class="mided mided3 mt0"></div>
  </div>
  </div>






{include file="footer.php"}
 
</body>
</html>