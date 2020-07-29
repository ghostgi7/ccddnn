<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{type_name} - {cms_title}</title>
    <meta name="description" content="{type_name} - {cms_title}" />
    <meta name="keywords" content="{type_name} - {cms_title}" />
    {include file="include.php"}
</head>
<body id="page-top" class="">
{include file="header.php"}
<div id="wrapper">
    <!-- Sidebar -->
    {include file="left.php"}
    <div id="content-wrapper">
        <div class="container-fluid">
            {cms_banner_a}
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <h6>{type_name}</h6>
                        </div>
                    </div>
                    {book_list:20}
                    <div class="col-xl-12 mb-2">
                        <div class="video-card">
                            <div class="video-card-body row">
                                <div class="video-title col-xl-8">
                                    <a target="_blank" href="{list_view}">{list_name}</a>
                                </div>
                                <div class="video-title col-xl-4" style="text-align: right">
                                    {list_hit}次观看 &nbsp;
                                    <i class="fas fa-calendar-alt"></i> {list_time}
                                </div>
                            </div>
                        </div>
                    </div>
                    {/book_list}
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-sm mb-0">

                        <!--分页样式-->
                        <li class="page-item"><a class="page-link" href="{cms_page:first}">首页</a></li>
                        <li class="page-item"><a class="page-link" href="{cms_page:prev}">上一页</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:;">{cms_page:current}</a></li>
                        <li class="page-item"><a class="page-link" href="{cms_page:next}">下一页</a></li>
                        <li class="page-item"><a class="page-link" href="{cms_page:last}">尾页</a></li>
                        <!--分页样式-->

                    </ul>
                </nav>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        {include file="footer.php"}
    </div>
    <!-- /.content-wrapper -->
</div>
</body>
</html>