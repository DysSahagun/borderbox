<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="sec" class="widget-area" role="complementary">
                        <div id="sec-cr">
                            <div class="teleport widget-teleport">
                                <div class="teleport-cr">
                                    <div class="teleport-ct">
                                        <div class="widget-ct"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--#sec-->
                <?php endif; ?>