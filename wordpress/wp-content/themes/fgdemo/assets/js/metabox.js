(function($){
$(document).ready(function() {

    var $page_template = $('#page_template'),

        $aboutMB = $('#fgs_about'),
        $servicesMB = $('#fgs_services'),

        $headerMB = $('#fgs_header'),
        $headerposMB = $('#fgs_header-pos'),

        $eventvidMB = $('#fgs_events-video'),
        $eventpicMB = $('#fgs_events-photo'),
        $eventinfoMB = $('#fgs_events-info'),


        $pageattr = $('#pageparentdiv');        // page attributes
        $textedit = $('#postdivrich');          // text editor

    $page_template.change(function() {
      if ($(this).val() == 'page-templates/about-page.php') {
          $aboutMB.show();
          $servicesMB.hide();

          $eventinfoMB.hide();
          $eventvidMB.hide();
          $eventpicMB.hide();

          // debug
          console.log ('default value = ' + $('#page_template').val());
        }
        else if ($(this).val() == 'page-templates/services-page.php') {
            $aboutMB.hide();
            $servicesMB.show();

            $eventinfoMB.hide();
            $eventvidMB.hide();
            $eventpicMB.hide();

            $headerMB.hide();
            $headerposMB.hide();

            // debug
            console.log ('default value = ' + $('#page_template').val());
          }
        else if ($(this).val() == 'page-templates/photo-event-page.php' || $(this).val() == 'page-templates/video-event-page.php') {
            $aboutMB.hide();
            $servicesMB.hide();

            $headerMB.hide();
            $headerposMB.hide();

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
              $aboutMB.hide();
              $servicesMB.hide();

              $eventinfoMB.hide();
              $eventvidMB.hide();
              $eventpicMB.hide();

              $headerMB.show();
              $headerposMB.show();

              // debug
              console.log ('default value = ' + $('#page_template').val());
          }
    }).change();

});
})(jQuery);
