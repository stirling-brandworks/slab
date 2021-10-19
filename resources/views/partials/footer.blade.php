<footer class="text-center text-lg-start bg-light text-muted border-top">
  <div class="container text-center text-md-start">
    <div class="row mt-4">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          {{ $site_name }}
        </h6>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </p>
      </div>

      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          Footer Menu 1
        </h6>
        <ul class="list-unstyled">
          <li><a href="#!" class="text-reset">Link 1</a></li>
          <li><a href="#!" class="text-reset">Link 2</a></li>
          <li><a href="#!" class="text-reset">Link 3</a></li>
          <li><a href="#!" class="text-reset">Link 4</a></li>
        </ul>
      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          Footer Menu 2
        </h6>
        <ul class="list-unstyled">
          <li><a href="#!" class="text-reset">Link 1</a></li>
          <li><a href="#!" class="text-reset">Link 2</a></li>
          <li><a href="#!" class="text-reset">Link 3</a></li>
          <li><a href="#!" class="text-reset">Link 4</a></li>
        </ul>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase fw-bold mb-4">
          Contact
        </h6>
        <p class="mb-0">Boston, MA</p>
        <p>
          <a href="mailto:info@example.com" class="text-reset">info@example.com</a>
        </p>
      </div>
    </div>
  </div>

  <div class="text-center p-3 small" style="background-color: rgba(0, 0, 0, 0.05);">
    ©{{ date('Y') }} <a class="text-reset text-decoration-none" href="{{ home_url('/') }}">{{ $site_name }}</a> | Web
    Design and
    Development by <a href="https://stirlingbrandworks.com" class="text-reset text-decoration-none">Stirling
      Brandworks</a>
  </div>
</footer>
