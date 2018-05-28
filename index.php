<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'complement/head.php'; ?>
</head>
  <body>  
    <!-- Header Section Start -->
      <div class="header">    
        <!-- Start intro section -->
        <section id="intro" class="section-intro">
          <?php include 'complement/header.php'; ?>
          <!-- Header Section End -->    
          <div class="search-container">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1>Trouver un candidat pour votre besoin</h1> <br> <br>
                  <div class="content">
                    <form method="POST" action="#">
                      <div class="row">
                        <div class="col-md-2 col-sm-6">
                          <div class="form-group">
                            <div class="search-category-container">
                              <label class="styled-select">
                                <select class="dropdown-product selectpicker" name="Niveau d'étude">
                                  <option value="Qualifiant">Qualifiant</option>
                                  <option value="Niveau Bac">Niveau Bac</option>
                                  <option value="Bac">Bac</option>
                                  <option value="Bac +2">Bac +2</option>
                                  <option value="Bac +3">Bac +3</option>
                                  <option value="Bac +4">Bac +4</option>
                                  <option value="Bac +5">Bac +5</option>
                                </select>
                              </label>
                            </div>
                              <!--                        
                            <input class="form-control" type="text" placeholder="job title / keywords / company name">
                            <i class="ti-time"></i> 
                              -->
                          </div>
                        </div>
                            <div class="col-md-3 col-sm-6">
                              <label class="styled-select">
                                <select class="dropdown-product selectpicker" name="Fonction">
                                  <option value="Comptabilité / Audit">Comptabilité / Audit</option>
                                  <option value="Relation Publiques">Relation Publiques</option>
                                  <option value="Assurance">Assurance</option>
                                  <option value="Agriculture">Agriculture</option>
                                  <option value="Architecture">Architecture</option>
                                  <option value="Informatique">Informatique</option>
                                  <option value="Immobilier">Immobilier</option>
                                  <option value="Banque / Finance">Banque / Finance</option>
                                  <option value="Education">Education</option>
                                  <option value="Sport / Divertissement">Sport / Divertissement</option>
                                  <option value="Publication / Impression">Publication / Impression</option>
                                  <option value="Industrie">Industrie</option>
                                  <option value="Transport / Logistique">Transport / Logistique</option>
                                  <option value="Tourisme / Restauration">Tourisme / Restauration</option>
                                  <option value="Télécommunication">Télécommunication</option>
                                  <option value="RH">RH</option>
                                  <option value="Autre...">Autre...</option>
                                </select>
                              </label>
                              <!--<div class="form-group">
                                <input class="form-control" type="email" placeholder="city / province / zip code">
                                <i class="ti-location-pin"></i>
                              </div>-->
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="search-category-container">
                                <label class="styled-select">
                                  <select class="dropdown-product selectpicker" name="Experience">
                                    <option value="Entre 0 et 6 mois">Entre 0 et 6 mois</option>
                                    <option value="Entre 6 et 12 mois">Entre 6 et 12 mois</option>
                                    <option value="Entre 1 et 2 ans">Entre 1 et 2 ans</option>
                                    <option value="Plus que 2 ans">Plus que 2 ans</option>
                                  </select>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="search-category-container">
                                <label class="styled-select">
                                  <select class="dropdown-product selectpicker" name="Type de Formation">
                                    <option value="Demande d'Emploie">Emploie</option>
                                    <option value="Demande de Stage">Stage</option>
                                    <option value="Formation">Formation</option>
                                  </select>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                              <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                            </div>
                          </div>
                    </form>
                  </div>
                  <!--
                  <div class="popular-jobs">
                    <b>Popular Keywords: </b>
                    <a href="#">Web Design</a>
                    <a href="#">Manager</a>
                    <a href="#">Programming</a>
                  </div>
                  -->
                </div>
              </div>
            </div>
          </div>
        </section>
    <!-- end intro section -->
    </div>
    <!-- Find Job Section Start -->
    <section class="find-job section">
      <div class="container">
        <h2 class="section-title">Candidats</h2>
        <div class="row">
          <div class="col-md-12">
             <iframe style="top: -1100px;" src="http://localhost/kassimi/profile.php" width="100%" scrolling="yes" frameborder="0" height="800">   
             </iframe>
          </div>
        </div>
    </section>
    <!-- Find Job Section End -->
    <!-- Featured Jobs Section Start -->
    <!--
    <section class="featured-jobs section">
      <div class="container">
        <h2 class="section-title">
          Featured Jobs
        </h2>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                      <img src="assets/img/features/img-1.jpg" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html">Graphic Designer</a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i> Dallas, United States</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 4 months ago</span>
                <span><i class="ti-time"></i> Full Time</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                      <img src="assets/img/features/img-2.jpg" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html">Software Engineer</a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i> Delaware, United States</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 5 months ago</span>
                <span><i class="ti-time"></i> Part Time</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                      <img src="assets/img/features/img-3.jpg" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html">Managing Director</a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i> NY, United States</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 3 months ago</span>
                <span><i class="ti-time"></i> Full Time</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                      <img src="assets/img/features/img-3.jpg" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html">Graphic Designer</a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i> Washington, United States</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 1 months ago</span>
                <span><i class="ti-time"></i> Part Time</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                      <img src="assets/img/features/img-2.jpg" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html">Software Engineer</a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i> Dallas, United States</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 6 months ago</span>
                <span><i class="ti-time"></i> Full Time</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="featured-item">
              <div class="featured-wrap">
                <div class="featured-inner">
                  <figure class="item-thumb">
                    <a class="hover-effect" href="job-page.html">
                      <img src="assets/img/features/img-1.jpg" alt="">
                    </a>
                  </figure>
                  <div class="item-body">
                    <h3 class="job-title"><a href="job-page.html">Managing Director</a></h3>
                    <div class="adderess"><i class="ti-location-pin"></i> NY, United States</div>
                  </div>
                </div>
              </div>
              <div class="item-foot">
                <span><i class="ti-calendar"></i> 7 months ago</span>
                <span><i class="ti-time"></i> Part Time</span>
                <div class="view-iocn">
                  <a href="job-page.html"><i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  -->
    <!-- Featured Jobs Section End -->

    <!-- Start Purchase Section -->
    <section class="section purchase" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="section-content text-center">
            <h1 class="title-text">
             Besoin d'un Travail ? 
            </h1>
            <a href="registration.php" class="btn btn-common">Rejoignez nous</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Purchase Section -->
    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info text-center">
                <p>© 2018 - Khed.ma Tous droits réservés, MADE WITH HOPE</p>
              </div>   
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->
    </footer>
    <!-- Footer Section End -->  
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="ti-arrow-up"></i>
    </a>
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>    
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>    
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
  </body>
</html>