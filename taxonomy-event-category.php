<?php
/**
 * The template for displaying an event-category page
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

    <!-- This template follows the TwentyEleven theme-->
      <div id="content" class="clearfix row-fluid">

        <div id="main" class="span8 clearfix" role="main">

      <?php if ( have_posts() ) : ?>

        <!---- Page header, display category title-->
        <header class="page-header">
          <h1 class="page-title"><?=single_cat_title( '', false ); ?></h1>

        <!---- If the category has a description display it-->
          <?php
            $category_description = category_description();
            if ( ! empty( $category_description ) )
              echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
          ?>
        </header>
          <?php echo do_shortcode('[otw_is sidebar=otw-sidebar-1]'); ?>
          <?php if ( single_cat_title( '', false ) == 'Kurser &amp; Moduler' ) : ?>
            <div class="accordion" id="courses">
              <?php
                $post_type = $wp->query_vars[ 'post_type' ];
                $tax = 'event-category';
                $tax_terms = get_terms( $tax, array(
                  'hide_empty' => 0,
                  'child_of' => 4,
                  'hierarchical' => 0,
                  'orderby' => 'term_order'
                ));

                //list everything
                if ( $tax_terms ) {
                  foreach ( $tax_terms as $tax_term ) {
                    $args = array (
                      'post_type' => 'events',
                      "$tax" => $tax_term->slug,
                      'post_status' => 'publish',
                      'posts_per_page' => -1
                    );

                    $my_query = null;
                    $my_query = new WP_Query( $args );
                    if( $my_query->have_posts() ) {
                      $previous_title = '';
                      echo "<div class=\"accordion-group\">".
                        "<div class=\"accordion-heading\">".
                        "<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#courses\" ".
                        "href=\"#".$tax_term->slug."\">".$tax_term->name."</a>".
                        "</div>".
                        "<div id=\"".$tax_term->slug."\" class=\"accordion-body collapse out\">".
                        "<div class=\"accordion-inner\">";
                      
                      while ( $my_query->have_posts() ) {
                        $my_query->the_post();
                        if ( get_the_title() == $previous_title ) {
                          continue;
                        } else {
                          $previous_title = get_the_title();
                          echo "<a href=\"".get_permalink()."\" title=\"".the_title_attribute('echo=0')."\">".
                            the_title_attribute('echo=0')."</a>";
                        }
                      }
                      
                      echo "</div>".
                        "</div>".
                        "</div>";
                    }
                    wp_reset_query();
                  }
                }
              ?>
            </div>

          <?php else : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                    
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                  <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                  <div class="entry-meta">
                    <!-- Output the date of the occurrence-->
                    <?php if(eo_is_all_day()):?>
                      <!-- Event is an all day event -->
                      <?php eo_the_start('d F Y'); ?> 
                    <?php else: ?>
                      <!-- Event is not an all day event - display time -->
                      <?php eo_the_start('d F Y g:ia'); ?> 
                    <?php endif; ?>

                    <!-- If the event has a venue saved, display this-->
                    <?php if(eo_get_venue_name()):?>
                      <?php _e('at','eventorganiser');?> <a href="<?php eo_venue_link();?>"><?php eo_venue_name();?></a>
                    <?php endif;?>
                  </div><!-- .entry-meta -->

                </header><!-- .entry-header -->

              </article><!-- #post-<?php the_ID(); ?> -->

            <?php endwhile; ?><!----The Loop ends-->

          <?php endif; ?>

      <?php else : ?>

        <!---- If there are no events -->
        <article id="post-0" class="post no-results not-found">
          <header class="page-header">
            <? print( is_category( 'Onsdagsoplæg' ) ) ?>
            <h1 class="page-title">
              <?php if( single_cat_title( '', false ) == 'Onsdagsoplæg' ) : ?>
                Ingen oplæg
              <?php elseif( single_cat_title( '', false ) == 'Kurser & Moduler' ) : ?>
                Ingen kurser
              <?php endif; ?>
            </h1>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <p>
              <?php if( single_cat_title( '', false ) == 'Onsdagsoplæg' ) : ?>
                Der er i øjeblikket ingen planlagte onsdagsoplæg.
              <?php elseif( single_cat_title( '', false ) == 'Kurser & Moduler' ) : ?>
                Der er i øjeblikket ingen planlagte kurser.
              <?php endif; ?>
            </p>
          </div><!-- .entry-content -->
        </article><!-- #post-0 -->

      <?php endif; ?>

      </div><!-- #main -->
      <?php get_sidebar(); ?>
    </div><!-- #content -->

<!-- Call template sidebar and footer -->
<?php get_footer(); ?>
