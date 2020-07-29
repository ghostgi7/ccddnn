$(function(){
	$('.js-show-more').on('click', function() {
		var $this = $(this);
		var load_comments = $this.attr('data-load-comments');
		var block_comments = $this.attr('data-block-comments');

		$('#' + block_comments).find('.item.hidden').slice(0, load_comments).removeClass('hidden');
		if($this.parent().find('.item.hidden').length == 0) {
			$this.hide();
		}

		return false;
	});

	$(function(){
		//endless scroll
		var timeout = 7000;
		var offset = 2000;
		var $btn_more = $('.js-load-more');
		var $block_holder = $btn_more.prev();

		function triggerClick() {
			if (!$btn_more.hasClass('no-scroll')) {
				if($(window).scrollTop() >= $block_holder.position().top + $block_holder.outerHeight(true) - offset) {
					$btn_more.trigger('click');
				}
			}
		}

		if ($btn_more.length) {
			if ($btn_more.attr('data-endless') != undefined) {
				$(window).scroll(function() {
					triggerClick();
				});
			}

			$('body').on('click','.js-load-more', function() {
				var $this = $(this);
				$this.attr('disabled', true);
				$this.removeClass('no-scroll');
				
				if ($this.attr('data-endless') != undefined) {
					$this.addClass('loading');
				}

				var num_page_load = $this.attr('data-count-page') || 2,
					from = $this.attr('data-from') ? $this.attr('data-from') : 'from',
					total = $this.attr('data-total'),
					item_class = $this.attr('data-item-class'),
					sort_by = $this.attr('data-sort'),
					block_result = $this.attr('data-block-result'),
					add_params = $this.attr('data-addparams'),
					max_videos = $this.attr('data-max-videos'),
					pagination_class = $this.attr('data-pagination-class');

				var params = {
					mode: 'async', 
					action: 'get_block', 
					block_id: $this.attr('data-id')
				};
				
				params[from] = num_page_load;
				if (sort_by) {
					params['sort_by'] = sort_by;
				}
				var str = $.param(params);

				if (add_params) {
					str += add_params;
				}
				var get_url = '?' + str;
				$.ajax({
					url:get_url,
					success:function(data){
						if (data){
							var $result = $(data).find('.'+ item_class);
							if (block_result) {
								$block_result = $('.' + block_result);
								if ($block_result.length == 0) {
									$block_result = $('#' + block_result);
								}
							} else {
								$block_result = $this.prev();
							}
							$this.attr('data-count-page', ++num_page_load);
							if (num_page_load > total) {
								$this.remove();
							}

							$block_result.append($result);
							$result.find('img.lazy-load').lazyload({
								effect: "fadeIn"
							});
							$this.removeClass('loading');

							if (pagination_class) {
								var $pagination = $(data).filter('.' + pagination_class);
								$('.' + pagination_class).replaceWith($pagination);
							}
							
							$('[data-append-block]').each(function() {
								var $block = $(this);
								var arr_positions = $block.attr('data-append-block').split(',');
								var appended_items = 0;

								for(var i = 0; i < arr_positions.length; i++) {
									var $append_after_thumb = $block_result.find('.'+ item_class).get(+arr_positions[i]-1);
									if($append_after_thumb) {
										$($append_after_thumb).after($block.html());
										appended_items++;
									} else {
										break;
									}
								}

								arr_positions.splice(0, appended_items);

								if (arr_positions.length) {
									$block.attr('data-append-block', arr_positions.join())
								} else {
									$block.remove();
								}

							});

							var count_thumbs = $(data).find('.'+ item_class).length;
							if ($this.attr('data-count-thumbs') == undefined) {
								$this.attr('data-count-thumbs', count_thumbs)
							} else {
								$this.attr('data-count-thumbs', parseInt($this.attr('data-count-thumbs')) + count_thumbs);
							}

							if (parseInt($this.attr('data-count-thumbs')) >= max_videos) {
								$this.attr('data-count-thumbs', 0)
								$this.attr('disabled', false).addClass('no-scroll');
							} else {
								setTimeout(function() {
									$this.attr('disabled', false);
									triggerClick();
								}, timeout);
							}
						}
					}
				});
				return false;
			});
		}
	});

});
	// ************************************************************************
$(function(){
	$( ".menu-btn" ).click(function() {
		$(this).parent().parent().parent().find('.navigation').toggleClass('open');
		$(this).toggleClass('active');
		$('html').toggleClass('noscroll');
		$('.mb-nav').toggleClass('nav-block');
	});
});

	// ************************************************************************
$(function(){
	$( ".search-btn" ).click(function() {
		$('.search').slideToggle();
	});
});
	// ************************************************************************

$(function(){
	var scrollDiv = document.createElement("div");
	scrollDiv.className = "scrollbar-measure";
	document.body.appendChild(scrollDiv);

	var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
	// console.log(scrollbarWidth); // Mac: 15

	document.body.removeChild(scrollDiv);

	$(window).resize(function() {

		if ($(window).width() < (580 - scrollbarWidth)) {
			$('.search').detach().insertAfter($('.header-right'));
			$('.search').attr({'style':'display:none'});
		}else {
			$('.search').detach().insertAfter($('.top-links'));
			$('.search').attr({'style':'display:flex'});
		}
	}).trigger('resize');
});



$(function(){
    $('.dropdown-btn').click(function() {
        $(".info-holder").toggleClass("expanded");
    });
});
