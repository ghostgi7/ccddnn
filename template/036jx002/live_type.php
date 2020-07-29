<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name},{cms_description}" />
    <meta name="keywords" content="{type_name},{cms_keywords}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    {include file="include.php"}
</head>
<body>
{include file="header.php"}
<div class="main">
    <div class="index-tj-l">
        <h1 class="title title-pd">
            激情直播-{type_name}
        </h1>
        <div class="clearfix">
            <ul>
                {live_list:25}
                <li class="p2 m1">
                    <a class="link-hover" href="{list_view}" title="{list_name}" target="_blank">
                        <img class="lazy" src="{list_pic}" alt="{list_name}" onerror="this.src='{cms_template}/assets/images/nopic.gif'">
                        <span class="video-bg"></span>
                        <span class="lzbz">
                            <p class="name">{list_name}</p>
                            <p class="actor">观看次数：{list_hit}</p>
                            <p class="actor">更新时间：{list_time}</p>
                        </span>
                        <!-- <p class="other"><i>{$vo.vod_time|date='Y-m-d',###}</i></p> -->
                    </a>
                </li>
                {/live_list}
            </ul>
        </div>
    </div>

        <div class="page mb clearfix">
            <div id="wr-page">
                {include file="page.php"}
            </div>
        </div>
    </div>

{include file="footer.php"}

</body>
</html>


