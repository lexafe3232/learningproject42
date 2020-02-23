<?php


namespace Application\Controllers;


class Controller_404 extends \Application\Core\Controller
{
    function __construct()
    {
        $this->view = new \Application\Core\View();
    }

    function action_index()
    {
        $this->view->generate('404.php', 'default.php', $data);
    }
}