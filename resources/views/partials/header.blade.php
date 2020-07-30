<header>
    <div class="shmushmainer">
           
                <a class="brand" href="{{ home_url('/') }}">
            		<img src="@asset('images/Logo.png')" class="logo">            
            	</a>
          

        <input class="hamburger-button" type="checkbox" id="hamburger-button" />
        <label for="hamburger-button">
            <div></div>
        </label>

        <div class="menu">
            <nav>
                @if (has_nav_menu('primary_navigation'))
                  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '']) !!}
                @endif
	            <div class="cart-container">	
				  @include('icons.cart')
			    </div>
            </nav>
        </div>
    </div>
</header>