<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Magazine
 */

get_header(); ?>

<div class="container">
     <div class="page_content">
     <?php get_sidebar('left');?>
        <section class="site-main">
            <header class="page-header">
				<h1 class="entry-title"><?php single_cat_title('Category: '); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
                <?php 
				// Previous/next post navigation.
				the_posts_pagination( array(
					'mid_size' => 2,
					'prev_text' => __( 'Back', 'skt-magazine' ),
					'next_text' => __( 'Next', 'skt-magazine' ),
					'screen_reader_text' => __( 'Posts navigation', 'skt-magazine' )
				) ); 
				?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
            <div class="clear"></div>
       </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>