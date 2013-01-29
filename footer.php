			<footer role="contentinfo">
			
				<div id="inner-footer" class="clearfix">
		      <hr />
					<div style="margin-bottom: 1.8em">
            <span style="padding: 0 10px">NEW Skills A/S</span> &bullet;
            <span style="padding: 0 10px">Rebslagervej 8-16</span> &bullet;
            <span style="padding: 0 10px">2400 København NV</span> &bullet;
            <span style="padding: 0 10px">+45 70 21 04 00</span> &bullet;
            <span style="padding: 0 10px">
            	<a href="mailto:info@newskills.dk">info@newskills.dk</a>
            </span>
          </div>
          
          <div id="widget-footer" class="clearfix">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
            <?php endif; ?>
          </div>
			
					<nav class="clearfix">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
					
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>