<!-- prueba ..>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!--meto comentario-->
        <form action="." method="post">
            <input type="text" name="nombre" id="">
            <input type="submit" name="Enviar" value="Enviar" id="">
            <!--meto comentario-->
        </form>
        <?php
        $a = time($h);
        echo "Fecha es ".date("h-m-s",$a);
        
        echo "Valor de mktime  -$a-";
        session_start();
        if (isset($_POST['Enviar'])) {
            $_SESSION['num']++;
             <!--meto comentario-->
            
            $_SESSION['visitas'][$_SESSION['num']] = mktime();

            $visitasR = $_SESSION['visitas'];

            foreach ($visitasR as $visita => $hora) {
                echo "<h4> visitas $visita hora $hora </h4>";
            }
        }
        // Iniciamos la sesión o recuperamos la anterior sesión existente
        // Comprobamos si la variable ya existe



// Iniciamos la sesión o recuperamos la anterior sesión existente
// Comprobamos si la variable ya existe

        echo "Total Visitas realizadas $visitas";
        ?>
    </body>
</html>
