<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            
            @isset($testimonil)
            @foreach( $testimonil as $item)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $item->dilog }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src=" {{ url('storage/'. $item->img) }} " class="testimonial-img" alt="">
                <!--<img src="storage/img/testimonials-1.jpg" class="testimonial-img" alt="">-->
                <h3>{{ $item->name }}</h3>
                <h4>{{ $item->profession }}</h4>
              </div>
            </div><!-- End testimonial item -->
            @endforeach
            @endisset

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>