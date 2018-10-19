<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="stylesheet" type="text/css" href="">
    <title>Base de datos</title>
</head>
<?php 


?>
<body>
    <table border="2" cellspacing="5" cellpadding="9">
        <thead>
            <th>Número de Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Rol</th>
        </thead>
        <?php
        for($cont=0; $cont < count($users) ; $cont++){
            echo "<tr> <td>".$users[$cont]->No_documento."</td>";   
            echo "<td>".$users[$cont]->Nombres."</td>";
            echo "<td>".$users[$cont]->Apellidos."</td>";  
            echo "<td>".$users[$cont]->Email."</td>";  
            echo "<td>".$users[$cont]->rol."</td></tr>";
        }
         
             
        ?>
    </table>
</body>
</html>