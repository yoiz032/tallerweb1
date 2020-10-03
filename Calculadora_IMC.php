<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
         <ul class="nav bg-dark w-100 p-4 justify-content-center">
            <li class="nav-item ">
            <a class="text-white font-weight-bold">Calculadora IMC</a>
            </li>
        </ul>

    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <form class="mt-3" action="calculadora_IMC.php" method="POST">
                            <h4 class="text-center">Calculadora IMC</h4>
                            <div class="row ">
                                <div class="col">
                                <input type="number" class="form-control" placeholder="peso(Kg)" name="peso">
                                </div>
                                
                                <div class="col">
                                <input type="number" class="form-control" placeholder="altura(cm)" name="altura">
                                </div>                                                                   
                            </div>
                            <button class="btn btn-dark mt-3 btn-block" type="submit" name="botoncalcular">CALCULAR</button>
                </form>
                <div class="border mt-1 bg-secondary text-center" style="width: 20rem;">
                <h4 class="text-white">
                <?php if(isset($_POST["botoncalcular"])){
                    $peso=$_POST["peso"];
                    $altura=$_POST["altura"];
                    $metros=($altura/100)*2;

                    $imc=$peso/$metros;
                    

                    echo("su imc= ".$imc."<br>");

                    
                    if($imc<18.5){
                        echo("Peso insufisiente");
                    }elseif($imc>=18.5 && $imc < 25 ){
                        echo("Peso Normal");
                    }elseif($imc>=25 && $imc<= 26.9 ){
                        echo("Sobre peso grado I ");
                    }elseif($imc>=27 && $imc<= 29.9 ){
                        echo("Sobre peso grado II(preobesidad)");
                    }elseif($imc>=30 && $imc<= 34.9 ){
                        echo("Obesidad grado I");
                    }elseif($imc>=35 && $imc<= 39.9 ){
                        echo("Obesidad grado II");
                    }elseif ($imc>=40 && $imc<= 49.9) {
                        echo("Obesidad grado III(mórbida)");
                    }elseif($imc>=50){
                        echo("Obesidad grado IV(extrema)");
                    } 
                    } 

                ?>
                </h4>
                </div>

            </div>
        </div>

    </main>
    <footer>

    </footer>
 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>