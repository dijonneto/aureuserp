<?php

return [
    'form' => [
        'tabs' => [
            'tax-configuration' => [
                'title' => 'Tax Configuration',

                'repartition-lines' => [
                    'title' => 'Repartition Lines',

                    'sections' => [
                        'invoice-refund-distribution' => [
                            'title' => 'Invoice & Refund Distribution',
                            'description' => 'Define how this tax affects accounts for invoices and refunds.',
                        ],
                    ],
                ],

                'descriptions' => [
                    'title' => 'Descriptions',
                ],
            ],
        ],

        'sections' => [
            'fields' => [
                'name'            => 'Name',
                'tax-type'        => 'Tax Type',
                'tax-computation' => 'Tax Computation',
                'tax-scope'       => 'Tax Scope',
                'status'          => 'Status',
                'amount'          => 'Amount',
            ],

            'repeater' => [
                'invoice-repartition-lines' => [
                    'label' => 'Invoice Repartition Lines',
                ],

                'refund-repartition-lines' => [
                    'label' => 'Refund Repartition Lines',
                ],

                'fields' => [
                    'type'           => 'Type',
                    'factor-percent' => 'Factor %',
                    'account'        => 'Account',
                ],
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced Options',

                    'fields' => [
                        'invoice-label'       => 'Invoice label',
                        'tax-group'           => 'Tax Group',
                        'country'             => 'Country',
                        'include-in-price'    => 'Included in Price',
                        'include-base-amount' => 'Affect Base of Subsequent Taxes',
                        'include-base-amount-tooltip' => 'If set, taxes with a higher sequence than this one will be affected by it, provided they accept it.',
                        'is-base-affected'    => 'Base Affected by Previous Taxes',
                        'is-base-affected-tooltip' => 'If set, taxes with a lower sequence might affect this one, provided they try to do it.',
                    ],
                ],

                'fields' => [
                    'description' => 'Description',
                    'legal-notes' => 'Legal Notes',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'name'                   => 'Name',
            'amount-type'            => 'Amount Type',
            'company'                => 'Company',
            'tax-group'              => 'Tax Group',
            'country'                => 'Country',
            'tax-type'               => 'Tax Type',
            'tax-scope'              => 'Tax Scope',
            'amount-type'            => 'Amount Type',
            'invoice-label'          => 'Invoice Label',
            'tax-exigibility'        => 'Tax Exigibility',
            'price-include-override' => 'Price Include Override',
            'amount'                 => 'Amount',
            'status'                 => 'Status',
            'include-base-amount'    => 'Include Base Amount',
            'is-base-affected'       => 'Is Base Affected',
        ],

        'groups' => [
            'name'         => 'Name',
            'company'      => 'Company',
            'tax-group'    => 'Tax Group',
            'country'      => 'Country',
            'created-by'   => 'Created By',
            'type-tax-use' => 'Type Tax Use',
            'tax-scope'    => 'Tax Scope',
            'amount-type'  => 'Amount Type',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Tax deleted',
                        'body'  => 'The Tax has been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Tax could not be deleted',
                        'body'  => 'The tax cannot be deleted because it is currently in use.',
                    ],
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'success' => [
                        'title' => 'Taxes deleted',
                        'body'  => 'The taxes has been deleted successfully.',
                    ],

                    'error' => [
                        'title' => 'Taxes could not be deleted',
                        'body'  => 'The taxes cannot be deleted because they are currently in use.',
                    ],
                ],
            ],
        ],

        'pages' => [
            'create' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'Invalid Repartition Lines',
                    ],
                ],
            ],

            'edit' => [
                'notifications' => [
                    'invalid-repartition-lines' => [
                        'title' => 'Invalid Repartition Lines',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => 'Name',
                'tax-type'        => 'Tax Type',
                'tax-computation' => 'Tax Computation',
                'tax-scope'       => 'Tax Scope',
                'status'          => 'Status',
                'amount'          => 'Amount',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'Advanced Options',

                    'entries' => [
                        'invoice-label'       => 'Invoice label',
                        'tax-group'           => 'Tax Group',
                        'country'             => 'Country',
                        'include-in-price'    => 'Include in price',
                        'include-base-amount' => 'Include base amount',
                        'is-base-affected'    => 'Is base affected',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'Description & Invoice Legal Notes',
                    'entries' => [
                        'description' => 'Description',
                        'legal-notes' => 'Legal Notes',
                    ],
                ],
            ],
        ],
    ],

];
