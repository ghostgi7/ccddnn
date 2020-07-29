   <html lang="zh-cn">
    <head>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{cmsobj_name} {cmsobj_typename} -{cms_title} </title>
    <meta name="keywords" content="{cmsobj_name} {cmsobj_typename} -{cms_title}">
    <meta name="description" content="{cmsobj_name} {cmsobj_typename} -{cms_title}">
{include file="include.php"}
    <script>ver = "20200515"</script>
    </head>
    <body>
  {include file="header.php"} 
    <div id="app" class="container mt20">

        <div class="pic-view mt10">
            <div class="view-left">
                <article class="article pic-view-left-box">
                    <header>
                        <h1 class="text-center">{cmsobj_name}</h1>
                        <p class="text-gray text-center">查看：{cmsobj_hit}万</p>
                    </header>
                    <section class="content">
                        <div class="pic-view-box">
                            <div class="article-content">
                                <p><center>
								{cmsobj_content}
                            </div>
                        </div>
                    </section>
    </div>
	  </div>
	{include file="footer.php"}
    </body>
    </html>
