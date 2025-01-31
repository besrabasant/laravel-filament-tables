<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Search',
            'placeholder' => 'Search',
        ],

    ],

    'pagination' => [

        'label' => 'Pagination Navigation',

        'overview' => 'Showing&nbsp;<strong class="text-gray-800">:first</strong>&nbsp;to&nbsp;<strong class="text-gray-800">:last</strong>&nbsp;of&nbsp;<strong class="text-gray-800">:total</strong>&nbsp;results',

        'fields' => [

            'records_per_page' => [
                'label' => 'per page',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Go to page :page',
            ],

            'next' => [
                'label' => 'Next',
            ],

            'previous' => [
                'label' => 'Previous',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filters',
        ],

        'open_actions' => [
            'label' => 'Open actions',
        ],

        'bulk_actions' => [
            'label' => 'Bulk actions',
        ]

    ],

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => 'Are you sure you would like to do this?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Cancel',
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
        'heading' => 'No records found',
    ],

    'filters' => [

        'buttons' => [

            'reset' => [
                'label' => 'Reset filters',
            ],

        ],

        'multi_select' => [
            'placeholder' => 'All',
        ],

        'select' => [
            'placeholder' => 'All',
        ],

    ],

    'selection_indicator' => [

        'selected_count' => '1 record selected.|:count records selected.',

        'buttons' => [

            'select_all' => [
                'label' => 'Select all :count',
            ],

            'deselect_all' => [
                'label' => 'Deselect all',
            ],

        ],

    ],

];
