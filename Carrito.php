
<!-- Producto:  
     - nombre, tipo (alim, hig, otros), precio, cant, marca  

     Compra de 5 productos: 
     - en cada compra: 
        - func PrecioTotal  
        - func ListadoProductos(tipo=higiene, precio > 3€) -->

<?php

class Carrito{

    // 1. ATRIBUTS
    private $_arrItems;

    // 2. CONSTRUCTOR
    function __construct($items){
        $this->_arrItems = $items;
    }

    // 3. GETTERS-SETTERS
    // ----  no hay  ----

    // 4. METODES ESPECIFICS - calcularPreu() i filtrar()

    // 1. - Calcular Preu Total Comanda:
    function calcularPreuTotal(){
        $preuTotal = $preuLinia = 0;
        foreach($this->_arrItems as $objLinComanda){
            $preuLinia = $objLinComanda->getQuant() * $objLinComanda->getPreu();
            $preuTotal += $preuLinia;
        }    
        return $preuTotal;
    }

    // 2. - Listar Productes Filtrats (ex.: tipo=higiene, precio > 3€)
    function llistarProductes($tipo,$cuyoPrecioMin){        

        $precioFiltrado = 0;

        $grid  = '<br>';
        $grid .= '<p style="font-family:courier;">PRODUCTE &nbsp; &nbsp;&nbsp; TIPUS &nbsp; &nbsp; QT. &nbsp; &nbsp; Pr/Un. &nbsp; &nbsp; PREU </p>';
        $grid .= '<p style="font-family:courier;">-------------------------------------------------</p>';

        if ($tipo === 'TT'){
            foreach($this->_arrItems as $objLinComanda){    
                if ($objLinComanda->getPreu() > $cuyoPrecioMin){
                    $grid .= '<p style="font-family:courier;">' . $objLinComanda->getNombre();
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getTipus();
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getQuant();
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getPreu() . '€ &nbsp; '; 
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getPreu() * $objLinComanda->getQuant() . '€ <br>'; 
                    $precioFiltrado += $objLinComanda->getPreu() * $objLinComanda->getQuant();                  
                }
            }    
        }else{
            foreach($this->_arrItems as $objLinComanda){    
                if (($objLinComanda->getTipus()===$tipo) && ($objLinComanda->getPreu() > $cuyoPrecioMin)){
                    $grid .= '<p style="font-family:courier;">' . $objLinComanda->getNombre();
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getTipus();
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getQuant();                
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getPreu() . '€ &nbsp; ';
                    $grid .= ' &nbsp; &nbsp; &nbsp; ' . $objLinComanda->getPreu() * $objLinComanda->getQuant() . '€ <br>';                 
                    $precioFiltrado += $objLinComanda->getPreu() * $objLinComanda->getQuant();                 
                }
            }
        }
        $arrDatos = [$grid,$precioFiltrado];
        return $arrDatos;
    }

}


?>