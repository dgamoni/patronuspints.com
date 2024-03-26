<?php
// Add custom Theme Functions here

add_action('wp_footer', 'add_custom_css');
function add_custom_css() { ?>
	<script>
		jQuery(document).ready(function($) {
			// $('.featured_gif_enable').hover(function() {
			// 	$('.featured_gif_hover').show();
			// }, function() {
			// 	$('.featured_gif_hover').hide();
			// });
		});
	</script>
	<style>

.woocommerce-product-gallery {
	position: relative;
}
.featured_gif_hover {
	position: absolute;
    top: 0;
   /* display: none;
    opacity: 0;*/
   /* transition: .3s all ease;*/
    transition: opacity .5s, transform .3s, max-height .6s, filter .6s;
    /*transform: translateZ(0);*/
}
.featured_gif_hover img {
    width: 306px;
    height: 306px;
    object-fit: cover;
   /* transition: filter .6s, opacity .6s, transform .6s, box-shadow .3s;*/
    transition: opacity .5s, transform .3s, max-height .6s, filter .6s;
    opacity: 0;
}
.featured_gif_enable_wrap:hover {
	cursor: pointer;
}
.featured_gif_enable_wrap:hover > .featured_gif_hover img {
	/*display: block;*/
	opacity: 1;
	/*transition: .3s all ease;*/
	transition: opacity .5s, transform .3s, max-height .6s, filter .6s;
}
.flickity-slider {

}
	</style>
	<?php
}

add_action( 'flatsome_woocommerce_shop_loop_images', 'gif_loop_images', 12 );
function gif_loop_images() {
		$featured_gif = get_field('featured_gif' );
		if($featured_gif){
			echo  '<img width="247" height="190" src="'.$featured_gif['url'].'" class="show-on-hover absolute fill hide-for-small back-image" alt="">';
		}
}