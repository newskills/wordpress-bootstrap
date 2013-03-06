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
					<div class="clearfix">
						<h2>Mini CV</h2>
						<p>Hos NEW Skills er vi løbende i dialog med forskellige virksomheder med henblik på,
							at skabe jobåbninger for vores kursister. Et vigtigt element i vores indsats for at
							få vores kursister i job er vores Mini CV	til kursister.</p>
						<a href="" class="pull-right clearfix">Information og download</a>
					</div>

					<h2>Laaang onsdag</h2>
					<p class="date">onsdag 6. marts kl. 9</p>
					<p>Hver anden onsdag åbner vi dørene for nuværende og tidligere kursister, der har brug for vejledning
						med aktuelle opgaver. Kom senest kl. 18.30</p>
				</div>
				<div class="span4 home-two">
					<p>Udtalelser fra kursister.<br>
						Vi dropper overskriften i denne kolonne.</p>
				</div>
				<div class="span4 home-three">
					<?php echo do_shortcode( '[eo_calendar]' ); ?>
				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>