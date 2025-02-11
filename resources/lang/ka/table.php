<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'ძიება',
            'placeholder' => 'ძიება',
        ],

    ],

    'pagination' => [

        'label' => 'გვერდების ნავიგაცია',

        'overview' => 'Showing&nbsp;<strong class="text-gray-800">:first</strong>&nbsp;to&nbsp;<strong class="text-gray-800">:last</strong>&nbsp;of&nbsp;<strong class="text-gray-800">:total</strong>&nbsp;results',

        'fields' => [

            'records_per_page' => [
                'label' => 'ჩანაწერი თითო გვერდზე',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => ':page-ე გვერდზე გადასვლა',
            ],

            'next' => [
                'label' => 'შემდეგი',
            ],

            'previous' => [
                'label' => 'წინა',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'ფილტრი',
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
                    'label' => 'გაუქმება',
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
        'heading' => 'ჩანაწერები არ არსებობს.',
    ],

    'selection_indicator' => [

        'buttons' => [

            'select_all' => [
                'label' => 'Select all :count',
            ],

        ],

    ],

];
