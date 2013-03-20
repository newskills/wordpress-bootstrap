<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>
			<div class="clearfix row-fluid">
				<div class="hero-unit clearfix">
				
          <h1>Hero not in use</h1>
        
				</div>
			</div>
			<?php
				}
			?>
			
			<div id="content" class="clearfix row-fluid home-content">
			
				<div class="span4 home-one">
					<?php echo do_shortcode('[otw_is sidebar=otw-sidebar-4]'); ?>
				</div>
				<div class="span4 home-two">
					<?php echo do_shortcode('[otw_is sidebar=otw-sidebar-5]'); ?>
				</div>
				<div class="span4 home-three">
					<?php echo do_shortcode('[otw_is sidebar=otw-sidebar-6]'); ?>
				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>