<section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>

        <div class="row">
          @isset($benefit)
          @for($i = 0; $i < count($benefit); $i++)
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span> 0 {{ $i +1 }}</span>
              <h4>{{ $benefit[$i]->subject }}</h4>
              <p>{{ $benefit[$i]->content }}</p>
            </div>
          </div>
          @endfor
          @endisset
          @empty($benefit)
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>0</span>
              <h4>empty</h4>
              <p>empty</p>
            </div>
          </div>
          @endempty
        </div>

      </div>
</section>