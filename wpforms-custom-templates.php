<?php
/**
 * Plugin Name: WPForms Custom Templates
 * Description: This plugin loads custom form templates.
 * Version:     1.0.0
 */

/**
 * Load the templates.
 */
function wpf_load_custom_templates() {

	// Template code here
	if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * contato@defloealma.com.br
 * Template for WPForms.
 */
class WPForms_Template_contatodefloealmacombr extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'contato@defloealma.com.br';

		// Template slug
		$this->slug = 'contatodefloealmacombr';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 6,
	'fields' => array (
		0 => array (
			'id' => '0',
			'type' => 'name',
			'label' => 'Nome dos noivos',
			'format' => 'simple',
			'description' => 'Nome dos noivos',
			'required' => '1',
			'size' => 'large',
			'simple_placeholder' => 'Nome dos noivos',
			'simple_default' => 'José e Maria',
			'label_hide' => '1',
			'sublabel_hide' => '1',
		),
		3 => array (
			'id' => '3',
			'type' => 'number',
			'label' => 'Celular',
			'description' => 'Celular',
			'required' => '1',
			'size' => 'small',
			'placeholder' => 'Celular',
			'default_value' => '(00) 0 0000-0000',
		),
		1 => array (
			'id' => '1',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'medium',
		),
		5 => array (
			'id' => '5',
			'type' => 'text',
			'label' => 'Tipo de evento',
			'description' => 'tipo de evento',
			'size' => 'large',
			'placeholder' => 'Tipo de evento',
		),
		2 => array (
			'id' => '2',
			'type' => 'textarea',
			'label' => 'Comment or Message',
			'required' => '1',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'contato@defloealma.com.br',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'email' => 'contato@deflorealma.com.br',
				'subject' => 'New Entry: contato@deflorealma.com.br',
				'sender_name' => '{field_id="0"}',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'type' => 'message',
				'message' => '<p><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Obrigado por nos contatar! </span><span style="vertical-align: inherit;">Entraremos em contato em breve.</span></span></p>',
				'message_scroll' => '1',
				'page' => '2',
			),
		),
	),
	'meta' => array (
		'template' => 'contatodefloealmacombr',
	),
);
	}
}
new WPForms_Template_contatodefloealmacombr;
endif;

}
add_action( 'wpforms_loaded', 'wpf_load_custom_templates' );
?>