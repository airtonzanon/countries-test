<?php
/**
 * Created by PhpStorm.
 * User: zanon
 * Date: 9/27/16
 * Time: 12:19 AM
 */

namespace ArizonaTest\Model;

class Country
{

    private $countryName;
    private $countryCode;

    /**
     * Country constructor.
     * @param $countryName
     * @param $countryCode
     */
    public function __construct($countryName = null, $countryCode = null)
    {
        $this->countryName = $countryName;
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param mixed $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getList()
    {
        $filePath = __DIR__ . '/../../public/country.txt';
        $arrayFile = array_slice(file($filePath), 3);
        sort($arrayFile);

        foreach ($arrayFile as $dataFile) {
            $explodeCountry = explode("  ", $dataFile);

            $country = new Country();
            $country->setCountryName($explodeCountry[1]);
            $country->setCountryCode($explodeCountry[0]);

            $contriesList[] = $country;
        }

        usort($contriesList, array("ArizonaTest\Model\Country", "sortOfObjects"));

        return $contriesList;
    }

    function sortOfObjects($countryA, $countryB)
    {
        return strcmp($countryA->countryName, $countryB->countryName);
    }

}