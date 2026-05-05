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
        $this->view->assign('action', __METHOD__);
        $this->view->assign('date', time());

        return $this->htmlResponse();
    }

     public function dateoutputDetailAction(int $date): ResponseInterface {
        $this->view->assign('action', __METHOD__);
        $this->view->assign('date', $date);

        return $this->htmlResponse();
    }
}