<footer class="footer text-lg-start bg-light text-muted border-top">
    <div class="container text-md-start">
        <div class="row my-4">
            <div class="col-md-3 mb-4 text-center text-md-start">
                <a href="{{ home_url('/') }}" class="d-block">
                    {!! get_header_image_tag() !!}
                </a>
            </div>

            <div class="col-md-3 mb-4">
                @if (is_active_sidebar('sidebar-footer-1'))
                    @php dynamic_sidebar('sidebar-footer-1') @endphp
                @else
                    <h3 class="h6 fw-bold text-uppercase">Contact Information</h3>
                    <div class="mb-2">@include('partials.formatters.phone', ['phone' =>
                        \App\get_branch_phone()])</div>
                    <div class="mb-2">@include('partials.formatters.email', ['email' =>
                        \App\get_branch_email()])</div>
                    @include('partials.formatters.address', ['address' => \App\get_branch_address()])
                @endif
            </div>

            <div class="col-md-3 mb-4">
                @if (is_active_sidebar('sidebar-footer-2'))
                    @php dynamic_sidebar('sidebar-footer-2') @endphp
                @else
                    <h3 class="h6 fw-bold text-uppercase">Popular Resources</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ \App\get_catalog_url() }}">Catalog</a></li>
                        <li><a href="{{ \App\get_account_url() }}">Account</a></li>
                        <li><a href="{{ get_post_type_archive_link('post') }}">Blog</a></li>
                        <li><a href="{{ get_post_type_archive_link('branch') }}">Branches</a></li>
                    </ul>
                @endif
            </div>

            <div class="col-md-3">
                @if (is_active_sidebar('sidebar-footer-3'))
                    @php dynamic_sidebar('sidebar-footer-3') @endphp
                @else
                    <h3 class="h6 fw-bold text-uppercase">Pages</h3>
                    <ul class="list-unstyled">
                        @php wp_list_pages(['title_li' => '', 'depth' => 1]) @endphp
                    </ul>
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
