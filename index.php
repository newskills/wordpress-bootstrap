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
			
				<div class="span12">
					<div class="clearfix">
						<h2><span class="light">IT-</span>Afklaring</h2>
						<p>Har du brug for kurser? I løbet af en uge kan du få afklaret dine faglige kompetencer og lavet et
							forslag til en plan for opkvalificerende IT-kurser. Løbende optag med start hver torsdag.</p>
							<a href="/a/it-afklaring/" class="pull-right clearfix">Læs mere om IT-afklaring</a>
					</div>

			</div> <!-- end #content -->

<?php get_footer(); ?>