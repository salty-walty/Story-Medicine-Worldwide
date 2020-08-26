<?php 
  $banner = get_the_post_thumbnail_url( get_the_ID(), 'large' );
  $events_banner = get_field('events_page_header', 'option');
  $blog_banner = get_field('posts_page_header', 'option');
?>
<?php 
	if ( is_home() ) {
?>
	<div>
	  <div class="single-page-header" style="background: url(<?php echo $blog_banner['url']; ?>) center top no-repeat;">
	  <div class="ze-title">      
			  <h1 class="text-center">
	            <?php echo $blog_banner['title']; ?>
			  </h1>
		    <hr class="my-4" align="center" width="8%">
	  </div>   
	</div>
<?php } elseif ( (tribe_is_month() && !is_tax()) || (tribe_is_past() || tribe_is_upcoming() && !is_tax())) { ?>
	<div>
	  <div class="single-page-header" style="background: url(<?php echo $events_banner['url']; ?>) center top no-repeat;">
	  <div class="ze-title">      
			  <h1 class="text-center">
	            <?php echo $events_banner['title']; ?>
			  </h1>
		    <hr class="my-4" align="center" width="8%">
	  </div>   
	</div>
<?php } else { ?>
	<div>
	  <div class="single-page-header" style="background: url(<?php echo $banner; ?>) center top no-repeat;">
	  <div class="ze-title">      
			  <h1 class="text-center">
	            @php the_title() @endphp
			  </h1>
		    <hr class="my-4" align="center" width="8%">
	  </div>   
	</div>
<?php } ?>