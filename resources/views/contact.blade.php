{{--
  Template Name: Contact Page Template
--}}

@extends('layouts.app')

@section('content')

<div class="pad-it">
  <div class="row">
    <div class="col-md-6">
      <div class="contact-head">

      </div>
    </div>
    <div class="col-md-6">
      <div class="contact-head-too">

      </div>
    </div>
  </div>
  <div class="row pad-it">
    <div class="col-md-12 center-it">
      <h4>
        Contact Us
      </h4>
    </div>
  </div>
  <div class="row pad-it">
    <div class="col-md-2"></div>
    <div class="col-md-3">
      <h4>
        Customer <br>
        service
      </h4>
      <br>
      <p>
        <a href="mailto:contact@dyedinthewood.com">
          contact@dyedinthewood.com
        </a>
      </p>
      <p>
        NORTH CAROLINA
      </p>
      <br>
      <h5>
        Interested in wholesale, commissions, or custom pieces?
      </h5>
      <br>
      <p>
        For questions or comments about our products and services, get in touch.
      </p>
    </div>
    <div class="col-md-5">
      <div class="float-right">
        <?php echo do_shortcode( '[contact-form-7 id="38" title="Contact Page"]' ); ?>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

@endsection