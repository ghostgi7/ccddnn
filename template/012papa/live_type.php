<!DOCTYPE html>
<html>
 <head> 
  <meta charset="UTF-8" /> 
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0" name="viewport" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<title>{type_name} - {cms_title}</title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />
<link href="{cms_template}/css/style.css" rel="stylesheet">
 </head> 
 <body> 
{include file="header.php"}
<div id="container"> 
   <section class="sectionContent"> 
    <div class="videoGroup long newVideo"> 
     <div class="section-title grayBorder"> 
      <h2>直播分类：{type_name}</h2>
     </div> 
     <div id="new_cover" class="video-wrapper showMe">
	{live_list:20}
      <div class="col-style d-5 m-2"> 
       <a class="videoBox" href=" {list_view}">
        <div class="videoBox-content" data-vid="TIKC-031"> 
         <div class="videoBox-cover lazyLoad" style="background-image: url( {list_pic});" ></div>
         <div class="collect glyphicon glyphicon-plus"></div> 
         <div class="videoBox-bottom"> 
          <div class="videoBox-time">
           直播频道
          </div> 
          <div class="tag_con"> 
          </div> 
         </div> 
        </div> 
        <div class="videoBox-info">
         <h4 class="title"> {list_name} </h4>
        </div> </a>  
      </div>  
	 {/live_list}
     </div>
        <div class="pagenation" style="margin-top: 40px;">
            <!--分页样式-->

            <a href="{cms_page:first}">首页</a>
            <a href="{cms_page:prev}">上一页</a>
            <a href="javascript:;">共{cms_page:count}页</a>
            <a href="javascript:;">当前第{cms_page:current}页</a>
            <a href="{cms_page:next}">下一页</a>
            <a href="{cms_page:last}">尾页</a>

            <!--分页样式-->
        </div>
    </div>
	
  </section>

</div> 

 
{include file="footer.php"}
</body>
</html>		
