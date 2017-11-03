<?php get_header(); ?>


<div class="container">
	
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    	
        <div class="post" id="post-<?php the_ID(); ?>">
        
			<p class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></p>
        
        	<div class="entry">
        
        		<?php the_content(); ?>
                
                	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                
				
	
    		</div><!--end entry-->
            
            <div class="commentimg"></div><!--end commentimg-->
            <div class="comments-template">
				
				<?php comments_template(); ?>
			
            </div><!--end comments-template-->
        
        </div><!--end post-->
    
	<?php endwhile; ?>
    

    
    <?php else : ?>
		
        <div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
    
	<?php endif; ?>

</div><!--end container-->
    <div class="navigation">
    	<p class="green">
			<?php previous_post_link(' &larr;&#47; %link &#47;') ?> &#151; <?php next_post_link('&#47; %link &#47;&rarr;') ?>
		</p>
	</div>

<?php get_footer(); ?>