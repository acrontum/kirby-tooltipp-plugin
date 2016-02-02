<?php

kirbytext::$tags['tooltip'] = array(
  'attr' => array(
    'text',
    'url',
    'tooltip'
  ),
  'html' => function ($tag) {

    $url     = $tag->attr('url');
    $tooltip = $tag->attr('tooltip');
    $text    = $tag->attr('text');
    if(empty($url)){
      return '<span href="' . $url . '" class="tooltip" title="' . $tooltip . '">' . $text . '</span>';
    } else {
      return '<a href="' . $url . '" class="tooltip" title="' . $tooltip . '">' . $text . '</a>';
    }
  }
);
