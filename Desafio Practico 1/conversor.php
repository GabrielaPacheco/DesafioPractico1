<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conversor de Divisas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: pink; font-size: 25px; font-weight: bold;">
    <div id="info" class="container">
        <form class="form-horizontal" method="POST" style="margin:0 auto">
            <h1 style="text-align: center"><img src="img/calculadora.png" width="100" height="100"><u>Mi
                    Conversor</u><img src="img/calculadora.png" width="100" height="100"></h1>
            <div align="center" class="container">
                <div class="col-sm-5">
                    <input type="text" name="cantidad" class="form-control" id="colFormLabel"
                        placeholder="Ingrese Cantidad" required>
                    <br>
                    <select name="moneda1" class="form-select form-select-lg mb-1" aria-label=".form-select-lg example">
                       <option value="dolar">Dólares Americanos</option>
                        <option value="euro">Euros</option>
                        <option value="yen">Yen Japonés</option>
                        <option value="libra">Libra Esterlina</option>
                    </select>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg" name="convertir" value="Convertir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-up-square-fill" viewBox="0 0 15 15">
                            <path
                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 9h8a.5.5 0 0 0 .374-.832l-4-4.5a.5.5 0 0 0-.748 0l-4 4.5A.5.5 0 0 0 4 11z">
                            </path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-caret-down-square-fill" viewBox="0 0 15 15">
                            <path
                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4 4a.5.5 0 0 0-.374.832l4 4.5a.5.5 0 0 0 .748 0l4-4.5A.5.5 0 0 0 12 6H4z" />
                        </svg>
                    </button>
                    <br>
                    <br>
                    <select name="moneda2" class="form-select form-select-lg mb-1" aria-label=".form-select-lg example">
                        <option value="dolar">Dólares Americanos</option>
                        <option value="euro">Euros</option>
                        <option value="yen">Yen Japonés</option>
                        <option value="libra">Libra Esterlina</option>
                    </select>
                </div>
            </div>
        </form>
        <br>

        <?php
	if(!empty($_POST["cantidad"]) && !empty($_POST['convertir'])){
    $cantidad=$_POST['cantidad'];

    if (($_POST['moneda1']=='dolar') && ($_POST['moneda2']=='euro')) {
	$dolar_euro= $cantidad * 0.82;
	$formato = number_format($dolar_euro, 2, '.', '');
	echo "$ $cantidad Dólar Americano = € $dolar_euro Euros<br>";
	}
	 elseif (($_POST['moneda1']=='dolar') && ($_POST['moneda2']=='yen')) {
	$dolar_yen= $cantidad * 105.33;
	$formato = number_format($dolar_yen, 2, '.', '');
	echo "$ $cantidad Dólar Americano = ¥ $dolar_yen Yen Japonés<br>";
	}
	 elseif (($_POST['moneda1']=='dolar') && ($_POST['moneda2']=='libra')) {
	$dolar_libra= $cantidad * 0.72;
	$formato = number_format($dolar_libra, 2, '.', '');
	echo "$ $cantidad Dólar Americano = £ $dolar_libra Libra Esterlina<br>";
	}
	elseif (($_POST['moneda1']=='euro') && ($_POST['moneda2']=='dolar')) {
	$euro_dolar= $cantidad *1.21;
	$formato = number_format($euro_dolar, 2, '.', '');
	echo "€ $cantidad Euros = $ $euro_dolar Dólar Americano<br>";
	}
	elseif (($_POST['moneda1']=='euro') && ($_POST['moneda2']=='yen')) {
	$euro_yen= $cantidad *127.79;
	$formato = number_format($euro_yen, 2, '.', '');
	echo "€ $cantidad Euros = ¥ $euro_yen Yen Japonés<br>";
	}
	elseif (($_POST['moneda1']=='euro') && ($_POST['moneda2']=='libra')) {
	$euro_libra= $cantidad *0.87;
	$formato = number_format($euro_libra, 2, '.', '');
	echo "€ $cantidad Euros = £ $euro_libra Libra Esterlina<br>";
	}
	elseif (($_POST['moneda1']=='yen') && ($_POST['moneda2']=='dolar')) {
	$yen_dolar= $cantidad * 0.0095;
	$formato = number_format($yen_dolar, 2, '.', '');
	echo "¥ $cantidad Yen Japonés = $ $yen_dolar Dólar Americano<br>";
	}
	elseif (($_POST['moneda1']=='yen') && ($_POST['moneda2']=='euro')) {
	$yen_euro= $cantidad * 0.0078;
	$formato = number_format($yen_euro, 2, '.', '');
	echo "¥ $cantidad Yen Japonés = € $yen_euro Euros<br>";
	}
	elseif (($_POST['moneda1']=='yen') && ($_POST['moneda2']=='libra')) {
	$yen_libra= $cantidad * 0.0068;
	$formato = number_format($yen_libra, 2, '.', '');
	echo "¥ $cantidad Yen Japonés = £ $yen_libra Libra Esterlina<br>";
	}
	elseif (($_POST['moneda1']=='libra') && ($_POST['moneda2']=='dolar')) {
	$libra_dolar= $cantidad * 1.39;
	$formato = number_format($libra_dolar, 2, '.', '');
	echo "£ $cantidad Libra Esterlina = $ $libra_dolar Dólar Americano<br>";
	}
	elseif (($_POST['moneda1']=='libra') && ($_POST['moneda2']=='euro')) {
	$libra_euro= $cantidad * 1.15;
	$formato = number_format($libra_euro, 2, '.', '');
	echo "£ $cantidad Libra Esterlina = € $libra_euro Euros<br>";
	}
	elseif (($_POST['moneda1']=='libra') && ($_POST['moneda2']=='yen')) {
	$libra_yen= $cantidad *146.49;
	$formato = number_format($libra_yen, 2, '.', '');
	echo "£ $cantidad Libra Esterlina = ¥ $libra_yen Yen Japonés<br>";
	}
}
	?>
    </div>
</body>

</html>
