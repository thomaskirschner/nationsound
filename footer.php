<div class="footer">
					<div class="wrap_view_agileits">
						<div class="footer_grids_w3ls">
							<div class="col-md-3 footer_grid_left_w3_agileits">
								<div class="footer_grid_left_w3_agileitsl">
									<a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
								</div>
								<div class="footer_grid_left_w3_agileitsr">
									<h4>Twitter</h4>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 footer_grid_left_w3_agileits">
								<div class="footer_grid_left_w3_agileitsl">
									<a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
								</div>
								<div class="footer_grid_left_w3_agileitsr">
									<h4>Facebook</h4>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 footer_grid_left_w3_agileits">
								<div class="footer_grid_left_w3_agileitsl">
									<a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
								</div>
								<div class="footer_grid_left_w3_agileitsr">
									<h4>Google+</h4>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="col-md-3 footer_grid_left_w3_agileits">
								<div class="footer_grid_left_w3_agileitsl">
									<a href="#"><span class="fa fa-youtube" aria-hidden="true"></span></a>
								</div>
								<div class="footer_grid_left_w3_agileitsr">
									<h4>Youtube</h4>

								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="pro-menu footer_nav">
						<ul>
								<li><a class="active" href="main.php">Accueil</a></li>
                                <li><a href="blog.php">Informations</a></li>
                                <li><a href="map.php">Carte</a></li>
								<li><a href="projects.php">Programmes</a></li>
                                <li><a href="services.php">FAQ</a></li>
								<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<div class="footer_pos_w3_agile">
						<p>© 2018 Privy App. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
				<!--//footer-->

			</div>
		</div>
	</div>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--script-->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/bigSlide.js"></script>
	<script>
		$(document).ready(function () {
			$('.menu-link').bigSlide();
		});
	</script>
	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		var app3 = new Vue({
			el: '#app-3',
			data: {
				seen: true,
				posts: [],
				img: []	
			},
			mounted(){this.recuperePosts();this.recuperePosts2()},
			methods:{
				recuperePosts: function() {
					vm = this
					fetch('https://valentinriaud.com/nation-sound/wp-json/acf/v3/artistes/?per_page=100')
					.then(function(response){
						response.json()
						.then(function(response){
							console.log("app3")
							console.log(response)
							vm.posts = response


						})    
					})
					
				},
				recuperePosts2: function() {
					vm = this
					fetch('https://valentinriaud.com/nation-sound/wp-json/acf/v3/partenaires/?per_page=100')
					.then(function(response){
						response.json()
						.then(function(response){
							console.log(response)
							vm.img = response


						})    
					})
					
				}
			}
			
		})
	</script>
<!--<script>
		var app4 = new Vue({
			el: '#app-4',
			data: {
				seen: true,
				faq: []	
			},
			mounted(){this.recuperePosts();this.recuperePosts2()},
			methods:{
				recuperePosts: function() {
					vm = this
					fetch('https://valentinriaud.com/nation-sound/wp-json/acf/v3/faq')
					.then(function(response){
						response.json()
						.then(function(response){
							console.log("app3")
							console.log(response)
							vm.faq = response


						})    
					})
					
				}
			}
			
		})
		
	</script>-->
	<script>
		$(document).ready(function () {
			$('.popup-top-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!--//pop-up-box -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>