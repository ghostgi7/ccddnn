<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0" name="viewport" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<title>{cms_title}</title>
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
     <div id="new_cover" class="video-wrapper showMe">
	{live_list:20}
         <div class="col-style d-5 m-2">
             <div class="userinfo">
                 <img src=" {list_pic}" alt="">
                 <span> {list_name} </span>
             </div>
             <a class="videoBox" href=" {list_view}">
                 <div class="videoBox-content" data-vid="TIKC-031">
                     <div class="videoBox-info">
                         <span class="title">我正在直播哦，哥哥快来看我吧~</span>
                     </div>
                     <div class="videoBox-cover lazyLoad" style="background-image: url( {list_pic});" ></div>
                     <div class="collect glyphicon glyphicon-plus"></div>
                     <div class="videoBox-bottom">
                         <div class="videoBox-bar">
                             <ul>
                                 <li><i class="fa fa-eye"></i> {list_hit}</li>
                                 <li><i class="fa fa fa-thumbs-o-up"></i>{list_hit}</li>
                                 <li><i class="fa fa fa-thumbs-o-down"></i> 踩</li>
                             </ul>
                         </div>
                         <div class="tag_con">
                         </div>
                     </div>
                 </div></a>
         </div>
          {/live_list}
     </div> 
	 
    </div>
	
  </section>
  <!--分页样式-->
    <div class="pagenation" style="margin-top: 4px;">
        <p>
            <a href="javascript:;">共{cms_page:count}页</a>
            <a href="javascript:;">当前第{cms_page:current}页</a>
        </p>
        <p>
            <a href="{cms_page:first}">首页</a>
            <a href="{cms_page:prev}">上一页</a>
            <a href="{cms_page:next}">下一页</a>
            <a href="{cms_page:last}">尾页</a>
        </p>
    </div>
    <!--分页样式-->
</div> 

 
{include file="footer.php"}
</body>
</html>		
