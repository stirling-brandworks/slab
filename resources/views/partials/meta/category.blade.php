@php $category = get_the_category() @endphp
<h6 class="post-header__subtitle text-uppercase text-green-dark mb-2 small">{{ $category[0]->cat_name }}</h6>