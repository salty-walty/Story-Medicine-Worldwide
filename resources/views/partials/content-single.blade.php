<article @php post_class() @endphp>
  <div class="container">
      <div class="guide">
          <div class="entry-content">
            @php the_content() @endphp
          </div>

          <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
          </footer>
      </div>
  </div>
</article>
