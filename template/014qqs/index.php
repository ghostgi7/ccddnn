<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		{cms_title}
	</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<link rel="stylesheet" href="{cms_template}/css/index.css" />
</head>

<body>



	 {include file="header.php"}





    {video_hot}
        <div class="wrap mt20">
            <div class="box movie2_list">
                <div class="title">
                    <div style="color:#ffffff; background-color:#008b8b">
                        <h3>&nbsp;&nbsp;&nbsp;<b>
                                {type_name}--
                                {cms_notice}</b></h3>
                    </div>
                </div>

                <ul>
                     {video_list:6}
                        <li><a href=" {list_view}" target="_blank"><img src="{list_pic}" />
                                <h3>
                                    {list_name}
                                </h3>
                                <div align="center"><span class="movie_date">
								<!--[if lt IE 9 ]><span class="bg_top"><![endif]-->
								{list_time}
								<!--[if lt IE 9 ]></span></div><span class="bg_tail"></span><![endif]--></span>
                            </a></li>

                    		 {/video_list}



                </ul>
            </div>
        </div>
        
    {/video_hot}
    

    
    {if $cms_config['live_status']=='1'}
        
        <div class="wrap mt20">
            <div class="box movie2_list">
                <div class="title">
                    <div style="color:#ffffff; background-color:#008b8b">
                        <h3>&nbsp;&nbsp;&nbsp;直播推荐</b></h3>
                    </div>
                </div>

                <ul>
                    
                    {live_hot_list:6}

                        
                        <li><a href=" {list_view}" target="_blank"><img src=" {list_pic}" />
                                <h3>
                                     {list_name}
                                </h3>
                                <div align="center"><span class="movie_date">
								<!--[if lt IE 9 ]><span class="bg_top"><![endif]-->时时直播
                                        <!--[if lt IE 9 ]></span></div><span class="bg_tail"></span><![endif]--></span>
                            </a></li>

                    		 {/live_hot_list}




                </ul>
            </div>
        </div>
        
    {/if}
    


	</div>



	<br>
	<br>
	<center>

		友情链接：
		{cms_link}

	</center>
	<!-- 页脚 -->





	{include file="footer.php"}

</body>

</html>