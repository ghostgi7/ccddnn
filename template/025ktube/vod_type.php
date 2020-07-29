<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{type_name},{cms_description}">
    <meta name="keywords" content="{type_name},{cms_keywords}">
    <title>{type_name} - {cms_title}</title>
	
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
                            <h2><i class="fa fa-globe"></i> {type_name}</h2>
                        </div>
                        <div class="box-content">
                            <div class="row">
                                {video_list:20}
                                <div class="col-md-3">
                                    <div class="wrap-vid">
                                        <div class="zoom-container">
                                            <div class="zoom-caption">
                                                <span>{type_name}</span>
                                                <a href="{list_view}">
                                                    <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                                </a>
                                                <p>{list_name}</p>
                                            </div>
                                            <img src="{list_pic}" />
                                        </div>
                                        <div class="info">
                                            <span><i class="fa fa-calendar"></i>{list_time}</span>
                                            <span><i class="fa fa-heart"></i>{list_hit}</span>
                                        </div>
                                    </div>
                                </div>
                                {/video_list}
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                    {include file="page.php"}
				</div>

			</div>
		</div>
		
	</div>

{include file="footer.php"}
	
</body>
</html>
