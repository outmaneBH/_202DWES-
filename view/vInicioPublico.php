<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina Publico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" href="webroot/media/fav.png" type="image/ico" sizes="16x16">
        <style>
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: red;
                color: white;
                text-align: center;
            }
            body {
                background-image: url(webroot/media/sky.jpg);
                background-repeat: no-repeat;
                object-fit: cover;
            }
            h3{
                color: white;
                width: 100%;
                padding: 5px;
                font-weight: bold;
                font-family: cursive;
            }

            @media screen and (max-width: 639px) {
                h3 {
                    font-size: 15px;

                }
                form input{
                    width: 100px;
                }
                nav  {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100px;
                }
            }
            #mySidenav {
                display: flex;
                flex-flow: column wrap;
                position: relative;

            }

            #mySidenav a {
                text-decoration: none;
                display: block;
                color: white;
                font-weight: bold;
                height: 50px;
                width: 290px;
                padding-left:6px ;
                margin: 1px;
                background: rgba(184, 6, 255, 0.863);
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                display: flex;
                flex-flow: column wrap;
                justify-content: center;
                position: relative;
                left: -280px;
                font-size: 14px;
                font-family: cursive;
            }

            #mySidenav a:hover {
                transition: all 2s ease;
                left: -12px;
            }
            #mySidenav a:nth-of-type(1){
                background: rgba(63, 236, 193, 0.993);
                left: -12px;  
                width: 130px;
                color: black;
            }

            /* The side navigation menu */
            .sidenav1 {
                height: 100%;
                /* 100% Full-height */
                width: 0;
                /* 0 width - change this with JavaScript */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Stay on top */
                top: 0;
                /* Stay at the top */
                right: 0;
                background-color: #111;
                /* Black*/
                overflow-x: hidden;
                /* Disable horizontal scroll */
                padding-top: 60px;

                /* Place content 60px from the top */
                transition: 0.5s;
                /* 0.5 second transition effect to slide in the sidenav */
                text-align: center;
            }

            /* The navigation menu links */
            .sidenav1 a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav1 a:hover {
                color: #f1f1f1;
            }

            /* Position and style the close button (top right corner) */
            .sidenav1 .closebtn {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
            #main1 {
                transition: margin-right .5s;

            }

            /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidenav1 {
                    padding-top: 15px;
                }

                .sidenav1 a {
                    font-size: 18px;
                }
            }
            form input,select{
                margin: 5px;
                width: 120px;
            }
            form select{
                height: 40px;
                border: none;
                color: white;
            }
        </style>
    </head>
    <body onload="startTime()">
        <div id="main1">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <h3>Last Web Application MVC POO</h3>
                            </li>
                        </ul>

                        <input id="sp1" style="padding-left: 10px;padding-right: 10px;font-size: 20px;" type="button" name="t1" onclick="openNav()" value="&#9776;">

                    </div>
                </div>
            </nav>
            <div  id="divtOtal" class="container-fluid mt-3">
                <p style="color: white; font-size: 50px;font-family: cursive;opacity: 0.5 ;background: black;" id="demo"></p>
                <div id="mySidenav" class="sidenav">
                    <a href="#">Images In Progress </a>
                    <a href="#">Ver catalogo de requisitos</a>
                    <a href="#">Ver diagrama de casos de uso</a>
                    <a href="#">Ver dagrama de clases</a>
                    <a href="#">Ver Arbol de navigacion</a>
                    <a href="#">Ver mapa web-relation de ficheros</a>
                    <a href="#">Ver estructura de almacenamiento </a>
                    <a href="#">Ver modelo fisico de datos</a>
                    <a href="#">Ver Analisis estadico de las Opiniones sobre las cuestiones</a>
                </div>
                <div id="mySidenav1" class="sidenav1">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
                        <input name="btnlogin" type="submit" style="margin-right: 5px;" value="Login" class="btn btn-primary" /><br>
                        <input name="btnregister" type="submit" style="margin-right: 5px;" value="Register" class="btn btn-primary" /><br>
                        <select name="select" class="bg-primary">      
                            <option value="">Idioma </option>
                            <option value="es">Espa??ol</option>
                            <option value="en">Ingles</option>
                            <option value="ar">??????????????</option>
                        </select>
                    </form>
                </div>

                <!-- Use any element to open the sidenav -->

            </div>
        </div>
        <script>
            function startTime() {
                const date = new Date();
                document.getElementById("demo").innerHTML = date.toLocaleTimeString();
                setTimeout(startTime, 1000);
            }
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
            function openNav() {
                document.getElementById("mySidenav1").style.width = "250px";
                document.getElementById("main1").style.marginRight = "250px";
                document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                document.getElementById("sp1").style.display = "none";
            }

            /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
            function closeNav() {
                document.getElementById("mySidenav1").style.width = "0";
                document.getElementById("main1").style.marginRight = "0";
                document.body.style.backgroundColor = "white";
                   document.getElementById("sp1").style.display = "inline";
            }
        </script>