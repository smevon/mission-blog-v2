@extends('_layouts.master')

@section('content')
<strong>„Digitalizezi, digitalizezi, dar măcar nu te du cu turma...”</strong>
<p align="center"> - stai nițel, și gândește-te bine.</p>


<!-- <button id="reveal1" class="button-reveal" style="vertical-align:middle"><span>Citește</span></button>
<div id="Home-1">
</div>

-->

<p>Chiar ai nevoie de un mega website de zeci de mii de euro?</p>

<p>Ce dezavantaje găsești dacă faci acest pas?</p>

<p>Ești sigur că vrei să plătești o echipă de designeri să-ți faci rebranding?</p>

<p>Ce avantaje găsești dacă rămâi cu brandul actual?</p>

<p>Peste tot se vorbește despre digitalizare. Și este bine, pentru că doar așa putem scăpa de birocrație. Se lucrează în direcția asta... ceea ce e foarte bine.</p>

<p>Însă ce vreau să spun, este că nu vreau să te opresc din a digitaliza, ci să mă asigur că digitalizezi în direcția corectă.</p>

<p>Îmi pasă de experiența clientului tău, și dacă am avea o întâlnire de cunoaștere/ calificare, am vorbi doar despre clientul tău, despre datele generate de baza ta clienți, sau de lista ta.</p>

<p>Hai să nu punem ecrane LCD-uri în Taxiuri.</p>

<p>Hai să nu facem email marketing cu fiecare om care trece pe lângă o vitrină, în centrul orașului.</p>

<p>... destul cu negativele.</p>

<p>Hai să ne gândim puțin la experiența cumpărătorului.</p>

<p>Hai să vedem cum poate el să recomande mai ușor afacerea ta, dacă digitalizezi procesul de recomandare.</p>

<p>Hai să vedem dacă merită să ai contracte online.</p>

<p>Sau pe scurt, hai să vedem de ce anume ai nevoie cu adevărat.</p>

<h2> Completează acest formular pentru a-ți verificat eligibilitatea, dacă e potrivit să ai o discuție cu mine </h2>




<!--
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
</style>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
</script>

<button id="button-nu" class="button-js" onclick="revealTextSubscribe()" style="vertical-align:middle"><span>Nu</span></button>
<div id="Mailchimp-Select">
</div>
-->


  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
  </style>
  <div id="mc_embed_signup">
  <form action="https://sergiu-adrian.us6.list-manage.com/subscribe/post?u=8afc636eecb08cf316417c49f&amp;id=fd48a45d07" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
  	<h2>Încă indecis? Descarcă acest document, să-ți dai seama care este scorul pentru reticența la schimbare în compania ta.</h2>
    <p>Spune-mi unde să-ți trimit PDF-ul.</p>
  <div class="indicates-required"><span class="asterisk">*</span> Musai</div>

  <div class="mc-field-group">
  	<label for="mce-FNAME">Prenumele tău preferat <span class="asterisk">*</span>
    </label>
  	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
  </div>

  <div class="mc-field-group">
  	<label for="mce-EMAIL">Adresă de email pe care o verifici zilnic <span class="asterisk">*</span>
  </label>
  	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
  </div>

  	<div id="mce-responses" class="clear">
  		<div class="response" id="mce-error-response" style="display:none"></div>
  		<div class="response" id="mce-success-response" style="display:none"></div>
  	</div>
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8afc636eecb08cf316417c49f_fd48a45d07" tabindex="-1" value=""></div>
      <div class="clear"><input style="background-color:#A80874" type="submit" value="Obține document" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
  </form>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>


  <strong>Citește și alte articolele de pe blog.</strong>

  <ul>
      @forelse ($posts->sortBy('date') as $post)
          <li>
              <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
              <small>{{ $post->prettyDate() }}</small>
          </li>
      @empty
          <p>Niciun articol de arătat. O dispărut toate ca prin minune.</p>
      @endforelse
  </ul>

  @endsection
