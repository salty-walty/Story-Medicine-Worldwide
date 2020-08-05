{{--
  Template Name: Workshops Page Template
--}}

@extends('layouts.app')

@section('content')

<div class="container">\
  <div class="heady">   
    <h1>
      @php the_title() @endphp
    </h1>
  </div>
  <div class="entry-content pad-the-top">
    @php the_content() @endphp
  </div>
</div>

@endsection