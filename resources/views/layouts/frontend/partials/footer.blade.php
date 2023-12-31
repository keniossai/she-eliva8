<section class="contact-section">
    <div class="container">
      <div class="row no-gutters align-items-center">
        <div class="col-md-6 col-lg-7">
          <div class="contact-info">
            <h3>Follow us on socials</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis illum quasi nisi, repellat temporibus
              doloribus quo impedit laborum mollitia, incidunt laboriosam sed quod reprehenderit corrupti debitis dolore
              eligendi, a dignissimos.</p>
            <ul class="contact-list">
              <li><i class="fas fa-envelope"></i> <a href="mailto:abc@example.com.com">abc@example.com</a> </li>
            </ul>
            <div class="circular-icons social-links">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5">
          <form class="contact-form" method="POST" action="{{ route('subscriber.store') }}">
            @csrf
            <h3 class="text-white">Subscribe</h3>
            <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Enter your email">
            <button type="submit" class="btn btn-solid m-0">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<footer class="footer-section">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <a href="{{ route('home') }}">
            <h5 class="brand-name"> She Elevates</h5>
          </a>
        </div>
        <div class="footer-copyright">
          <p>&copy; <script>document.write(new Date().getFullYear())</script>She Elevates</p>
        </div>

      </div>
    </div>
  </footer>
