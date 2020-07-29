<div class="clear"></div>
<div class="page_wrap">
    <div class="page_wrap_inner">
        <ul class="page_ul" style="padding:0;margin:0;">

            <li><a href="{cms_page:first}" class="pageitem">首页</a></li>
            <li><a href="{cms_page:prev}" class="pageitem">上一页</a></li>
            <li><a href="javascript:;" class="activepage">{cms_page:current}</a></li>
            <li><a href="{cms_page:next}" class="pageitem">下一页</a></li>
            <li><a href="{cms_page:last}" class="pageitem">尾页</a></li>
            <li>
                <select class="toPage " style="outline: none;width: 100px;height: 32px;">

                </select>
                <script>
                    var data_url = "{:U($cms_controller,'type',$cms_arga,'page')}";
                    var toPage = document.querySelector('.toPage');
                    for (var i = 0;i<{cms_page:count};i++){
                        var option = document.createElement('option');
                        var n = i+1;
                        option.innerText = "第"+n+"页";
                        option.value = n;
                        if(n == {cms_page:current}){
                            option.selected = true;
                        }
                        toPage.appendChild(option);
                    }
                    toPage.addEventListener("change",function () {
                        location.href = data_url.replace('page', this.value);
                    })
                </script>
            </li>
        </ul>
    </div>
</div>
<div class="clear"></div>