<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
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
       <section class="iselect clearfix">
     <h2><em>正在播放：{cmsobj_name}</em><i class="i_arrow"></i></h2>
    </section>
   
   
   <section class="iplaytop">
    <div class="container border0 bgnone shadownone">
     <div class="col-l">
      <div class="iplays" style="height: 230px;">
 			{cmsobj_content}
      </div>

     </div>

    </div>
   </section>
 		<center>
			{cms_banner_b}
		</center>	  
        <section class="iselect clearfix">
   <div class="tv-hd v-border"><h2><span>猜你喜欢</span></h2></div>
    </section>  
    <section class="select_con">
     <div class="v-bd clearfix">
      <div class="v_con_box">
       <ul class="tv-list clearfix">
		 	{video_list:10}
        <li>
         <div class="v-pic">
          <img src="{list_pic}" class="thumb" alt="{list_name}" original="{list_pic}" />
          <div class="v-tips">
           <span class="fl"> {list_hit}</span>
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
