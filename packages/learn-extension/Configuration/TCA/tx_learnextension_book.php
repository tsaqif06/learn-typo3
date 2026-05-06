<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

return [
    'ctrl' => [
        'title' => 'Book',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'record_type',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'security' => [
            // Allow the dummy table anywhere in the page tree
            'ignorePageTypeRestriction' => true,
        ],
        'typeicon_classes' => [
            'default' => 'tx_examples-dummy',
        ],
    ],
    'types' => [
        // NOTE: there are alternate versions of this row to demonstrate various features
        //		'0' => array('showitem' => 'hidden, record_type, title, some_date '),
        // Use this row to demonstrate usage of palettes
        0 => ['showitem' => 'hidden, --palette--;Spezial Felder;special'],
        // Use this row when discussing special configuration nowrap
        // (paste this into the description field: This is a very long text that will not wrap when I get to the end of the box, which is very far away, away, away, away, away, away)
        //		'0' => array('showitem' => 'hidden, record_type, title, description;;;nowrap, some_date;;1 '),
        // Additional types
        1 => ['showitem' => 'record_type, title, hidden,'],
        2 => ['showitem' => 'title, some_date, hidden, record_type,'],
    ],
    'palettes' => [
        'special' => [
            'showitem' => '
                record_type, --linebreak--,
                title, --linebreak--,
                description, --linebreak--,
                some_date, enforce_date
            '
        ],
        'description' => 'Hallo ich bin eine Palette',
    ],
    'columns' => [
        'record_type' => [
            'exclude' => 0,
            'label' => 'Type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Typ 0', 'value' => 0],
                    ['label' => 'Typ 1', 'value' => 1],
                    ['label' => 'Typ 2', 'value' => 2],
                ],
            ],
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'Titel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'some_date' => [
            'exclude' => 0,
            'label' => 'some_date',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 12,
            ],
        ],
        'enforce_date' => [
            'exclude' => 0,
            'label' => 'enforce_date',
            'config' => [
                'type' => 'check',
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'description',
            'config' => [
                'type' => 'text',
                'cols' => 50,
                'rows' => 3,
            ],
        ],
    ],
];