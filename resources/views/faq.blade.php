{{--
  Template Name: FAQ Page Template
--}}

@extends('layouts.app')

@section('content')

<div class="container page-single pad-the-top">
  <div class="heady">   
    <h1>
      @php the_title() @endphp
    </h1>
  </div>
  <div class="entry-content pad-the-top">
    <?php if( have_rows('questions') ): ?>
      <?php $i = 1 ?>
      {{-- start accordian  --}}
      <div id="accordion">
      <?php while( have_rows('questions') ): the_row(); 
        // row vars
        $question = get_sub_field('question');
        $answer = get_sub_field('answer');
      ?>
      <?php if ($i == 1) {
        $val = 'true';
        $open = 'wide-open';
        $show = 'show';
      } else {
        $val = 'false';
        $open = 'collapsed';
        $show = '';
      } ?>
        <div class="full-wide <?php echo $open; ?>" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="<?php echo $val; ?>" aria-controls="collapse<?php echo $i ?>">
            <?php if( $question ): ?>
              <h5 class="mb-2">
                <?php echo $question; ?>
              </h5>
            <?php endif; ?>

              <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
              </svg>

              <svg class="bi bi-chevron-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 5.707l-5.646 5.647a.5.5 0 01-.708-.708l6-6z" clip-rule="evenodd"/>
              </svg>
        </div>

        <div id="collapse<?php echo $i ?>" class="collapse <?php echo $show; ?>" aria-labelledby="headingOne">
          <?php if( $answer ): ?>
            <p>
              <?php echo $answer; ?>
            </p>
          <?php endif; ?>
        </div>
        <?php $i++ ?>
        <hr>
      <?php endwhile; ?>
      {{-- end accordian  --}}
      </div>
    <?php endif; ?>
  </div>
</div>

@endsection