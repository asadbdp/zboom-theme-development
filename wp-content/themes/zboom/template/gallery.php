<?php 

/**
 * Template Name: Gallery
 */

    get_header();

?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
            <?php 
            
            $query = new WP_Query(array(
                'post_type' => 'gallery',
                'posts_per_page' => '-1',
                'orderby' => 'title',
                'order' => 'DSE'
            ));
            
            ?>
            <?php while($query->have_posts()) : $query->the_post()?>
			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="#"><?php the_title();?></a></h2>
					</article>
                    
				</div>
			</div>
            <?php endwhile;?>
        </div>		
	</div>
</section>


<?php get_footer();?>