<?php

FPD_Admin_Modal::output_header(
	'fpd-modal-edit-view-options',
	__('View Options', 'radykal'),
	__('Here you can adjust the options for a single view. This allows, among other things to use different prices in different views.', 'radykal')
);

?>

<table class="form-table radykal-settings-form">
	<tbody>

		<?php

		radykal_output_option_item( array(
				'id' => 'stage_width',
				'title' => 'Canvas Width',
				'type' => 'number',
				'class' => 'large-text',
				'placeholder' => __('Canvas width from UI-Layout/Product Options', 'radykal'),
			)
		);

		radykal_output_option_item( array(
				'id' => 'stage_height',
				'title' => 'Canvas Height',
				'type' => 'number',
				'class' => 'large-text',
				'placeholder' => __('Canvas height from UI-Layout/Product Options', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'designs_parameter_price',
				'title' => 'Custom Image Price',
				'type' => 'number',
				'placeholder' => fpd_get_option( 'fpd_designs_parameter_price' ),
				'description' => __('This price will be used for custom added images.', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'custom_texts_parameter_price',
				'title' => 'Custom Text Price',
				'type' => 'number',
				'placeholder' => fpd_get_option( 'fpd_custom_texts_parameter_price' ),
				'description' => __('This price will be used for custom added texts.', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'max_price',
				'title' => 'Maximum View Price',
				'type' => 'number',
				'placeholder' => -1,
				'description' => __('The maximum price that will be charged for the view. -1 will disable this option.', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'optional_view',
				'title' => 'Optional View',
				'type' => 'checkbox',
				'default' => 'no',
				'description' => __('The view is optional, the user must unlock the view and the prices for all element will be added to the total product price.', 'radykal')
			)
		);
		radykal_output_option_item( array(
				'id' => 'design_categories',
				'title' => 'Design Categories',
				'type' 		=> 'multiselect',
				'class'		=> 'radykal-select2',
				'placeholder' => __('Choose design categories'),
				'description' => __('You can choose specific design categories for this view.', 'radykal'),
				'css'		=> 'width: 100%',
				'options' => fpd_output_top_level_design_cat_options(false)
			)
		);

		radykal_output_option_item( array(
				'id' => 'disable_image_upload',
				'title' => 'Disable Image Module',
				'type' => 'checkbox',
				'default' => 'no'
			)
		);

		radykal_output_option_item( array(
				'id' => 'disable_custom_text',
				'title' => 'Disable Text Module',
				'type' => 'checkbox',
				'default' => 'no'
			)
		);

		radykal_output_option_item( array(
				'id' => 'disable_designs',
				'title' => 'Disable Designs Module',
				'type' => 'checkbox',
				'default' => 'no'
			)
		);

		if(Fancy_Product_Designer::BETA) :

		radykal_output_option_item( array(
				'type' => 'section_title',
				'title' => 'PDF Output',
				'description' => __('Define the necessary information for the PDF output. Setting a printing area width and height will add a bleed box to the canvas. The bleed box has the same aspect ratio as the printing area.', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'output_width',
				'title' => 'Printing Area Width in MM',
				'type' => 'number',
				'class' => 'large-text',
				'placeholder' => '',
				'description' => __('', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'output_height',
				'title' => 'Printing Area Height in MM',
				'type' => 'number',
				'class' => 'large-text',
				'placeholder' => '',
				'description' => __('', 'radykal')
			)
		);

		radykal_output_option_item( array(
				'id' => 'output_background_template',
				'title' => 'Background Template (PDF | JPEG)',
				'type' => 'upload',
				'css' 		=> 'width:350px;',
				'placeholder' => '',
				'description' => __('', 'radykal')
			)
		);

		endif;

		?>

	</tbody>
</table>

<?php
	FPD_Admin_Modal::output_footer(
		__('Save', 'radykal')
	);
?>