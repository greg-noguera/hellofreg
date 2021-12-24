<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hellofreg
 */

?>

	<footer id="footer" class="site-footer">
		
	<div class="footer-container footer-container-1">
        <div class="footer-row footer-row-1">
        	<div class="footer-col footer-col-1">
				<h6>Nosotros</h6>
				<p class="text-justify">Somos una agencia que crea espacios virtuales en internet, para ayudar a las corporaciones y emprendedores a alcanzar cada vez más personas en el mundo.</p>
        	</div>

        	<div class="footer-col footer-col-2">
				<h6>Menu</h6>
					<?php
					wp_nav_menu(
					array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'           => 'footer-ul',
					)
					);
					?>
        	</div>

        	<div class="footer-col footer-col-3">
				<h6>Legal</h6>
					<?php
					wp_nav_menu(
					array(
					'theme_location' => 'menu-2',
					'menu_class'           => 'footer-ul',
					
					)
					);
					?>
        	</div>
        </div>
        <hr>
    </div>

    <div class="footer-container footer-container-2">
        <div class="footer-row footer-row-2">
          <div class="footer-col footer-col-4">
            <p class="copyright-text">Copyright &copy; All Rights Reserved by 
         <a href="<?php echo get_site_url();?>"> <?php bloginfo()?></a>.
            </p>
          </div>

	<div class="footer-col footer-col-5">
	<?php echo do_shortcode("[footer_icons]"); ?>  
	</div>
</div>
</div>
	
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
