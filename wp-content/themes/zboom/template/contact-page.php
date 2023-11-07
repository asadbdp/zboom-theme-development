<?php 
/**
 * Template Name: Contact Page

 */

get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<?php echo do_shortcode('[contact-form-7 id="80" title="contact us"] ');?>
						</div>
					</article>
				</div>
			</div>
			<?php dynamic_sidebar('contact-right-widget-sidebar');?>
		</div>
	</div>
</section>

<?php get_footer(); ?>