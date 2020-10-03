<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de calzado </title>
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
            <div class="col-6">
                    <form class="mt-3" action="TiendaCalzado.php" method="POST">
                                <h4 class="text-center">Tienda calzado</h4>
                                <div class="row ">
                                    <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad" name="cantidad" required>
                                    </div>                                                                  
                                </div>
                                <button class="btn btn-dark mt-3 btn-block" type="submit" name="botoncalcular">CALCULAR</button>
                    </form>
                
                    <h4 clas=" text-dark">
                    <?php 
                    
                        if(isset($_POST["botoncalcular"])){
                            $cantidad=$_POST["cantidad"];
                            $valorZapato=50000;
                            
                        
                            
                    
                        if($cantidad<3 && $cantidad>=0){
                            $descuento=0;
                            $total=$valorZapato*$cantidad;
                            echo("EL Valor es:".$total);
                        }elseif($cantidad==3){
                            $descuento=$valorZapato*0.1;
                            $totaldescuento=$descuento*$cantidad;
                            $valorcondescuento=$valorZapato-$descuento;
                            $total=$valorcondescuento*$cantidad;
                            echo("El valor de su compra es:".$total."<br>"."Total descuento: ".$totaldescuento);                            
                        }elseif($cantidad>3 && $cantidad<=8){

                                $descuento=$valorZapato*0.2;
                                $totaldescuento=$descuento*$cantidad;
                                $valorcondescuento=$valorZapato-$descuento;
                                $total=$valorcondescuento*$cantidad;
                                echo("El valor de su compra es:".$total."<br>"."Total descuento: ".$totaldescuento   );
                        }elseif($cantidad>8){
                            $descuento=$valorZapato*0.5;
                            $totaldescuento=$descuento*$cantidad;
                            $valorcondescuento=$valorZapato-$descuento;
                            $total=$valorcondescuento*$cantidad;
                            echo("El valor de su compra es:".$total."<br>"."Total descuento: ".$totaldescuento   );
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