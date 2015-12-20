<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bareplate
 */

?>
	</div><!-- .site__content -->

	<footer class="footer site__footer" role="contentinfo">

		<div class="site--wrapper footer__site--wrapper">
			<div class="footer__menu js__footer__menu">
				<nav id="footer-navigation" class="footer__menu-nav" role="navigation">
					<?php wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_class' => 'menu__ul',
						) ); ?>
				</nav>
			</div>

			<div class="footer__legal">
				<?php _e( '&copy; 2015 Bareplate. All Rights Reserved.', 'bareplate' ) ?>
			</div>
		</div>

	</footer><!-- .site__footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

<!--[if lte IE 8]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<![endif]-->

</body>
</html>
