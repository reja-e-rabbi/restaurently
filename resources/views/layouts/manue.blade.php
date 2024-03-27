<section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starter">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-special">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          
        @isset($menu)
        @foreach ($menu as $item)
          <div class="col-lg-6 menu-item {{ 'filter-'.$item->type }}">
            <img src=" {{ url('storage/'.$item->img) }} " class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"> {{ $item->name }} </a><span> {{ $item->price }} </span>
            </div>
            <div class="menu-ingredients">
            {{ $item->summery }}
            </div>
          </div>
        @endforeach
        @endisset
        
        </div>

      </div>
    </section>