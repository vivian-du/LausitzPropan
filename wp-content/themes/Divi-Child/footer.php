<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
                                <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                                    <div id="et-footer-nav">
                                            <div class="container">
                                                    <?php
                                                            wp_nav_menu( array(
                                                                    'theme_location' => 'footer-menu',
                                                                    'depth'          => '1',
                                                                    'menu_class'     => 'bottom-nav',
                                                                    'container'      => '',
                                                                    'fallback_cb'    => '',
                                                            ) );
                                                    ?>
                                            </div>
                                    </div> <!-- #et-footer-nav -->
                                <?php endif; ?>
                            
				<?php get_sidebar( 'footer' ); ?>		

				<div id="footer-bottom">
					<div class="container clearfix">
                                            
                                            <!-- edit: removed Social Media Icons --> 
                                          
                                            <!-- edit: facebook, imprint, privacy, disclaimer --> 
                                            <p class="et-social-icon et-social-facebook" style="float:left;">
                                                <a class="icon" href="https://www.facebook.com/LausitzPropan/" target="blank">
                                                    Folge uns auf Facebook!
                                                </a>
                                            </p>
                                            <p style="text-align: right;">
                                                &copy; <?php echo date("Y"); ?> Lausitz Propan GmbH
                                                |
                                                <a href="/impressum">
                                                    Impressum 
                                                </a>
                                                | 
                                                <a href="/datenschutzbestimmungen/">
                                                    Datenschutz 
                                                </a>
                                                |
                                                <a href="/widerrufsrecht/">
                                                    Widerrufsrecht 
                                                </a>                                                
                                            </p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>
	</div> <!-- #page-container -->
	<?php wp_footer(); ?>
</body>
</html>