<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<?php dynamic_sidebar( 'footer-widget-sidebar' );?>
			
		</div>
		
		<div class="row copyright">
			<p><?php global $zboom; echo $zboom['footer-text'];?><a href="<?php echo $zboom['text-url'];?>"><?php echo $zboom['text-link'];?></a></p>
		<ul>
			<?php if($zboom['social-media']['1']) : ?>
				<li><a href="<?php echo $zboom['social-media']['1'];?>">facebook</a></li>
			<?php endif;?>

			<?php if($zboom['social-media']['2']) : ?>
				<li><a href="<?php echo $zboom['social-media']['2'];?>">youtube</a></li>
			<?php endif;?>

			<?php if($zboom['social-media']['3']) : ?>
			
				<li><a href="<?php echo $zboom['social-media']['3'];?>">instagram</a></li>
			<?php endif;?>

			<?php if($zboom['social-media']['4']) : ?>
				<li><a href="<?php echo $zboom['social-media']['4'];?>">linkedin</a></li>
			<?php endif;?>
		</ul>
		</div>

		
	</div>

   
</footer>
<script src="<?php echo esc_url(get_template_directory_uri());?>/js/responsiveslides.js"></script>

<?php wp_footer();?>
</body>
</html>