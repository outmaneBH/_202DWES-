<!DOCTYPE html>
<html>
    <head>
        <title>OB - Api Rest</title>
        <link rel="stylesheet" href="webroot/css/w3css.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="webroot/css/bootstrap.min.css" rel="stylesheet">
        <script src="webroot/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" href="webroot/media/fav.png" type="image/ico" sizes="16x16">
        <style>
            table,tr,td,th{
                border-collapse: collapse;
                border: 2px solid black;
                text-align: center;
                padding: 5px;
            }
            table{

                width: 100%;
                height: 40px;
            }
            .cont{

                width: 90vw;
                height: 99vh;
                margin: auto;
            }
            .cont{
                margin-bottom: 100px;
            }
            h5{
                font-weight: bold;
                font-family: cursive;
                text-decoration: underline blue 3px;
            }
            tr td:nth-of-type(4){
                font-weight: bold;
            }
            a{
                font-size: 13px;
            }
            span{
                color: red;
                font-size: 15px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <div class="w3-bar w3-black  ">
            <p style="padding: 10px;font-size: 18px;font-weight: bold;font-family: cursive;" class="w3-center ">Last Web Application MVC POO</p>
        </div>

        <div class="w3-bar w3-deep-purple  ">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <button style="margin: 10px;font-weight: bold;float: left;" name="cancel" class="btn btn-primary" type="submit">Cancel</button>
            </form>
            <p style="padding: 2px;font-size: 18px;font-weight: bold;color: white;font-family: cursive;" class="w3-center ">Uso de REST </p>
        </div>
        <hr>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

            <input style="margin-left: 10%;" type="text" placeholder="Buscar un Universidad"  name="country" value="<?php echo (isset($_REQUEST['country']) ? $_REQUEST['country'] : null); ?>"/>
            <input type="submit"  class="w3-btn w3-teal" name="submitbtn" value="Buscar"/><br>
            <span style="margin-left: 10%;"><?php echo ($aErrores["country"] != null ? $aErrores['country'] : null); ?></span>

        </form>

        <hr>
        <h1 id="srt"></h1>
        <div class="cont">
            <h5>API Universidades : (<a href="" target="_blank"> Aqui esta el Api de Universidades</a>)</h5> <br>
            <?php
            $apiRest = $_SESSION['apiRest'];
            if (!is_null($apiRest) && !($aErrores["country"])) {
                ?>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Website</th>
                        <th>Code</th>
                    </tr>

                    <?php
                    foreach ($apiRest as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['country']; ?></td>
                            <td><?php echo $value['web_pages'][0]; ?></td>
                            <td><?php echo $value['alpha_two_code']; ?></td>

                            <?php
                        }
                    } else {
                        echo '<h2>No hay Datos de lo que has escrito</h2>';
                    }
                    ?>
            </table>
        </div>
        <div style="height:900px;"></div>


