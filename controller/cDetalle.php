<?php
/**
 * @author OUTMANE BOUHOU
 * @since 5/01/2022
 * @version 1.0
 * 
 * Controlador del Detalle.
 * Requiere la vista del detalle.
 */

/**
 * Si ha pulasdo cancel devlover controlador de paginaAnterior
 */
if (isset($_REQUEST['cancel'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header("Location:index.php");
    exit;
}


$_SESSION['paginaAnterior']='inicioPrivado';
require_once $views['layout'];

