<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{type_name} - {cms_title}</title>
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
            <span class="uk-display-block uk-float-left icon-new"></span>
            <h3 class="uk-display-block uk-float-left">图片分类：{type_name}</h3>
        </div>
        <!--最新上传 标题 结束-->
        <!--最新上传 内容 缩略图 开始-->
        <div class="new-content clearfix">
            <!-- 图片列表页 -->
            <ul class="art-list">
                   {pic_list:20}
                <li>
                    <p>
                        <a href="{list_view}" target="_blank">
                            {list_name}
                        </a>
                    </p>
                    <span>
                        {list_time}</span>
                </li>
                 {/pic_list}
            </ul>
	    </div>

        <ul class="clearfix uk-float-right uk-display-block uk-margin-bottom uk-margin-top">
            <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:first}">首页</a></li>
            <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:prev}">上一页</a></li>
            <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="javascript:;">共{cms_page:count}页</a></li>
            <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="javascript:;">当前 {cms_page:current}页</a></li>
            <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:next}">下一页</a></li>
            <li class="uk-float-left margin-left-10 clearfix"><a class="page-num-btn page-num-active" href="{cms_page:last}">尾页</a></li>
        </ul>

    </div>
</div>


{include file="footer.php"}
</body>
</html>		
