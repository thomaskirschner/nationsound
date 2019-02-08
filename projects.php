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
						<h3 class="head">Le programme</h3>
						<p class="head_para">Tous les artistes présents lors de l'édition de ce festival</p>
						<div class="inner_section_wthree">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home-main" id="home-tab" role="tab" data-toggle="tab" aria-controls="home-main" aria-expanded="true">Tout montrer</a></li>
									<li role="presentation"><a href="#06-07-2019'" role="tab" id="learning-tab" data-toggle="tab" aria-controls="learning">Jeudi</a></li>
									<li role="presentation"><a href="#07-07-2019'" role="tab" id="playing-tab" data-toggle="tab" aria-controls="playing">Vendredi</a></li>
									<li role="presentation"><a href="#08-07-2019'" role="tab" id="painting-tab" data-toggle="tab" aria-controls="painting">Samedi</a></li>
								</ul>
								
								<div id="myTabContent" class="tab-content">
									
									<div role="tabpanel" class="tab-pane fade in active" :id="post.acf.jour" aria-labelledby="home-tab">
										<div class="gal_tab_img">
											<div class="col-sm-3">
												<div id="app-3">
													<div class="gallery-info" v-for="post in posts">
														<div class="demo">
															<a class="cm-overlay" id="ligne" type="button" data-toggle="modal" :data-target="'#' + post.id">
																<figure class="imghvr-shutter-in-out-diag-2"><img v-bind:src="post.acf.image" alt=" " class="img-responsive" />
																</figure>
															</a>

															<!---Modal de description-->

															<div class="modal fade" :id="post.id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalLabel"></h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																		<img width="40%" v-bind:src="post.acf.image"/><h3><strong>{{post.acf.artiste}}</strong></h3><br><br>
																				
																		<strong>Horaires : {{post.acf.horaire}}</strong><br>
																		<strong>Emplacement : {{post.acf.scene}}</strong><br>
																		<strong>Type : {{post.acf.type}}</strong><br><br>
																		<strong>Description :</strong> {{post.acf.contenu}}<br>
																		<iframe width="50%" height="50%" :src="post.acf.video" frameborder="0" allow="accelerometer; gyroscope; picture-in-picture" allowfullscreen></iframe>
																	</p>
																		</div>
																		<div class="modal-footer">
																			
																			<button type="button" class="btn btn-secondary" id="retry" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
															<!-----  Fin de Modal de description ----->
														</div>
														<h4>{{post.acf.artiste}}</h4><br>
														<h5>{{post.acf.scene}} - {{post.acf.jour}}</h5><br><br>
													</div>
												</div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						

					</div>
				</div>
				
				<!--//blog-->
				<!--//footer-->
<?php require 'footer.php'; ?>