<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>
<body>
{include file="header.php"}
<main class="main wapper_wide" >


    <section class="section wapper_wide">

        {cms_banner_b}

    </section>
    <div class="flex_row">
            <div class="master">
                <div class="wapper_video">
				<div class="tempra_ad">{cmsobj_content}
                </div>
                </div>
               <div class="video_des">
                    <div class="name"><p class="p">本直播为实时直播！</p><span class="span">  {cmsobj_hit} 人在线</span></div>

                    <div id="videoBelow" class="propaganda"></div>

                </div>
            </div>
            <div class="aside">
    
    <div class="content">
<a class="showcase"><div class="div"><div class="img_wapper"><img class="img loadOffsetTop" src="{cms_template}/images/zb.jpg"  data-offset-top="150"></div><p class="des">{cms_title}</p></div></a>
<a class="showcase"><div class="div"><div class="img_wapper"><img class="img loadOffsetTop" src="{cms_template}/images/zb1.jpg"  data-offset-top="150"></div><p class="des">{cms_title}</p></div></a>
 <a class="showcase"><div class="div"><div class="img_wapper"><img class="img loadOffsetTop" src="{cms_template}/images/zb2.jpg"  data-offset-top="150"></div><p class="des">{cms_title}</p></div></a>
    </div>
</div>
 

  </main>{include file="footer.php"}
 
</body>
</html>