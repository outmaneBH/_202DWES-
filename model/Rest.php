<?php

class REST  {

    public static function Buscaruniversidad($country) {
        $aUniversidad = [];

        $jsonFile = file_get_contents("http://universities.hipolabs.com/search?country=$country");
        $universidad = json_decode($jsonFile, true);
        if ($universidad) {
            foreach ($universidad as $value) {
                array_push($aUniversidad, new universidadREST($value['name'],
                                $value['country'],
                                $value['web_pages'][0],
                                $value['alpha_two_code'],
                                $value['state-province']));
            }
        }

        return $aUniversidad;
    }

}

?>