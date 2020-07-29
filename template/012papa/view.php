<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<title>正在播放 {cmsobj_name}</title>
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
      <h2>{cmsobj_name}</h2>
     </div> 
     <div id="new_cover" class="video-wrapper showMe"style="height:400px">
            {cmsobj_content}
     </div> 
	 
    </div>
	
  </section>
     <section class="sectionContent">
{cms_banner_b}
  </section>





   <section class="sectionContent"> 
    <div class="videoGroup long newVideo"> 
     <div class="section-title grayBorder"> 
      <h2>视频推荐</h2>  
     </div> 
     <div id="new_cover" class="video-wrapper showMe">
		 	{video_list:10}
      <div class="col-style d-5 m-2"> 
       <a class="videoBox" href=" {list_view}">
        <div class="videoBox-content" data-vid="TIKC-031"> 
         <div class="videoBox-cover lazyLoad" style="background-image: url({list_pic});" ></div>
         <div class="collect glyphicon glyphicon-plus"></div> 
         <div class="videoBox-bottom"> 
          <div class="videoBox-time">
           {list_time}
          </div> 
          <div class="tag_con"> 
          </div> 
         </div> 
        </div> 
        <div class="videoBox-info">
         <h4 class="title">{list_name}</h4>
        </div> </a>  
      </div> 
	 {/video_list}
     </div> 
	 
    </div>
	
  </section>

</div>



{include file="footer.php"}
</body>
</html>
