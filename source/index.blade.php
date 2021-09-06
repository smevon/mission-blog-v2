@extends('_layouts.master')

@section('content')
<strong>„Și dacă-mi scuipă în supă? Mai bine tac... lasă.”</strong>
<p align="center"> - spuse el către prieteni.</p>

<p>Atunci când comanda la restaurant durează dublu decât timpul estimat:</p>

<button id="reveal1" class="button-reveal" style="vertical-align:middle"><span>Citește</span></button>
<div id="Home-1">
</div>



<p>Atunci când ești servit impecabil</p>
<ul>
<li>apreciază atitudinea</li>
<li>oferă complimente</li>
<li>laudă comportamentele</li>
</ul>

<p>Este o muncă și un efort constant în a oferi un serviciu impecabil. Apreciază-l.</p>

<p>Este un dezinteres total când ți se aduce comanda greșit. Verbalizează-ți așteptarea și nemulțumirea.</p>

<p>Dacă ești antreprenor, manager sau agent de relații cu clienții, scriu pentru tine.</p>

<p>Atunci când ești indiferent față de client, riști să ai clienți înflăcărați care îți promovează în sens negativ afacerea. Da... munca ta.</p>

<p>Atunci când ești „înflăcărat” față de client și îți pasă cu adevărat de el, cresc șansele să ai tot mai mulți clienți fideli, recomandatori și în cele din urmă ambasadori ai brandului tău.</p>

<ul>Abonează-te, vino în comunitatea celor care
<li>s-au săturat să arunce bani pe fereastră pentru a atrage clienți noi</li>
<li>vor să ofere experiențe memorabile clienților</li>
<li>au în plan să-și crească LTV / client </li>
</ul>

<ul>Nu te abona, dacă
<li>pentru tine este mai important să atragi clienți noi decât să-i menții pe cei existenți</li>
<li>refuzi vehement să-ți pese cine este clientul tău și cum se simte când interacționează cu tine</li>
<li>atunci când un client îți spune o problemă, o ignori complet</li>
</ul>
<p>Am prezentat pe scurt cele două categorii, dar înainte să te decizi în ce tabără vrei să fii, mai am ceva de zis.</p>

<p>Peste 1150 de ore de cursuri și traininguri, aproape 500 de ore petrecute la telefon cu clienții și peste 250 de ore de consultanță oferite clienților mă susțin în a te învăța și pe tine cele descoperite. Fac asta prin scris, cursuri și consultanță.</p>

<p>Acum, tu alegi în care parte vrei să fii!</p>

<strong>„În următorii 40 de ani, vreau să ajut la construirea renumelui țării noastre. Vreau ca România să fie cunoscută ca fiind cea mai serviabilă țară din lume. Totul pornește de la compania ta.”</strong>

<p> Ar fi o idee rea să fie așa?</p>









<button class="button-js" onclick="addCode()" style="vertical-align:middle"><span>Nu</span></button>
<div id="Mailchimp-Select">
</div>

<!-- Begin Mailchimp Signup Form
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
  	</div>
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8afc636eecb08cf316417c49f_fd48a45d07" tabindex="-1" value=""></div>
      <div class="clear"><input style="background-color:#A80874" type="submit" value="Mă abonez" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
  </form>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->

  <strong>Citește articolele de pe blog.</strong>

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
