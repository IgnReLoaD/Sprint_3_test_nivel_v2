
<?php

class Carrito {

    // 1. ATRIBUTOS
    // $_arrProductos;

    private $_arrFields = array(
        "id" => "0",
        "tipo" => "",
        "nombre" => "",
        "cant" => "",
        "precio" => 0,
        "marca" => ""
    )
    
    // 2. CONSTRUCTOR
    public function __construct($tipo,$name,$cant,$precio,$marca){
        // "id" => "1",
        "tipo" => $tipo,
        "nombre" => $name,
        "cant" => $cant,
        "precio" => $precio,
        "marca" => $marca
    }

    // 3. SETTERS-GETTERS
    public function getMarca(){
        return $this->_arrFields['marca'];
    }
    public function setMarca($marca){
        $this->_arrFields['marca'] = $marca;
    }
    public function getMarca(){
        return $this->_arrFields['marca'];
    }
    public function setMarca($marca){
        $this->_arrFields['marca'] = $marca;
    }
    public function getMarca(){
        return $this->_arrFields['marca'];
    }
    public function setMarca($marca){
        $this->_arrFields['marca'] = $marca;
    }
    public function getMarca(){
        return $this->_arrFields['marca'];
    }
    public function setMarca($marca){
        $this->_arrFields['marca'] = $marca;
    }        


    // 4. METODOS
    public function precioTotal(){
        $sumatorio = 0;
        foreach ($this->_arrProductos as $producto) {
            $sumatorio = $sumatorio + $producto['precio'];
        }
        return $sumatorio;
    }

}

?>