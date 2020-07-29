<div class="box-page clearfix" id="long-page">
    <a href="{cms_page:first}" class="prev pagegbk">首页</a>&nbsp;
    <a href="{cms_page:prev}" class="prev pagegbk">上一页</a>&nbsp;
    <a href="{cms_page:next}" class="next pagegbk">下一页</a>&nbsp;
    <a href="{cms_page:last}" class="next pagegbk">尾页</a>
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
</div>