<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Cerca',
            'placeholder' => 'Cerca',
        ],

    ],

    'pagination' => [

        'label' => 'Paginació',

        'overview' => 'Mostrant&nbsp;<strong class="text-gray-800">:first</strong>&nbsp;a&nbsp;<strong class="text-gray-800">:last</strong>&nbsp;de&nbsp;<strong class="text-gray-800">:total</strong>&nbsp;resultatss',

        'fields' => [

            'records_per_page' => [
                'label' => 'per pàgina',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Anar a la pàgina :page',
            ],

            'next' => [
                'label' => 'Següent',
            ],

            'previous' => [
                'label' => 'Anterior',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filtre',
        ],

        'open_actions' => [
            'label' => 'Open actions',
        ],

    ],

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => 'Are you sure you would like to do this?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Cancela',
                ],

                'confirm' => [
                    'label' => 'Confirm',
                ],

                'submit' => [
                    'label' => 'Submit',
                ],

            ],

        ],

    ],

    'empty' => [
        'heading' => 'No s\'han trobat registres.',
    ],

    'selection_indicator' => [

        'buttons' => [

            'select_all' => [
                'label' => 'Select all :count',
            ],

        ],

    ],

];
