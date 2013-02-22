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
			
			<div id="content" class="clearfix row-fluid">
			
				<div class="span4 home-left">
					<img src="<?php bloginfo('template_directory'); ?>/images/ns_indgang.jpg" alt="NEW Skills indgangsparti">
					<h2>Åbent hus</h2>
					<p class="date">Onsdag 6 . marts kl. 9.30</p>
					<p>HVER ANDEN ONSDAG ÅBNER VI DØRENE FOR NUVÆRENDE OG TIDL. KURSISTER, DER HAR BRUG FOR VEJLEDNING
						MED AKTUELLE OPGAVER. KOM SENEST KL. 18.30</p>
				</div>
				<div class="span8 home-right">
					<a href="/kalenderkategorier/kurser">
						<h2>SAMMENSÆT DIT<br>KURSUS HER</h2>
						<p>Eller kontakt os for personlig vejledning på Tlf. 70 21 04 00</p>
					</a>
				</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>