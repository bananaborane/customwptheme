<?php
    get_header();
    // this file is responsible for single blog posts
?>
    
 
		<article class="content px-3 py-5 p-md-5">
	   
		<?php
			if (have_posts()){
				while(have_posts()){
                    
					the_post();

                    get_template_part('template-parts/content', 'article');
                    // built in function above goes through directory and finds content-article

				} 
			}
		?>

	    </article>

    
    </div>
    

<?php
	get_footer();
?>
    
