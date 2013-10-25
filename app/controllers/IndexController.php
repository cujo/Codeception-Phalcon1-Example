<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->session->set('foo', 'bar');
        $this->cookies->set('foo', 'bar', time() + 100);
    }

    public function fooAction()
    {
    }

}

