<?php


		// table of contents for meta boxes
		// 1A. HEADER
		// 1B. HEADER POSITIONING
		// 2A. ABOUT - STAFF BIO

add_filter( 'rwmb_meta_boxes', 'fgs_register_meta_boxes' );
function fgs_register_meta_boxes( $meta_boxes ) {

		$prefix = 'fgs_';

		// 1A. HEADER
    $meta_boxes[] = array(
        'title'      => __( 'Change Header Image', 'fgs' ),
				'id'				 => "{$prefix}header",
				'context'    => 'side',
        'post_types' => 'page',
				'priority'   => 'high',
				'autosave'   => true,
        'fields'     => array(
						array(
							'name' => __( '<p>Image Upload</p>', 'fgs' ),
							'id'   => "{$prefix}header-img",
							'type' => 'plupload_image',
							'max_file_uploads' => 1,
							'desc'  => __( '<p>Image for the header for this page.<br>Remember to pick the page template!<br>Img will not upload if its bigger than <b>2MB</b>.</p>', 'fgs' ),
						),
        ),
    );


		//  1B. HEADER POSITIONING
		$meta_boxes[] = array(
        'title'      => __( 'Header Image Position', 'fgs' ),
				'id'         => "{$prefix}header-pos",
        'post_types' => 'page',
				'context'    => 'side',
				'autosave'   => true,
				'priority'   => 'high',
        'fields'     => array(
            array(
                'id'   => "{$prefix}header-top",
                'name' => __( 'Top (px)', 'fgs' ),
                'type' => 'text',
								'desc'  => __( '<p>Reposition the background image from the top.<br><b>Put 0px for default.</b><br>Put a negative # to shift image down.</p>', 'fgs' ),
            ),
						array(
                'id'   => "{$prefix}header-left",
                'name' => __( 'Left (px)', 'fgs' ),
                'type' => 'text',
								'desc'  => __( '<p>Reposition the background image from the left.<br><b>Put 0px for default.</b></p>', 'fgs' ),
            ),
        ),
    );


		// 2A. ABOUT - STAFF BIO
		$meta_boxes[] = array(
        'title'      => __( 'Staff Bio' ),
				'id'         => "{$prefix}about",
        'post_types' => 'page',

        'fields'     => array(
            array(
                'id'   => "{$prefix}staff-name",
                'name' => __( 'Name', 'fgs' ),
                'type' => 'text',
            ),
						array(
                'id'   => "{$prefix}staff-position",
                'name' => __( 'Position', 'fgs' ),
                'type' => 'text',
            ),
            array(
                'id'   => "{$prefix}staff-bio",
                'name' => __( 'Biography', 'fgs' ),
                'type' => 'textarea',
            ),
        ),
    );


		// change services image meta box
    $meta_boxes[] = array(
        'title'      => __( 'Services - Image', 'fgs' ),
				'id'				 => "{$prefix}services",
        'post_types' => 'page',
				'priority'   => 'high',
				'context'    => 'side',
				'autosave'   => true,
        'fields'     => array(
						array(
							'name' => __( '<p>Image Upload</p>', 'fgs_' ),
							'id'   => "{$prefix}services-img",
							'type' => 'plupload_image',
							'max_file_uploads' => 1,
							'desc'  => __( '<p>Image that is displayed on the Services page.<br>It will not upload if image is bigger than <b>2MB</b>.</p>', 'fgs' ),
						),
        ),
    );



		// PHOTO EVENT
		$meta_boxes[] = array(
        'title'      => __( 'Populate Photo Gallery', 'fgs' ),
				'id'				 => "{$prefix}events-photo",
        'post_types' => 'page',
				'priority'   => 'high',
				'context'    => 'normal',
				'autosave'   => true,
        'fields'     => array(
						array(
							'name' => __( '<p>Image Upload</p>', 'fgs_' ),
							'id'   => "{$prefix}photo-event-gallery",
							'type' => 'plupload_image',
							'desc'  => __( '<p>Populates the photo gallery.<br>Upload as many pictures as you want.<br>It will not upload if image is bigger than <b>2MB</b>.</p>', 'fgs' ),
						),
        ),
    );




		// VIDEO EVENT PAGE

		$meta_boxes[] = array(
				'title'      => __( 'Change Video Displayed', 'fgs_' ),
				'id'				 => "{$prefix}events-video",
				'context'    => 'normal',
				'post_types' => 'page',
				'priority'   => 'high',
				'autosave'   => true,
				'fields'     => array(
						array(
							'name' => __( '<p>Use a <b>YouTube</b> link.</p>', 'fgs_' ),
							'id'   => "{$prefix}yt-events",
							'type' => 'oembed',
							'desc'  => __( '<p>Video that is displayed for this page.<br>Remember to pick the page template!</p>', 'fgs_' ),
						),
				),
		);



		$meta_boxes[] = array(
        'title'      => __( 'Event Information', 'fgs_' ),
				'id'				 => "{$prefix}events-info",
				'context'    => 'normal',
        'post_types' => 'page',
				'priority'   => 'high',
				'autosave'   => true,
        'fields'     => array(
						array(
							'name' => __( 'Event Description', 'fgs_' ),
							'desc' => __( 'Write the Event <b>Description</b> here.', 'fgs_' ),
							'id'   => "{$prefix}events-desc",
							'type' => 'textarea',
							'cols' => 20,
							'rows' => 3,
						),
						array(
							'name' => __( 'Event Details', 'fgs_' ),
							'desc' => __( 'Write the Event <b>Details</b> here, such as the date, location, etc.', 'fgs_' ),
							'id'   => "{$prefix}events-deets",
							'type' => 'textarea',
							'cols' => 20,
							'rows' => 3,
						),
        ),
    );

    return $meta_boxes;
}

?>
