			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
				</div><!-- /.container -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="footer_tiger">
			<!-- <div class="footer_tiger"> -->
				<div class="tigerki tigerki_5"></div>
			<!-- </div> -->
			<div class="container">
				<div class="row align-items-center justify-content-center pt-5 pb-3">
					<div class="col-lg-3 order-lg-1 d-flex align-items-center justify-content-center">
						<img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cfa.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					</div>
					<div class="col-lg-3 order-lg-0 regulamin">
					<?php
					$options_zapisy = get_field( 'options_zapisy', 'options' );
					if ( $options_zapisy ) : ?>
						<a href="<?php echo esc_url( $options_zapisy['url'] ); ?>">Zasady zapisów</a>
					<?php endif; ?>
					</div>
					<div class="col-lg-3 order-lg-3 regulamin">
					<?php
					$options_regulamin = get_field( 'options_regulamin', 'options' );
					if ( $options_regulamin ) : ?>
						<a href="<?php echo esc_url( $options_regulamin['url'] ); ?>">Regulamin turnieju</a>
					<?php endif; ?>
					</div>
				</div><!-- /.row -->
				<div class="row">
					<div class="text-center pb-5">
						This event is not sponsored, endorsed, or administered by Epic Games, Inc.
					</div>
				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
