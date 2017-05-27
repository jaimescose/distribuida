<?php
//require 'create_img.php';
require 'connect.php';
$display=$_GET['getData'];
$selected=$_GET["selected"];
$searching=$_GET['searching'];
if($display==true){
    if($selected==0){
        $sql='SELECT * FROM imagenes';
    }
    else{
        if(selected==2){
            $sql='SELECT * FROM imagenes WHERE nombre = "Desconocido"';
        }else{
            $sql='SELECT * FROM imagenes WHERE nombre <> "Desconocido"';
        }
    }
}
else{
    if($searching==true){
        $input='"'.$_GET['input'].'%"';
        
        if(strlen($input)>0)
        {
            $sql = 'SELECT * FROM imagenes WHERE nombre NOT LIKE "Desconocido" AND nombre LIKE '.$input;
        }
        else{
            $sql = 'SELECT * FROM imagenes WHERE nombre NOT LIKE "Desconocido"';
        }
    }
}
$result = $db->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    $cont=0;
    while($row = $result->fetch_assoc()) {
        if($cont%4==0)
        {
            echo "<div class=row>";
        }
        $uri=$row["uri"];
        echo "<div class=col-sm-3>";
            echo "<div class=card>";
                echo "<img class=loading src=$uri alt=Avatar style=width:100%>";
                echo "<div class=cont>";
                    #echo "</br>";
                    echo "<h4><b>". $row["nombre"]. "</b></h4>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        if($cont%4==3){
            echo "</div>";
            echo "</br>";
            echo "</br>";
        }
        $cont=$cont+1;
    }
}else {
    echo "0 results";
    
}
$db->close();
?>