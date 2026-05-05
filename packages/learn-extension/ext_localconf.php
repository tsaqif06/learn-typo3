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