<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{cmsobj_name} - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {include file="include.php"}
</head>
<body>
{include file="header.php"}

    <div class="main">
        <h1 class="title">
                <li class="home">
                    <a href="/">首页</a> »
                    <a href="JavaScript:">{cmsobj_typename}</a> »
                    <a href="JavaScript:">{cmsobj_name}</a>
                </li>
        </h1>
    <div class="video-box">    
        <div class="booker mb" >
                {cmsobj_content}
        </div>
        <div style="clear: both;"></div>
    </div>


    <div class="tab-title tab mb clearfix"><ul><li class="on">猜你喜欢</li></ul></div>
            <div class="tab-down mb clearfix">
                <div class="index-tj-l clearfix">
                    <ul>
                        {pic_list:10}
                        <li class="p2 m1">
                            <a class="link-hover" href="{list_view}" title="{list_name}" target="_blank">
                                <img src="{list_pic}" alt="{list_name}">
                                <span class="video-bg"></span>
                                <span class="lzbz">
                                    <p class="name">{list_name}</p>
                                    <p class="actor">观看次数：{list_hit}</p>
                                    <p class="actor">更新时间：{list_time}</p>
                                </span>
                            </a>
                        </li>
                        {/pic_list}
                    </ul>
                </div>
            </div>


    </div>

{include file="footer.php"}

</body>
</html>

