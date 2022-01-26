<?php

class REST {

//    private $name;
//    private $country;
//    private $website;
//    private $code;
//
//    function __construct($name, $country, $website, $code) {
//        $this->name = $name;
//        $this->country = $country;
//        $this->website = $website;
//        $this->code = $code;
//    }

    function Buscaruniversidad() {
        
        //http://universities.hipolabs.com/search?country=$country$country
        $jsonFile = file_get_contents("./api/universities.json");
        $products = json_decode($jsonFile, true);   
        return  $products;
    }

}
?>

