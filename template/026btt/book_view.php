<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <title>{cmsobj_name}在线阅读 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}">
    <meta name="description" content="{cmsobj_name},{cms_description}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
{include file="include.php"}
</head>

<body>
    <div class="page-with-sidebar" id="page-container">

    {include file="header.php"}

    <div class="content">
        <div class="alert alert-black alert-dismissible" role="alert" style="font-size: 14px">
            <i class="fa fa-bell-o"></i>
            {cms_notice}
        </div>
        <div class="row">
            {cms_banner_a}
        </div>


            <!-- 最近更新 开始 -->
            <h1 class="page-header clearfix">
                <span class="link fa fa-star pull-left">{cmsobj_name}</span>
            </h1>
            <div class="row vod-type-list" style="position: relative;background: linear-gradient(to right, #c5a073, #dac3a1 20%, #dac3a1 80%,#c5a073);padding: 8px">
                <div class="col-xs-12">
                    {cmsobj_content}
                </div>
            </div>

            <!-- 猜你喜欢 开始 -->


    </div>



</div>
{include file="footer.php"}

</body>

</html>