<div class="container page-single pad-the-top">
	<div class="heady">		
		<h1>
			@php the_title() @endphp
		</h1>
	</div>
	<div class="entry-content pad-the-top">
	@php the_content() @endphp
	</div>
</div>
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
