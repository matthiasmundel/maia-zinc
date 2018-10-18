<?php /* Template Name: Volle Breite */ ?>
<?php get_header(); ?>


<div class="container mzcontainer">

    <div class="row">
        <div class="col-md-9 thepost">



            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
               <h2>
                          <a href="<?php the_permalink() ?>">

                    <?php the_title(); ?>
                   </a>
            </h2>
            
            
          <?php  
            if ( !is_front_page()||!is_home()){       ?>
                
                
   
            
            
       <h2> <?php the_title() ?> </h2>
 
            
            
            
            
            
                <?php   }   ?>
            
            
        
            
            
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>


        </div>


        <?php get_sidebar(); ?>



    </div>
    <div class="row">
        <div class="thefooter col-md-9">

            <?php dynamic_sidebar( 'sidebar-footer' ); ?>



        </div>
    </div>
 

<?php get_footer(); ?>
