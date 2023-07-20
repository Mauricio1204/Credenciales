<?php
error_reporting(E_ALL^ E_DEPRECATED);
header("content-Type: text/html; charset=UTFV-8");
?>  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creedenciales</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        @font-face {
            font-family: 'beimax39';
            src: url('css/fonts/free3of9-webfont.ttf') format('truetype');
            font-style: normal;
            font-weight: normal;
        }
        .credenf{
            width: 488px;
            height: 311px;
            background-image: url('img/frentergb.jpg') ;
            -webkit-background-size : cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin: 0px auto;
        }
        .caja{
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            width: 293px;
            margin-top: 130px;
         
            text-align: right;
            font-weight: bold;
            font-size: 1.2em;
            }
            .caja2{
                font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            width: 293px;
            margin-top: 215px;
            
            text-align: right;
            font-weight: bold;
            font-size: .8em;
            }
            .caja3{
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            width: 293px;
            margin-top: 270px;
          
            text-align: right;
            font-weight: bold;
            font-size: .5em;
            }
            /*
            nombre de la carpeta raiz proyecto 1
             .caja4{
            position: absolute;
            margin-top: 150px;
            width: 110px;
            height: 110px;
            background-image: url('img/19302003.jpg') ;
            -webkit-background-size : cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin-left: 355px; 
            } 
            **alternativa para visualizar una imagen no compatible con php para las bariables*/
            .caja4{
            position:absolute;
            margin-top:130px ;
            margin-left:325px;
        }
        .credenR{
            width: 488px;
            height: 311px;
            background-image: url('img/vueltargb.jpg') ;
            -webkit-background-size : cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            margin: 0px auto;
        }      
        .cajaR1{
            position: absolute;
            width: 488px;
            margin-top: 170px;
            text-align: center;
        }
        .cajaR2
        {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            width: 455px;
            margin-top: 90px;
          
            text-align: right;
            font-weight: bold;
            font-size: 0.8em;
         
        }
        .otrocodigoBarras{
            font-family: 'beimax39';
            font-size: 3.5em;
        }
            </style>
</head>
<body >
<?php
$con = new SQLite3("base2.db") or die("Problemas para conectar");
$cs = $con -> query("SELECT * FROM base1 ");  
                    while ($resul = $cs -> fetchArray()) {
                        $Matricula = $resul ['matricula'];
                        $Apellidos = $resul ['apellidos'];
                        $Nombre = $resul ['nombre'];
                        $Carrera = $resul ['carrera'];
                        $Grupo = $resul ['grupo'];
                        $Cuatrimestre = $resul ['cuatrimestre'];
                        $Vigencia = $resul ['vigencia'];
                        echo '
                        <div class="credenf">
                        <div class="caja">
                            <p>'.$Nombre.'</p>
                            <p>'.$Apellidos.'</p>
                        </div>
                        <div class="caja2">
                            <p>'.$Matricula.' </p>
                        </div>
                        <div class="caja3">
                            <p>'.$Carrera.'</p>
                        </div>
                        <div class="caja4">
                            <img src="https://utfv.net/credencialesUtfv/imgAlumnos/'.$Matricula.'.jpg" width="125">
                        </div>
                    </div>' ;
                    echo'<br>';
                    echo'
                    <div class="credenR">
                        <div class="cajaR2">
                            <p>'.$Vigencia.'</p>
                        </div>
                        <!-- <div class="cajaR1">
                            <div class="otrocodigoBarras">
                                *'.$Matricula.'*
                                <p>'.$Matricula.'</p>

                            </div>
                        </div> -->
                        <div class="cajaR1">
                            <img alt="testing" src="barcode.php?text='.$Matricula.'" />
                            <p>'.$Matricula.'</p>
                        </div>
                    </div>
                    ';
                     }
                    $con -> close(); 
                       ?>
</body>
</html>