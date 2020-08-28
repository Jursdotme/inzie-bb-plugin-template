<?php
class IsicFrontpageContentModuleClass extends FLBuilderModule {
	public function __construct()
	{
		parent::__construct(array(
				'name'     => __( 'ISIC Frontpage Content', 'isic-bb-modules'),
				'description'     => __( 'A totally awesome module!', 'isic-bb-modules'),
				'group'    => __( 'Inzite Media', 'isic-bb-modules'),
				'category' => __( 'Content', 'isic-bb-modules'),
				'dir' => ISIC_MODULES_DIR . 'modules/isic-frontpage-content/',
				'url' => ISIC_MODULES_URL . 'modules/isic-frontpage-content/',
				'icon'     => 'button.svg',
				'editor_export'   => true, // Defaults to true and can be omitted.
				'enabled'  => true, // Defaults to true and can be omitted.
				'partial_refresh' => false, // Defaults to false and can be omitted.
		));
	}
}

FLBuilder::register_module( 'IsicFrontpageContentModuleClass', array(
	'isic-content-tab' => array(
		'title'  => __( 'Content', 'isic-bb-modules'),
		'sections' => array(
			'Heading'  => array(
				'title'     => __( 'Heading', 'isic-bb-modules'),
				'fields' => array(
					
				)
			),
		)
	),
) );
