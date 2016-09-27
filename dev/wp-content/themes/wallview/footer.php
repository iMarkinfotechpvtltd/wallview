<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
 <!-- Footer Section Starts-->
 <footer class="main-footer">
  <div class="container">
   <div class="lft" id="contact">
    <div class="contact-form">
     <div class="foot-titles">
      <h2><?php the_field("get_in_touch",5);?></h2>
     </div>
     <div class="form">
      <?php echo do_shortcode( '[contact-form-7 id="81" title="contact form 2" html_class="form-inline"]' ); ?>
     </div>
    </div>
   </div>

   <div class="rgt">
    <div class="contact-details">
     <div class="foot-titles">
      <h2><?php the_field("contact_details",5);?></h2>
     </div>
     <ul>
      <li>
       <div class="footr-icon"><i class="fa fa-phone" aria-hidden="true"></i></div><span><?php the_field("footer_phone_title",5);?></span>
       <a href="tel:<?php the_field("footer_phone",5);?>">
        <?php the_field("footer_phone",5);?>
       </a>
      </li>
      <li>
       <div class="footr-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div><span><?php the_field("footer_email_title",5);?></span>
       <a href="mailto:<?php the_field("footer_email",5);?> ">
        <?php the_field("footer_email",5);?>
       </a>
      </li>
      <li>
       <div class="footr-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
       <?php the_field("footer_address",5);?>
      </li>
	  <li>
	  
      <img src="<?php echo esc_url( get_template_directory_uri() );?>/images/WIA_Logo.png">      
      </li>
     </ul>
    </div>
   </div>

  </div>
 </footer>
 <!-- Footer Section Ends-->
 <div class="cpy-rgt">
  <div class="container">
   <p>All Right Reserved
    <?php echo date('Y'); ?>,Website Created By Tradesign</p>
  </div>
 </div>
 <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.js"></script>
 <!--<script src="<?php //echo esc_url( get_template_directory_uri() ); ?>/dist/lity.js"></script>-->
 <?php wp_footer();?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>

  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.validate.js"></script>

  <!--script type="text/javascript">
jQuery(document).ready(function($) {
 
  Hook up the current state to the nav bar
 jQuery('.navbar').onePageNav();
  
});
</script-->

  <script>
   jQuery(function () {
    jQuery('a[href*=#]:not([href=#])').click(function () {
     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      var winWidth = jQuery(window).width();
      if (winWidth <= 480) {
       var hgt = jQuery('.menu').height();
       var fin_hgt = parseInt(hgt) / 2;
       if (target.length) {
        jQuery('html,body').animate({
         scrollTop: target.offset().top - fin_hgt
        }, 1000);
        return false;
       }
      }

 if ((winWidth <= 991)&&(winWidth >= 768))
	   {
       var hgt1 = jQuery('.menu').height();
	   var fin_hgt1 = parseInt(hgt1) / 2;
       if (target.length) {
        jQuery('html,body').animate({
         scrollTop: target.offset().top - fin_hgt1
        }, 1000);
        return false;
       }
      }
if (winWidth >= 991)
	   {
       var hgt2 = jQuery('.head').height();
       if (target.length) {
        jQuery('html,body').animate({
         scrollTop: target.offset().top - hgt2
        }, 1000);
        return false;
       }
      }
     }
    });
   });
  </script>


  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.js"></script>
  <script>
   var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 150,
    mobile: true,
    live: true,
    callback: function (box) {},
    scrollContainer: null
   });
   wow.init();
  </script>
  <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mixitup.min.js"></script>


  <script type="text/javascript">
   jQuery(function () {

    var filterList = {

     init: function () {

      // MixItUp plugin
      // http://mixitup.io
      jQuery('#portfoliolist').mixItUp({
       selectors: {
        target: '.portfolio',
        filter: '.filter'
       },
       load: {
        filter: '.app'
       }
      });

     }

    };

    // Run the show!
    filterList.init();


   });
  </script>



  <script type="text/javascript">
   jQuery(document).ready(function ($) {
    if (navigator.userAgent.match(/Trident\/7\./)) { // if IE
     jQuery('body').on("mousewheel", function () {
      // remove default behavior
      event.preventDefault();

      //scroll without smoothing
      var wheelDelta = event.wheelDelta;
      var currentScrollPosition = window.pageYOffset;
      window.scrollTo(0, currentScrollPosition - wheelDelta);
     });
    }
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery.noConflict();
    jQuery("input[name='name']").keypress(function (event) {
     var inputValue = event.which;
     // allow letters and whitespaces only.
     if ((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97) || (inputValue > 123 && inputValue < 126) && (inputValue != 32)) {
      event.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery.noConflict();
    jQuery("input[name='name-1']").keypress(function (event) {
     var inputValue = event.which;
     // allow letters and whitespaces only.
     if ((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97) || (inputValue > 123 && inputValue < 126) && (inputValue != 32)) {
      event.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery.noConflict();
    jQuery("input[name='name_3']").keypress(function (event) {
     var inputValue = event.which;
     // allow letters and whitespaces only.
     if ((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97) || (inputValue > 123 && inputValue < 126) && (inputValue != 32)) {
      event.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_11']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_12']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_21']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_22']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_31']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_32']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_41']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script type="text/javascript">
   jQuery(document).ready(function () {
    jQuery("input[name='wall_42']").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
     }
    });
   });
  </script>
  <script>
   jQuery(document).ready(function () {
    jQuery("#navbar>ul>li>a").each(function () {
     jQuery(this).click(function () {
      jQuery("#navbar").removeAttr("aria-expanded");
      jQuery("#navbar").removeAttr("style");
      jQuery("#navbar").attr("aria-expanded", "true");
      jQuery("#navbar").removeClass("in");
      jQuery(".navbar-toggle").addClass("collapsed");
      jQuery(".navbar-toggle").removeAttr("aria-expanded");
      jQuery(".navbar-toggle").attr("aria-expanded", "false");
     });
    })

   });
  </script>

  <!--script>
jQuery(document).ready(function() {
var stickyNavTop = jQuery('.head').offset().top;
 
var stickyNav = function(){
var scrollTop = jQuery(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    jQuery('.head').addClass('sticky');
} else {
    jQuery('.head').removeClass('sticky'); 
}
};
 
stickyNav();
 
jQuery(window).scroll(function() {
  stickyNav();
});
});
</script-->
  <script>
   jQuery(document).ready(function () {
    jQuery('.navbar-nav>li>a[href*="#"]:not([href="#"])').click(function () {
     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
       jQuery(".navbar-nav>li>a").each(function () {
        jQuery(this).parent().removeClass("active_check");
       });
       jQuery(this).parent().addClass('active_check');
       return false;
      }
     }
    });
   });
  </script>
  </body>

  </html>