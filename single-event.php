<?php
/**
 * The template for displaying a single event
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. 
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>

  <div id="content" class="clearfix row-fluid">
    <div id="main" class="span8 clearfix" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <header class="entry-header">

            <!-- Display event title -->
            <h1 class="entry-title"><?php the_title(); ?></h1>

          </header><!-- .entry-header -->
  
          <div class="entry-content">
            <!-- The content or the description of the event-->
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'eventorganiser' ) . '</span>', 'after' => '</div>' ) ); ?>
          </div><!-- .entry-content -->

        </article><!-- #post-<?php the_ID(); ?> -->
            
        <?php endwhile; // end of the loop. ?>

      </div><!-- #main -->
      <?php get_sidebar(); ?>
    </div><!-- #content -->

<!-- Call template footer -->
<?php get_footer(); ?>
