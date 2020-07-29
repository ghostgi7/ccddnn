<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{cmsobj_name}在线阅读,{cms_description}">
    <meta name="keywords" content="{cms_keywords}">
    <title>{cmsobj_name}在线阅读 - {cms_title}</title>
	
   {include file="include.php"}
</head>

<body>

{include file="header.php"}
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
	
		<div class="container">
			<div class="row">
                <div class="widget wid-banner">
                    {cms_banner_a}
                </div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h2><i class="fa fa-globe"></i> {cmsobj_name}</h2>
                        </div>
                        <div class="box-content">
                            <div class="row">
                                <div class="col-md-12">
                                    {cmsobj_content}
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
				</div>

			</div>
		</div>
		
	</div>

{include file="footer.php"}
	
</body>
</html>
