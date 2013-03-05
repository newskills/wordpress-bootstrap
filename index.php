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
					<h2>Laaang<br>
						onsdag</h2>
					<p class="date">Onsdag 6 . marts kl. 9.30</p>
					<p>Hver anden onsdag åbner vi dørene for nuværende og tidligere kursister, der har brug for vejledning
						med aktuelle opgaver. Kom senest kl. 18.30</p>
				</div>
				<div class="span4 home-two">
					<h2>Testimonials</h2>
					<p>Udtalelser fra kursister</p>
				</div>
				<div class="span4 home-three">
					<?php echo do_shortcode( '[eo_calendar]' ); ?>
				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>