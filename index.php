<?php get_header(); ?>

<div class="container">
    
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    	
        <div class="post" id="post-<?php the_ID(); ?>">
        	
			<div class="posttitle">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a>
            <small><?php the_time('j M Y') ?></small>
            
            </div>
        	
            <div class="entry">
        
        		<?php the_content(); ?>
                
				<p class="postmetadata">
					 <?php _e('av'); ?> <?php  the_author(); ?><br />

<?php comments_popup_link('Inga kommentarer', '1 kommentar', '% Kommentarer'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>

				</p>
	
    		</div><!--end entry-->
        
        </div><!--end post-->
    
	<?php endwhile; ?>
    
    <div class="navigation">
<?php posts_nav_link(); ?>
</div>
    
    <?php else : ?>
		
        <div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
    
	<?php endif; ?>

</div><!--end container-->

<?php get_footer(); ?>