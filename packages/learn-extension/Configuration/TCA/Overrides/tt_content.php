<?php

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    extensionName: 'learn_extension',
    pluginName: 'dateoutput',
    pluginTitle: 'Aktuelles Datum',
    pluginIcon: 'content-target',
    group: 'plugins',
    pluginDescription: 'Gibt das aktuelle Datum aus.'
);

TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    extensionName: 'learn_extension',
    pluginName: 'book',
    pluginTitle: 'Buchdatenbank',
    pluginIcon: 'book-record',
    group: 'plugins',
    pluginDescription: 'Bücher-Liste und Detailseite'
);

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    table: 'tt_content',
    newFieldsString: 'pages',
    typeList: 'learnextension_book',
    position: 'after:subheader'
);