<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{type_name} - 图片列表 - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{cms_template}/css/uikit.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{cms_template}/css/common.min.css" />
    <link rel="stylesheet" href="{cms_template}/font/iconfont.css" />
    <script src="{cms_template}/js/jquery.js"></script>
    <script src="{cms_template}/js/uikit.min.js"></script>
</head>
<body>
{include file="header.php"}
          <!-- 视频列表 -->
            <div class="right-container">
                <!-- 视频分类 -->
                <div class="list-videos uk-margin-top uk-margin-bottom">
                    <div class="video-head uk-clearfix">
                        <h3 class="h3-color uk-float-left">图片专区-{type_name}</h3>
                        <p class="title-tips uk-float-right">
                            公告： {cms_notice}
                        </p>
                    </div>
                    <div class="video-content">
                        <ul class="art-list">


	{pic_list:20}



                            <li>
                                <p><a href="{list_view}" target="_blank">{list_name}</a></p>
                                <span>{list_time}</span>
                            </li>
			 {/pic_list}
		 
							
 
                        </ul>
                    </div>

                    <!-- 分页 -->
                    <div class="pagination">
                        <ul class="uk-clearfix">
                            <li><a href="{cms_page:first}">首页</a></li>
                            <li><a href="{cms_page:prev}"><i class="icon iconfont icon-arrowleft"></i></a></li>
                            <li><a href="javascript:;">共{cms_page:count}页</a></li>
                            <li><a href="javascript:;">当前 {cms_page:current}页</a></li>
                            <li><a href="{cms_page:next}"><i class="icon iconfont icon-arrowright"></i></a></li>
                            <li><a href="{cms_page:last}">尾页</a></li>
                        </ul>
                    </div>

                </div>






                <div class="line">
                    <hr>
                </div>
 

            </div>
        </div>



    </div>	
{include file="footer.php"}
</body>
</html>
	
	