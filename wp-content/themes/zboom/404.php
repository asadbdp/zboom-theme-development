<?php 
/**
 *  The template for displaying 404 pages (not found)
 * 
 */


get_header();?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">					
						<h1 class="not-found-page-title"><?php esc_html_e( '404', 'zboom' ); ?></h1>
						<p class="wrong-para"><?php esc_html_e('Uh Oh! Page not found!', 'zboom');?></p>					
				
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>