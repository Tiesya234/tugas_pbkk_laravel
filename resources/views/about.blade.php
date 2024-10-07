@extends('app')
@section('content')
<section id="about-us" class="padding-large">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <h3 class="display-3 text-center fw-normal col-lg-4 offset-lg-4">Mellow: Your Gateway to Serenity</h3>
      <div class="row align-items-start mt-3 mt-lg-5">
        <div class="col-lg-6">
          <div class="p-5">
            <p>Welcome to Hotel Mellow, where comfort meets tranquility. Nestled in the heart of a bustling city, our
              hotel offers a peaceful retreat for both business and leisure travelers. With modern amenities, and a
              warm, inviting atmosphere, we strive to make your stay with us.</p>
            <a href="index.html" class="btn btn-arrow btn-primary mt-3">
              <span>Read About Us <svg width="18" height="18">
                  <use xlink:href="#arrow-right"></use>
                </svg></span>
            </a>
          </div>
          <img src="images/about-img1.jpg" alt="img" class="img-fluid rounded-4 mt-4">
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0">
          <img src="images/about-img2.jpg" alt="img" class="img-fluid rounded-4">
          <img src="images/about-img3.jpg" alt="img" class="img-fluid rounded-4 mt-4">
        </div>
      </div>
    </div>
  </section>
  <section id="info">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-md-3 text-center mb-4 mb-lg-0">
          <h3 class="display-1 fw-normal text-primary position-relative">25K <span
              class="position-absolute top-50 end-50 translate-middle z-n1 ps-lg-4 pt-lg-4"><img
                src="images/pattern1.png" alt="pattern" class="img-fluid"></span></h3>
          <p class="text-capitalize">Happy Customer</p>
        </div>
        <div class="col-md-3 text-center mb-4 mb-lg-0">
          <h3 class="display-1 fw-normal text-primary position-relative">160 <span
              class="position-absolute top-50 translate-middle z-n1"><img src="images/pattern1.png" alt="pattern"
                class="img-fluid"></span></h3>
          <p class="text-capitalize">Total Rooms</p>
        </div>
        <div class="col-md-3 text-center mb-4 mb-lg-0">
          <h3 class="display-1 fw-normal text-primary position-relative">25 <span
              class="position-absolute top-100 pb-5 translate-middle z-n1"><img src="images/pattern1.png" alt="pattern"
                class="img-fluid"></span></h3>
          <p class="text-capitalize">award wins</p>
        </div>
        <div class="col-md-3 text-center mb-4 mb-lg-0">
          <h3 class="display-1 fw-normal text-primary position-relative">200 <span
              class="position-absolute top-50 end-50 pb-lg-4 pe-lg-2 translate-middle z-n1"><img
                src="images/pattern1.png" alt="pattern" class="img-fluid"></span></h3>
          <p class="text-capitalize">Total Members</p>
        </div>
      </div>
    </div>
  </section>
  <section id="room" class="padding-medium">
    <div class="container-fluid padding-side" data-aos="fade-up">
      <div class="d-flex flex-wrap align-items-center justify-content-between">
        <div>
          <h3 class="display-3 fw-normal text-center">Explore our rooms</h3>
        </div>
        <a href="index.html" class="btn btn-arrow btn-primary mt-3">
          <span>Explore rooms<svg width="18" height="18">
              <use xlink:href="#arrow-right"></use>
            </svg></span>
        </a>
      </div>

      <div class="swiper room-swiper mt-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room1.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Grand deluxe rooms</h4>
                <p class="product-paragraph text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae at illum ipsum similique doloribus.</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 2</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="index.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="index.html">Grand deluxe rooms</a></h4>
              <p><span class="text-primary fs-4">$269</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room3.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Sweet Family room</h4>
                <p class="product-paragraph text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae at illum ipsum similique doloribus.</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 4</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="index.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="index.html">Sweet Family room</a></h4>
              <p><span class="text-primary fs-4">$360</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room2.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Perfect Double Room</h4>
                <p class="product-paragraph text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae at illum ipsum similique doloribus.</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 2</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="index.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="index.html">Perfect Double Room</a></h4>
              <p><span class="text-primary fs-4">$450</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room1.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Grand deluxe rooms</h4>
                <p class="product-paragraph text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae at illum ipsum similique doloribus.</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 2</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="index.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="index.html">Grand deluxe rooms</a></h4>
              <p><span class="text-primary fs-4">$269</span>/night</p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="room-item position-relative bg-black rounded-4 overflow-hidden">
              <img src="images/room3.jpg" alt="img" class="post-image img-fluid rounded-4">
              <div class="product-description position-absolute p-5 text-start">
                <h4 class="display-6 fw-normal text-white">Sweet Family room</h4>
                <p class="product-paragraph text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Molestiae at illum ipsum similique doloribus.</p>
                <table>
                  <tbody>
                    <tr class="text-white">
                      <td class="pe-2">Price:</td>
                      <td class="price">299$ /Pernight</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Size:</td>
                      <td>10 ft</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Capacity:</td>
                      <td>Max persion 4</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Bed:</td>
                      <td>Normal Beds</td>
                    </tr>
                    <tr class="text-white">
                      <td class="pe-2">Services:</td>
                      <td>Wifi, Television, Bathroom,...</td>
                    </tr>
                  </tbody>
                </table>
                <a href="index.html">
                  <p class="text-decoration-underline text-white m-0 mt-2">Browse Now</p>
                </a>
              </div>
            </div>
            <div class="room-content text-center mt-3">
              <h4 class="display-6 fw-normal"><a href="index.html">Sweet Family room</a></h4>
              <p><span class="text-primary fs-4">$360</span>/night</p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination room-pagination position-relative mt-5"></div>
      </div>
    </div>
  </section>

  <section id="gallery" data-aos="fade-up">
    <h3 class="display-3 fw-normal text-center">our gallery</h3>
    <p class="text-center col-lg-4 offset-lg-4 mb-5">Explore images of our well-appointed accommodations, featuring
      modern amenities and stylish decor designed to make your stay a memorable one. Admire the stunning views of the
      city skyline from our rooftop pool, where you can relax and unwind after a day of exploring the city.</p>
    <div class="container position-relative">
      <div class="row">
        <div class="swiper gallery-swiper offset-1 col-10">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/item3.jpg" alt="img" class="img-fluid rounded-4">
            </div>
            <div class="swiper-slide">
              <img src="images/item2.jpg" alt="img" class="img-fluid rounded-4">
            </div>
            <div class="swiper-slide">
              <img src="images/item1.jpg" alt="img" class="img-fluid rounded-4">
            </div>
          </div>
        </div>
      </div>
      <div class="position-absolute top-50 start-0 translate-middle-y main-slider-button-prev d-none d-md-block">
        <svg class="bg-secondary rounded-circle p-3" width="70" height="70">
          <use xlink:href="#arrow-left"></use>
        </svg>
      </div>
      <div class="position-absolute top-50 end-0 translate-middle-y main-slider-button-next d-none d-md-block">
        <svg class="bg-secondary rounded-circle p-3" width="70" height="70">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </div>
      <div class="position-absolute top-100 end-50 translate-middle main-slider-button-prev mt-5 d-md-none d-block">
        <svg class="bg-secondary rounded-circle p-2" width="50" height="50">
          <use xlink:href="#arrow-left"></use>
        </svg>
      </div>
      <div
        class="position-absolute top-100 start-50 translate-middle main-slider-button-next mt-5 ms-4 d-md-none d-block">
        <svg class="bg-secondary rounded-circle p-2" width="50" height="50">
          <use xlink:href="#arrow-right"></use>
        </svg>
      </div>
    </div>
  </section>
@endsection