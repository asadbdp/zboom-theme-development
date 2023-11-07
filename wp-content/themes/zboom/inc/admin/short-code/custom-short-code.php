<?php

function heading_short_code($atts, $content){
    $position = isset($atts['position']) ? $atts['position'] : 'left';

    echo "<h1 align='" . $position . "'>" . $content . "</h1>";

}

add_shortcode('heading', 'heading_short_code');


function zboom_slider_shortcode(){
    ob_start(); ?>



<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">
                    <?php $query = new WP_Query(array(
                        'post_type' => 'homeslider',
                        'posts_per_page' => 5,

                    ));?>
                    <?php while($query->have_posts()): $query->the_post()?>
					<li><?php the_post_thumbnail();?></li>
					
                    <?php endwhile;?>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $slider = ob_get_clean();
    return $slider;


}

add_shortcode('slider', 'zboom_slider_shortcode');