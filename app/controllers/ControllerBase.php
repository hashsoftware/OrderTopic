<?php
/**
 * Created by PhpStorm.
 * User: ashmjn
 * Date: 19/09/2015
 * Time: 7:06 PM
 */

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    protected function initialize()
    {
        $this->tag->prependTitle('OrderTopic | ');
        $this->view->setTemplateAfter('main');
    }

    protected function forward($uri)
    {
        $uriParts = explode('/', $uri);
        $params = array_slice($uriParts, 2);
        return $this->dispatcher->forward(
            array(
                'controller' => $uriParts[0],
                'action' => $uriParts[1],
                'params' => $params
            )
        );
    }
}