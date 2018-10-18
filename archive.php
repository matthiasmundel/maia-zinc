<?php get_header(); ?>


<div class="container mzcontainer">

    <div class="row">
        <div class="col-md-8 thepost">
            
           <h1><?php single_cat_title(''); ?></h1>



            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2>
                 <small class="text-muted">  <?php the_date(); ?><br /></small>
                <a href="<?php the_permalink() ?>">
                    <?php the_title(); ?>
                </a>
                
               
                
            </h2>
            
            
            
            <div class="entry">
              <?php the_excerpt(); ?>

            </div>

            
            
            <div style="clear:both"></div>
            <?php endwhile; endif; ?>

           
            <p>
                <?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
            </p>

        </div>




        <?php get_sidebar(); ?>



    </div>
    
    <hr /> 
    
    
    <div class="row">
        <div class="thefooter col-md-9">

            <?php dynamic_sidebar( 'sidebar-footer' ); ?>



        </div>
    </div>
</div>


<?php get_footer(); ?>
