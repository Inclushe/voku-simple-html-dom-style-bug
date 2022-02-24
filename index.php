<?php

// Adapted from https://github.com/patrickposner/simply-static/blob/b9d1750de3996cdb8458700ff33fc4d6f64d8a58/src/class-ss-url-extractor.php

use voku\helper\HtmlDomParser;

require __DIR__ . '/vendor/autoload.php';

$dom = HtmlDomParser::str_get_html( file_get_contents('./test.html') );

$tags = $dom->find( 'style' );

foreach ( $tags as $tag ) {
  $tag->innertext = $tag->innertext . ' .test{color: red;}';
}

return $dom->save();