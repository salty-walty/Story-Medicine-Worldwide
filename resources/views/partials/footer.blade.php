<footer class="content-info">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
    	<div class="row footer-row">
    		<div class="col-md-4 text-center">
                <div class="mother-footer">
                    <p>
                        © 2020 Story Medicine Worldwide ASHEVILLE, NC
                    </p>
                </div>
    		</div>
            <div class="col-md-4">
                <div class="mother-footer text-center">                       
                    <div class="social-links">
                        <a href="#">
                            <img src="@asset('images/facebook.png')" alt="">
                        </a>
                    </div>    
                </div>
            </div>
    		<div class="col-md-4">
                        <div class="mother-footer">
                            @if (has_nav_menu('footer_navigation'))
                              {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'container' => 'footer-nav']) !!}
                            @endif
                        </div>
                    </div>     
                </div>
            </div>
            <div class="col-md-1"></div>
            </div>
    	</div>
    </div>       
</footer>
