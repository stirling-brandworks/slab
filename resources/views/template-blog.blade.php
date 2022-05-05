{{--
  Template Name: Blog
--}}

@extends('layouts.default')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
    	<div class="row mb-5">
			  <div class="col-12">
    			@include('partials.content-page')

          @php
            $categoryIds = get_field('news')['news_category'];
            $args = array('numberposts' => 12, 'category' => $categoryIds);
            $recentPosts = get_posts( $args )
          @endphp

          @if ( $recentPosts )
          <div class="cards-wrapper">
            @foreach ($recentPosts as $recentPost)
              <div class="mt-5">
                @include('components.card', [
                    'title' => $recentPost->post_title,
                    'date' => $recentPost->post_date,
                    'author' => $recentPost->post_author,
                    'link' => ['title'=>'Read More', 'url'=> get_post_permalink($recentPost) ],
                    'image' => get_post_thumbnail_id($recentPost),
                    'layout' => 'horizontal',
                    'size' => 'large',
                    'imageSize' => 'medium',
                ])
              </div>
            @endforeach
          </div>
          @endif

      	</div>
		  </div>
    </div>
  @endwhile
@endsection
