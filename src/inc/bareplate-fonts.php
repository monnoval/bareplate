<?php

/**
 * Add async fonts
 */
function bareplate_fonts() { ?>
<script>
  WebFontConfig = {
    google: { families: [
      'Roboto:300,400,500,700:latin',
      'Roboto+Slab:300,400,700:latin',
    ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.16/webfontloader.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();</script>
<?php
}
add_action('wp_head', 'bareplate_fonts');