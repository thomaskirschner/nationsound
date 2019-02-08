<!doctype html>
<html lang="en">
<head>
    <title>Interactive Map</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
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
						<div class="error_page">
						<div id="app" class="container">
                <div class="row">

                        <div class="col-md-9">
                          <!-- The map goes here -->
                          <div id="map" class="map"></div>
                        </div>
                    
                        <div class="col-md-3">
                          <!-- The layer checkboxes go here -->
                       
                          <div class="form-check" v-for="layer in layers" :key="layer.id">
  <!-- label and input elements go here -->
  <label class="form-check-label">
        <input
          class="form-check-input"
          type="checkbox"
          v-model="layer.active"
          @change="layerChanged(layer.id, layer.active)"
        />
        {{ layer.name }}
      </label>
</div>
                        </div>
                    
                      </div><!-- The rest of the app goes here -->
                      
              </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
        <script src="js/app.js"></script>
							<a class="b-home" href="main.php">Back to Home</a>

						</div>

					</div>
				</div>
				<!--//blog-->
				<!--//footer-->
<?php require 'footer.php'; ?>
</body>