<?php

if( function_exists('acf_add_local_field_group') )
{

	acf_add_local_field_group(array (
		'key' => 'group_5986f582056fd',
		'title' => 'Email',
		'fields' => array (
			array (
				'key' => 'field_5986f5862deee',
				'label' => 'Objet',
				'name' => 'subject',
				'type' => 'text',
				'instructions' => 'Objet de l\'email',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
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
			array (
				'key' => 'field_5986f5a82deef',
				'label' => 'Expéditeur',
				'name' => 'sender',
				'type' => 'email',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5986f5cc2def0',
				'label' => 'Nom de l\'expéditeur',
				'name' => 'sender_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5986f5e92def1',
				'label' => 'Destinataire',
				'name' => 'recipient',
				'type' => 'text',
				'instructions' => 'Adresse email ou champs dynamique i.e. "{{ email }}"',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
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
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'email_template_cpt',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'field',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

}
