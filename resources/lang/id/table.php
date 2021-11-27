<?php

return [

    'fields' => [

        'search_query' => [
            'label' => 'Cari',
            'placeholder' => 'Cari',
        ],

    ],

    'pagination' => [

        'label' => 'Navigasi halaman',

        'overview' => 'Menampilkan&nbsp;<strong class="text-gray-800">:first</strong>&nbsp;sampai&nbsp;<strong class="text-gray-800">:last</strong>&nbsp;dari&nbsp;<strong class="text-gray-800">:total</strong>&nbsp;hasil',

        'fields' => [

            'records_per_page' => [
                'label' => 'per halaman',
            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Ke halaman :page',
            ],

            'next' => [
                'label' => 'Selanjutnya',
            ],

            'previous' => [
                'label' => 'Sebelumnya',
            ],

        ],

    ],

    'buttons' => [

        'filter' => [
            'label' => 'Filter',
        ],

        'open_actions' => [
            'label' => 'Open actions',
        ],

    ],

    'actions' => [

        'modal' => [

            'requires_confirmation_subheading' => 'Apakah Anda yakin ingin melakukan ini?',

            'buttons' => [

                'cancel' => [
                    'label' => 'Batalkan',
                ],

                'confirm' => [
                    'label' => 'Konfirmasi',
                ],

                'submit' => [
                    'label' => 'Kirim',
                ],

            ],

        ],

    ],

    'empty' => [
        'heading' => 'Data tidak ditemukan',
    ],

    'filters' => [

        'buttons' => [

            'reset' => [
                'label' => 'Atur ulang filter',
            ],

        ],

        'multi_select' => [
            'placeholder' => 'Semua',
        ],

        'select' => [
            'placeholder' => 'Semua',
        ],

    ],

    'selection_indicator' => [

        'selected_count' => ':count dipilih.',

        'buttons' => [

            'select_all' => [
                'label' => 'Pilih semua :count',
            ],

            'deselect_all' => [
                'label' => 'Batalkan semua pilihan',
            ],

        ],

    ],

];
