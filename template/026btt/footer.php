<div class="footer">
    <ul>
        <li><a target="_blank" href="{cms_domain1}" class="btn btn-footer"><i class="fa fa-globe"></i>发布地址1</a></li>
        <li><a target="_blank" href="{cms_domain2}" class="btn btn-footer"><i class="fa fa-globe"></i>发布地址2</a></li>
    </ul>
</div>
<script src="{cms_template}/static/js/jquery.min.js"></script>
<script src="{cms_template}/static/js/owl.carousel.js"></script>
<script src="{cms_template}/static/js/app.js"></script>
<script>
    $(function () {
        // 轮播图
        $('.hot-star').owlCarousel({
            autoplay: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            nav:false,
            dots:true,
            responsive:{
                300:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:6
                }
            }
        });
        $('.update-soon').owlCarousel({
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            nav:false,
            dots:true,
            responsive:{
                300:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:6
                }
            }
        });
        $('.may-you-like').owlCarousel({
            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            nav:false,
            dots:true,
            responsive:{
                300:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:6
                }
            }
        });
    });
</script>
{cms_tj}