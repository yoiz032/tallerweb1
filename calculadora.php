<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <!--Hacer un programa en PHP que permita mostrar en pantalla la
        suma, resta, multiplicación, de dos números enteros almacenados
        en 2, variables diferentes (utilice formularios HTML).
        -->
            <nav class="navbar navbar-dark bg-dark ">
                 <a class="navbar-brand" href="#">
                    CALCULADORA
            </nav>
    </header>
    <main>
        
        <div class="container">
            <div class="row">
                <div class="col-5">
                <form class="mt-3" action="calculadora.php" method="POST">
                        <h4>Calculadora Basica</h4>
                        <div class="row ">
                            <div class="col">
                            <input type="number" class="form-control" placeholder="numero1" name="numero1" required>
                            </div>
                            
                            <div class="col">
                            <input type="number" class="form-control" placeholder="numero2" name="numero2" required>
                            </div>
                            <div class="form-group" >
                                
                                <select class="form-control"  name="operador" >
                                    <option>--seleccione--</option>
                                    <option value="0">suma</option>
                                    <option Value="1">resta</option>
                                    <option value="2">multiplica</option>
                                    <option value="3">divide</option>
                                    
                                </select>
                        </div>
                        <button class="btn btn-dark mt-3 btn-block" type="submit" name="botoncalcular">CALCULAR</button>
                   </form>
                   

                   <div class="border rouded-dark text-center" style="width: 40rem;">
  

                   <h4 class="text-dark">
                       <?php if(isset($_POST["botoncalcular"])){
                    
                        $numero1=$_POST["numero1"];
                        $numero2=$_POST["numero2"];
                        $operador=$_POST["operador"];
                        
                   
                       if ($operador=="0") {
                            $suma=$numero1+$numero2;
                            echo("La suma es: ".$suma);
                       } elseif($operador=="1") {
                            $resta=$numero1-$numero2;
                            echo("La resta es: ".$resta);
                       }elseif($operador=="2"){
                            $multiplica=$numero1*$numero2;
                            echo("La multiplicacion es: ".$multiplica);
                       }elseif($operador=="3") {
                            $divide=$numero1/$numero2;  
                            echo("La division es: ".$divide);                      
                       }else {
                           echo("seleccione operador ");
                       }
                        }   
                
                       
                       

                        
                    ?>
                   </h4>
                   </div>

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