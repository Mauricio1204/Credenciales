<?php  
error_reporting(E_ALL ^E_DEPRECATED);
header("content-Type: text/html; Charset=UTF-8");
$txtCorreo = isset($_POST['txtCorreo'])? $_POST['txtCorreo'] : '';
$txtPws = isset($_POST['txtPws'])? $_POST['txtPws'] : '';
// echo $txtCorreo . '<br>';
// echo $txtPws . '<br>';


$con = new SQLite3("base3.db") or die("Problemas para conectar");
$cs = $con -> query("SELECT * FROM Datos ");  
                while ($resul = $cs -> fetchArray()) {
                    $id = $resul ['id'];
                    $nombre = $resul ['nombre'];
                    $Apaterno = $resul ['Apaterno'];
                    $Amaterno = $resul ['Amaterno'];
                    $correo = $resul ['correo'];
                    $clave = $resul ['clave'];

                
if (isset($txtCorreo) &&!empty($txtCorreo) && 
    isset($txtPws) &&!empty($txtPws)) {
        
                                      

     if ($txtCorreo==$correo && $txtPws == $clave ){
        echo '<script>
        window.location ="buscador.php"
        </script>';   
      } 
      else{
    echo '
    <script>
        window.location ="login.html"
        </script>
    ';
      }

      }

    }
    $con -> close();


     








// }else
// echo'
// <script>
//     window.location ="buscador.php"
// </script>';

// }



?>