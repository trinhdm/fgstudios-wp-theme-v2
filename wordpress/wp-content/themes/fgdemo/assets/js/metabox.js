// (function($){
// $(document).ready(function() {
//
//
//
//   if ($('#page_template').val() == 'about-page.php') {
//       $('#fgs_about').show();
//       $('#fgs_services').hide();
//     }
//     else if ($('#page_template').val() == 'services-page.php') {
//         $('#fgs_about').hide();
//         $('#fgs_header').hide();
//         $('#fgs_header-pos').hide();
//         $('#fgs_services').show();
//       }
//       else {
//           $('#fgs_about').hide();
//           $('#fgs_services').hide();
//       }
// })
// })(jQuery);


(function($){
$(document).ready(function() {

    var $page_template = $('#page_template'),
        $aboutMB = $('#fgs_about'),
        $servicesMB = $('#fgs_services'),
        $headerMB = $('#fgs_header'),
        $headerposMB = $('#fgs_header-pos'),

        // page attributes
        $pageattr = $('#pageparentdiv');

    $page_template.change(function() {
      if ($(this).val() == 'page-templates/about-page.php') {
          $aboutMB.show();
          $servicesMB.hide();

          // debug
          console.log ('default value = ' + $('#page_template').val());
        }
        else if ($(this).val() == 'page-templates/services-page.php') {
            $aboutMB.hide();
            $headerMB.hide();
            $headerposMB.hide();
            $servicesMB.show();

            // debug
            console.log ('default value = ' + $('#page_template').val());
          }
          else {
              $aboutMB.hide();
              $servicesMB.hide();

              // debug
              console.log ('default value = ' + $('#page_template').val());
          }
    }).change();

});
})(jQuery);
