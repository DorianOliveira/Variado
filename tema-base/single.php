<?php get_header(); ?>
            
           
		               
<?php

	if( have_posts()): 

		while(have_posts()): the_post();
			the_content();  

		endwhile; 
		else : ?>
		
		N�o h� conte�do a ser exibido
		<?php  endif; ?>
                

		   
<?php get_footer(); ?>