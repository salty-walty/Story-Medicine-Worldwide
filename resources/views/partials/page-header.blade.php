<?php 
  $picture = get_the_post_thumbnail_url( get_the_ID(), 'large' );
?>
<div>
  <div class="single-page-header" style="background: url(<?php echo $picture ; ?>) center top no-repeat;">
  <div class="ze-title">      
		  <h1 class="text-center">
            @php the_title() @endphp
		  </h1>
	    <hr class="my-4" align="center" width="8%">
  </div>   
</div>