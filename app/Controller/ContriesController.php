<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/27/16
 * Time: 12:59 AM
 */

namespace ArizonaTest\Controller;

use ArizonaTest\Model\Country;

class ContriesController
{

    public function download()
    {

    }

    public function list()
    {
        $countries = Country::getList();
        include_once __DIR__ . '/../View/countries/list.php';
    }

}