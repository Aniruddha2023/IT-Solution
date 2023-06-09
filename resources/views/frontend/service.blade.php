<x-frontend.layouts.master>
    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Our Services</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Our Services</li>
              </ol>
            </div>
    
          </div>
        </section><!-- End Our Services Section -->
    
        <!-- ======= Services Section ======= -->
        <section class="services">
          <div class="container">
    
            <div class="row">
              @foreach ($services as $service)
                
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box icon-box-blue">
                <div class="icon"><img src="{{ asset($service->service_landing_image) }}" alt="" style="width: 45px"></div>
                <h4 class="title"><a href="{{ route('view.service', $service->id) }}">{{ $service->service_title }}</a></h4>
                <p class="description">{{ $service->service_description }}</p>
                
              </div>
            </div>
            @endforeach
    
            
    
              
    
              
    
            </div>

    
          </div>
        </section><!-- End Services Section -->
    
        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
          <div class="container">
    
            <div class="row">
              <div class="col-lg-6 video-box">
                <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
              </div>
    
              <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
    
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-fingerprint"></i></div>
                  <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
    
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-gift"></i></div>
                  <h4 class="title"><a href="">Nemo Enim</a></h4>
                  <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
    
              </div>
            </div>
    
          </div>
        </section><!-- End Why Us Section -->
    
        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
          <div class="container">
    
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/service-details-1.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="#">Our Mission</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/service-details-2.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="#">Our Plan</a></h5>
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
    
              </div>
              <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/service-details-3.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="#">Our Vision</a></h5>
                    <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/service-details-4.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="#">Our Care</a></h5>
                    <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                    <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Service Details Section -->
    
    
    
    </main>
</x-frontend.layouts.master>