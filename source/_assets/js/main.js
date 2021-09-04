import 'sharer.js';
import './highlight'
import './contact'

const outdated = document.querySelector('[data-phpdate]');

if (outdated) {
    const phpdate = outdated.dataset.phpdate;
    if (((Date.now() / 1000 - phpdate) / 86400) < 365) {
        outdated.remove();
    }
}

document.querySelector('[data-year]').textContent = (new Date().getFullYear());

const clickMe = document.querySelector('.test-js');

if (clickMe) {
    clickMe.addEventListener('click', () => {
        clickMe.textContent = 'it works ' + String(Date.now()).slice(-6);
    });
}

function addCode() {
//  var MailChimpCode = '<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"><style type="text/css">#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }</style><div id="mc_embed_signup"><form action="https://sergiu-adrian.us6.list-manage.com/subscribe/post?u=8afc636eecb08cf316417c49f&amp;id=fd48a45d07" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate><div id="mc_embed_signup_scroll"><h2>Abonează-te</h2><div class="indicates-required"><span class="asterisk">*</span> Musai</div><div class="mc-field-group"><label for="mce-EMAIL">Adresă de email <span class="asterisk">*</span></label><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"></div><div class="mc-field-group"><label for="mce-FNAME">Prenumele tău preferat </label><input type="text" value="" name="FNAME" class="" id="mce-FNAME"></div><div id="mce-responses" class="clear"><div class="response" id="mce-error-response" style="display:none"></div><div class="response" id="mce-success-response" style="display:none"></div></div> <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8afc636eecb08cf316417c49f_fd48a45d07" tabindex="-1" value=""></div><div class="clear"><input style="background-color:#A80874" type="submit" value="Mă abonez" name="subscribe" id="mc-embedded-subscribe" class="button"></div></div></form></div><script type=\'text/javascript\' src=\'//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js\'></script><script type=\'text/javascript\'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]=\'EMAIL\';ftypes[0]=\'email\';fnames[1]=\'FNAME\';ftypes[1]=\'text\';}(jQuery));var $mcj = jQuery.noConflict(true);</script>';

var MailChimpCode = '\
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">\
<style type="text/css">\
  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }\
</style>\
<div id="mc_embed_signup">\
<form action="https://sergiu-adrian.us6.list-manage.com/subscribe/post?u=8afc636eecb08cf316417c49f&amp;id=fd48a45d07" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>\
    <div id="mc_embed_signup_scroll">\
  <h2>Abonează-te</h2>\
<div class="indicates-required"><span class="asterisk">*</span> Musai</div>\
\
<div class="mc-field-group">\
  <label for="mce-EMAIL">Adresă de email <span class="asterisk">*</span>\
</label>\
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">\
</div>\
\
<div class="mc-field-group">\
  <label for="mce-FNAME">Prenumele tău preferat </label>\
  <input type="text" value="" name="FNAME" class="" id="mce-FNAME">\
</div>\
\
  <div id="mce-responses" class="clear">\
    <div class="response" id="mce-error-response" style="display:none"></div>\
    <div class="response" id="mce-success-response" style="display:none"></div>\
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->\
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8afc636eecb08cf316417c49f_fd48a45d07" tabindex="-1" value=""></div>\
    <div class="clear"><input style="background-color:#A80874" type="submit" value="Mă abonez" name="subscribe" id="mc-embedded-subscribe" class="button"></div>\
    </div>\
</form>\
</div>\
<script type=\'text/javascript\' src=\'//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js\'></script><script type=\'text/javascript\'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]=\'EMAIL\';ftypes[0]=\'email\';fnames[1]=\'FNAME\';ftypes[1]=\'text\';}(jQuery));var $mcj = jQuery.noConflict(true);</script>\
<!--End mc_embed_signup-->';

  document.getElementById("Mailchimp-Select").innerHTML += MailChimpCode;
        }



document.getElementById('reveal1').addEventListener('click', revealText1);

function revealText1() {

if(revealText1.done) return;

  var textToReveal = '<ul>'
  + '<li>este dreptul tău să spui că ești nemulțumit</li>'
  + '<li>este dreptul tău să ceri o reducere</li>'
  + '<li>este în spre binele tău să faci ceva, orice. (fără agresivitate, te rog)</li>'
  + '</ul>';

  document.getElementById("Home-1").innerHTML += textToReveal;

  document.getElementById("reveal1").style.visibility = "hidden";
  document.getElementById("Home-1").style.margin = "-100px 0px 0px 0px";
  //document.getElementById("Home-1").innerHTML += textToReveal;
}



// for nav-BAR - JQuerry Sergiu draga
/*
$(function(){
  var str = '#len'; //increment by 1 up to 1-nelemnts
  $(document).ready(function(){
    var i, stop;
    i = 1;
    stop = 4; //num elements
    setInterval(function(){
      if (i > stop){
        return;
      }
      $('#len'+(i++)).toggleClass('bounce');
    }, 500)
  });
});
*/
