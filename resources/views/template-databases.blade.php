{{-- Template Name: Databases Index --}}

@extends('layouts.default')

@section('content')
    @while (have_posts()) @php the_post() @endphp
        <section id="top" class="bg-light pb-5">
            <div class="row">
                <div class="col-12 col-md-3 order-2 order-md-0">
                    @include('shelf.partials.databases.legend')
                </div>
                <div class="col-12 col-md-8 offset-md-1 database-tabs-order order-0 order-md-3">
                    @include('shelf.partials.databases.tabs')
                </div>
            </div>
            <div>
                @include('shelf.partials.databases.tab-panes')
            </div>
        </section>
        @include('partials.content-page')
    @endwhile

    <a href="#top"
        class="rtt-button position-fixed transition-all ease-ease duration-1 text-center d-inline-block text-decoration-none z-5">
        <div class="rtt-button__icon mx-auto shadow-sm bg-secondary mb-2 rounded p-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="17.999" height="18" viewBox="0 0 17.999 18">
                <path id="white-arrow-top" d="M16.1,24.042l1.9,1.9,9-9-9-9-1.9,1.9,5.76,5.76H9v2.684H21.863Z"
                    transform="translate(-7.94 27) rotate(-90)" fill="#fff" />
            </svg>
        </div>
        <p class="m-0 small text-uppercase text-dark fw-bold lh-1">Return<br>to Top</p>
    </a>
@endsection
