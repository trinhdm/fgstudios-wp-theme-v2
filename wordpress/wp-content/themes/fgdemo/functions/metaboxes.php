<?php
add_filter( 'rwmb_meta_boxes', 'fgs_register_meta_boxes' );
function fgs_register_meta_boxes( $meta_boxes ) {

		$prefix = 'fgs_';

		// change header image meta box
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
							'desc'  => __( '<p>Image for the header for this page.<br>It will not upload if image is bigger than <b>2MB</b>.</p>', 'fgs' ),
						),
        ),
    );

		// change image header position meta box
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

		// staff bio - for about us page
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
				'autosave'   => true,
        'fields'     => array(
						array(
							'name' => __( '<p>Image Upload</p>', 'fgs' ),
							'id'   => "{$prefix}services-img",
							'type' => 'plupload_image',
							'max_file_uploads' => 1,
							'desc'  => __( '<p>Image that is displayed on the Services page.<br>It will not upload if image is bigger than <b>2MB</b>.</p>', 'fgs' ),
						),
        ),
    );

    return $meta_boxes;
}

?>
