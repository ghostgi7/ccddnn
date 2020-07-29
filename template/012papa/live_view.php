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
</head>
<body>
{include file="header.php"}
<div id="container"> 

   <section class="sectionContent"> 
    <div class="videoGroup long newVideo"> 
     <div class="section-title grayBorder"> 
      <h2>本直播为实时直播！</h2>
     </div> 
     <div id="new_cover" class="video-wrapper showMe" >
         {cmsobj_content}
     </div> 
	 
    </div>
	
  </section>
     <section class="sectionContent">
{cms_banner_b}
  </section>





</div>














{include file="footer.php"}
 
</body>
</html>