<?php

namespace Drupal\yse_paragraphs_promoter\Service;

use Drupal\Core\Url;

class Promoter {

  public static function getPromoterNid(){
    $promoter = NULL;
    $referer = \Drupal::request()->headers->get('referer');
    if (!empty($referer)) {
      $alias = parse_url($referer, PHP_URL_PATH);
      if (!empty($alias)) {
        $url = Url::fromUri('internal:' . $alias);
        $promoter = $url->getRouteParameters()['node'];
        return $promoter;
      }
    }

    return $promoter;
  }
}
