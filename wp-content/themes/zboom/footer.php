<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<?php dynamic_sidebar( 'footer-widget-sidebar' );?>
			
		</div>
		
		<div class="row copyright">
			<p>Copyright © <?php the_time('Y');?> - Developed by <a href="https://www.bdprogrammer.com">Asaduzzaman</a></p>
		</div>
	</div>

   
</footer>
<script src="<?php echo esc_url(get_template_directory_uri());?>/js/responsiveslides.js"></script>

<?php wp_footer();?>
</body>
</html>