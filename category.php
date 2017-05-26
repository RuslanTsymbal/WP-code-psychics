
<?php get_header(); ?>

<div class="viev-cotegory">
   <div class="container-fluid"> 

		<?php $recent = new WP_Query("cat=3&showposts=4"); while($recent->have_posts()) : $recent->the_post();?>

				<div class="history">
               <div class="history-img col-lg-4 col-md-4 col-sm-4">
                  <?php the_post_thumbnail(); ?>
               </div>
               <div class="history-content col-lg-8 col-md-8 col-sm-8">
                  <div class="history-text">
                     <h3><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                     <p><?php echo the_content(); ?></p>   
                  </div><!-- .history-text -->
                  <div class="history-date">
                     <span><?php the_field('my_date'); ?></span>
                  </div>
               </div>
            </div><!-- .history -->

		<?php endwhile; ?>
	</div><!-- .container-fluid -->
</div><!-- .viev-cotegory -->

<?php get_footer(); ?>