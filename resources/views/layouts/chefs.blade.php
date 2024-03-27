<section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">
          @isset($chefs)
          @foreach ($chefs as $item)
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src=" {{ url('storage/'.$item->img) }} " class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $item->name }}</h4>
                  <span>{{ $item->type }}</span>
                </div>
                <div class="social">
                  <a href=" {{ url($item->twitter) }} " tergate="_blank"><i class="bi bi-twitter"></i></a>
                  <a href=" {{ url($item->facebook) }} " tergate="_blank"><i class="bi bi-facebook"></i></a>
                  <a href=" {{ url($item->insta) }} " tergate="_blank"><i class="bi bi-instagram"></i></a>
                  <a href=" {{ url($item->linkedin) }} " tergate="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endisset
          @empty($benefit)
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>empty</h4>
                  <span>empty</span>
                </div>
              </div>
            </div>
          </div>
          @endempty


        </div>

      </div>
    </section>