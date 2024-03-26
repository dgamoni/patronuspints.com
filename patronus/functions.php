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
    display: none;
    /*opacity: 0;*/
    transition: .3s all ease;
}
.featured_gif_hover img {
    width: 306px;
    height: 306px;
    object-fit: cover;
}
.featured_gif_enable_wrap:hover > .featured_gif_hover {
	display: block;
	/*opacity: 1;*/
	transition: .3s all ease;
}
	</style>
	<?php
}