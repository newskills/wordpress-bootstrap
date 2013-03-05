<?php
/**
 * The template for displaying lists of events
 *
 * Queries to do with events will default to this template if a more appropriate template cannot be found
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
    <div id="main" class="span8 clearfix ns-calendar" role="main">

      <?php if ( have_posts() ) : ?>

        <!---- Page header-->
        <header class="page-header">
          <h1 class="page-title">Kalender</h1>
        </header>

        <!---- Navigate between pages-->
        <!---- In TwentyEleven theme this is done by twentyeleven_content_nav-->
        <?php 
        global $wp_query;
        if ( $wp_query->max_num_pages > 1 ) : ?>
          <nav id="nav-above">
            <div class="nav-next events-nav-newer"><?php next_posts_link( __( 'Later events <span class="meta-nav">&rarr;</span>' , 'eventorganiser' ) ); ?></div>
            <div class="nav-previous events-nav-newer"><?php previous_posts_link( __( ' <span class="meta-nav">&larr;</span> Newer events', 'eventorganiser' ) ); ?></div>
          </nav><!-- #nav-above -->
        <?php endif; ?>

        <?php
          // Set the stage
          $startdate = $wp_query->query_vars['startdate'];

          /* Start the Loop */
        ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            // If startdate is set we simply skip the current run if not getting a match
            if( $startdate && $startdate != eo_get_the_start('Y-m-d') )
              continue;

            // Spit out the month every time we encounter a new one
            if ( !$current_month || ( $current_month != eo_get_the_start('F') ) ) {
              if ( $current_month != eo_get_the_start('F') ) {
                $previous_month == $current_month;
              }
              $current_month = eo_get_the_start('F');
              echo "<h2>" . $current_month . "</h2>";
            }

            // Spit out the day every time we encounter a new one
            if ( !$current_day || ( $current_day != eo_get_the_start('dmy') ) ) {
              if ( $current_day != eo_get_the_start('dmy') ) {
                $previous_day == $current_day;                
              }
              $current_day = eo_get_the_start('dmy');
              echo "<h3>" . eo_get_the_start('l j.') . "</h3>";
            }
          ?>

          <h4>
            <!-- style="color: <?=eo_get_event_color() ?> -->
            <span class="time"><?php eo_the_start('h:i') ?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h4>
     
          <?php endwhile; ?><!----The Loop ends-->

        <!---- Navigate between pages-->
        <?php 
        if ( $wp_query->max_num_pages > 1 ) : ?>
          <nav id="nav-below">
            <div class="nav-next events-nav-newer"><?php next_posts_link( __( 'Later events <span class="meta-nav">&larr;</span>' , 'eventorganiser' ) ); ?></div>
            <div class="nav-previous events-nav-newer"><?php previous_posts_link( __( ' <span class="meta-nav">&rarr;</span> Newer events', 'eventorganiser' ) ); ?></div>
          </nav><!-- #nav-below -->
        <?php endif; ?>

      <?php else : ?>
        <!---- If there are no events -->
        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'eventorganiser' ); ?></h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p><?php _e( 'Apologies, but no results were found for the requested archive', 'eventorganiser' ); ?></p>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->

      <?php endif; ?>

      </div><!-- #main -->
    <?php get_sidebar(); ?>
  </div><!-- #content -->

<!-- Call template footer -->
<?php get_footer(); ?>
