<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{cmsobj_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link href="{cms_template}/css/style.css" rel="stylesheet">
</head>
<body>
{include file="header.php"}

<!--最新上传 开始-->
<div class="new margin-top-35">
    <div class="container uk-padding-remove">
        <!--最新上传 标题 开始-->
        <div class="new-title margin-bottom-10 clearfix">
            <h3 class="uk-display-block uk-float-left">{cmsobj_name}</h3>
        </div>
        <!--最新上传 标题 结束-->

        <!--最新上传 内容 缩略图 开始-->
        <div class="new-content clearfix">
            <!-- 图片内容页 -->
            <div class="img-content">
                    {cmsobj_content}
            </div>
            <!-- 下一篇  上一篇 
            <div class='page-ctrl'>
                <a href="" class="prev">上一篇:<span>文章标题</span></a>
            
                <a href="" class="next">下一篇:<span>文章标题</span></a>
            </div>-->
        </div>
        
    </div>
</div>


{include file="footer.php"}
</body>
</html>		
