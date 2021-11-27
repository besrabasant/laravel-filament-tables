<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Søg',
            'placeholder' => 'Søg',
        ],

    ],

    'pagination' => [

        'label' => 'Paginering Navigation',

        'overview' => 'Viser&nbsp;<strong class="text-gray-800">:first</strong>&nbsp;til&nbsp;<strong class="text-gray-800">:last</strong>&nbsp;af&nbsp;<strong class="text-gray-800">:total</strong>&nbsp;resultater',

        'fields' => [

            'records_per_page' => [
                'label' => 'per side',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Gå til side :page',
            ],

            'next' => [
                'label' => 'Næste',
            ],

            'previous' => [
                'label' => 'Forrige',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filtrer',
        ],

        'open_actions' => [
            'label' => 'Åbn handlinger',
        ],

    ],

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => 'Er du sikker på, at du gerne vil gøre dette?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Annuller',
                ],

                'confirm' => [
                    'label' => 'Bekræft',
                ],

                'submit' => [
                    'label' => 'Indsend',
                ],

            ],

        ],

    ],

    'empty' => [
        'heading' => 'Ingen resultater',
    ],

    'selection_indicator' => [

        'buttons' => [

            'select_all' => [
                'label' => 'Vælg alle :count',
            ],

        ],

    ],

];
