<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/27/16
 * Time: 12:59 AM
 */

namespace ArizonaTest\Controller;

use ArizonaTest\Model\Country,
    ArizonaTest\Service\CreateCsvFile;

class ContriesController
{

    public function download()
    {
        $countries = Country::getList();
        CreateCsvFile::bodyFile($countries, 'countries.csv');
    }

    public function list()
    {
        $countries = Country::getList();
        include_once __DIR__ . '/../View/countries/list.php';
    }

}