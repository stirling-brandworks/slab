<header class="header">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ home_url('/') }}">
                {!! get_header_image_tag() !!}
            </a>

            <div class="d-flex align-items-center gap-2">
                @if (App\has_hours())
                    @include('shelf.components.hours')
                @endif
                <ul class="list-unstyled d-flex gap-2">
                    @if (has_nav_menu('secondary_navigation'))
                        {!! wp_nav_menu($secondary_menu) !!}
                    @else
                        <li><a href="{{ \App\get_account_url() }}">{{ __('Account', 'slab') }}</a></li>
                        <li><a href="{{ \App\get_catalog_url() }}">{{ __('Catalog', 'slab') }}</a></li>
                    @endif
                </ul>
                @include('shelf.components.searchform')
            </div>
        </div>
        </nav>
        <nav class="main-menu-wrapper border-top bg-white">
            <div class="container">
                {!! wp_nav_menu($primary_menu) !!}
            </div>
        </nav>
</header>
