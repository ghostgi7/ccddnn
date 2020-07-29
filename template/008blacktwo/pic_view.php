<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{cmsobj_name}-文章内容-{cms_title}</title>
	<meta name="keywords" content="{cms_title}" />
	<meta name="description" content="{cms_title}" />
    <link rel="stylesheet" href="{cms_template}/css/index.css" />
    <link rel="stylesheet" href="{cms_template}/css/style.css" />
	<link rel="stylesheet" href="{cms_template}/fonts/iconfont.css" />
</head>
<body>
{include file="header.php"}
<main id="main">
<div id="novelShowPage">
    <div class="title color-black">{cmsobj_name}</div>
            <div class="needVip">
				<div class="novelContent">
                    {cmsobj_content}
                </div>
			</div>
</div>
</main>
{include file="footer.php"}
</body>
</html>
