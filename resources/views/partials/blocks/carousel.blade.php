<?php 
  // Create id attribute allowing for custom "anchor" value.
  $id = 'slide-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'slide';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

  $title = get_field('title') ?: 'Your title here';
  $content = get_field('content') ?: 'Your content here';
?>


<div class="carousel-repeater">
    <?php if( have_rows('carousel_repeater') ): ?>
      <?php 
        $i = 0;
        $total_rows = count(get_field('carousel_repeater'));
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
      <?php while( have_rows('carousel_repeater') ): the_row(); 
        // vars
        $image = get_sub_field('carousel_image');
        $carousel_text = get_sub_field('carousel_text');

        if($i == 0){
          $active = 'active';
        } else {
          $active = '';
        }
      ?>        
        <div class="carousel-item <?php echo $active; ?>">               
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
              <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="rounded-circle carousel-thumb">
            </div>
            <div class="col-md-7 testi-text d-flex align-items-center justify-content-center">
              <p class="d-flex align-items-center justify-content-center">
                <?php echo $carousel_text; ?>
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
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