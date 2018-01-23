<?php

function vdr_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'your_theme_logo' );
	// Add a control to upload the logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
		array(
			'label'    => 'Upload Logo',
			'section'  => 'title_tagline',
			'settings' => 'your_theme_logo',
		) ) );


	$wp_customize->add_section( 'hero', array(
		'title'       => __( 'Hero Section', 'vdrcustom' ),
		'description' => sprintf( __( 'Options for hero.', 'vdrcustom' ) ),
		'priority'    => 130
	) );

	$wp_customize->add_setting( 'hero_bg_img', array(
		'default' => get_bloginfo( 'template_directory' ) . '/img/hero-img.jpg',
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_img', array(
		'label'    => __( 'Hero Backgroung Image', 'vdrcustom' ),
		'section'  => 'hero',
		'settings' => 'hero_bg_img',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'hero_main_img', array(
		'default' => get_bloginfo( 'template_directory' ) . '/img/vdr-logo-full.png',
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_main_img', array(
		'label'    => __( 'Hero Main Image', 'vdrcustom' ),
		'section'  => 'hero',
		'settings' => 'hero_main_img',
		'priority' => 1
	) ) );


	$wp_customize->add_setting( 'hero_heading', array(
		'default' => __( 'VDR Constructions', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'hero_heading', array(
		'label'    => __( 'Hero Heading', 'vdrcustom' ),
		'section'  => 'hero',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'hero_text', array(
		'default' => _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Sunt ipsam dolorem et ullam eos quidem voluptate deleniti dignissimos iure reprehenderit perferendis neque ratione alias eum totam, ab nostrum sequi eligendi.', 'vdrcustom' ),
		'type'    => 'theme_mod',

	) );

	$wp_customize->add_control( 'hero_text', array(
		'label'    => __( 'Hero Text', 'vdrcustom' ),
		'section'  => 'hero',
		'priority' => 3,
		'type'     => 'textarea'

	) );

	$wp_customize->add_setting( 'hero_btn_1_url', array(
		'default' => __( 'http://#', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'hero_btn_1_url', array(
		'label'    => __( 'Button 1 URL', 'vdrcustom' ),
		'section'  => 'hero',
		'priority' => 4
	) );

	$wp_customize->add_setting( 'hero_btn_1_text', array(
		'default' => __( 'Over Ons', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'hero_btn_1_text', array(
		'label'    => __( 'Button 1 Text', 'vdrcustom' ),
		'section'  => 'hero',
		'priority' => 5
	) );

	$wp_customize->add_setting( 'hero_btn_2_url', array(
		'default' => __( '#', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'hero_btn_2_url', array(
		'label'    => __( 'Button 2 URL', 'vdrcustom' ),
		'section'  => 'hero',
		'priority' => 6
	) );

	$wp_customize->add_setting( 'hero_btn_2_text', array(
		'default' => __( 'Contact', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'hero_btn_2_text', array(
		'label'    => __( 'Button 2 Text', 'vdrcustom' ),
		'section'  => 'hero',
		'priority' => 7
	) );

	$wp_customize->add_section( 'over', array(
		'title'       => __( 'About Us Section', 'vdrcustom' ),
		'description' => sprintf( __( 'Options for About Us.', 'vdrcustom' ) ),
		'priority'    => 131
	) );

	$wp_customize->add_setting( 'over_img', array(
		'default' => '',
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'over_img', array(
		'label'    => __( 'About Us Image', 'vdrcustom' ),
		'section'  => 'over',
		'settings' => 'over_img',
		'priority' => 1
	) ) );


	$wp_customize->add_setting( 'over_heading', array(
		'default' => __( 'Over VDR', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'over_heading', array(
		'label'    => __( 'About Us Heading', 'vdrcustom' ),
		'section'  => 'over',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'over_text', array(
		'default' => __( 'This is the default text.', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'over_text', array(
		'label'    => __( 'About Us Text', 'vdrcustom' ),
		'section'  => 'over',
		'priority' => 3,
		'type'     => 'textarea'
	) );

	$wp_customize->add_setting( 'over_btn_text', array(
		'default' => __( 'Contact', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'over_btn_text', array(
		'label'    => __( 'About Us Button Text', 'vdrcustom' ),
		'section'  => 'over',
		'priority' => 4

	) );

	$wp_customize->add_setting( 'over_btn_url', array(
		'default' => __( 'http://', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'over_btn_url', array(
		'label'    => __( 'About Us Button URL', 'vdrcustom' ),
		'section'  => 'over',
		'priority' => 5

	) );

	$wp_customize->add_section( 'diensten', array(
		'title'       => __( 'Diensten Section', 'vdrcustom' ),
		'description' => __( 'Options for Diensten.', 'vdrcustom' ),
		'priority'    => 132
	) );

	$wp_customize->add_setting( 'diensten_heading', array(
		'default' => __( 'Diensten', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'diensten_heading', array(
		'label'    => __( 'Dienst Heading', 'vdrcustom' ),
		'section'  => 'diensten',
		'priority' => 1

	) );

	$wp_customize->add_setting( 'diensten_text', array(
		'default' => __( 'Inhoud', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'diensten_text', array(
		'label'    => __( 'Dienst Text', 'vdrcustom' ),
		'section'  => 'diensten',
		'priority' => 2,
		'type'     => 'textarea'
	) );

	$wp_customize->add_setting( 'diensten_btn_text', array(
		'default' => __( 'Neem contact', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'diensten_btn_text', array(
		'label'    => __( 'Dienst Button Text', 'vdrcustom' ),
		'section'  => 'diensten',
		'priority' => 3
	) );

	$wp_customize->add_setting( 'diensten_btn_url', array(
		'default' => __( '#contact', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'diensten_btn_url', array(
		'label'    => __( 'Dienst Button URL', 'vdrcustom' ),
		'section'  => 'diensten',
		'priority' => 4
	) );


	$wp_customize->add_section( 'brands', array(
		'title'       => __( 'Brands Section', 'vdrcustom' ),
		'description' => __( 'Options for Brands.', 'vdrcustom' ),
		'priority'    => 133
	) );

	$wp_customize->add_setting( 'brands_heading', array(
		'default' => __( 'Partners & Brands', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'brands_heading', array(
		'label'    => __( 'Contact Heading', 'vdrcustom' ),
		'section'  => 'brands',
		'priority' => 1

	) );

	$wp_customize->add_setting( 'brands_text', array(
		'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'brands_text', array(
		'label'    => __( 'Brands Text', 'vdrcustom' ),
		'section'  => 'brands',
		'priority' => 2,
		'type'     => 'textarea'

	) );

	$wp_customize->add_section( 'projects', array(
		'title'       => __( 'Projects Section', 'vdrcustom' ),
		'description' => __( 'Options for Projects.', 'vdrcustom' ),
		'priority'    => 134
	) );

	$wp_customize->add_setting( 'projects_heading', array(
		'default' => __( 'Projects', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'projects_heading', array(
		'label'    => __( 'Projects Heading', 'vdrcustom' ),
		'section'  => 'projects',
		'priority' => 1

	) );

	$wp_customize->add_setting( 'projects_text', array(
		'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'projects_text', array(
		'label'    => __( 'Projects Text', 'vdrcustom' ),
		'section'  => 'projects',
		'priority' => 2,
		'type'     => 'textarea'

	) );


	$wp_customize->add_section( 'jobs', array(
		'title'       => __( 'Jobs Section', 'vdrcustom' ),
		'description' => __( 'Options for Jobs.', 'vdrcustom' ),
		'priority'    => 135
	) );

	$wp_customize->add_setting( 'jobs_heading', array(
		'default' => __( 'Vacatures', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'jobs_heading', array(
		'label'    => __( 'Jobs Heading', 'vdrcustom' ),
		'section'  => 'jobs',
		'priority' => 1

	) );

	$wp_customize->add_setting( 'jobs_text', array(
		'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'jobs_text', array(
		'label'    => __( 'Jobs Text', 'vdrcustom' ),
		'section'  => 'jobs',
		'priority' => 2,
		'type'     => 'textarea'

	) );

	$wp_customize->add_section( 'contact', array(
		'title'       => __( 'Contact Section', 'vdrcustom' ),
		'description' => __( 'Options for Contact.', 'vdrcustom' ),
		'priority'    => 136
	) );

	$wp_customize->add_setting( 'contact_heading', array(
		'default' => __( 'Contact', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'contact_heading', array(
		'label'    => __( 'Contact Heading', 'vdrcustom' ),
		'section'  => 'contact',
		'priority' => 1

	) );

	$wp_customize->add_setting( 'contact_text', array(
		'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula pretium nisi, sed pulvinar nunc mattis ac. Etiam at suscipit eros. Quisque vitae efficitur leo. Mauris dignissim lorem eu velit consequat malesuada.', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'contact_text', array(
		'label'    => __( 'Contact Text', 'vdrcustom' ),
		'section'  => 'contact',
		'priority' => 2,
		'type'     => 'textarea'

	) );

	$wp_customize->add_section( 'footer', array(
		'title'       => __( 'Footer Section', 'vdrcustom' ),
		'description' => __( 'Options for Footer.', 'vdrcustom' ),
		'priority'    => 137
	) );

	$wp_customize->add_setting( 'footer_copy', array(
		'default' => __( ' &copy; 2016 VDR Constructions', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_copy', array(
		'label'    => __( 'Copyright', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'footer_copy_url', array(
		'default' => __( 'http//', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_copy_url', array(
		'label'    => __( 'Copyright', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 2
	) );


	$wp_customize->add_setting( 'footer_email', array(
		'default' => __( 'info@vdrconstructions.nl', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_email', array(
		'label'    => __( 'Footer E-mail', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 3

	) );

	$wp_customize->add_setting( 'footer_email_url', array(
		'default' => __( 'info@vdrconstructions.nl', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_email_url', array(
		'label'    => __( 'Footer E-mail URL', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 4

	) );

	$wp_customize->add_setting( 'footer_kvk', array(
		'default' => __( 'xxxxxxxxx', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_kvk', array(
		'label'    => __( 'Footer KvK', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 5

	) );

	$wp_customize->add_setting( 'footer_kvk_url', array(
		'default' => __( 'http//:', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_kvk_url', array(
		'label'    => __( 'Footer KVK URL', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 6

	) );

	$wp_customize->add_setting( 'footer_telnummer', array(
		'default' => __( 'xxxxxxxxx', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_telnummer', array(
		'label'    => __( 'Footer Tel. Nummer', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 7

	) );

	$wp_customize->add_setting( 'footer_telnummer_url', array(
		'default' => __( '(+31)6-xx-xx-xx-xx', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'footer_telnummer_url', array(
		'label'    => __( 'Footer Tel. Nummer URL', 'vdrcustom' ),
		'section'  => 'footer',
		'priority' => 8

	) );

	$wp_customize->add_section( 'modal', array(
		'title'       => __( 'Modal', 'vdrcustom' ),
		'description' => __( 'Options for Modal.', 'vdrcustom' ),
		'priority'    => 138
	) );

	$wp_customize->add_setting( 'modal-btn-text', array(
		'default' => __( 'Sluiten', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'modal-btn-text', array(
		'label'    => __( 'Modal Button Text', 'vdrcustom' ),
		'section'  => 'modal',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'modal-btn-2-text', array(
		'default' => __( 'Sluiten', 'vdrcustom' ),
		'type'    => 'theme_mod'
	) );

	$wp_customize->add_control( 'modal-btn-2-text', array(
		'label'    => __( 'Modal Button 2 Text', 'vdrcustom' ),
		'section'  => 'modal',
		'priority' => 2
	) );


}

add_action( 'customize_register', 'vdr_customize_register' );
?>
