<div class="footer-right">
    <div class="container uk-padding-remove">
        <p class="uk-display-block uk-float-left uk-margin-remove">重要提示：本网站明确包含成人内容，不合适未满18周岁的未成年人浏览</p>
        <p class="uk-display-block uk-float-right uk-margin-remove">广告联系方式{cms_email}</p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(function(){
        var timer = null;
        $("#nav").on({
            mouseenter: function(){
                $(".sub_nav").css({
                    "height":"192px"
                })
            },
            mouseleave: function(){
                timer = setTimeout(function(){
                            $(".sub_nav").css({
                                "height":"0px"
                            })
                        },
                        50
                )
            }
        });
        $(".sub_nav").on({
            mouseenter: function () {
                clearTimeout(timer);
            },
            mouseleave: function () {
                $(".sub_nav").css({
                    "height":"0px"
                })
            }
        })
    })
</script>
{cms_tj}