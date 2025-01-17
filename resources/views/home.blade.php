@extends('app')
@section('content')
<section id="slider" data-aos="fade-up">
    <div class="container-fluid padding-side">
      <div class="d-flex rounded-5"
        style="background-image: url(images/slider-image.jpg); background-size: cover; background-repeat: no-repeat; height: 85vh; background-position: center;">
        <div class="row align-items-center m-auto pt-5 px-4 px-lg-0">
          <div class="text-start col-md-6 col-lg-5 col-xl-6 offset-lg-1">
            <h2 class="display-1 fw-normal">Hotel mellow Your Gateway to Serenity.</h2>
            <a href="index.html" class="btn btn-arrow btn-primary mt-3">
              <span>Explore rooms <svg width="18" height="18">
                  <use xlink:href="#arrow-right"></use>
                </svg></span>
            </a>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-4 mt-5 mt-md-0">
            <form id="form" class="form-group flex-wrap bg-white p-4 rounded-4 ms-md-5">
                <h3 class="display-6">Check availability</h3>
                <div class="col-lg-12 my-2">
                    <label class="form-label text-uppercase">Check-In</label>
                    <div class="date position-relative bg-transparent" id="select-arrival-date">
                        <a href="#" class="position-absolute top-50 end-0 translate-middle-y pe-2 ">
                            <svg class="text-body" width="20" height="20">
                                <use xlink:href="#calendar"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 my-2">
                    <label class="form-label text-uppercase">Check-Out</label>
                    <div class="date position-relative bg-transparent" id="select-departure-date">
                        <a href="#" class="position-absolute top-50 end-0 translate-middle-y pe-2 ">
                            <svg class="text-body" width="20" height="20">
                                <use xlink:href="#calendar"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 my-2">
                    <label class="form-label text-uppercase">Rooms</label>
                    <input type="number" value="1" name="quantity" class="form-control text-black-50 ps-3">
                </div>
                <div class="col-lg-12 my-2">
                    <label class="form-label text-uppercase">Guests</label>
                    <input type="number" value="1" name="quantity" class="form-control text-black-50 ps-3">
                </div>
                <div class="d-grid">
                    <button href="#" class="btn btn-arrow btn-primary mt-3">
                        <span>Check availability<svg width="18" height="18">
                                <use xlink:href="#arrow-right"></use>
                            </svg></span>
                    </button>
                </div>
            </form>
        </div>  
    </div>
    </div>
</div>
</section>
@endsection