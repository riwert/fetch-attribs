<?php

$url = ( ! empty($argv[1])) ? $argv[1] : 'https://google.pl';
$tag = ( ! empty($argv[2])) ? $argv[2] : 'img';
$attr = ( ! empty($argv[3])) ? $argv[3] : 'src';

$html = file_get_contents($url);

$doc = new DOMDocument();
@$doc->loadHTML($html);

$tags = $doc->getElementsByTagName($tag);

foreach ($tags as $tag) {
       $attribute = $tag->getAttribute($attr);
       if ($attribute)
       		echo $attribute . "\n";
}
