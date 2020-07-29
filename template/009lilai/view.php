<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css?v=2201811021706" />
</head>
<body>
{include file="header.php"}

<main class="main wapper_wide" >

    
   
  <div class="flex_row">
            <div class="master">
                <div class="wapper_video">
				<div class="tempra_ad">
                    {cmsobj_content}
                </div>
                </div>
               <div class="video_des">
                    <div class="name"><p class="p">{cmsobj_name}</p><span class="span">  {cmsobj_hit} 次观看</span></div>
                    <div class="wapper_des">
                        <p class="p time">发布时间： {cmsobj_time}</p>
                        <p class="p category">分类： {cmsobj_typename}</p>
                    </div>
                    <div class="wapper_link">
                        <a class="link"  href="{cmsobj_view}">在线观看<i class="icon live"></i></a>
                        <a class="link" href="{cmsobj_view}" target="_blank">在线播放<i class="icon xianfeng"></i></a>
                        <a class="link" href="{cmsobj_view}" target="_blank">备用地址<i class="icon youbo"></i></a>
                                            </div>
                    <div id="videoBelow" class="propaganda"></div>

                </div>
            </div>
            <div class="aside">
    
    <div class="content">
<a class="showcase"><div class="div"><div class="img_wapper"><img class="img loadOffsetTop" src="{cms_template}/images/1.jpg"  data-offset-top="150"></div></div></a>
<a class="showcase"><div class="div"><div class="img_wapper"><img class="img loadOffsetTop" src="{cms_template}/images/2.jpg"  data-offset-top="150"></div></div></a>
 <a class="showcase"><div class="div"><div class="img_wapper"><img class="img loadOffsetTop" src="{cms_template}/images/3.jpg"  data-offset-top="150"></div></div></a>

    </div>
</div> <section class="section wapper_wide">

			{cms_banner_b}

    <h2 class="h2 iconfont icon_lastest" style="height:18px;">推荐视频 </h2> 
    <div class="content"> 
     <div class="flex_row">
         {video_list:10}
		  <a class="showcase" href=" {list_view}">
		   <div class="div"> 
			<div class="img_wapper"> <img class="img" src="{list_pic}"/> </div>
			<p class="des" title="{list_name}">{list_name}</p>
			<div class="sub_des"> <span class="icon_show iconfont">  {list_hit} </span> <span class="icon_time iconfont">{list_time}</span> </div>
		   </div> 
		  </a> 
				 {/video_list}
     </div> 
    </div> 
   </section> 
 

  </main> {include file="footer.php"}
</body>
</html>
