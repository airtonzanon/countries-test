<?php

/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/26/16
 * Time: 11:13 PM
 */
namespace ArizonaTest\Controller;

class HomeController
{

    public function index()
    {
        include_once __DIR__ . '/../View/home.php';
    }

}