<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

	<title>{cmsobj_name}-文章内容-{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
</head>
<body>
{include file="header.php"}
<div class="maxbox" style="margin-top:5px;">
  <div class="title">您的位置：小说专区{cmsobj_name}</div><br><br><br>
  <div class="vodbox">
    <div class="artbody">
      <div style="clear:both"></div>
      <div class="cont">
        <div id="postmessage" class="t_msgfont">
{cmsobj_content}
 
  
        </div>
     </div>

    </div>

  </div>

  <div style="clear:both"></div>
</div>




{include file="footer.php"}
 
</body>
</html>
