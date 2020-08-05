@extends('layouts.app')

@section('content')
  <section class="">
    <?php 
      // ACF vars for the page
      $btbt = get_field('below_the_banner_text');
      $lch = get_field('left_column_header');
      $lcc = get_field('left_column_content');
      $rch = get_field('right_column_header');
      $rcc = get_field('right_column_content');
      $sch = get_field('symbols_section_header');
      $scp = get_field('symbols_section_intro_paragraph');
    ?>
  	<div class="row">
  		<div class="col-md-12">	
		  	<div class="banner">
          <?php if( have_rows('banner') ): ?>
            <?php 
              $i = 0;
              $total_rows = count(get_field('banner'));
            ?>
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
               <?php for ($num = 0; $num < $total_rows; $num++){ 
                  if($num == 0){
                    $active = 'active';
                  } else {
                    $active = '';
                  }
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $num; ?>" class="<?php echo $active; ?>"></li>
               <?php } ?>
              </ol> 
          <div class="carousel-inner">    
            <?php while( have_rows('banner') ): the_row(); 
              // vars
              $image = get_sub_field('banner_image');
              $banner_text = get_sub_field('banner_text');
              $button_text = get_sub_field('button_text');
              $button_url = get_sub_field('button_url');
              if($i == 0){
                $active = 'active';
              } else {
                $active = '';
              }
            ?>        
              <div class="carousel-item <?php echo $active; ?>">
                <div class="take-an-action text-center">
                  <div class="ze-action">                  
                    <h2><?php echo $banner_text; ?></h2>
                    <a href="<?php echo $button_url; ?>">
                      <button class="btn"><?php echo $button_text; ?></button>
                    </a>
                  </div>
                </div>
                <img class="d-block w-100" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt']; ?>">
              </div>    
            <?php 
              $i++;
              endwhile; 
            ?>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          <?php endif; ?>
		  	</div>
  		</div>
  	</div>
  	<div class="row creation">
  		<div class="col-md-1"></div>
      <div class="col-md-4">
        <h3>
          <?php echo $lch; ?>
        </h3>
        <div>
          <?php echo $lcc; ?>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-5">
        <h3>
          <?php echo $rch; ?>
        </h3>
        <div>
          <?php echo $rcc; ?>
        </div>
      </div>
  		<div class="col-md-1"></div>
  	</div>

    <div class="row symbols">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="mother">
          <div class="symbols-intro">        
            <h3><?php echo $sch; ?></h3>
            <p>
              <?php echo $scp ?>
            </p>
          </div>
        </div>
          <?php if( have_rows('symbols_row') ): ?> 
            <?php while( have_rows('symbols_row') ): the_row(); 
              // vars
              $lcs = get_sub_field('left_column_symbol');
              $mcs = get_sub_field('middle_column_symbol');
              $rcs = get_sub_field('right_column_symbol');
            ?>
            <div class="row symbols-row">
              <div class="col-md-4">
                <img src="<?php echo $lcs['url']; ?>" alt="<?php echo $lcs['alt']; ?>">
                <h5>
                  <?php echo $lcs['title']; ?>
                </h5>
                <p>
                  <?php echo $lcs['caption']; ?>
                </p>
                <p>
                  <?php echo $lcs['description']; ?>
                </p>
              </div>
              <div class="col-md-4">
                <img src="<?php echo $mcs['url']; ?>" alt="<?php echo $mcs['alt']; ?>">
                <h5>
                  <?php echo $mcs['title']; ?>
                </h5>
                <p>
                  <?php echo $mcs['caption']; ?>
                </p>
                <p>
                  <?php echo $mcs['description']; ?>
                </p>
              </div>
              <div class="col-md-4">
                <img src="<?php echo $rcs['url']; ?>" alt="<?php echo $rcs['alt']; ?>">
                <h5>
                  <?php echo $rcs['title']; ?>
                </h5>
                <p>
                  <?php echo $rcs['caption']; ?>
                </p>
                <p>
                  <?php echo $rcs['description']; ?>
                </p>
              </div>
            </div>        
            <?php 
              endwhile; 
            ?>
           
          <?php endif; ?>
      </div>
      <div class="col-md-1"></div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
@endsection
