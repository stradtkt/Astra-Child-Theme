<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
			<?php astra_content_bottom(); ?>
			</div> <!-- ast-container -->
		</div><!-- #content -->
		<?php astra_content_after(); ?>
		<?php astra_footer_before(); ?>
		<?php astra_footer(); ?>
		<?php astra_footer_after(); ?>
	</div><!-- #page -->
	<?php astra_body_bottom(); ?>
    <div class="search-overlay">
        <div class="search-overlay__top">
            <div class="container">
                <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
            </div>
        </div>
        <div class="container">
            <div id="search-overlay__results"></div>
        </div>
    </div>
    <?php wp_footer(); ?>
	</body>
</html>
