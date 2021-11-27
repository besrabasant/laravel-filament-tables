<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'گەڕان',
            'placeholder' => 'گەڕان',
        ],

    ],

    'pagination' => [

        'label' => 'ڕێنوێیی پەڕەکردن',

        'overview' => 'پیشاندان&nbsp;<strong class="text-gray-800">:first</strong>&nbsp;بۆ&nbsp;<strong class="text-gray-800">:last</strong>&nbsp;لە&nbsp;<strong class="text-gray-800">:total</strong>&nbsp;ئەنجام',

        'fields' => [

            'records_per_page' => [
                'label' => 'بۆ هەر پەڕەیەک',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'بڕۆ بۆ پەیچی :page',
            ],

            'next' => [
                'label' => 'داهاتو',
            ],

            'previous' => [
                'label' => 'پێشتر',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'فیلتەر',
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
                    'label' => 'ڕەتکردنەوە',
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
        'heading' => 'هیچ تۆمارێک نەدۆزرایەوە',
    ],

    'selection_indicator' => [

        'buttons' => [

            'select_all' => [
                'label' => 'Select all :count',
            ],

        ],

    ],

];
