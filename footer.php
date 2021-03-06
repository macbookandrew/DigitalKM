<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

    </div><!-- .site-content -->

    <div id="sidebar" class="sidebar">
        <?php get_sidebar(); ?>
    </div><!-- .sidebar -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <p>
                <?php
                    /**
                     * Fires before the Twenty Fifteen footer text for footer customization.
                     *
                     * @since Twenty Fifteen 1.0
                     */
                    do_action( 'twentyfifteen_credits' );
                ?>
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'WordPress' ); ?></a></p>
            <p>LSTA grant programs are made possible by grant funds from the Institute of Museum and Library Services under the provisions of the federal Library Services and Technology Act as administered by the State Library of North Carolina, a division of the Department of Cultural Resources.</p>
        </div><!-- .site-info -->
    </footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
