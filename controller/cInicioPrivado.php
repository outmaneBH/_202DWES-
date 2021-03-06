<?php

/**
 * @author OUTMANE BOUHOU
 * @since 5/01/2022
 * @version 1.0
 * 
 * Controlador del inicioPrivado.
 * Requiere la vista del de inicioPrivado.
 */

/* Volvernos a login cuando se pulsaado logout */
if (isset($_REQUEST['logout'])) {
    session_destroy();
    header("Location:index.php");
    exit;
}
/* Volvernos a login cuando se pulsaado apiRest */
if (isset($_REQUEST['apirest'])) {
   $_SESSION['paginaEnCurso'] = 'rest';
    header("Location:index.php");
    exit;
}

/**
 * Si ha pulasdo detalle devlover controlador de detalle
 */
if (isset($_REQUEST['detalle'])) {
    $_SESSION['paginaEnCurso'] = 'detalle';
    header("Location:index.php");
    exit;
}
/**
 * Si ha pulasdo mtoDepartamentos devlover controlador de mtoDepartamentos pero ahora 
 * solamente devolver pagina en progress
 */
if (isset($_REQUEST['mtoDepartamentos'])) {
    $_SESSION['paginaEnCurso'] = 'wip';
    header("Location:index.php");
    exit;
}

/**
 * Si ha pulasdo editPerfil devlover controlador de ededitPerfil.
 */
if (isset($_REQUEST['editPerfil'])) {
    $_SESSION['paginaEnCurso'] = 'editar';
    header("Location:index.php");
    exit;
}

/**
 * Si ha pulasdo deleteAccount devlover controlador de borrarCuenta.
 */
if (isset($_REQUEST['deleteAccount'])) {
    $_SESSION['paginaEnCurso'] = 'borrar';
    header("Location:index.php");
    exit;
}

/**
 *  Meter la session del usuario en un array de variables 
 */
$objectUsuario = $_SESSION['usuario202DWESLoginLogoutMulticapaPOO'];

$aInicioPrivado = [
    'codUsuario' => $objectUsuario->get_codUsuario(),
    'descUsuario' => $objectUsuario->get_descUsuario(),
    'numConexiones' => $objectUsuario->get_numConexiones(),
    'fechaHoraUltimaConexionAnterior' => $objectUsuario->get_fechaHoraUltimaConexionAnterior(),
    'perfil' => $objectUsuario->get_perfil()
];

/**
 * La pagina anterior es Login
 */
$_SESSION['paginaAnterior'] = 'login';
require_once $views['layout'];
?>

