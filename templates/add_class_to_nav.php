<script>
      (function ($) {
        //Create my own query that we contain
        jQuery.expr[':'].icontains = function(a, i, m) {
          return jQuery(a).text().toUpperCase()
              .indexOf(m[3].toUpperCase()) >= 0;
        };

        //check the main-menu for thus url
        $(document).ready(function(){
          
          //Make sure url isn't blank
          if("<?php echo $url; ?>"){

            if ($('#menu-main-menu a:icontains("<?php echo $url ?>")').length > 0) {

              //For loop runs to get the single word version of the menu item.
              var str   = "<?php echo $url; ?>";
              var words = str.split(" ");

              for (var i = 0; i < words.length - 1; i++) {
              
                $('#menu-main-menu a:icontains("'+words[i]+'")').eq(0).addClass("the_active_state_nav_item");

              }
              //Catch if 
              $('#menu-main-menu a:icontains("<?php echo $url ?>")').eq(0).addClass("the_active_state_nav_item");

            }
          }

        });
        $.fn.myfunction = function() {
          return this;
        };
      })(jQuery);

    </script>