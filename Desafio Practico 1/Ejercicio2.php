<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.css">
    <title>Ejercicio 2</title>
    <script src="js/cambiaNombres.js"></script>
</head>

<body class="p-4 bg-dark text-white">
    <div id="info" class="container">
        <form class="form-horizontal" method="POST" style="margin:0 auto" onsubmit="return validacion()">
            <h1 class="text-success">Calculadora de tabla de amortización</h1>
            <br>
            <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Sistema de amortización</label>
                <div class="col-5">
                    <select class="form-control" id="exampleSelect2" name="sistema">
                        <option selected value="simple">Sistema simple: Cuota, amortización e interés fijo</option>
                        <option value="compuesto">Sistema compuesto: Interés sobre interés</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Fecha del desembolos (d/m/a): </label>
                <div class="col-0.5">
                    <select name="dia" id="dia" class="form-control" aria-label="Default select example">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="col-0.5">
                    <select name="mes" id="mes" class="form-control" aria-label="Default select example">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="col-1.5">
                    <select name="año" class="form-control" aria-label="Default select example">
                        <option selected value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-number-input" class="col-2 col-form-label">Importe del préstamo: </label>
                <div class="col-1">
                    <input class="form-control" type="text" name="monto"
                        value="<?php echo isset($_POST['monto']) ? $_POST['monto']: 0;?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="example-number-input" class="col-1 col-form-label">Perido: </label>
                <div class="col-0.5">
                    <select class="form-control" id="periodo" name="periodo" onchange="cambiaNombres()">
                        <option value="diario">Diario</option>
                        <option value="semanal">Semanal</option>
                        <option value="quincenal">Quincenal</option>
                        <option value="mensual">Mensual</option>
                        <option value="anual">Anual</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-number-input" class="col-1 col-form-label">Interés</label>
                <label for="example-number-input" class="col-0.5 col-form-label" id="lblPeriodo">diario</label>
                <div class="col-1">
                    <input class="form-control" type="text" name="interes"
                        value="<?php echo isset($_POST['interes']) ? $_POST['interes']: 0;?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-number-input" class="col-1 col-form-label">Plazo: </label>
                <div class="col-1">
                    <input class="form-control" type="text" name="plazo"
                        value="<?php echo isset($_POST['plazo']) ? $_POST['plazo']: 0;?>">
                </div>
                <label for="example-number-input" class="col-1 col-form-label" id="lblPlazo">días</label>
            </div>
            <br>
            <input type="submit" name="Calcular" value="Calcular" class="btn btn-primary btn-lg">
        </form>
        <br>
        <br>

        <?php
        $cont=0;
        
    if(!empty($_POST["sistema"]) && !empty($_POST["dia"]) && !empty($_POST['mes']) && !empty($_POST['año']) && !empty($_POST['Calcular'])  && !empty($_POST['monto']) && !empty($_POST['periodo']) && !empty($_POST['interes']) && !empty($_POST['plazo'])){       
        $sistema=$_POST['sistema'];
        $dia=$_POST['dia'];
        $mes=$_POST['mes'];  
        $año=$_POST['año'];
        $monto=$_POST['monto'];
        $periodo=$_POST['periodo'];
        $interes=$_POST['interes'];  
        $plazo=$_POST['plazo'];   
        $i=0;  
        if(!filter_var($plazo, FILTER_VALIDATE_INT) === false && !filter_var($monto, FILTER_VALIDATE_FLOAT) === false && !filter_var($monto, FILTER_VALIDATE_FLOAT) === false){
            echo "\t<h2 class=\"text-warning\">\nCalculadora de Préstamos\n</h2>\n"; 
            $fecha =$dia."/".$mes."/".$año;
            $interes=$interes/100;
            $intereses=$monto*$interes;
            $pagoextra=$plazo*$intereses;
            $pagototal=($pagoextra+$monto);
            $cuota=$pagototal/$plazo;                       
            $capital=($cuota-$intereses);
            $saldo=($monto-$capital);
            switch ($sistema) { 
                case 'simple':
                    ?>
                    <table border="0">
            <tbody>
                <tr>
                    <td>Fecha del préstamo: <?php echo $fecha ?></td>
                    <td> (interés simple)</td>
                </tr>
                <tr>
                    <td>Monto: <?php echo $monto ?></td>
                    <td>Interés: <?php echo ($interes*100) ?> %</td>
                </tr>
                <tr>
                    <td>Periodo: <?php echo $periodo ?></td>
                    <td>Plazo: <?php echo $plazo ?></td>
                </tr>
            </tbody>
        </table>
        <?php
        echo "\t<table class=\"table table-sm\">\n";
        echo "\t<thead class=\"thead-light\">\n";
           echo "\t<tr>\n";
           echo "\t<th scope=\"col\">\nFecha\n</th>\n";
           echo "\t <th scope=\"col\">\nCuota\n</th>\n";
           echo "\t<th scope=\"col\">\nCapital\n</th>\n";
           echo "\t <th scope=\"col\">\nInterés\n</th>\n";
           echo "\t<th scope=\"col\">\nSaldo\n</th>\n";
           echo "\t</tr>\n";
       echo "\t</thead>\n";
       echo "\t<tbody class=\"bg-info\">\n"; 
                    if($periodo=="diario"){                                            
                        for($i=1; $i<=$plazo; $i++){        
                            $fecha = date("d-m-Y", strtotime($fecha."+ 1 days"));    
                            echo "\t<tr>\n";                                                            
                            echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                            echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                            echo "\t</tr>\n";                                    
                            $saldo=($saldo-$capital);                                            
                        }          
                    }
                   else if($periodo=="semanal"){                                                 
                        for($i=1; $i<=$plazo; $i++){       
                            $fecha = date("d-m-Y", strtotime($fecha."+ 7 days"));   
                            echo "\t<tr>\n";                                
                            echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                            echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n";  
                            echo "\t</tr>\n"; 
                            $saldo=($saldo-$capital);                                            
                        }                    
                    }
                    else if($periodo=="quincenal"){                                                 
                        for($i=1; $i<=$plazo; $i++){       
                            $fecha = date("d-m-Y", strtotime($fecha."+ 15 days"));   
                            echo "\t<tr>\n";                                
                            echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                            echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n";  
                            echo "\t</tr>\n"; 
                            $saldo=($saldo-$capital);                                            
                        }                    
                    }
                    else if($periodo=="mensual"){                                                                      
                        for($i=1; $i<=$plazo; $i++){   
                            $fecha = date("d-m-Y", strtotime($fecha."+ 1 month"));  
                            echo "\t<tr>\n";                                      
                            echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                            echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                            echo "\t</tr>\n";    
                            $saldo=($saldo-$capital);                                            
                        }
                        
                    }
                    else{                                              
                        for($i=1; $i<=$plazo; $i++){    
                            $fecha = date("d-m-Y", strtotime($fecha."+ 1 year"));  
                            echo "\t<tr>\n";                                      
                            echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                            echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n";   
                            echo "\t</tr>\n";    
                            $saldo=($saldo-$capital);                                            
                        }
                    }
                    echo "\t</tbody>\n";
                    echo "\t</table>\n";
                break;
                case 'compuesto':
                    ?>
                    <table border="0">
            <tbody>
                <tr>
                    <td>Fecha del préstamo: <?php echo $fecha ?></td>
                    <td> (interés compuesto)</td>
                </tr>
                <tr>
                    <td>Monto: <?php echo $monto ?></td>
                    <td>Interés: <?php echo ($interes*100) ?> %</td>
                </tr>
                <tr>
                    <td>Periodo: <?php echo $periodo ?></td>
                    <td>Plazo: <?php echo $plazo ?></td>
                </tr>
            </tbody>
        </table>
        <?php
         echo "\t<table class=\"table table-sm\">\n";
         echo "\t<thead class=\"thead-light\">\n";
            echo "\t<tr>\n";
            echo "\t<th scope=\"col\">\nFecha\n</th>\n";
            echo "\t <th scope=\"col\">\nCuota\n</th>\n";
            echo "\t<th scope=\"col\">\nCapital\n</th>\n";
            echo "\t <th scope=\"col\">\nInterés\n</th>\n";
            echo "\t<th scope=\"col\">\nSaldo\n</th>\n";
            echo "\t</tr>\n";
        echo "\t</thead>\n";
        echo "\t<tbody class=\"bg-secondary\">\n"; 
                     if($periodo=="diario"){                                            
                         for($i=1; $i<=$plazo; $i++){        
                             $fecha = date("d-m-Y", strtotime($fecha."+ 1 days"));    
                             echo "\t<tr>\n";                                                            
                             echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                             echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                             echo "\t</tr>\n";                                    
                            $monto=$intereses+$monto;
                            $intereses=$monto*$interes;
                            $cuota=$capital+$intereses;                       
                            $saldo=($saldo-$capital);
                         }          
                     }
                    else if($periodo=="semanal"){                                                 
                         for($i=1; $i<=$plazo; $i++){       
                             $fecha = date("d-m-Y", strtotime($fecha."+ 7 days"));   
                             echo "\t<tr>\n";                                
                             echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                             echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                             echo "\t</tr>\n";                                    
                            $monto=$intereses+$monto;
                            $intereses=$monto*$interes;
                            $cuota=$capital+$intereses;                       
                            $saldo=($saldo-$capital);                                          
                         }                    
                     }
                     else if($periodo=="quincenal"){                                                 
                        for($i=1; $i<=$plazo; $i++){       
                            $fecha = date("d-m-Y", strtotime($fecha."+ 15 days"));   
                            echo "\t<tr>\n";                                
                            echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                            echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                            echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                            echo "\t</tr>\n";                                    
                           $monto=$intereses+$monto;
                           $intereses=$monto*$interes;
                           $cuota=$capital+$intereses;                       
                           $saldo=($saldo-$capital);                                          
                        }                    
                    }
                     else if($periodo=="mensual"){                                                                      
                         for($i=1; $i<=$plazo; $i++){   
                             $fecha = date("d-m-Y", strtotime($fecha."+ 1 month"));  
                             echo "\t<tr>\n";                                      
                             echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                             echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                             echo "\t</tr>\n";                                    
                            $monto=$intereses+$monto;
                            $intereses=$monto*$interes;
                            $cuota=$capital+$intereses;                       
                            $saldo=($saldo-$capital);                                        
                         }
                         
                     }
                     else{                                              
                         for($i=1; $i<=$plazo; $i++){    
                             $fecha = date("d-m-Y", strtotime($fecha."+ 1 year"));  
                             echo "\t<tr>\n";                                      
                             echo "\t\t<td>\n" .$fecha. "\n</td>\n";
                             echo "\t\t<td>\n" .number_format($cuota, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($capital, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($intereses, 2, '.', '')."\n</td>\n";
                             echo "\t\t<td>\n" .number_format($saldo, 2, '.', '')."\n</td>\n"; 
                             echo "\t</tr>\n";                                    
                            $monto=$intereses+$monto;
                            $intereses=$monto*$interes;
                            $cuota=$capital+$intereses;                       
                            $saldo=($saldo-$capital);                                        
                         }
                     }
                     echo "\t</tbody>\n";
                     echo "\t</table>\n";
                break;
             default:
             echo "NO HA SELECCIONADO UN INTERES ";
                break;
    }

        }
        else{
            echo "\t<h4 class=\"text-warning\">\nIngrese los valores númericos solicitados en los campos";
            echo "\t</h4>\n";
        }
    }
    else{
        echo "\t<h4>\nNo es posible el cálculo, ingrese valores en los campos";
        echo "\t</h4>\n";
    }
    ?>

    </div>
</body>

</html>