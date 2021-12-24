You can customize the shortcodes present in the footer and blog sections following this instructions.

You can add custom content by adding the following code in the functions.php file or creating a new plugin whit the same code. It is recommended that you add this code into your child theme's functions.php file.

-- STAR OF CODE - copy what comes next -- 

// I know it's a very lazy way to add content, I'm so sorry.

//This shortcode print the social media icons in the footer section
function lazy_footer_icons() {
    return 	
	'<ul class="social-icons">
	<li><a class="instagram-icon" href=" INSERT YOUR CUSTOM LINK HERE  "><i class="fa fa-instagram"></i></a></li>
	<li><a class="linkedin-icon" href="  INSERT YOUR CUSTOM LINK HERE  "><i class="fa fa-linkedin"></i></a></li>  
	</ul>';
}

add_shortcode('footer_icons', 'lazy_footer_icons');

//This shortcode print a paragraph in the hero blog section
function lazy_blog_p_hero() {
    return 	
	'<p class="p-hero-blog"> INSERT YOUR CUSTOM TEXT HERE </p>';
}

add_shortcode('blog-p-hero', 'lazy_blog_p_hero');

-- END OF CODE--

This feature has been lazily added because it was not necessary for the original project and is shared as an additional feature.

If you need a custom theme or plugin go to www.freg.online