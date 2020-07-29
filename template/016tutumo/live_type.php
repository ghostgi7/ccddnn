<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
	<title>{type_name} - {cms_title}</title>
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
  <div class="toped"></div>
   
  <div class="icon">
   <div class="container">

		     <div class="tv-hd">
      <h2 class="color-tit"><span>直播分类：{type_name}</span></h2>
     </div>
    <section class="select_con">

     <div class="v-bd clearfix">
      <div class="v_con_box">
       <ul class="tv-list clearfix">
	   
		{live_list:20}
        <li>
         <div class="v-pic">
          <img src=" {list_pic}" class="thumb" alt=" {list_name} " original=" {list_pic}" />
          <div class="v-tips">
           <span class="fl">  {list_hit} </span>
           <span class="fr">时时直播</span>
          </div>
          <a class="v-playBtn" href=" {list_view}" title=" {list_name} "><i></i></a>
         </div>
         <div class="v-txt">
          <p class="v-tit"><a title=" {list_name} " href=" {list_view}"> {list_name} </a></p>
         </div></li>
		 	{/live_list}	   	  </ul>
       <div class="v-page clearfix">
           <a href="{cms_page:first}">首页</a>
           <a href="{cms_page:prev}">上一页</a>
           <a href="javascript:;">共{cms_page:count}页</a>
           <a href="javascript:;">当前 {cms_page:current}页</a>
           <a href="{cms_page:next}">下一页</a>
           <a href="{cms_page:last}">尾页</a>
       </div>
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
