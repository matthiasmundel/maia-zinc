<?php get_header(); ?>


<div class="container mzcontainer">

    <div class="row">
        <div class="col-md-8 thepost">



                <div id="main">
      <?php if (have_posts()) : ?>
         <h1 class="info">Searching for <strong><?php echo $s ?></strong></h1>
       
         <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="entry">
               <?php the_excerpt(); ?>
            </div>
         <?php endwhile; ?>
       
         <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
          
      <?php else : ?>
         <h2>Leider nichts gefunden</h2>
       
      <?php endif; ?>
   </div><!-- main -->
            
            
        </div>
    
   <div id="sidebar">
      <?php get_sidebar(); ?>
   </div><!-- sidebar --> 

        <?php get_sidebar(); ?>



    </div>
    <div class="row">
        <div class="thefooter col-md-9">

            <?php dynamic_sidebar( 'sidebar-footer' ); ?>



        </div>
    </div>
 

<?php get_footer(); ?>
