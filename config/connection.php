<?php
    $connection = mysqli_connect('localhost', 'root', '', 'predev_platform');
    if ($connection -> connect_errno):
        echo 'Error en conexión con mysql debido a: '.$connection->connect_errno; 
        # code...
    endif;
?>