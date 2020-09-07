<?php
class IsicFrontpageContentModuleClass extends FLBuilderModule {
	public function __construct() {
		parent::__construct(array(
			'name'     => __('INZITE Frontpage Content', 'inzite-bb-modules'),
			'description'     => __('A totally awesome module!', 'inzite-bb-modules'),
			'group'    => __('Inzite Media', 'inzite-bb-modules'),
			'category' => __('Content', 'inzite-bb-modules'),
			'dir' => INZITE_MODULES_DIR . 'modules/inzite-frontpage-content/',
			'url' => INZITE_MODULES_URL . 'modules/inzite-frontpage-content/',
			'icon'     => 'button.svg',
			'editor_export'   => true, // Defaults to true and can be omitted.
			'enabled'  => true, // Defaults to true and can be omitted.
			'partial_refresh' => false, // Defaults to false and can be omitted.
		));
	}
}

FLBuilder::register_module('IsicFrontpageContentModuleClass', array(
	'inzite-content-tab' => array(
		'title'  => __('Content', 'inzite-bb-modules'),
		'sections' => array(
			'Heading'  => array(
				'title'     => __('Heading', 'inzite-bb-modules'),
				'fields' => array()
			),
		)
	),
));
