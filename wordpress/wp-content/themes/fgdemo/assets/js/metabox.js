(function($){
$(document).ready(function() {

    var $page_template = $('#page_template'),

        $homeMB = $('#fgs_home-info'),
        $quoteMB = $('#fgs_testimonial'),
        $aboutMB = $('#fgs_about'),
        $servicesMB = $('#fgs_services'),

        $headerMB = $('#fgs_header'),

        $eventvidMB = $('#fgs_events-video'),
        $eventpicMB = $('#fgs_events-photo'),
        $eventinfoMB = $('#fgs_events-info'),


        $pageattr = $('#pageparentdiv');        // page attributes
        $textedit = $('#postdivrich');          // text editor

    $page_template.change(function() {
      if ($(this).val() == 'page-templates/about-page.php') {
          $homeMB.hide();
          $quoteMB.hide();
          $aboutMB.show();
          $servicesMB.hide();

          $eventinfoMB.hide();
          $eventvidMB.hide();
          $eventpicMB.hide();

          // debug
          console.log ('default value = ' + $('#page_template').val());
        }
        else if ($(this).val() == 'page-templates/home-page.php') {
            $homeMB.show();
            $quoteMB.show();
            $aboutMB.hide();
            $servicesMB.hide();

            $eventinfoMB.hide();
            $eventvidMB.hide();
            $eventpicMB.hide();

            $headerMB.hide();

            $textedit.hide();

            // debug
            console.log ('default value = ' + $('#page_template').val());
          }
        else if ($(this).val() == 'page-templates/services-page.php') {
            $homeMB.hide();
            $quoteMB.hide();
            $aboutMB.hide();
            $servicesMB.show();

            $eventinfoMB.hide();
            $eventvidMB.hide();
            $eventpicMB.hide();

            $headerMB.hide();

            // debug
            console.log ('default value = ' + $('#page_template').val());
          }
        else if ($(this).val() == 'page-templates/photo-event-page.php' || $(this).val() == 'page-templates/video-event-page.php') {
            $homeMB.hide();
            $quoteMB.hide();
            $aboutMB.hide();
            $servicesMB.hide();

            $headerMB.hide();

            $textedit.hide();

            $eventinfoMB.show();

            if ($(this).val() == 'page-templates/video-event-page.php') {
                $eventvidMB.show();
                $eventpicMB.hide();
            }

            else {
              $eventvidMB.hide();
              $eventpicMB.show();
            }

            // debug
            console.log ('default value = ' + $('#page_template').val());
            }
          else {
              $homeMB.hide();
              $quoteMB.hide();
              $aboutMB.hide();
              $servicesMB.hide();

              $eventinfoMB.hide();
              $eventvidMB.hide();
              $eventpicMB.hide();

              $headerMB.show();

              // debug
              console.log ('default value = ' + $('#page_template').val());
          }
    }).change();

});
})(jQuery);
