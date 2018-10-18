<?php get_header(); ?>


<div class="container mzcontainer">

    <div class="row">
        <div class="col-md-8 thepost">



            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <div class="entry">
                <?php the_content(); ?>
                
            </div>
            <div style="clear:both"></div>
            <?php endwhile; endif; ?>


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
