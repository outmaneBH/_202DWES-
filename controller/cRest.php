<?php

/**
 * @author OUTMANE BOUHOU
 * @since 20/01/2022
 * @version 1.0
 * 
 * Controlador del Api rest.
 * Requiere la vista del Api rest.
 */
/* Si el usuario ha pulsado en registrar cambiamos la vista y devolver la pagina de registrar */

if (isset($_REQUEST['cancel'])) {
    unset($_SESSION['apisRest']);
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    $_SESSION['paginaAnterior'] = 'rest';
    header("Location:index.php");
    exit;
}
/* Variable de entrada correcta inicializada a true */
$entradaOK = true;

/* definir un array para alamcenar errores del country */
$aErrores = [
    "country" => null];


//$api = $_SESSION['apisRest'];
//$aRespuestas = [
//    "name" => $api->getName(),
//    "country" => $api->getCountry(),
//    "website" => $api->getWebsite(),
//    "code" => $api->getCode(),
//    "state_profince" => $api->getState_province()
//];




/* comprobar si ha pulsado el button enviar */
if (isset($_REQUEST['submitbtn'])) {
    //Para cada campo del formulario: Validamos la entrada y actuar en consecuencia
    //Validar entrada
    //Comprobar si el campo description  esta rellenado 
    $aErrores["country"] = validacionFormularios::comprobarAlfabetico($_REQUEST['country'], 1000, 2, OBLIGATORIO);


    //recorrer el array de errores
    foreach ($aErrores as $nombreCampo => $value) {
        //Comprobar si el campo ha sido rellenado
        if ($value != null) {
            $_REQUEST[$nombreCampo] = "";
            // cuando encontremos un error
            $entradaOK = false;
        }
    }
} else {
    //El formulario no se ha rellenado nunca
    $entradaOK = false;
}
if ($entradaOK) {
    //Tratamiento del formulario - Tratamiento de datos OK
    $api = REST::Buscaruniversidad($_REQUEST['country']);
    $_SESSION['apisRest'] = $api;
}

//$aRespuestas = [
//    "name" => $_SESSION['apisRest']->getName(),
//    "country" => $_SESSION['apisRest']->getCountry(),
//    "website" => $_SESSION['apisRest']->getWebsite(),
//    "code" => $_SESSION['apisRest']->getCode(),
//    "state_profince" => $_SESSION['apisRest']->getState_province()
//];
require_once $views['layout'];
?>