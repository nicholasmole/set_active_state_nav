<?php

namespace Mole\SASN;

use Mole\SASN\Helpers;

class SetActiveStateNav {

  //Contructor
  public function __construct()
  { 
    add_action('wp_footer' ,array($this,'render_sasn'));
    
  }
  public function render_sasn() {

    //GET THE URL
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);

    //Filter the Needed URL
    $editlink = Helpers::turn_dash_to_space($uri_segments[1]);

    //RUN QUERY : ADDING CLASS IF THIS IS THE PAGE
    $this->add_class_to_nav($editlink);

  }

  public function add_class_to_nav($url){
    ?>
    <script>
      (function ($) {
        //Create my own query that we contain
        jQuery.expr[':'].icontains = function(a, i, m) {
          return jQuery(a).text().toUpperCase()
              .indexOf(m[3].toUpperCase()) >= 0;
        };

        //check the main-menu for thus url
        $(document).ready(function(){

          if ($('#menu-main-menu a:icontains("<?php echo $url ?>")').length > 0) {

            $('#menu-main-menu a:icontains("<?php echo $url ?>")').addClass("the_active_state_nav_item");

          }

        });
        $.fn.myfunction = function() {
          return this;
        };
      })(jQuery);
    </script>
    <?php
  }
  

}