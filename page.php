<?php get_header(); ?>   
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
			<section class="content">
				<?php the_content();   ?>			 
			 </section>
<?php endwhile; ?>    
<?php else : ?>
		<div class="not_found">
			<h2>  <?php _e('Не знайдено'); ?>    </h2> 
		</div>   
<?php endif; ?>    
<?php get_footer(); ?>  