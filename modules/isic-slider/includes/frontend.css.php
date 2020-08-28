<?php
FLBuilderCSS::typography_field_rule( array(
	'settings'	=> $settings,
	'setting_name' 	=> 'heading_typography',
	'selector' 	=> ".fl-node-" . $id . " .isic-card__heading-text",
) );

FLBuilderCSS::typography_field_rule( array(
	'settings'	=> $settings,
	'setting_name' 	=> 'content_typography',
	'selector' 	=> ".fl-node-" . $id . " .isic-card__content-text",
) );

FLBuilderCSS::typography_field_rule( array(
	'settings'	=> $settings,
	'setting_name' 	=> 'link_typography',
	'selector' 	=> ".fl-node-" . $id . " .isic-card__link",
) );

FLBuilderCSS::border_field_rule( array(
	'settings' 	=> $settings,
	'setting_name' 	=> 'background_border',
	'selector' 	=> ".fl-node-" . $id . " .fl-isic-card",
) );

FLBuilderCSS::border_field_rule( array(
	'settings' 	=> $settings,
	'setting_name' 	=> 'link_border',
	'selector' 	=> ".fl-node-" . $id . " .isic-card__link",
) );

?>

.fl-node-<?php echo $id; ?> .horizontal .isic-card__image{
	width: <?php echo $settings->image_width; ?><?php echo $settings->image_width_unit; ?>;
}

.fl-node-<?php echo $id; ?> .isic-card__link-container.content_align {
	align-items: flex-start;
}

.fl-node-<?php echo $id; ?> {
	height: 100%;
	display: flex;
	flex-direction: column;
}

.fl-node-<?php echo $id; ?> .fl-node-content {
	flex: 1;
	display: flex;
}

<?php echo ".fl-node-" . $id . " " . $settings->heading_tag; ?>.isic-card__heading-text {
	text-align: <?php echo $settings->text_align; ?>; 
	color: #<?php echo $settings->heading_color; ?> !important;
	margin-top: 0;
	margin-bottom: 0;
}

.fl-node-<?php echo $id; ?> .isic-card__content-text {
	text-align: <?php echo $settings->text_align; ?>; 
	color: #<?php echo $settings->content_color; ?>;
	margin-top: <?php echo $settings->content_margin_top . $settings->content_margin_top_unit; ?>;
}

.fl-node-<?php echo $id; ?> .fl-isic-card {
	background-color: #<?php echo $settings->background_color; ?>;
	padding-top: <?php echo $settings->background_padding_top; ?>px;
	padding-right: <?php echo $settings->background_padding_right; ?>px;
	padding-bottom: <?php echo $settings->background_padding_bottom; ?>px;
	padding-left: <?php echo $settings->background_padding_left; ?>px;
}

.fl-node-<?php echo $id; ?> .isic-card__content {
	padding-top: <?php echo $settings->content_padding_top; ?>px;
	padding-right: <?php echo $settings->content_padding_right; ?>px;
	padding-bottom: <?php echo $settings->content_padding_bottom; ?>px;
	padding-left: <?php echo $settings->content_padding_left; ?>px;
}

.fl-node-<?php echo $id; ?> .isic-card__link {
	color: #<?php echo $settings->link_text_color; ?>;
	background-color: #<?php echo $settings->link_background_color; ?>;
	padding-top: <?php echo $settings->link_padding_top; ?>px;
	padding-right: <?php echo $settings->link_padding_right; ?>px;
	padding-bottom: <?php echo $settings->link_padding_bottom; ?>px;
	padding-left: <?php echo $settings->link_padding_left; ?>px;
	margin-top: <?php echo $settings->link_margin_top . $settings->link_margin_top_unit; ?>;
}

.fl-node-<?php echo $id; ?> .isic-card__link:hover {
	color: #<?php echo $settings->link_text_color_hover; ?>;
	background-color: #<?php echo $settings->link_background_color_hover; ?>;
}

.fl-node-<?php echo $id; ?> .isic-card__link-container {
	flex: 1;
	display: flex;
	justify-content: flex-start;
	align-items: flex-end;
}

.fl-node-<?php echo $id; ?> .isic-card__image {
	background-size: <?php echo $settings->background_size; ?>;
}