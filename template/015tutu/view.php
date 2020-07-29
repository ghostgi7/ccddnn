<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
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
  <div class="icon">
   <div class="container">
       <section class="iselect clearfix">
     <h2><em>正在播放：{cmsobj_name}</em><i class="i_arrow"></i></h2>
    </section>
   
   
   <section class="iselect clearfix">
    <div class="container border0 bgnone shadownone">
     <div class="col-l">
      <div class="iplays" style="height: 472px;">
 			{cmsobj_content}
      </div>

     </div>
     <div class="col-r">
      <div class="tv-bd">
       <ul class="tv-playlist" id="ttest">
        <li><div class="v-pic"><img src="{cms_template}/images/1.jpg" class="thumb"  original="{cms_template}/images/1.jpg" /></div></li>
        <li><div class="v-pic"><img src="{cms_template}/images/1.jpg" class="thumb"  original="{cms_template}/images/2.jpg" /></div></li>
        <li><div class="v-pic"><img src="{cms_template}/images/1.jpg" class="thumb"  original="{cms_template}/images/3.jpg" /></div></li>
       </ul>
      </div>
     </div>
    </div>
   </section>
 		<center>
			{cms_banner_b}
		</center>	  
        <section class="iselect clearfix">
     <h2><em>推荐视频</em><i class="i_arrow"></i></h2>
    </section>  
    <section class="select_con">
     <div class="v-bd clearfix">
      <div class="v_con_box">
       <ul class="tv-list clearfix">
		 	{video_list:20}
        <li>
         <div class="v-pic">
          <img src="{list_pic}" class="thumb" alt="{list_name}" original="{list_pic}" />
          <div class="v-tips">
           <span class="fl">{list_hit}</span>
           <span class="fr">{list_time}</span>
          </div>
          <a class="v-playBtn" href=" {list_view}" title="{list_name}"><i></i></a>
         </div>
         <div class="v-txt">
          <p class="v-tit"><a title="{list_name}" href=" {list_view}">{list_name}</a></p>
         </div></li>
		  {/video_list}
       </ul>

      </div>
     </div>
    </section>
	
    <div class="mided mided1 mt20"></div>
    <div class="mided mided2 mt0"></div>
    <div class="mided mided3 mt0"></div>
  </div>
  </div>


	
{include file="footer.php"}
 
</body>
</html>
