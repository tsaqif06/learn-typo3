<?php

namespace Tsaqif\LearnExtension\Controller;

use DateTime;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class DateController extends ActionController {
    public function dateoutputAction(): ResponseInterface {
        // $text = "Hallöchen";
        // $text = [
        //     "Hallo",
        //     "Welt",
        //     "Freut mich sehr"
        // ];
        $this->view->assign('date', new DateTime());

        return $this->htmlResponse();
    }
}