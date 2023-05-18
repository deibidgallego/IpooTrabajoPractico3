<?php
class PasajeroVIP{
    private $numViajeFrecuente;
    private $cantMillas;

    public function __construct($numeroVF, $cantidadMillas)
    {
        $this->numViajeFrecuente=$numeroVF;
        $this->cantMillas=$cantidadMillas;
    }
    public function getnumViajeFrecuente(){
        return $this->numViajeFrecuente;
    }
    public function getCantmillas(){
        return $this->cantMillas;
    }

    public function setnumViajeFrecuente($numeroVF){
        $this->numViajeFrecuente=$numeroVF;
    }
    public function setCantmillas($cantidadMillas){
         $this->cantMillas=$cantidadMillas;
    }

    public function __toString()
    {
        return "numero de Viaje frecuente: " . $this->getnumViajeFrecuente() . "Cantidad de millas: " . $this->getCantmillas();
    }
}
?>