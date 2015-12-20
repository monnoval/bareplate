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

		<div class="site--wrapper">
			<div class="footer__legal">
				<?php
					_e( 'Copyright &copy; ', 'bareplate' );
					echo date("Y");
					_e( ' Bareplate. ', 'bareplate' );
					_e( 'Powered by WordPress and Bareplate.', 'bareplate' );  ?>
			</div>
		</div>

	</footer><!-- .site__footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
