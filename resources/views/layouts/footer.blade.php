<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3> {{ $landing[14]->content }} </h3>
              <p>
              {{ $landing[12]->content }} <br>
                <strong>Phone:</strong> {{ $landing[10]->content }} <br>
                <strong>Email:</strong> {{ $landing[9]->content }} <br>
              </p>
              <div class="social-links mt-3">
                <a href=" {{ $landing[1]->content }} " tergate="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href=" {{ $landing[0]->content }} " tergate="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href=" {{ $landing[2]->content }} " tergate="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href=" {{ $landing[3]->content }} " tergate="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href=" {{ $landing[4]->content }} " tergate="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Event Management </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Booking</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p> {{ $landing[13]->content }} </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span> {{ $landing[14]->content }} </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        Develope by <a href="https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA">ScriptSpark</a>
      </div>
    </div>
  </footer>