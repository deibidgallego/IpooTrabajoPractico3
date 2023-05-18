<?php
class pasajero
{
    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;
    private $nroAsiento;
    private $nroTicket;

    public function __construct($nom, $ape, $doc, $tel, $numeroAsiento, $numeroTicket)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->documento = $doc;
        $this->telefono = $tel;
        $this->nroAsiento=$numeroAsiento;
        $this->nroTicket=$numeroTicket;
    }
    //get
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getDocumento()
    {
        return $this->documento;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getNroAsiento(){
        return $this->nroAsiento;
    }
    public function getNroTicket(){
        return $this->nroTicket;
    }
    //set
    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }
    public function setApellido($ape)
    {
        $this->apellido = $ape;
    }
    public function setDocumento($doc)
    {
        $this->documento = $doc;
    }
    public function setTelefono($tel)
    {
        $this->telefono = $tel;
    }
    public function setNroAsiento($numeroAsiento){
        $this->nroAsiento=$numeroAsiento;
    }
    public function setNroTicket($numeroTicket){
        $this->nroTicket=$numeroTicket;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "Apellido: " . $this->getApellido() . "DNI:" . $this->getDocumento() . "Telefono: " . $this->getTelefono() . "Numero de asiento: " . $this->getNroAsiento() . "Numero de Ticket: " . $this->getNroTicket();
    }
}
