<footer class="footer text-lg-start bg-light text-muted border-top">
  <div class="container text-md-start">
    <div class="row mt-4">
      <div class="col-md-3 mb-4 text-center text-md-start">
        <a class="navbar-brand py-1 d-inline-block mb-3 mb-md-0" href="{{ home_url('/') }}">
          <img src="<?php header_image(); ?>" 
          height="<?php echo get_custom_header()->height; ?>" 
          width="<?php echo get_custom_header()->width; ?>" 
          alt="{{ $site_name }} Logo" 
          class="mw-100 h-auto"/>
        </a>
        <?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
      </div>

      <div class="col-md-3 mb-4">
        <?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
      </div>

      <div class="col-md-3 mb-4">
        <?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
      </div>

      <div class="col-md-3 mb-4">
        <?php dynamic_sidebar( 'sidebar-footer-4' ); ?>
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
