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
 <link href="{cms_template}/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
{include file="header.php"}
<div id="container"> 

   <section class="sectionContent"> 
    <div class="videoGroup long newVideo"> 
     <div class="section-title grayBorder"> 
      <h4>{cmsobj_name}</h4>
     </div>
     <div id="new_cover" class="video-wrapper showMe"style="height:250px">
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
		 	{video_list:20}

      <div class="col-style d-5 m-2">
       <a class="videoBox" href=" {list_view}">
        <div class="videoBox-content" data-vid="TIKC-031">
         <div class="videoBox-info">
          <span class="title">{list_name}</span>
         </div>
         <div class="videoBox-cover lazyLoad" style="background-image: url({list_pic});background-size: cover" ></div>
         <div class="collect glyphicon glyphicon-plus"></div>
         <div class="videoBox-bottom">
          <div class="videoBox-bar">
           <ul>
            <li><i class="fa fa-eye"></i>   {list_hit}</li>
            <li><i class="fa fa fa-thumbs-o-up"></i> {list_hit}</li>
            <li><i class="fa fa fa-thumbs-o-down"></i> 踩</li>
           </ul>
          </div>
          <div class="tag_con">
          </div>
         </div>
        </div>
       </a>
      </div>

	 {/video_list}
     </div> 
	 
    </div>
	
  </section>

</div>



{include file="footer.php"}
</body>
</html>
