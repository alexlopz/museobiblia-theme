<?php get_header(); ?>
  <section class="col-xs-12 col-sm-6 col-md-4">
    <h1>Blog</h1>
 
  <?php query_posts("paged=$paged"); ?>
   

     
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class"img-circle img-responsive">
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
  </div> 
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>
 
    <?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>     
          
   
     

     

 
    