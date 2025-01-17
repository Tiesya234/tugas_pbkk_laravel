@extends('app')
@section('content')
<section id="blog" class="padding-medium pt-0">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <div>
          <h3 class="display-3 fw-normal text-center">Our Blogs & events</h3>
        </div>
        <a href="index.html" class="btn btn-arrow btn-primary mt-3">
          <span>More Blog<svg width="18" height="18">
              <use xlink:href="#arrow-right"></use>
            </svg></span>
        </a>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="blog-post position-relative overflow-hidden rounded-4">
            <img src="images/post3.jpg" class="blog-img img-fluid rounded-4" alt="img">
            <div class="position-absolute bottom-0 p-5">
              <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Hotels</span></a>
              <h4 class="display-6 fw-normal mt-2"><a href="index.html">A Day in the Life of a Hotel Mellow
                  Guest</a></h4>
              <p class="m-0 align-items-center"><svg width="19" height="19">
                  <use xlink:href="#clock"></use>
                </svg> 22 Feb, 2024</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="blog-post position-relative overflow-hidden rounded-4">
            <img src="images/post2.jpg" class="blog-img img-fluid rounded-4" alt="img">
            <div class="position-absolute bottom-0 p-5">
              <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Activites</span></a>
              <h4 class="display-6 fw-normal mt-2"><a href="index.html">Guide to Seasonal Activities in the
                  City</a></h4>
              <p class="m-0 align-items-center"><svg width="19" height="19">
                  <use xlink:href="#clock"></use>
                </svg> 22 Feb, 2024</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="blog-post position-relative overflow-hidden rounded-4">
            <img src="images/post1.jpg" class="blog-img img-fluid rounded-4" alt="img">
            <div class="position-absolute bottom-0 p-5">
              <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Rooms</span></a>
              <h4 class="display-6 fw-normal mt-2"><a href="index.html">A Look Inside Hotel Mellow's Suites</a>
              </h4>
              <p class="m-0 align-items-center"><svg width="19" height="19">
                  <use xlink:href="#clock"></use>
                </svg> 22 Feb, 2024</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-8 mb-4">
          <div class="blog-post position-relative overflow-hidden rounded-4">
            <img src="images/post5.jpg" class="blog-img img-fluid rounded-4" alt="img">
            <div class="position-absolute bottom-0 p-4">
              <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Activites</span></a>
              <h4 class="display-6 fw-normal mt-2"><a href="index.html">Why Hotel Mellow Is the Perfect Staycation
                  Destination</a></h4>
              <p class="m-0 align-items-center"><svg width="19" height="19">
                  <use xlink:href="#clock"></use>
                </svg> 22 Feb, 2024</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="blog-post position-relative overflow-hidden rounded-4">
            <img src="images/post4.jpg" class="blog-img img-fluid rounded-4" alt="img">
            <div class="position-absolute bottom-0 p-5">
              <a href="#"><span class="bg-secondary text-body m-0 px-2 py-1 rounded-2 fs-6">Rooms</span></a>
              <h4 class="display-6 fw-normal mt-2"><a href="index.html">The Benefits of Booking Directly with
                  Hotel Mellow</a>
              </h4>
              <p class="m-0 align-items-center"><svg width="19" height="19">
                  <use xlink:href="#clock"></use>
                </svg> 22 Feb, 2024</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection