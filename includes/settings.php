<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( function_exists('acf_add_options_page') ) {

    $tax_classes = conai_fw_get_all_wc_tax_classes();

    acf_add_options_sub_page( [
        'page_title' => 'WooCommerce Contributo Ambientale Conai',
        'menu_title' => 'Conai Settings',
        'menu_slug' => 'conai_fw_settings',
        'parent_slug' => 'woocommerce',
    ]);

    acf_add_local_field_group(array(
        'key' => 'group_6228e877999a1',
        'title' => 'Settings',
        'fields' => array(
            array(
                'key' => 'field_668d3280ee166',
                'label' => 'Aliquota di imposta',
                'name' => 'aliquota_di_imposta',
                'aria-label' => '',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => $tax_classes,
                'default_value' => 0,
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_6228e9fcfdd66',
                'label' => 'Entry conai',
                'name' => 'conai_fw_list',
                'type' => 'repeater',
                'instructions' => 'Inserire l\'elenco delle entry conai',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Aggiungi nuova entry',
                'sub_fields' => array(
                    array(
                        'key' => 'field_6228ea3cfdd67',
                        'label' => 'id',
                        'name' => 'id',
                        'type' => 'number',
                        'instructions' => 'Inserire un identificativo diverso per ogni entry',
                        'required' => 1,
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
                        'min' => 1,
                        'max' => '',
                        'step' => 1,
                    ),
                    array(
                        'key' => 'field_6228ea93fdd68',
                        'label' => 'nome',
                        'name' => 'nome',
                        'type' => 'text',
                        'instructions' => 'Inserire il nome della entry',
                        'required' => 1,
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
                        'key' => 'field_6228ead3fdd69',
                        'label' => 'prezzo',
                        'name' => 'prezzo',
                        'type' => 'number',
                        'instructions' => 'Inserire il prezzo della entry',
                        'required' => 1,
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
                        'min' => 1,
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_6228eaf6fdd6a',
                        'label' => 'unità di misura',
                        'name' => 'unita_di_misura',
                        'type' => 'text',
                        'instructions' => 'Inserire l\'unità di misura della entry',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '€ per 1000kg',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'conai_fw_settings',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
}