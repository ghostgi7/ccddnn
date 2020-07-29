<!DOCTYPE html><html mip><head><meta charset="utf-8"><meta name="applicable-device" content="pc,mobile"><meta name="MobileOptimized" content="width" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title>	{type_name}  - {cms_title}</title>
{include file="include.php"}
{include file="header.php"} 
<div class="cate"><div class="catecon"><div class="catetitle"><h3>{type_name} </h3></div>

<ul>
{book_list:20}
<li class="multi cate2 auth1"><div class="cateimg"><a href="{list_view}" data-type="mip" data-title="{list_name}" title="{list_name}"><mip-img layout="container" class="media-object" alt='{list_name}' src="{cms_template}/static/image/12.png"></mip-img><div class="zoomimg"></div></a></div><div class="catename"><a href="{list_view}" data-type="mip" data-title="{list_name}" title="{list_name}">{list_name}</a></div><div class="cateinfo"><span class="icoplay">{list_hit}次播放</span></div></li>{/book_list}

</ul>
<div class="pagebar"><div class="page-control">
<li class="page-item"><a class="page-link" data-type="mip" href="{cms_page:first}">首页</a></li>
<li class="page-item"><a class="page-link" data-type="mip" href="{cms_page:prev}">上一页</a></li>
<li class="page-item"><a class="page-link" data-type="mip" href="{cms_page:next}">下一页</a></li>
<li class="page-item"><a class="page-link" data-type="mip" href="{cms_page:last}">尾页</a></li>
<li class="page-item">{cms_page:current}/{cms_page:count}</li>
</ul></div></div></div></div>
{include file="footer.php"}