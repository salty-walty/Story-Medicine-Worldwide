{{--
  Template Name: About Page Template
--}}

@extends('layouts.app')

@section('content')

<div class="container">
  <?php 
    //custom field vars
    $banner = get_field('about_page_banner');
    $about_page_text_area_1 = get_field('about_page_text_area_1');
    $left_column_image = get_field('left_column_image');
    $right_column_image = get_field('right_column_image');
    $about_page_text_area_2 = get_field('about_page_text_area_2');

  ?>
  <div class="row mt-1">
    <div class="col-md-12">
      <img src="<?php echo esc_url($banner['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="mountians">
    </div>
  </div>
  <div class="row about-paragraphs">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <?php echo $about_page_text_area_1; ?>
    </div>
    <div class="col-md-1"></div>
  </div>
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5 pad-it">
      <img src="<?php echo esc_url($left_column_image['url']); ?>" alt="<?php echo esc_attr($left_column_image['alt']); ?>" class="about-them">
    </div>
    <div class="col-md-5 pad-it">
       <img src="<?php echo esc_url($right_column_image['url']); ?>" alt="<?php echo esc_attr($right_column_image['alt']); ?>" class="about-them">
    </div>
    <div class="col-md-1"></div>
  </div>
  <div class="row about-paragraphs">
    <div class="col-md-2"></div>
    <div class="col-md-8">
     <?php echo $about_page_text_area_2; ?>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

@endsection