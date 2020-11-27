<?php

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=ec2-54-147-209-121.compute-1.amazonaws.com dbname=d6g1tquohcv1t7 user=sgedpztcfcrkeq password=81f33022a403cc075f0a9db92dc458bba91c110b9a1382b972bedc0f8f81bbb2")
    or die('No se ha podido conectar: ' . pg_last_error());

?>