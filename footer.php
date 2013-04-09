<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

                </div>                
            </div><!--#main-->
            
            <footer id="colophon" role="contentinfo">
                <div id="colophon-cr">
                    
                    <div class="teleport colophon-teleport">
                        <div class="teleport-cr">
                            <div class="teleport-ct">
                                <div class="colophon-ct">
                                    <p class="copyright">&copy; 2013 A Stormy Sky Documentaries. Olrayt reserved.</p>
                                    <p>
                                        <span class="intl-red">Site by <a href="http://international-red.com" target="_blank" title="International Red Creative Studio">International Red</a></span> &amp;
                                        <?php do_action( 'twentytwelve_credits' ); ?>
                                        <a class="wordpress-credit" href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( '%s', 'twentytwelve' ), 'WordPress' ); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </footer><!--#colophon-->
        
        </div><!--#page-->
        <div class="teleport letterbox-teleport">
            <div class="teleport-cr">
                <div class="teleport-ct">
                    <span class="letterbox">
                        <span class="insert insert-one"></span>
                        <span class="insert insert-two"></span>
                        <a id="top-link" href="#" target="_top" title="Back to top">Back to top</a>
                    </span>
                </div>
            </div>
        </div>        

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
        <?php wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery','modernizr'), false); ?>
        
        <?php wp_footer(); ?>
    </body>
</html>