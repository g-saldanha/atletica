<?php
/**
 * @package SKT Magazine
 */
?>
 <div class="lists_cats">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">  
          <?php if (has_post_thumbnail() ){ ?>
			<div class="catThumb">
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		   <?php }  ?>            
        </header><!-- .entry-header -->  
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary contentCAT">
        	<h5><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                    <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
                    <div class="post-comment"><?php comments_popup_link( __('0 Comentário', 'skt-magazine'), __('1 Comentário', 'skt-magazine'), __('% Comentários', 'skt-magazine'), '', __('Comentários fechados' , 'skt-magazine')); ?></div>
                </div><!-- postmeta -->
            <?php endif; ?>
           	<?php echo skt_magazine_content('15'); ?>
            <span class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('Leia Mais &raquo;','skt-magazine'); ?></a></span>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue lendo <span class="meta-nav">&rarr;</span>', 'skt-magazine' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Páginas:', 'skt-magazine' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clear"></div>
    </article><!-- #post-## -->
</div><!-- blog-post-repeat -->