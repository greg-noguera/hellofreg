A WordPress theme I developed for freg.online website.

This theme has compatibility with Bootstrap 5.1, Font Awesome, Elementor 3.7 and Jetpack plugin.

You can customize the shortcodes in the footer and blog sections following this instructions:

You can add custom content by adding the following code in the functions.php file or creating a new plugin. It is recommended that you add this code into your child theme's functions.php file. 

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

If you need a custom theme or plugin for WordPress, please go to my site www.freg.online
