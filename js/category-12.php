

 <div id="sticky-snip">
Esta es la categoria prueba!
</div>
   
     
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2 id="cat_name"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>
    <?php endwhile; ?>
    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
    <div class"img-circle img-responsive">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <hr>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
  </div> 
  <section class="col-xs-12 col-sm-6 col-md-4">
<!-- Add the pagination functions here. -->
<!-- End of the main loop -->
<?php else : ?>
<?php endif; ?>   

<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>