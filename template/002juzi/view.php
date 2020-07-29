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
<script src="{cms_template}/js/home.js"></script>
</head>
<body>

 <div class="main">
 {include file="header.php"}

   <section> 
    <div class="container"> 
     <div class="home-img-box"> 

      <div class="category-count"> 
       <h3 class="title">{cmsobj_name}</h3>
       <a><span class="home-link"></span></a>
      </div> 
	</div>
	</div>  
	<div class="video-box-all container" style="height:400px">
	{cmsobj_content}
	</div>  
 <div class="container"> 	
{cms_banner_b}
</div>    
   
   
    <div class="container"> 
     <div class="home-img-box"> 

      <div class="category-count"> 
       <h3 class="title">视频推荐</h3> 
       <a><span class="home-link"></span></a>
      </div> 
      <div class="post-list"> 
        {video_list:8}

       <div class="col-md-3 col-sm-6 col-xs-6"> 
        <div class="video-item"> 
         <div class="featured-content-image"> 
          <a href="{list_view}" rel="bookmark">
		  <img class="lazy"  src="{list_pic}"/>
           <div class="link-overlay"></div></a> 
          <span class="model-view">{type_name}</span>
         </div> 
        </div> 
        <div class="entry-title"> 
         <a href="{list_view}" rel="bookmark">{list_name}</a>{list_time}
        </div> 
       </div> 
	{/video_list}

      </div> 	  

      <div class="clearfix"></div> 
     </div> 

   </div>
   </section> 

   <footer> 
    <div class="footer-menu"> 
     <div class="container"> 
     </div> 
    </div> 
    <div class="footer"> 
     <div class="container"> 
      <div class="col-md-12"> 

 {include file="footer.php"}
      </div> 
      <div class="col-md-3"></div> 
     </div> 
    </div> 
   </footer>  
  </div>

</body>
</html>
