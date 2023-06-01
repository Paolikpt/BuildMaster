
@extends('layouts.auth')
<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nos projets</h2>
          
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active"></li>
            <li data-filter=".filter-remodeling">Remodelage</li>
            <li data-filter=".filter-construction">Construction</li>
          </ul>
          <!-- End Projects Filters -->
<!-- Remodelage 1 -->
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
              </div>
            </div><!-- End Projects Item -->
<!-- Constrution 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">                                
              </div>
            </div><!-- End Projects Item -->
<!-- Remodelage 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
              </div>
            </div><!-- End Projects Item -->
<!-- Constrution 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
              </div>
            </div><!-- End Projects Item -->
<!-- Remodelage 3 -->        
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
              </div>
            </div><!-- End Projects Item -->
<!-- Constrution 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
              </div>
            </div><!-- End Projects Item -->
            

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->
