<?php
/* Meter el variable en curso de que vista este en ejecucion:require $vistaEnCurso; */
require_once $views[$_SESSION['paginaEnCurso']];
?>
<footer style="position: fixed;bottom: 0;width: 100%" class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-3 pb-0">
        <!-- Section: Social media -->
        <section class="mb-3">
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/outmaneBH/202DWESAplicacionFinalMulticapaPOO/tree/developer202" target="_blank" role="button">
                <img id="git" style="width: 30px;height:30px; " src="webroot/media/git.png" alt="github"/>  
            </a>
        </section>
    </div>
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Copyrights © 2021 
        <a class="text-white" href="../index.html">OUTMANE BOUHOU</a>
        . All rights reserved.
         <p>Ultima actualizacion : 28 / 01 / 2022 version 2 ( v.2 LoginLogout MultiCapa POO )</p>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>



