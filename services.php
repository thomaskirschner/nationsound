<?php require 'header.php'; ?>

					<!-- //menu -->

						<!-- //modal-two -->

					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /banner -->
				<div class="banner_inn_sec"></div>
				<!-- //banner -->

				<!--/services-->
					<div class="services-section">
						<div class="wrap_view_agileits">
							<h3 class="head">Foire aux questions</h3>
							<p class="head_para">Les questions les plus souvent posées</p>
							<div class="inner_section_wthree">
								<div class="col-sm-3">
									<div id="app-4">
										<div v-for="post in faq">
											<div class="col-md-4 services-section-grid">
												<div class="services-section-grid-head">
													<div class="help-icon">
														<span class="fa fa-volume-down" aria-hidden="true"></span>
													</div>

													<div class="service-icon-heading">
														<h4>{{post.acf.question_faq}}</h4><br><br>
													</div>

													<p>{{post.acf.reponse_faq}}</p>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!--//services-->

				<!--/tesimonials-->
				<!--//tesimonials-->
				<!--//footer-->
<?php require 'footer.php'; ?>