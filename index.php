<?php get_header(); ?>


<div class="container mzcontainer">

    <div class="row">
        <div class="col-md-8 thepost">
            
            
            <?php dynamic_sidebar( 'greetings' ); ?>



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
                
                
                  <p><?php the_tags(); ?></p>
            </div>
            <?php endwhile; endif; ?>


        </div>


        <?php get_sidebar(); ?>



    </div>
    
        <hr /> 
    <div class="row">
        <div class="thefooter col-md-9">

            <?php dynamic_sidebar( 'sidebar-footer' ); ?>



        </div>
        
        <div class="thefooter col-md-3">
        
        <?php echo do_shortcode( '[instagram-feed]' ); ?>
        
        
    </div>  </div>
 

<?php get_footer(); ?>
