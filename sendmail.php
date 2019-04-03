<?
if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * orcamento
 * Template for WPForms.
 */
class WPForms_Template_orcamento extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'orcamento';

		// Template slug
		$this->slug = 'orcamento';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 7,
	'fields' => array (
		3 => array (
			'id' => '3',
			'type' => 'name',
			'label' => 'Name',
			'format' => 'simple',
			'required' => '1',
			'size' => 'large',
			'simple_placeholder' => 'Nome',
			'label_hide' => '1',
		),
		4 => array (
			'id' => '4',
			'type' => 'number',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'Telefone p/ Contato',
		),
		5 => array (
			'id' => '5',
			'type' => 'email',
			'required' => '1',
			'size' => 'large',
			'placeholder' => 'e-mail',
		),
		6 => array (
			'id' => '6',
			'type' => 'textarea',
			'size' => 'medium',
			'placeholder' => 'Conte-nos detalhes do seu evento...',
		),
	),
	'settings' => array (
		'form_title' => 'orcamento',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'email' => 'contato@deflorealma.com.br',
				'subject' => 'Contato via site (deflorealma.com.br)',
				'sender_name' => '{field_id="0"}',
				'sender_address' => '{admin_email}',
				'replyto' => '{field_id="1"}',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'type' => 'message',
				'message' => '<p>Obrigado por entrar em contato!<br />Logo entraremos em contato.</p>',
				'message_scroll' => '1',
			),
		),
	),
	'meta' => array (
		'template' => 'orcamento',
	),
);
	}
}
new WPForms_Template_orcamento;
endif;
?>