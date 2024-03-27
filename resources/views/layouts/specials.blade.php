<section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              @isset($special)
              @for( $i = 0; $i < count($special); $i++)
              @if($i == 0)
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{ '#tab-'.$special[$i]->id }}"> {{ $special[$i]->name }} </a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="{{ '#tab-'.$special[$i]->id }}"> {{ $special[$i]->name }} </a>
              </li>
              @endif
              @endfor
              @endisset
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              @isset($special)
              @for( $i = 0; $i < count($special); $i++)
              @if($i == 0)
              <div class="tab-pane active show" id="{{ 'tab-'.$special[$i]->id }}">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3> {{ $special[$i]->name }} </h3>
                    <p class="fst-italic"> {{ $special[$i]->summery }} </p>
                    <p> {{ $special[$i]->detels }} </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src=" {{ url('storage/'.$special[$i]->img) }} " alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              @else
              <div class="tab-pane" id="{{ 'tab-'.$special[$i]->id }}">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3> {{ $special[$i]->name }} </h3>
                    <p class="fst-italic"> {{ $special[$i]->summery }} </p>
                    <p> {{ $special[$i]->detels }} </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src=" {{ url('storage/'.$special[$i]->img) }} " alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              @endif
              @endfor
              @endisset
            </div>
          </div>
        </div>

      </div>
</section>