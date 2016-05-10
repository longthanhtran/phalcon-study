<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    }

    public function sayAction()
    {
        echo "Says hello to you";
    }

    public function route404Action()
    {
        echo "Perharps there is nothing to show";
        $this->response->setRawHeader("HTTP/1.1 404 Not Found");
    }
}
