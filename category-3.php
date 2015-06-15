

<?php get_header(); ?>



<!--principal--> 

<div id="main">

<!--portada--> 

<div id="sticky-snip"> 
  <section id="inicio" data-type="parallax_section" data-speed="10">
    <article id="home" class="article">
      <div class="col-xs-12 col-md-6 big-logo-container">
      <h1 class="big-logo"><img class="img-responsive" src="http://teknigt.com/proyectos/images/logo_museo.png" alt="Responsive image" /></h1>
      </div>

      <div class="col-xs-12 col-md-6">



      
      <div><?php echo category_description(3); ?></div> 



      </div>

    </article>

  </section>

</div>

<!-- end portada-->

<!-- Colecciones -->   

  <section id="colecciones" data-type="parallax_section" data-speed="10">

    <article id="colection" class="article">

       <h2 id="cat_name"><?php single_cat_title( $prefix = '', $display = true ); ?></h2>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       

      <div class="col-xs-12 col-sm-6 col-md-4 col">



        

         <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?></a>

         

          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      </div>



    <?php endwhile; ?>

<!-- Add the pagination functions here. -->

<!-- End of the main loop -->

      <?php else : ?>

    <?php endif; ?>   



        

        <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>

    </article>

        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>

</section>

 <!-- end Colecciones -->    

  



<?php get_footer();?>





