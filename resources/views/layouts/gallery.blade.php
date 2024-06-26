<section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
          @isset($gallery)
          @foreach ($gallery as $item)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="#" class="gallery-lightbox" data-gall="gallery-item">
                <img src=" {{ url('storage/'.$item->img) }} " alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach
          @endisset
          @empty($gallery)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <p>empty</p>
            </div>
          </div>
          @endempty

        </div>

      </div>
    </section>