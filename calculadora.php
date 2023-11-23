<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller calculadora PHPt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Calculadora PHP</h1>
        <hr>
        <form method="post">
            <label>Numero 1</label>
            <input type="number" max="10000" min="0" name="n1" placeholder="0" required autofocus>
            <label>Numero 2</label>
            <input type="number" max="10000" min="0" name="n2" placeholder="0" required autofocus>
            <hr>
            <input type="radio" class="form-check-input" name="opcion" value="suma" required> Sumar
            <input type="radio" class="form-check-input" name="opcion" value="resta" required> Restar
            <input type="radio" class="form-check-input" name="opcion" value="multiplicacion" required> Multiplicar
            <input type="radio" class="form-check-input" name="opcion" value="mdivision" required> Dividir
            <input type="radio" class="form-check-input" name="opcion" value="potenciacion" required> Potenciación
            <input type="radio" class="form-check-input" name="opcion" value="concatenacion" required> Concatenar
            <hr>
            <input type="submit" class="btn btn-success w-25" value="Enviar">
            <input type="reset" class="btn btn-success w-25" value="Limpiar">
            <hr>
        </form>
    </div>
    <div class="container">
        <?php
        if ($_POST){
            function sumar(){
                echo "la suma de los números es: ".($_POST['n1']+$_POST['n2']);
            }

            function restar(){
                echo "la resta de los números es: ".($_POST['n1']-$_POST['n2']);
            }

            function multiplicar(){
                echo "la multiplicacion de los números es: ".($_POST['n1']*$_POST['n2']);
            }

            function dividir(){
                if($_POST['n2']==0)
                    $d="error: division por 0";
                    else
                    $d=$_POST['n1']/$_POST['n2'];
                    echo "la division de los números es: ".$d;
            }

            function potenciacion(){
                echo "la potencia de los números es: ".(pow($_POST['n1'],$_POST['n2']));
            }

            function concatenacion(){
                echo "la concatenación de los números es: ".($_POST['n1'].$_POST['n2']);
            }

            switch($_POST['opcion']){
                case 'suma':
                    sumar();
                    break;
                case 'resta':
                    restar();
                    break;
                case 'multiplicacion':
                    multiplicar();
                    break;
                case 'division':
                    dividir();
                    break;
                case 'potenciacion':
                    potenciacion();
                    break;
                case 'concatenacion':
                    concatenacion();
                    break;
                default:
                    echo "Error en la opción seleccionada";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>