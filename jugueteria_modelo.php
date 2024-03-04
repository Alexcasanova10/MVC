<?php

class Jugueteria{
    public $nombre;
    public $producto;
    public $cantidad;

    public function __construct(){
        $this->nombre = "none";
        $this->producto = "none";
        $this->cantidad = 0;
    }

    public function calcularTotal(){
        $precios = [
            "Pelotas" => 50,
            "Muñecas" => 80,
            "Carritos" => 60
        ];

        $precio_solo = $precios[$this->producto];
        $subtotal = $precio_solo * $this->cantidad;
        $total = $subtotal *1.16;
        return $total;
      
    }
}

?>
