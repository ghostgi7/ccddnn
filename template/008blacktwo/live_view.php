<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
	<link rel="stylesheet" href="{cms_template}/css/style.css" />
	<link rel="stylesheet" href="{cms_template}/fonts/iconfont.css" />
</head>
<body>
{include file="header.php"}
<main id="main">   		
	<div class="container-fluid px-0">
	
	  <div class="row my-2">
		<h5 class="container-title col-60">本直播为实时直播！</h5>
	  </div>	
	
<div class="row">
            <div class="left col-40" >
               		{cmsobj_content}
               

            </div>
            <div class="right container-fluid col-20">
                                    <div class="adv-pr mb-3">

<a href="javascript:;" target="_blank" class="d-block mb-1"><img src="{cms_template}/images/zb1.jpg"></a>
<a href="javascript:;" target="_blank" class="d-block mb-1"><img src="{cms_template}/images/zb.jpg"></a>

                    </div>
                            </div>
        </div>	

{cms_banner_b}
	

	 </div>


	
<hr />


</main>
{include file="footer.php"}
 
</body>
</html>