<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $landing[12]->content }}</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  {{ $landing[11]->content }}
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $landing[9]->content }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $landing[10]->content }} </p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/message" method="POST" role="form" id="books" class="php-email-form">
            <!--<form role="form" id="books" class="php-email-form">-->
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                @error('name')
                <div> {{ $message }} </div>
                @enderror
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email" required>
                </div>
                @error('email')
                <div> {{ $message }} </div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="subject" placeholder="Subject" required>
              </div>
              @error('subject')
                <div> {{ $message }} </div>
              @enderror
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" value="{{ old('message') }}" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
              @error('errorAll')
                <p class="text-center mb-0 form-text">{{ $message }}</p>
              @enderror
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>