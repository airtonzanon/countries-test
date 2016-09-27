<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/27/16
 * Time: 11:35 AM
 */

namespace ArizonaTest\Service;

class CreateCsvFile
{

    public function bodyFile($countryList, $filename)
    {
        $file = fopen('php://output', 'w');

        header('Content-Description: File Transfer');
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=$filename");

        fputcsv($file, array('CountryName', 'CountryCode'));

        foreach ($countryList as $country) {
            fputcsv($file, array($country->getCountryName(), $country->getCountryCode()));
        }

        fclose($file);
    }

}