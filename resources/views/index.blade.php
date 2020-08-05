@extends('layouts.app')

  @section('content')
    @include('partials.page-header')
    <div class="container ze-index">
      <div class="px-md-5 px-xs-2">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            
            @if (!have_posts())
              <div class="alert alert-warning">
                {{ __('Sorry, no results were found.', 'sage') }}
              </div>
              {!! get_search_form(false) !!}
            @endif

            @while (have_posts()) @php the_post() @endphp
              @include('partials.content-'.get_post_type())
            @endwhile

            {!! get_the_posts_navigation() !!}
          </div>
          <div class="col-md-1"></div>
          {{-- <div class="col-md-3">
            <div class="sidebar guide">
              @include('partials.sidebar')
            </div>
          </div> --}}
        </div>
      </div>    
    </div>
  @endsection
