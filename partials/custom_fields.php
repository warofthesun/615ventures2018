<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b7c106783443',
	'title' => 'Front Page',
	'fields' => array(
		array(
			'key' => 'field_5b7c10830bcfb',
			'label' => 'Hero Text',
			'name' => 'hero_text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5b7c165bf7175',
			'label' => 'Front Page Content',
			'name' => 'front_page_content',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'5b7c166ed4ca6' => array(
					'key' => '5b7c166ed4ca6',
					'name' => 'section_header',
					'label' => 'Section Header',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b7c1695f7176',
							'label' => 'Header',
							'name' => 'header',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'5b7c1b01549d8' => array(
					'key' => '5b7c1b01549d8',
					'name' => 'ventures',
					'label' => 'Ventures',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b7c1b11549d9',
							'label' => 'Header',
							'name' => 'header',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '55',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5b7c653daf7b0',
							'label' => 'Align Header',
							'name' => 'align_header',
							'type' => 'button_group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'left' => 'Left',
								'center' => 'Center',
								'right' => 'Right',
							),
							'allow_null' => 0,
							'default_value' => '',
							'layout' => 'horizontal',
							'return_format' => 'value',
						),
						array(
							'key' => 'field_5b7d84719f6ba',
							'label' => 'First Section',
							'name' => 'first_section',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_5b7c1b1b549da',
							'label' => 'Ventures',
							'name' => 'ventures_repeater',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => 'field_5b7c1b89549db',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Add Venture',
							'sub_fields' => array(
								array(
									'key' => 'field_5b7c1b89549db',
									'label' => 'Venture Name',
									'name' => 'name',
									'type' => 'text',
									'instructions' => 'i.e., Name of business (TechnologyAdvice, EatWell, etc) or Type of business (Real Estate, Groundskeeping, etc)',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '75',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5b7c5e0a1ea3d',
									'label' => 'Align Name',
									'name' => 'align_name',
									'type' => 'button_group',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '25',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'left' => 'Left',
										'center' => 'Center',
										'right' => 'Right',
									),
									'allow_null' => 0,
									'default_value' => 'left',
									'layout' => 'horizontal',
									'return_format' => 'value',
								),
								array(
									'key' => 'field_5b7c2149549dc',
									'label' => 'Overview',
									'name' => 'overview',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_5b7c216f549dd',
									'label' => 'Images',
									'name' => 'images',
									'type' => 'gallery',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '90',
										'class' => '',
										'id' => '',
									),
									'min' => '',
									'max' => '',
									'insert' => 'append',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_5b7c49fc177f7',
									'label' => 'Gallery Position',
									'name' => 'gallery_position',
									'type' => 'radio',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '10',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'right' => 'Right',
										'left' => 'Left',
									),
									'allow_null' => 0,
									'other_choice' => 0,
									'save_other_choice' => 0,
									'default_value' => 'right',
									'layout' => 'vertical',
									'return_format' => 'value',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'5b7c785a6f13d' => array(
					'key' => '5b7c785a6f13d',
					'name' => 'who_we_are',
					'label' => 'Who We Are',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b7c78676f13e',
							'label' => 'Header',
							'name' => 'header',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '55',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5b7c78746f13f',
							'label' => 'Align Header',
							'name' => 'align_header',
							'type' => 'button_group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'left' => 'Left',
								'center' => 'Center',
								'right' => 'Right',
							),
							'allow_null' => 0,
							'default_value' => 'left',
							'layout' => 'horizontal',
							'return_format' => 'value',
						),
						array(
							'key' => 'field_5b7d850d9625f',
							'label' => 'First Section',
							'name' => 'first_section',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_5b7c81389b470',
							'label' => 'Team Member',
							'name' => 'team_member_repeater',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => 'field_5b7c816e9b471',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Add Team Member',
							'sub_fields' => array(
								array(
									'key' => 'field_5b7c816e9b471',
									'label' => 'Name',
									'name' => 'name',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5b7c817d9b472',
									'label' => 'Bio',
									'name' => 'bio',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '60',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_5b7c819e9b473',
									'label' => 'Image',
									'name' => 'image',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '40',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'id',
									'preview_size' => 'thumbnail',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'5b7d78297bca3' => array(
					'key' => '5b7d78297bca3',
					'name' => 'philanthropy',
					'label' => 'Philanthropy',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b7d78297bca4',
							'label' => 'Header',
							'name' => 'header',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '55',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5b7d78297bca5',
							'label' => 'Align Header',
							'name' => 'align_header',
							'type' => 'button_group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'left' => 'Left',
								'center' => 'Center',
								'right' => 'Right',
							),
							'allow_null' => 0,
							'default_value' => 'left',
							'layout' => 'horizontal',
							'return_format' => 'value',
						),
						array(
							'key' => 'field_5b7d852b96260',
							'label' => 'First Section',
							'name' => 'first_section',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_5b7d78297bca6',
							'label' => 'Organization',
							'name' => 'organization_repeater',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => 'field_5b7d78297bca7',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Add Organization',
							'sub_fields' => array(
								array(
									'key' => 'field_5b7d78297bca7',
									'label' => 'Name',
									'name' => 'name',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5b7d78297bca8',
									'label' => 'Blurb',
									'name' => 'blurb',
									'type' => 'wysiwyg',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '60',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'tabs' => 'all',
									'toolbar' => 'full',
									'media_upload' => 1,
									'delay' => 0,
								),
								array(
									'key' => 'field_5b7d78297bca9',
									'label' => 'Image',
									'name' => 'image',
									'type' => 'image',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '40',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'id',
									'preview_size' => 'thumbnail',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'5b7da1aa47672' => array(
					'key' => '5b7da1aa47672',
					'name' => 'recognition',
					'label' => 'Recognition',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5b7da1aa47673',
							'label' => 'Header',
							'name' => 'header',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '55',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5b7da1aa47674',
							'label' => 'Align Header',
							'name' => 'align_header',
							'type' => 'button_group',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'left' => 'Left',
								'center' => 'Center',
								'right' => 'Right',
							),
							'allow_null' => 0,
							'default_value' => 'left',
							'layout' => 'horizontal',
							'return_format' => 'value',
						),
						array(
							'key' => 'field_5b7da1aa47675',
							'label' => 'First Section',
							'name' => 'first_section',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Add Row',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5b7dc3de7d22a',
	'title' => 'Trusted By - Banner',
	'fields' => array(
		array(
			'key' => 'field_5b7dd0dac7943',
			'label' => 'Header',
			'name' => 'header',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5b7dc40cff089',
			'label' => 'Trusted By',
			'name' => 'trusted_by_repeater',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5b7dc44fff08a',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5b7dc44fff08a',
					'label' => 'Organization Logo',
					'name' => 'organization_logo',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-footer',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5b7ddaf39affd',
	'title' => 'Footer Content',
	'fields' => array(
		array(
			'key' => 'field_5b7dde0da0190',
			'label' => 'Social',
			'name' => 'social_repeater',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5b7dde5da0191',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5b7dde7aa0192',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'facebook-f' => 'Facebook',
						'twitter' => 'Twitter',
						'linkedin-in' => 'LinkedIn',
						'youtube' => 'YouTube',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'array',
					'placeholder' => '',
				),
			),
		),
		array(
			'key' => 'field_5b7ebe002e3f6',
			'label' => 'Address',
			'name' => 'address',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-footer',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
