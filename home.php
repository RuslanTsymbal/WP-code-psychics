<?php get_header(); ?>

<!-- #banner -->

    <section id="banner">
        <div class="container-fluid">
            <div class="banner-text">
                <p>Accurate, Compassionate, Professional & Ethical Psychic Readers.</p>
            </div>
            <div class="banner-img">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/woman.png" alt="Logo">
            </div>
        </div><!-- .container-fluid -->
        <div class="banner-black">
        </div>
    <div class="banner-search">
        <input type="text" placeholder="Search Psychics / Services">
        <button type="submit">
           Find Psychics
        </button>
    </div>
    </section><!-- #banner -->

 <!--  section - #categories -->

    <section id="categories">
        <div class="container-fluid">
            <h2 class="category-title"><?php echo get_cat_name(4);?></h2>
            <span class="category-description">
                <?php echo category_description(4); ?>
            </span>

            <div class="list-categories">
                <?php if (have_posts()) : ?>
                <?php if ( have_posts() ) query_posts('cat=4');
                while (have_posts()) : the_post(); ?>

                    <div class="category">
                        <div class="title-category">
                            <a href="#"><span><?php echo the_title(); ?></span></a>
                        </div>
                        <?php the_post_thumbnail() ?>
                    </div>
                <?php endwhile; endif; ?>
             
            </div><!-- .list-categories -->
        </div><!-- .container-fluid -->
    </section><!-- #categories -->
    
 <!--  section - #featured-psychics -->

    <section id="featured-psychics">
        <div class="container-fluid">
            <h2 class="category-title"><?php echo get_cat_name(6);?></h2>
            <span class="category-description">
                <?php echo category_description(6); ?>
            </span>
            <div class="psychics-list">

                <?php $args = array(
                  'post_type' => 'f_psychics',  
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'post_status' => 'publish',
                  'posts_per_page' => 5, 
                  'paged' => $paged
                );
                query_posts($args); ?>

               <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?> 

                <div class="psychics-cell"> 
                    <div class="psychics-name">
                        <a href="#"><span><span><?php echo the_title(); ?></span></a>
                    </div>
                    <div class="psychics-img">
                        <?php the_post_thumbnail(); ?>
                        <div class="psychics-black"></div>
                        <div class="communicate">
                            <div class="communicate-call">
                                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                <a href="#"><span>Call now</span></a>
                            </div>
                            <div class="communicate-chat">
                                <a href="#">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </a>
                                <a href="#"><span>Let’s chat</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics-description">
                        <div class="psychics-like">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <div class="psychics-text">
                            <?php echo the_content(); ?> 
                        </div>
                        <div class="psychics-prise">
                            <div class="psychics-prise-left">
                                <a href="#">
                                    <span><?php the_field('price_top'); ?></span>
                                    <span><?php the_field('price_bot'); ?></span>
                                </a>
                            </div>
                            <div class="psychics-prise-right">
                                <a href="#" class="fa fa-heart" aria-hidden="true">
                                </a>    
                            </div>
                        </div><!-- .psychics-prise -->
                    </div><!-- .psychics-description -->
                </div><!-- .psychics-cell -->

            <?php endwhile; endif; ?> 
                           
            </div><!-- .psychics-list -->
        </div><!-- .container-fluid -->
    </section><!-- #featured-psychics-->

<!-- section - #popular-psychics -->

    <section id="popular-psychics">
        <div class="container-fluid">    
        <h2 class="category-title"><?php echo get_cat_name(7);?></h2>
        <span class="category-description">
            <?php echo category_description(7); ?>
        </span>
            <div class="psychics-list">
    
                <?php $args = array(
                  'post_type' => 'p_psychics',  
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'post_status' => 'publish',
                  'posts_per_page' => 5, 
                  'paged' => $paged
                );
                query_posts($args); ?>

               <?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?> 
          
                 <div class="psychics-cell"> 
                    <div class="psychics-name">
                        <a href="#"><span><span><?php echo the_title(); ?></span></a>
                    </div>
                    <div class="psychics-img">
                        <?php the_post_thumbnail(); ?>
                        <div class="psychics-black"></div>
                        <div class="communicate">
                            <div class="communicate-call">
                                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                <a href="#"><span>Call now</span></a>
                            </div>
                            <div class="communicate-chat">
                                <a href="#">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </a>
                                <a href="#"><span>Let’s chat</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="psychics-description">
                        <div class="psychics-like">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <div class="psychics-text">
                            <?php echo the_content(); ?> 
                        </div>
                        <div class="psychics-prise">
                            <div class="psychics-prise-left">
                                <a href="#">
                                    <span><?php the_field('price_top'); ?></span>
                                    <span><?php the_field('price_bot'); ?></span>
                                </a>
                            </div>
                            <div class="psychics-prise-right">
                                <a href="#" class="fa fa-heart" aria-hidden="true">
                                </a>    
                            </div>
                        </div><!-- .psychics-prise -->
                    </div><!-- .psychics-description -->
                </div><!-- .psychics-cell -->

                <?php endwhile; endif; ?>     

            </div><!-- .psychics-list -->
            <button type="submit" class="psychics-btn">Browse more Psychics</button>
        </div><!-- .container-fluid -->
    </section><!-- #popular-psychics-->

<!--   section - #stories -->
 
    <section id="stories">
        <div class="container-fluid">    
            <h2 class="category-title">
               <a class="category-link" href="<?php echo get_category_link(3); ?>"><?php echo get_cat_name(3)?></a>
            </h2>
            <span class="category-description">
                <?php echo category_description(3); ?>
            </span>
            <div class="stories-list">

                <?php if (have_posts()) : ?>
                <?php if ( have_posts() ) query_posts('cat=3');
                while (have_posts()) : the_post(); ?>

                    
                  <div class="history">
                        <div class="history-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="history-content">
                            <div class="history-text">
                                <h3><?php echo the_title(); ?></a></h3>
                                <p><?php echo the_content(); ?></p>   
                            </div><!-- .history-text -->
                            <div class="history-date">
                                <span><?php the_field('my_date'); ?></span>
                            </div>
                        </div>
                    </div><!-- .history -->
                <?php endwhile; endif; ?>
                
            </div><!-- .stories-list -->
            <div class="icons-list">
                <a href="#"><div class="icon"></div></a>
                <a href="#"><div class="icon"></div></a>
                <a href="#"><div class="icon"></div></a>
            </div><!-- .icons-list -->
        </div><!-- .container-fluid -->
    </section><!-- #stories -->

<?php get_footer();?>