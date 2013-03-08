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
						<h2><span class="light">IT</span>afklaring</h2>
						<p>Har du brug for kurser? Få i løbet af en uge afklaret din faglige kompetencer og lavet et
							forslag til en plan for opkvalificerende IT-kurser. Løbende optag med start hver torsdag.</p>
							<a href="/a/it-afklaring/" class="pull-right clearfix">Læs mere om IT-afklaring</a>
					</div>

					<h2><span class="light">Laaang</span>onsdag</h2>
					<p class="date">onsdag 20. marts kl. 9</p>
					<p>Hver anden onsdag åbner vi dørene for nuværende og tidligere kursister, der har brug for vejledning
						med aktuelle opgaver. Kom senest kl. 18.30</p>
				</div>
				<div class="span4 home-two">
					<h2>Testimonials</h2>
					<p class="testimonial"><em>”Super godt sted og rigtig god undervisning. Det her giver mig helt klart
						bedre muligheder for at få et job”</em>
						<span>- Peter, <a href="/a/medielab">MedieLAB</a></span>
					</p>

					<p class="testimonial"><em>”Tak for to go'e og inspirerende måneder hos jer - jeg er godt rustet til at
						søge flere forskellige typer jobs nu - indenfor webkommunikation.”</em>
						<span>- Ina, <a href="/a/webkommunikation-cms">Webkommunikation og CMS</a></span>
					</p>

					<p class="testimonial"><em>”Det er ligesom at komme på arbejde og møde ens søde kollegaer, man får input
						og her er altid nogen at sparre med”</em>
						<span>-	Anne, <a href="/a/online-marketing-og-sociale-medier">Online Marketing og Sociale Medier</a></span>
					</p>
				</div>
				<div class="span4 home-three">
					<?php echo do_shortcode( '[eo_calendar]' ); ?>
				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>