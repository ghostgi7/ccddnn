

<!DOCTYPE html><html mip><head><meta charset="utf-8"><meta name="applicable-device" content="pc,mobile"><meta name="MobileOptimized" content="width" /><meta name="HandheldFriendly" content="true" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"><link rel="shortcut icon" href="{9CCMS:$WEBUrl}/favicon.ico" type="image/x-icon" />
<title>	{cmsobj_name} - {cmsobj_typename}</title>
{include file="include.php"}
{include file="header.php"} 
<div class="single"><div class="content"><div class="singlebox">

<div class="articlename"><h1>{cmsobj_name}</h1></div><div class="articleinfo"><span class="icodata"> {cmsobj_typename} </span></div>

<div class="articlecon">
{cmsobj_content}
</div>

</div>


</div>

<div class="sidebar">

<div class="sidebox" id="divCatalog"><div class="sidetitle"><h3>网站分类</h3></div><div class="sidecon"><ul>
{pic_menu}
<li><a target="_blank" href=" {menu_link}" rel="Picmark" title="">{menu_name}</a></li>
{/pic_menu}



</ul></div></div>


<div class="sidebox" id="divPrevious"><div class="sidetitle"><h3>美图内容</h3></div><div class="sidecon"><ul>
{pic_list:12}
<li><a target="_blank" href="{list_name}" rel="Picmark" title="{list_name}"> {list_name}</a></li>
{/pic_list}
</ul></div></div>

</div></div>

{include file="footer.php"}