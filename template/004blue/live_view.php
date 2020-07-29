<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}正在直播中.... {cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
</head>
<body>
{include file="header.php"}
<div class="maxbox" style="margin-top:5px;">
  <div class="title">本直播为实时直播！</div><br><br><br>
  <div class="vodbox">
    <div class="artbody">
      <div style="clear:both"></div>
      <div class="cont">
        <div id="postmessage" class="t_msgfont">
 													 {cmsobj_content}
          <br>
         </div>
	{cms_banner_b}
      </div>

    </div>

  </div>

  <div style="clear:both"></div>
</div>







{include file="footer.php"}
 
</body>
</html>