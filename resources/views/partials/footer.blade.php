<footer class="footer text-lg-start bg-light text-muted border-top">
    <div class="container text-md-start">
        <div class="row my-4">
            <div class="col-md-3 mb-4 text-center text-md-start">
                <a href="{{ home_url('/') }}" class="d-block">
                    {!! get_header_image_tag() !!}
                </a>
                @if (is_active_sidebar('sidebar-footer-1'))
                    @php dynamic_sidebar('sidebar-footer-1') @endphp
                @else
                    @include('shelf.partials.branches.meta.address')
                @endif
            </div>

            <div class="col-md-3 mb-4">
                @if (is_active_sidebar('sidebar-footer-2'))
                    @php dynamic_sidebar('sidebar-footer-2') @endphp
                @endif
            </div>

            <div class="col-md-3 mb-4">
                @if (is_active_sidebar('sidebar-footer-3'))
                    @php dynamic_sidebar('sidebar-footer-3') @endphp
                @endif
            </div>

            <div class="col-md-3">
                @if (is_active_sidebar('sidebar-footer-4'))
                    @php dynamic_sidebar('sidebar-footer-4') @endphp
                @endif
            </div>
        </div>
    </div>

    <div class="text-center p-3 small bg-gray-400">
        ©{{ date('Y') }} <a class="text-reset text-decoration-none"
            href="{{ home_url('/') }}">{{ $site_name }}</a> | Web
        Design and
        Development by <a href="https://stirlingbrandworks.com" class="text-reset text-decoration-none">Stirling
            Brandworks</a>
    </div>
</footer>
