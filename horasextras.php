<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de horas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
        <ul class="nav bg-dark w-100 p-4 justify-content-center">
            <li class="nav-item ">
            <a class="text-white font-weight-bold">Calculadora Horas Laboradas</a>
            </li>
        </ul>
</header>
<main>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                    <form class="mt-3" action="horasextras.php" method="POST">
                                <h4 class="text-center">Horas extras</h4>
                                <div class="row ">
                                    <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad de horas" name="horas" required>
                                    </div>                                                                  
                                </div>
                                <button class="btn btn-dark mt-3 btn-block" type="submit" name="botoncalcular">CALCULAR</button>
                    </form>
                
                    <h4 clas=" text-dark">
                    <?php 
                    
                        if(isset($_POST["botoncalcular"])){
                            $horas=$_POST["horas"];
                            
                            
                        
                            
                    
                        if($horas<=40){
                            $valorhora=20000;
                            $total=$valorhora*$horas;
                            echo("EL Sueldo semanal es:".$total);
                        }elseif($horas>40){
                            $valorhora=20000;
                            $total=$valorhora*40;
                            $totalhe=$horas-40;
                            $valor=$totalhe*25000;      
                            $sueldo=$total+$valor;
                            echo("EL Sueldo semanal es:".$sueldo);                    
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