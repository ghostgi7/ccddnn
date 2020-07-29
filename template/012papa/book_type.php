<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta content="width=device-width, initial-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>
      {type_name} - {cms_title}
  </title>
  <meta name="keywords" content="{cms_keywords}" />
  <meta name="description" content="{cms_description}" />
  <link href="{cms_template}/css/style.css" rel="stylesheet">
</head>

<body>
  {include file="header.php"}


  <div id="container">


    <section class="sectionContent">
      <div class="videoGroup long newVideo">
        <div class="section-title grayBorder">
          <h2>
            小说专区-{type_name}
          </h2>
        </div>
        <div id="new_cover" class="video-wrapper showMe">
            <ul class="art-list">
                   {book_list:20}
                <li>
                    <p>
                        <a href="{list_view}" target="_blank">
                            {list_name}
                        </a>
                    </p>
                    <span>{list_time}</span>
                </li>
                 {/book_list}
            </ul>

            <div class="pagenation" style="margin-top: 40px;">
              <!--分页样式-->

                <a href="{cms_page:first}">首页</a>
                <a href="{cms_page:prev}">上一页</a>
                <a href="javascript:;">共{cms_page:count}页</a>
                <a href="javascript:;">当前第{cms_page:current}页</a>
                <a href="{cms_page:next}">下一页</a>
                <a href="{cms_page:last}">尾页</a>

                <!--分页样式-->  
            </div>

        </div>
      </div>
    </section>
    
  </div>

  {include file="footer.php"}


</body>

</html>