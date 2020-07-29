<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title>正在直播中.... {cms_title}</title>
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
       <h3 class="title">本直播为实时直播！</h3>
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