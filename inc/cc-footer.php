	<div class="clear"></div>
	<footer>
		<div class="wrapper">
			<div class="subscribe">
				<h4>Email Sign Up</h4>
				<p>Get the latest news & promotions</p>
				<div class="form-fields">	
					<form class="field-flat dark">
						<input type="text" placeholder="Enter your email here"/>
						<div class="flat-buttons">
							<a href="#" class="btn-flat dark">Sign up</a>
						</div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
			<div class="footer-links">
				<div class="expert">
					<h5>Expert Help</h5>
					<div class="flat-buttons">
						<a href="#" class="btn-flat dark">Chat Now</a>
					</div>
					<h4>1.888.276.7130</h4>
					<a href="#">sales@competitivecyclist.com</a>
					<img src="img/facebook-count.png">
				</div>
				<div class="company">
					<h5>Company</h5>
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Site Map</a></li>
						<li><a href="#">Affiliate Program</a></li>						
					</ul>
				</div>
				<div class="resources">
					<h5>Resources</h5>
					<ul>
						<li><a href="#">Shop By Brand</a></li>
						<li><a href="#">100% Guaranteed Returns</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Fit Calculator</a></li>
						<li><a href="#">Help Center</a></li>
						<li><a href="#">Gift Cards</a></li>	
					</ul>
				</div>
				<div class="social">
					<h5>Social</h5>
					<ul>
						<li><a href="#"><span class="icon icon-cc-icon_facebook-square"></span><span class="name">Facebook</span></a></li>	
						<li><a href="#"><span class="icon icon-cc-icon_google-plus-square"></span><span class="name">YouTube</span></a></li>
						<li><a href="#"><span class="icon icon-cc-icon_twitter-square"></span><span class="name">Instagram</span></a></li>
						<li><a href="#"><span class="icon icon-cc-icon_facebook-square"></span><span class="name">Strava</span></a></li>
						<li><a href="#"><span class="icon icon-cc-icon_twitter-square"></span><span class="name">Twitter</span></a></li>	
					</ul>			
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>		
		<div class="footer-copyright">
			<p class="font-extra-small" style="padding-bottom: 0;">Liberty Media Clan: Backcountry.com - Dogfunk.com - MotoSport</p>
			<p class="font-extra-small" style="padding-top: 0;">©Competitivecyclist.com - All rights reserved.</p>
		</div>
	</footer>
	<div class="modal-container">
		<div class="modal">
			<span class="icon-cc-icon_close close"></span>
			<h3>Sign In</h3>
			<div class="form-fields">
				<form class="field-flat light">
					<label for="text_field">Email</label><br>
					<input type="text" placeholder="">
					<label for="text_field">Password</label><br>
					<input type="text" placeholder="">
					<div class="clear"></div>
					<div class="flat-buttons">
						<a href="#" class="btn-flat dark">Sign In</a>
					</div>
					<a href="#" class="cancel">Cancel</a>
				</form>	
				<div class="clear"></div>	
				<div class="create-account">
					<p>New here? <a href="">Create a new account</a></p>
				</div>
			</div>
			
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="js/hoverIndent.js"></script>
	<script type="text/javascript">
		$('document').ready(function(){
			
			// Menus
			$('.bike-menu').hoverIntent(function() {
				$('.bike').slideToggle("fast");
			});				
			$('.men-menu').hoverIntent(function() {
				$('.men').slideToggle("fast");
			});	
			$('.women-menu').hoverIntent(function() {
				$('.women').slideToggle("fast");
			});	
			$('.components-menu').hoverIntent(function() {
				$('.components').slideToggle("fast");
			});	
			$('.accsssories-menu').hoverIntent(function() {
				$('.access').slideToggle("fast");
			});	
			$('.js-contact-us').click(function() {
				$('.contact-form').slideToggle("fast");
			});	
			$('.js-account-link').click(function() {
				$('.account-form').slideToggle("fast");
			});	
			$('.js-search-input').focus(function() {
				$('.autocomplete').slideToggle("fast");
			});	
			
			// iPad no stick header
			if(WURFL.is_mobile){
				$('.main-header').addClass( "non-fixed-header" );
			}	
			
			// Modal 
			$('.sign-in').click(function(){
				$('.modal-container').show();
			});
			$('.modal .close').click(function(){
				$('.modal-container').hide();
			});
			
			// Mouse leave pop up
/*

			function addEvent(obj, evt, fn) {
			    if (obj.addEventListener) {
			        obj.addEventListener(evt, fn, false);
			    }
			    else if (obj.attachEvent) {
			        obj.attachEvent("on" + evt, fn);
			    }
			}
			addEvent(window,"load",function(e) {
			    addEvent(document, "mouseout", function(e) {
			        e = e ? e : window.event;
			        var from = e.relatedTarget || e.toElement;
			        if (!from || from.nodeName == "HTML") {
						$('.modal-container').show()
			        }
			    });
			});	
			
*/
			
					
		});
	</script>	
</body>
</html>