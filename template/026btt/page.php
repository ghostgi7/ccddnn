<div class="kscont">
    <div class="index_list_foot">
        <ol>
            <li><span><a href="{cms_page:first}" class="prev pagegbk">首页</a></span></li>&nbsp;
            <li><span><a href="{cms_page:prev}" class="prev pagegbk">上一页</a></span></li>&nbsp;
            <li><span>{cms_page:current} / {cms_page:count}</span></li>&nbsp;
            <li><span><a href="{cms_page:next}" class="next pagegbk">下一页</a></span></li>
            <li><span><a href="{cms_page:last}" class="next pagegbk">尾页</a></span></li>
            <li class="none">跳转到</li>
            <li><input type="text"></li>
            <li class="none">页</li>
            <li class="submit">
                <input type="button" value="确定" data-url="{:U($cms_controller,'type',$cms_arga,'page')}"
                                      onclick="var page = parseInt($(this).parent().prev().prev().find('input').val()); if(page && page >=1 && page <={cms_page:count}) {var url = $(this).data('url').replace('page', page); location.href=url}">
            </li>
        </ol>
    </div>
</div>