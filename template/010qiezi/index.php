<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{cms_title}</title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />
<link href="{cms_template}/images/bootstrap.css" rel="stylesheet">
<link href="{cms_template}/images/nky.css" rel="stylesheet">
<link href="{cms_template}/images/font-awesome.min.css" rel="stylesheet">
<link href="{cms_template}/images/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="{cms_template}/images/default.css" rel="stylesheet">
<link href="{cms_template}/images/layout.css" rel="stylesheet" type="text/css">
<link href="{cms_template}/images/custom.css" rel="stylesheet" type="text/css">
<script src="{cms_template}/js/jquery.js"></script>
<script src="{cms_template}/js/zepto.min.js"></script>
<script src="{cms_template}/js/jq/jquery.lazyload.js"></script>
<script src="{cms_template}/js/jq/jquery.autocomplete.js"></script>
<script src="{cms_template}/js/home.js"></script>
<script src="{cms_template}/js/tpl.js"></script>
</head> 
<body class="ad-box">
{include file="header.php"}

{video_hot}
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{type_name}
                <small>movie</small></h1>
        </div>
    </div>
    <hr>
    <div class="row">
         {video_list:8}
            <div class="col-md-3 portfolio-item new-video">
                <div class="new-video-icon">
                </div>
                <a href=" {list_view}" target="_blank"><img class="img-responsive" src="{list_pic}" width="280" height="160"/></a>
                <div class="v-title">
                    <div class="uptime">
                        {list_name}
                    </div>
                    上架时间：{list_time}<br>
                    <a href=" {list_view}"target="_blank">{list_name}</a>
                </div>
            </div>
        		 {/video_list}
    </div>

{/video_hot}



{if $cms_config['live_status']=='1'}

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">直播频道
                <small>movie</small></h1>
        </div>
    </div>
    <hr>
    <div class="row">
        {live_hot_list:8}
            <div class="col-md-3 portfolio-item new-video">
                <div class="new-video-icon">
                </div>
                <a href=" {list_view}" target="_blank"><img class="img-responsive" src=" {list_pic}" width="280" height="160"/></a>
                <div class="v-title">
                    <div class="uptime">
                         {list_name}
                    </div>
                    时时直播<br>
                    <a href=" {list_view}"target="_blank"> {list_name} </a>
                </div>
            </div>
             {/live_hot_list}
    </div>

{/if}



	<div class="row">
		<div class="col-lg-12">
			友情链接
			<hr>
			<div class="row">
			 {cms_link}
			
			</div>
		</div>
	</div>


 


 {include file="footer.php"}

</body>
</html>







