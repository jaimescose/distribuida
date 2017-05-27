<?php
require 'connect.php';
require './vendor/autoload.php';
$faker = Faker\Factory::create();
    for ($i = 1; $i <= 16; $i++) {
        $uri="../imagenes/$i.jpg";
        if(rand(0,1)==1){
            $nombre="Desconocido";
        }else{
            $nombre=$faker->name;
        }
        $fecha=$faker->dateTime()->format('Y-m-d H:i:s');
        date_format($fecha, 'Y-m-d H:i:s');
        $query = "INSERT INTO imagenes (uri,fecha,nombre) 
        VALUES ('$uri','$fecha','$nombre')";
        if ($db->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $db->error;
        }

    }
    $db->close();
    
?>