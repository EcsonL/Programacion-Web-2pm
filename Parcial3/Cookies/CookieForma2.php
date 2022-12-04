<?php

        $fechaHoy = date('Y/m/d H:i:s');
        $siguienteSemana = time() + (7 * 24 * 60 * 60);
        $fechaExpira = date('Y/m/d H:i:s', $siguienteSemana) ."<br>";

        echo '<b>fecha de creacion de cookie: </b>'.$fechaHoy;
        echo '<b>fecha de vncimiento de cookie: </b>'.$fechaExpira;

        setcookie("ultimaVista",$fechaHoy,time() + (7 * 24 * 60 * 60));

        ?>