<?php
  // some configuration which should not be hidden in the code
  // only non-specific configuration should be used here (use config.ini for specific configuration)
  $config = array(
    "jQuery" => "https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js",
    "MathJax" => "https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js",
    "D3" => "http://d3js.org/d3.v3.min.js",
    "blog" => "https://portonmath.wordpress.com",
    "blog feed" => "https://portonmath.wordpress.com/feed/",
    "GitHub feed" => "https://github.com/vporton/agt-book/commits/master.atom",
    "SimplePie cache" => $_SERVER["DOCUMENT_ROOT"] . "/php/cache",
  );
?>
