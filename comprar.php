<?php

// POO Class Producte
include('./Producte.php');
include('./Carrito.php');

$arrComanda = array();

// ENTRADA DE DADES
// __construct($cod,$nom,$pre,$tip,$qua,$mar){
$producte = new Producte('1','galletas',2,'AL',3,'Oreo');
array_push($arrComanda, $producte);
$producte = new Producte('2','cepillos',8,'HG',1,'Colgate');
array_push($arrComanda, $producte);
$producte = new Producte('3','manzanas',1,'AL',5,'Marlene');
array_push($arrComanda, $producte);
$producte = new Producte('4','jabonnes',3,'HG',2,'Marsella');
array_push($arrComanda, $producte);
$producte = new Producte('5','libretas',8,'OT',1,'Hoffmann');
array_push($arrComanda, $producte);

// DEBUG:
//var_dump($arrComanda);

$objCarrito = new Carrito($arrComanda);

// ---------------------------------------------------------------------------------

// 1. PREU TOTAL:
echo '<br> <p style="font-family:courier;">El preu total de la comanda (sense filtrar) és: ' . $objCarrito->calcularPreuTotal()  . '€ </p><br>';
// outputs:  3 x 2€ + 1 x 8€ + 5 x 1€ + 2 x 3€ + 1 x 8€ = 33€

// 2. LLISTAT FILTRAT:
if (isset($_POST['cmbTipo']) && isset($_POST['inpPrecio'])){
    $tipo = $_POST['cmbTipo'];
    $preu = $_POST['inpPrecio'];
    $list = $objCarrito->llistarProductes($tipo,$preu);
    echo '<p style="font-family:courier;"> ' . $list[0] . '</p>';
    echo '<p style="font-family:courier;">-------------------------------------------------</p>';
    echo '<p style="font-family:courier;">Preu segons filtre .............. : &nbsp; &nbsp; &nbsp; &nbsp;<b>' . $list[1] . '€</b></p>';
}
