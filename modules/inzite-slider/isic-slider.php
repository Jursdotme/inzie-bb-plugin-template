<?php
class IsicSliderModuleClass extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'     => __('INZITE Slider', 'inzite-bb-modules'),
			'description'     => __('A totally awesome module!', 'inzite-bb-modules'),
			'group'    => __('Inzite Media', 'inzite-bb-modules'),
			'category' => __('Content', 'inzite-bb-modules'),
			'dir' => INZITE_MODULES_DIR . 'modules/inzite-slider/',
			'url' => INZITE_MODULES_URL . 'modules/inzite-slider/',
			'icon'     => 'button.svg',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'  => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));

		$this->add_css('jquery-bxslider');
		$this->add_js('jquery-bxslider');
	}
}

FLBuilder::register_module('IsicSliderModuleClass', array(
	'inzite-content-tab' => array(
		'title'  => __('Content', 'inzite-bb-modules'),
		'sections' => array(
			'Heading'  => array(
				'title'     => __('Heading', 'inzite-bb-modules'),
				'fields' => array(
					'slides' => array(
						'type'          => 'form',
						'label'         => __('My Form', 'fl-builder'),
						'form'          => 'slide_form', // ID of a registered form.
						'preview_text'  => 'label', // ID of a field to use for the preview text.
						'multiple'     => true,
					)
				)
			),
		)
	),
));

/**
 * Register slider form fields
 */
FLBuilder::register_settings_form('slide_form', array(
	'title' => __('Slide', 'fl-builder'),
	'tabs'  => array(
		'general'      => array(
			'title'         => __('Slide content', 'fl-builder'),
			'sections'      => array(
				'general'       => array(
					'title'         => '',
					'fields'        => array(
						'slide_header'         => array(
							'type'          => 'text',
							'label'         => __('Heading', 'fl-builder')
						),
						'slide_text' => array(
							'type'          => 'textarea',
							'label'         => __('Textarea Field', 'fl-builder'),
							'default'       => '',
							'placeholder'   => __('Placeholder Text', 'fl-builder'),
							'rows'          => '3'
						),
						'slide_background' => array(
							'type'          => 'photo',
							'label'         => __('Photo Field', 'fl-builder'),
							'show_remove'   => true,
						),
						'slide_color' => array(
							'type'          => 'color',
							'label'         => __('Color Picker', 'fl-builder'),
							'default'       => '333333',
							'show_reset'    => true,
							'show_alpha'    => false
						),
					)
				),
			)
		)
	)
));
