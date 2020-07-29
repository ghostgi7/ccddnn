<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{type_name},{cms_description}">
    <meta name="keywords" content="{type_name},{cms_keywords}">
    <title>{type_name} - {cms_title}</title>
	
   {include file="include.php"}
</head>

<body>

{include file="header.php"}
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
	
		<div class="container">
			<div class="row">
                <div class="widget wid-banner">
                    {cms_banner_a}
                </div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h2><i class="fa fa-globe"></i> {type_name}</h2>
                        </div>
                        <div class="box-content">
                            <div class="row">
                                <ul class="book-list">
                                    {book_list:20}
                                    <a href="{list_view}">
                                        <li class="book-item">
                                            <div class="row">
                                                <span class="col-xs-8">{list_name}</span>
                                                <span class="col-xs-4">{list_time}</span>
                                            </div>
                                        </li>
                                    </a>
                                    {/book_list}
                                </ul>
                            </div>
                        </div>
                    </div>
                    {include file="page.php"}
				</div>

			</div>
		</div>
		
	</div>

{include file="footer.php"}
	
</body>
</html>
