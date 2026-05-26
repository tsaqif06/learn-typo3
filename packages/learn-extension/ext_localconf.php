<?php

TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    extensionName: 'learn_extension',
    pluginName: 'dateoutput',
    controllerActions: [
        Tsaqif\LearnExtension\Controller\DateController::class => "dateoutput, dateoutputDetail"
    ],
    nonCacheableControllerActions: [],
    pluginType: TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    extensionName: 'learn_extension',
    pluginName: 'book',
    controllerActions: [
        Tsaqif\LearnExtension\Controller\BookController::class => "list, detail, new, create, edit, update"
    ],
    nonCacheableControllerActions: [
        Tsaqif\LearnExtension\Controller\BookController::class => "new, create, edit, update"
    ],
    pluginType: TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);