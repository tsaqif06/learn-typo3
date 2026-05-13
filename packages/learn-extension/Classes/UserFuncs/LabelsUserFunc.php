<?php

namespace Tsaqif\LearnExtension\UserFuncs;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class LabelsUserFunc
{
    public function bookLabel(&$parameters): void 
    {
        // DebuggerUtility::var_dump($parameters);

        $title = $parameters['row']['title'] . ' ';
        $rating = $parameters['row']['rating'];
        
        if (is_array($rating)) {
            $rating = (int) $rating[0];
        }

        $stars = str_repeat('⭐', $rating ?? 0);

        $readingDone = (int) $parameters['row']['reading_done'] === 1 ? '✅ ' : '';

        $parameters['title'] = $readingDone . $title . $stars;
    }
}