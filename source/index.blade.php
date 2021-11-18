@extends('_layouts.master')

@section('content')
<!-- <button id="reveal1" class="button-reveal" style="vertical-align:middle"><span>Citește</span></button>
<div id="Home-1">
</div>
-->

<p>Văd în jur doar <strong>mâini ridicate</strong>, și, o ridic și eu.</p>

<p>“În două săptămâni, cei care ați ridicat mâna, veți recita Luceafărul.” spuse doamna profesoară.</p>

<p>Și uite așa m-am apucat eu de învățat luceafărul. Jumătate din inițiativă proprie, jumătate din inițiativă colectivă. Aproape jumătate clasa optase pentru a primi doi de 10 în schimbul memorării celebrei poezii a lui Eminescu.</p>

<p>Patru foi A4, proaspăt printate, încă sunt calde, și tocmai ce le-am lipit pe dulap, la nivelul ochilor pentru a fi citite, și recitite, din picioare.</p>

<p>Dar ce să vezi? Când i-am spus iubitei mele, de atunci, ea nu-și putea imaginase că aș fi în stare să fac asta. Pe lângă că a fost o provocare să-l învăț, am mai avut și această presiune, dacă o pot numi așa.</p>

<p>“Eu nu cred că poți!” spuse ea, la final de plimbare. </p>

<p>Și uite așa, s-a născut în mine o ambiție gigantică. Aveam acum 2 femei în fața cărora trebuia să demonstrez că pot memora o poezie de 98 de strofe. Și nu orice poezie, era Luceafărul, de Mihai Eminescu.</p>

<p>Chiar dacă pare tembel, dar am spus da acestei provocări, și, la fel te încurajez să faci și tu.</p>

<p>Spune da propunerilor, spune da provocărilor, spune da vieții.</p>

<p>Atunci când spunem da mai des, începe să curgă mai multă viață prin noi. Dar nu mă crede pe cuvânt, încearcă.</p>

<p>Acest da pentru Luceafărul, a fost un punct de plecare în călătoria mea de a aduna povești de-a lungul vieții. Atunci mi-am dat seama că această primă povestioară merită spusă nepoților, și am realizat că misiunea mea personală este să am ce povești să le spun nepoților.</p>

<p>Când îmi e frică să fac un lucru, îmi amintesc de nepoți, și atunci brusc am curaj. Vreau ca nepoții mei să fie inspirați și cu piele de găină când îmi aud poveștile.</p>



  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
  	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
  	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
  </style>
  <div id="mc_embed_signup">
  <form action="https://sergiu-adrian.us6.list-manage.com/subscribe/post?u=8afc636eecb08cf316417c49f&amp;id=fd48a45d07" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">

    <p><strong>Te invit să spui da</strong>, alături de mine, și promit că te vei simți și tu inspirat citind emailurile de la mine.

    <p><strong>Te invit să spui da</strong>, abonării la newsletter, pentru că doar celor care se abonează le spun finalul poveștii cu Luceafărul.

    <p><strong>Te invit să spui da</strong>, o lună întreagă la orice propunere primești. Nu știi niciodată în spatele cărei da se află o viață pe care de mult ți-o dorești.


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
