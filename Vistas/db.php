<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'schooldb'
);

if(isset($conn)){
    echo 'Conectado';
}

?>