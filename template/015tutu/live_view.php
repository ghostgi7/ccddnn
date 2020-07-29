<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
  <link href="{cms_template}/css/app.css" rel="stylesheet" type="text/css" />
  <link href="{cms_template}/css/iconfont.css" rel="stylesheet" type="text/css" />
  <script src="{cms_template}/js/jquery.js"></script>
  <script src="{cms_template}/js/jquery.lazyload.js"></script>
  <script src="{cms_template}/js/home.js"></script>
</head>
<body>
{include file="header.php"}
  <div class="icon">
   <div class="container">
       <section class="iselect clearfix">
     <h2><em>本直播为实时直播！</em><i class="i_arrow"></i></h2>
    </section>
   
   
   <section class="iselect clearfix">
    <div class="container border0 bgnone shadownone">
     <div class="col-l">
      <div class="iplays">
          {cmsobj_content}
      </div>

     </div>
     <div class="col-r">
      <div class="tv-bd">
       <ul class="tv-playlist" id="ttest">
        <li><div class="v-pic"><img src="{cms_template}/images/zb.jpg" class="thumb"  original="{cms_template}/images/zb.jpg" /></div></li>
        <li><div class="v-pic"><img src="{cms_template}/images/zb1.jpg" class="thumb"  original="{cms_template}/images/zb1.jpg" /></div></li>
        <li><div class="v-pic"><img src="{cms_template}/images/zb2.jpg" class="thumb"  original="{cms_template}/images/zb2.jpg" /></div></li>
       </ul>
      </div>
     </div>
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