				<!-- footer -->
				<?php get_template_part('layout/footer-bar');?>
				<!-- /footer -->

			</main>
			<!-- /wrapper -->

		</div>

		<!-- snackbar -->
		<?php get_template_part('layout/snackbar');?>

		<?php wp_footer();?>

		<!-- analytics -->
		<?php echo (sakura_options('analytics_code_position') == 'foot') ? sakura_options('analytics_code') : ''; ?>

	</body>
</html>
