<?php

namespace EvaSkeleton\Controllers;

use Eva\EvaEngine\Exception;

class IndexController extends \Eva\EvaEngine\Mvc\Controller\ControllerBase
{
    public function indexAction()
    {
        return $this->response->setContent('Hello World');
    }
}
