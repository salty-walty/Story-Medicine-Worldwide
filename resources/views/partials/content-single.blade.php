<article @php post_class() @endphp>
  <div class="container">
      <div class="guide">
          <h1>
            @php the_title() @endphp
          </h1>
          <hr>
          <div class="entry-content">
            @php the_content() @endphp
          </div>

          <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
          </footer>
      </div>
  </div>
</article>
