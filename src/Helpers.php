<?php

namespace Mole\SASN;

class Helpers {

  //Helper Function - get relative permalink
  public static function get_relative_permalink( $url ) {
    return str_replace( home_url(), "", $url );
  }

  //Helper Function - get relative permalink
  public static function remove_the_slash( $url ) {
    return str_replace( "/", "", $url );
  }

  //Helper Function - get relative permalink
  public static function turn_dash_to_space( $url ) {
    return str_replace( "-", " ", $url );
  }

  //Does all the filters
  public static function filter_active_url(){
    $url = get_permalink();
    $url = self::get_relative_permalink($url);
    $url = self::remove_the_slash($url);
    $url = self::turn_dash_to_space($url);
    return $url;
  }

}