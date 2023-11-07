<?php 

/**
 * Template Name:Homepage
 * 
 * 
 */
?>

<?php get_header();?>

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

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
            <?php $servicequery = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 10,

            ));?>

            <?php while($servicequery->have_posts()):$servicequery->the_post()?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title();?></h2>
					<p><?php the_content();?></p>
					<div class="more"><a href="<?php the_permalink();?>">[...]</a></div>
				</div>
			</div>

            <?php endwhile;?>

			<h2>
				Gender Selection : 
				<?php if($zboom['gender']==1) : ?>
					Male
				<?php endif; ?>

				<?php if($zboom['gender']==2) : ?>
					Female
				<?php endif; ?>
			</h2>

			<h2>
				Gender Selection : 
				<?php if($zboom['select-option']==1) : ?>
					Male
				<?php endif; ?>

				<?php if($zboom['select-option']==2) : ?>
					Female
				<?php endif; ?>
			</h2>

			<h2>
				Category Selection : 
				<?php  $cat_id = $zboom['select-category']; echo get_the_category_by_ID( $cat_id );?>
					
			</h2>

			<h2>
				your price range : 
				<?php  echo $zboom['price-range'];?>
					
			</h2>



			
		</div>
		<div class="row block02">

		<?php if($zboom['website_layout'] == 1) : ?>
			<div class="col-3-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php $blogpost = new WP_Query(array(
                        'post_type' => 'post',

                    )); ?>
                    <?php while($blogpost->have_posts()):$blogpost->the_post()?>
                    <article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail();?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<div class="info">By <?php the_author();?> on <?php the_time('M d, Y');?> with <?php comments_popup_link(); ?></div>
								<?php readmore(30);?>... <a href="<?php the_permalink();?>">Read More</a>
							</div>
						</div>
					</article>
					<?php endwhile;?>
				</div>
			</div>

			<?php endif;?>


			<?php if($zboom['website_layout']==2):?>		

			<div class="col-2-3">
				
				<?php get_sidebar( );?>

				
			</div>

			<?php endif;?>


		</div>
	</div>
</section>

<?php get_footer();?>