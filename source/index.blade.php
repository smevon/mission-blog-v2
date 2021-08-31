@extends('_layouts.master')

@section('content')
    <h1>Și tu ești un client nemulțumit?</h1>

    <p>Ce bine că ne-am găsit.</p>

    <p>Și tu vrei să-ți faci cumpărăturile în tihnă, și nu-ți iese?</p>

    <p>Așai că-i frustrant să ți se trântească ciorba pe masă?</p>

    <p>Ei bine, ăsta-i scopul meu aici, să-ți fie așezată ciorba mai frumos pe masă.</p>

<!-- Begin custom HTML -->
    <style>
    input[type=button], input[type=submit], input[type=reset] {
      background-color: #A80874;
      border: none;
      color: white;
      padding: 16px 32px;
      text-decoration: none;
      margin: 4px 2px;
      cursor: pointer;
    }
    input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover {
      background-color: #289720;
    }


  <!-- Begin Mailchimp Signup Form -->
  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
  </style>
  <div id="mc_embed_signup">
  <form action="https://sergiu-adrian.us6.list-manage.com/subscribe/post?u=8afc636eecb08cf316417c49f&amp;id=fd48a45d07" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
  	<h2>Abonează-te</h2>
  <div class="indicates-required"><span class="asterisk">*</span> Musai</div>
  <div class="mc-field-group">
  	<label for="mce-EMAIL">Adresă de email <span class="asterisk">*</span>
  </label>
  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
  </div>
  <div class="mc-field-group">
  	<label for="mce-FNAME">Prenumele tău preferat </label>
  	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
  </div>
  	<div id="mce-responses" class="clear">
  		<div class="response" id="mce-error-response" style="display:none"></div>
  		<div class="response" id="mce-success-response" style="display:none"></div>
  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8afc636eecb08cf316417c49f_fd48a45d07" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="Mă abonez" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
  </form>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->


  <p>Sergiu,</br>
  <i>Coregraf de cuvinte</i></p>

  @endsection
