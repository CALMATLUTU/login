<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
<h1>HOLAA</h1>
<table border='solid 1px black'>    

    <form action="index.php" method="POST">
    <input type="text" placeholder="user" name="user">
    <input type="text" placeholder="contraseña" name="password">
    <input type="submit" value="registrar">
    </form>

    <?php 

$R_usuarios = ['Facu_cuello','Nacho_Laguarda','Eze_Morales','Agus_Ituarte','Juan_Acero','a'];
$R_passwds = ['facundop', 'ignaciop', 'ezequiel', 'agustinp', 'manuelpp', 'b'];

function verificar($usuario, $password)
{
    // la funcion agarra el usuario y la contraseña que le tiro
    $flag_exist = false;
    foreach ($R_usuarios as $clave => $valor)
    {
        //recorre el array de usuarios, almacenando clave y valor
        if ( $usuario == 'a' )
        {
            if ($password == 'b' ){$flag_exist = true;} 
            /*si el usuario que pasé es igual al valor y la contraseña de esa misma clave es igual a la que pasé   
            entonces se activa la bandera
            */
        
        }
        
    }
    return $flag_exist;
}

$user = 'a';
$password = 'b';
if(!empty($_POST["user"]) && !empty($_POST["password"]))
//  si los inputs NO estan vacios se ejecuta el codigo  
    {
        if(verificar($user, $password))
        //llama mandando los inputs como parametros
        {
            echo '<br>';
            echo '<p>Ingresaste bien, ';
            echo $user;
            echo '<3 </p>';
        }
        else
        {
            echo '<br>';
            echo '<p> No pudiste ingresar :( ';
            echo '<br>';
            echo '<p>Ingresá tus datos otra vez</p>';
        }


   
    }
else
    {
        //esto si esta vacio ajsja
        echo '<br>';
        echo '<p> Meté algo en el código, santo pelotudo </p>';
    }




/*
  foreach($_REQUEST as $dato){
        echo '<p>'.$dato. '</p>';
    }


    echo $_POST['nom'] 
    echo $_POST['ape']
*/
    ?>


</table>
</body>

</html>
