<?php require 'header.php'; ?>
					<!-- //menu -->

						<!-- modal -->
						<?php require 'modal.php'; ?>
						<!-- //modal-two -->

					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /banner -->
				<div class="banner_inn_sec">
				</div>
				<!-- //banner -->
				<!--/blog-->
				<div class="services-section">
					<div class="wrap_view_agileits">
						<h3 class="head">Les dernières informations</h3>
						<p class="head_para">Retrouvez en direct toutes les informations concernant le festival.</p>
						<div class="inner_section_wthree">
							<div class="col-md-8 blog_section">
								<div class="blog_img">
									<div id="app-3">
										<div v-for="post in news">  

										<a href="single.php"><img v-bind:src="post.acf.image_" alt=" " class="img-responsive"></a>
												<div class="col-md-2 blog_date">
													<h4>{{post.acf.horaire}}</h4>
												</div>
												<div class="col-md-6 blog_info">

													<h3><b>{{post.acf.titre}}</b></h3>

												</div>
												<div class="clearfix"> </div>
												<p>{{post.acf.contenu}}</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!--//blog-->
				<!--//footer-->
<?php require 'footer.php'; ?>