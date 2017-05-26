<?php get_header(); ?>


<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>


	<div class="content-page">
			<div class="container-fluid">
				<div class="history">
            <div class="history-img col-lg-4 col-md-4 col-sm-4">
                <?php the_post_thumbnail( $attr ); ?>
             </div>
             <div class="history-content col-lg-8 col-md-8 col-sm-8">
                 <div class="history-text">
                     <h3><?php echo the_title(); ?></a></h3>
                     <p><?php echo the_content(); ?></p>   
                 </div><!-- .history-text -->
                 <div class="history-date">
                     <span><?php the_field('my_date'); ?></span>
                 </div>
             </div>
        </div><!-- .history -->
			
<?php 
		if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
	endwhile; /* rewind or continue if all posts have been fetched */ ?>
<?php else : ?>
<?php endif; ?>

		</div><!-- .container-fluid -->
   </div><!-- .content-page -->
	
	





<?php get_footer();
