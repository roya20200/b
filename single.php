<?php
/**
 * The Template for displaying all single posts.
 *
 * @package unitedthemes
 */

get_header(); ?>

		<div class="grid-container">		
        	
            <?php if( ot_get_option( 'ut_single_posts_sidebar', 'on' ) == 'on' && is_active_sidebar( 'blog-widget-area' ) ) {
                
                $grid = 'grid-75 tablet-grid-100 mobile-grid-100';
                
            } else {
                
                $grid = 'grid-100 tablet-grid-100 mobile-grid-100';     
                
            } ?>
            
            <div id="primary" class="grid-parent <?php echo $grid; ?>">
    
            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part( 'partials/blog/content', get_post_format() ); ?>
    
                <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                ?>
    
            <?php endwhile; // end of the loop. ?>
            
            </div>
        
        	<?php if( ot_get_option( 'ut_single_posts_sidebar', 'on' ) == 'on' && is_active_sidebar( 'blog-widget-area' ) ) {
            
                get_sidebar(); 
            
            } ?>
            
		</div>
		
        <div class="ut-scroll-up-waypoint" data-section="section-<?php echo ut_clean_section_id($post->post_name); ?>"></div>
        
<?php get_footer(); ?>