<?php
/**
 * @author OUTMANE BOUHOU
 * @since 5/01/2022
 * @version 1.0
 * 
 * Controlador del pagina in progress.
 * Requiere la vista del pagina in progress.
 */
if (isset($_REQUEST['cancelwip'])) {
    $_SESSION['paginaEnCurso'] = $_SESSION['paginaAnterior'];
    header("Location:index.php");
    exit;
}

$_SESSION['paginaAnterior']='inicioPrivado';
require_once $views['layout'];

?>