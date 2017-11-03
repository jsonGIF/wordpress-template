<?php get_header(); ?>


<div class="container">
	
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    	
        <div class="post" id="post-<?php the_ID(); ?>">
        
			<a class="posttitle" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a>
        
        	<div class="entry">
        
        		<?php the_content(); ?>
                
                	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                    
                    <?php edit_post_link('Edit', '<p>', '</p>'); ?>

    		</div><!--end entry-->
        
        </div><!--end post-->
    
	<?php endwhile; ?>
    
    <?php else : ?>
		
        <div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
    
	<?php endif; ?>

</div><!--end container-->

<?php get_footer(); ?>