<?php 
  // Create id attribute allowing for custom "anchor" value.
  $id = 'dropdown-' . $block['id'];
  if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
  }

  // Create class attribute allowing for custom "className" and "align" values.
  $className = 'dropdown';
  if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
  }
  if( !empty($block['align']) ) {
      $className .= ' align' . $block['align'];
  }

  $title = get_field('title') ?: 'Your title here';
  $content = get_field('content') ?: 'Your content here';
?>

<div class="accordion-container"> 
  <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
          <?php $i = 2; ?>
          <?php if ($i == 1) {
            $val = 'true';
            $open = 'wide-open';
            $show = 'show';
          } else {
            $val = 'false';
            $open = 'collapsed';
            $show = '';
          } ?>
          <div class="my-4 full-wide <?php echo $open; ?>" data-toggle="collapse" data-target="#collapse<?php echo esc_attr($id); ?>" aria-expanded="<?php echo $val; ?>" aria-controls="collapse<?php echo esc_attr($id); ?>">
              <?php if( $title ): ?>
                <h4 class="mb-2">
                  <?php echo $title; ?>
                </h4>
              <?php endif; ?>

                <svg class="bi bi-chevron-down" viewBox="0 0 16 16" fill="#a8dadc" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                </svg>

                <svg class="bi bi-chevron-up" viewBox="0 0 16 16" fill="#a8dadc" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 5.707l-5.646 5.647a.5.5 0 01-.708-.708l6-6z" clip-rule="evenodd"/>
                </svg>
          </div>

          <div id="collapse<?php echo esc_attr($id); ?>" class="collapse <?php echo $show; ?>" aria-labelledby="headingOne">
            <?php if( $content ): ?>
              <p>
                <?php echo $content; ?>
              </p>
            <?php endif; ?>
          </div>
          <hr>
  </div>
</div>