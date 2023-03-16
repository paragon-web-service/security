<?php

function thim_get_all_plugins_require( $plugins ) {
	$plugins = array(

		array(
			'name'       => 'Revolution Slider',
			'slug'       => 'revslider',
			'premium'    => true,
			'required'   => false,
			'no-install' => true,
			'icon'       => 'https://plugins.thimpress.com/downloads/images/revslider.png',
		),
		array(
			'name'     => 'Widget Logic',
			'slug'     => 'widget-logic',
			'required' => false,
		),
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false,
		),

		array(
			'name'     => 'MailChimp for WordPress',
			'slug'     => 'mailchimp-for-wp',
			'required' => false,
		),
		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => false,
		),
		array(
			'name'     => 'bbPress',
			'slug'     => 'bbpress',
			'required' => false,
		),

		array(
			'name'       => 'Loco Translate',
			'slug'       => 'loco-translate',
			'required'   => false,
			'silent'     => true,
			'no-install' => true,
		),

		array(
			'name'     => 'Thim Portfolio',
			'slug'     => 'tp-portfolio',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/thim-portfolio.png',
		),

		array(
			'name'       => 'Thim Twitter',
			'slug'       => 'thim-twitter',
			'premium'    => true,
			'icon'       => 'https://plugins.thimpress.com/downloads/images/thim-twitter.png',
			'required'   => false,
			'no-install' => true,
		),
		array(
			'name'     => 'BuddyPress',
			'slug'     => 'buddypress',
			'required' => false,
		),
		array(
			'name'     => 'LearnPress',
			'slug'     => 'learnpress',
			'required' => false,
		),
		array(
			'name'     => 'Certificates Add-On for LearnPress',
			'slug'     => 'learnpress-certificates',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-certificates.png',
			'add-on'   => true,
		),
		array(
			'name'     => 'Collections Add-On for LearnPress',
			'slug'     => 'learnpress-collections',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-collections.png',
			'add-on'   => true,
		),
		array(
			'name'     => 'Paid Memberships Pro Add-On for LearnPress',
			'slug'     => 'learnpress-paid-membership-pro',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-paid-membership.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'Co-Instructors Add-On for LearnPress',
			'slug'     => 'learnpress-co-instructor',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-co-instructor.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'LearnPress – Course Review',
			'slug'     => 'learnpress-course-review',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'LearnPress – Prerequisites Courses',
			'slug'     => 'learnpress-prerequisites-courses',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'LearnPress – Export Import',
			'slug'     => 'learnpress-import-export',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'LearnPress – BuddyPress Integration',
			'slug'     => 'learnpress-buddypress',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'WooCommerce Add-On for LearnPress',
			'slug'     => 'learnpress-woo-payment',
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-woocommerce.png',
			'premium'  => true,
			'required' => false,
			'add-on'   => true,
		),
		array(
			'name'     => 'H5P Add-On for LearnPress',
			'slug'     => 'learnpress-h5p',
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-h5p.png',
			'premium'  => true,
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'Authorize.Net Add-On for LearnPress',
			'slug'     => 'learnpress-authorizenet-payment',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-authorizenet.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'Coming Soon Add-On for LearnPress',
			'slug'     => 'learnpress-coming-soon-courses',
			'premium'  => true,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-coming-soon.png',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'Commission Add-On for LearnPress',
			'slug'     => 'learnpress-commission',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-commission.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'Content Drip Add-On for LearnPress',
			'slug'     => 'learnpress-content-drip',
			'premium'  => true,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-content-drip.png',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'Gradebook Add-On for LearnPress',
			'slug'     => 'learnpress-gradebook',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-gradebook.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'myCRED Add-On for LearnPress',
			'slug'     => 'learnpress-mycred',
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-mycred.png',
			'premium'  => true,
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'Random Quiz Add-On for LearnPress',
			'slug'     => 'learnpress-random-quiz',
			'premium'  => true,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-random-quiz.png',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'Stripe Add-On for LearnPress',
			'slug'     => 'learnpress-stripe',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-stripe.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'Sorting Choice Add-On for LearnPress',
			'slug'     => 'learnpress-sorting-choice',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-sorting-choice.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'Student List Add-On for LearnPress',
			'slug'     => 'learnpress-students-list',
			'premium'  => true,
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-students-list.png',
			'add-on'   => true,
		),

		array(
			'name'     => 'LearnPress – Course Wishlist',
			'slug'     => 'learnpress-wishlist',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'LearnPress – bbPress Integration',
			'slug'     => 'learnpress-bbpress',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'     => 'WPML Add-On for LearnPress ',
			'slug'     => 'learnpress-wpml',
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-wpml.png',
			'premium'  => true,
			'add-on'   => true,
		),
		array(
			'name'     => 'Live Course Add-On for LearnPress',
			'slug'     => 'learnpress-live',
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-live.png',
			'premium'  => true,
			'add-on'   => true,
		),
		array(
			'name'     => 'Learnpress Instamojo',
			'slug'     => 'learnpress-instamojo-payment',
			'required' => false,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-instamojo.png',
			'premium'  => true,
			'add-on'   => true,
		),
		array(
			'name'     => 'WP Events Manager',
			'slug'     => 'wp-events-manager',
			'required' => false,
		),
		array(
			'name'     => '2Checkout Add-On for LearnPress',
			'slug'     => 'learnpress-2checkout-payment',
			'premium'  => true,
			'icon'     => 'https://plugins.thimpress.com/downloads/images/lp-2checkout.png',
			'required' => false,
			'add-on'   => true,
		),
		array(
			'name'     => 'WP Events Manager - WooCommerce Payment ',
			'slug'     => 'wp-events-manager-woocommerce-payment-methods-integration',
			'required' => false,
			'add-on'   => true,
		),

		array(
			'name'       => 'Instagram Feed',
			'slug'       => 'instagram-feed',
			'no-install' => true,
			'required'   => false,
		),
		array(
			'name'       => 'Paid Memberships Pro',
			'slug'       => 'paid-memberships-pro',
			'required'   => false,
			'no-install' => true,
		),
		array(
			'name'     => 'Interactive Content – H5P',
			'slug'     => 'h5p',
			'required' => false,
		),

		//		array(
		//			'name'        => 'Eduma Demo Data',
		//			'slug'        => 'eduma-demo-data',
		//			'premium'     => true,
		//			'required'    => false,
		//			//'version'     => '1.0.0',
		//			'description' => 'Demo data for the theme Eduma.',
		//		),

		array(
			'name'       => 'HubSpot – CRM, Email Marketing, Live Chat, Forms & Analytics',
			'slug'       => 'leadin',
			'required'   => false,
			'no-install' => true,
		),
	);
	if ( apply_filters( 'thim-importer-demo-vc', false ) || get_theme_mod( 'thim_page_builder_chosen' ) == 'visual_composer' ) {
		$extra_plugin = array(
			array(
				'name'     => 'WPBakery',
				'slug'     => 'js_composer',
				'premium'  => true,
				'required' => false,
				'icon'     => 'https://s3.envato.com/files/260579516/wpb-logo.png',
			),
			array(
				'name'       => 'Thim Our Team',
				'slug'       => 'thim-our-team',
				'premium'    => true,
				'required'   => false,
				'no-install' => true,
				'icon'       => 'https://plugins.thimpress.com/downloads/images/thim-our-team.png',
			),
			array(
				'name'       => 'Thim Testimonials',
				'slug'       => 'thim-testimonials',
				'premium'    => true,
				'icon'       => 'https://plugins.thimpress.com/downloads/images/thim-testimonials.png',
				'required'   => false,
				'no-install' => true,
			),
		);
	} elseif ( apply_filters( 'thim-importer-demo-so', false ) || get_theme_mod( 'thim_page_builder_chosen' ) == 'site_origin' ) {
		// support importer with
		$extra_plugin = array(
			array(
				'name'     => 'SiteOrigin Page Builder',
				'slug'     => 'siteorigin-panels',
				'required' => false,
			),
			array(
				'name'     => 'Classic Editor',
				'slug'     => 'classic-editor',
				'required' => false,
			),
			array(
				'name'     => 'Thim Our Team',
				'slug'     => 'thim-our-team',
				'premium'  => true,
				'required' => false,
				'icon'     => 'https://plugins.thimpress.com/downloads/images/thim-our-team.png',

			),
			array(
				'name'     => 'Thim Testimonials',
				'slug'     => 'thim-testimonials',
				'premium'  => true,
				'icon'     => 'https://plugins.thimpress.com/downloads/images/thim-testimonials.png',
				'required' => false,

			),
		);
	} else {
		$extra_plugin = array(

			array(
				'name'     => 'Elementor Page Builder',
				'slug'     => 'elementor',
				'required' => false,
			),
			array(
				'name'       => 'Thim Elementor Kit',
				'slug'       => 'thim-elementor-kit',
				// 'premium'     => true,
				'no-install' => true,
				'required'   => false,
			),
			array(
				'name'     => 'Thim Elementor Kit Pro',
				'slug'     => 'thim-elementor-kit-pro',
				'icon'     => 'https://plugins.thimpress.com/downloads/images/thim-ekits-pro.png',
				'premium'  => true,
				'required' => false,
				'add-on'   => true,
			),
		);
	}

	return array_merge( $plugins, $extra_plugin );
}

add_filter( 'thim_core_get_all_plugins_require', 'thim_get_all_plugins_require' );
