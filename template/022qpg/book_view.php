<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<title>{cmsobj_name}详情介绍-{cmsobj_name}在线观看-{cmsobj_name}迅雷下载 - {cms_title}</title>
<meta name="keywords" content="{cmsobj_name}在线收看,{cmsobj_name}迅雷下载" />
<meta name="description" content="{cmsobj_name}" />
 {include file="include.php"}
</head>
<body>
<div class="container">
{include file="header.php"}
<div class="title">
<li>当前位置</li>
<li><a href="/">首页</a></li>
<li><a href="{cmsobj_typemore}">{cmsobj_typename}</a></li>
</div>
<div class="media"><ul>
  <font size="4">
        <div style="text-align: center;">
          <!-- 名称 -->{cmsobj_name}<!-- end 名称 -->
        </div></font>
       <div style="padding-left: 20px;padding-right: 20px;background:#FFFCF7">
       <!-- 剧情 -->{cmsobj_content}<!-- end 剧情 -->
     </div>
</ul>
</div>
  <br />
<div class="clearfix"></div>
<div class="title">推荐{cmsobj_typename}<span class="r"><a href="{cmsobj_typemore}">更多>></a></span></div>
<div class="pic2"><ul>{book_list:24}
<li><a href="{list_view}" title="{list_name}" target="_blank">{list_name}</a></li>
{/book_list}</ul>
</div>
{include file="footer.php"}
</div>
</body>
</html>