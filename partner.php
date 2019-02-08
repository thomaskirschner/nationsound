	<!--/tesimonials-->
    <div class="tesimonials">
        <div class="wrap_view_agileits">
            <h3 class="head">Partenaires</h3>
            <!-- <p class="head_para">Les partenaires</p>-->
            <div class="inner_section_wthree">
                
                <div class="test_grid_sec">
                    <div class="col-4 col-md-offset-2 col-md-8">
                                <div id="app-3">
                                    <div v-for="post in img">     
                                        <div class="col-sm-3 text-center">
                                            <a target="_blank":href="post.acf.lien_partenaire">
                                                <img width="33%" style="float:left;margin:1.2em" v-bind:src="post.acf.photo_partenaire"  alt=" " class="img-responsive" />
                                        </a>
                                        </div>

                                    </div>  
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
				<!--//tesimonials-->