

 <?php wp_head(); ?>

<div class="">

  <div class="">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		



	  	<article>





				<div class="date"><?php the_date();?> en <span><?php the_category();?></span></div>

				<hgroup><h2><?php the_title();?></h2></hgroup>

				<div class="extract"><?php the_content();?></div>

			</article>



	<?php endwhile; else: ?>

		<p><?php _e('Lo siento, la página no existe.'); ?></p>

	<?php endif; ?>



	

 

 

  </div>

  

</div>

 

