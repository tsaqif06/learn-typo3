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
        // 'type' => 'record_type',
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
            'default' => 'book-record',
        ],
    ],
    'types' => [
        0 => ['showitem' => '
            hidden,
            --palette--;;palette1,
            --palette--;;palette2,
            --palette--;;palette3
        '],
    ],
    'palettes' => [
       'palette1' => [
        'showitem' => 'title, author',
       ],
       'palette2' => [
        'showitem' => 'isbn, buy_date, --linebreak--, summary, --linebreak--, rating',
       ],
       'palette3' => [
        'showitem' => 'reading_done, reading_date',
       ],
    ],
    'columns' => [
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
        'author' => [
            'exclude' => 0,
            'label' => 'Autor',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'isbn' => [
            'exclude' => 0,
            'label' => 'ISBN',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'required' => false,
            ],
        ],
        'summary' => [
            'exclude' => 0,
            'label' => 'Zusammenfassung',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'cols' => 50,
                'rows' => 3,
            ],
        ],
        'rating' => [
            'exclude' => 0,
            'label' => 'Bewertung',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => '1 Stern',
                        'value' => 1,
                    ],
                    [
                        'label' => '2 Sterne',
                        'value' => 2,
                    ],
                    [
                        'label' => '3 Sterne',
                        'value' => 3,
                    ],
                    [
                        'label' => '4 Sterne',
                        'value' => 4,
                    ],
                    [
                        'label' => '5 Sterne',
                        'value' => 5,
                    ],
                ],
                'default' => 1,
            ],
        ],
        'buy_date' => [
            'exclude' => 0,
            'label' => 'Kaufdatum',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 12,
            ],
        ],
        'reading_done' => [
            'exclude' => 0,
            'label' => 'Fertig gelesen',
            'config' => [
                'type' => 'check',
            ],
            'onChange' => 'reload',
        ],
        'reading_date' => [
            'exclude' => 0,
            'label' => 'Abschlussdatum',
            'displayCond' => 'FIELD:reading_done:=:1',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'size' => 12,
            ],
        ],
    ],
];