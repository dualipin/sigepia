<?php
class Bitacora
{
    private string $op; // Operación
    private string $fr; // Fecha de registro
    private string $hr; // Hora de registro
    private string $clvpp; // Clave prueba piloto
    public function __construct(
        string $op,
        string $fr,
        string $hr,
        string $clvpp

    ) {
        $this->op = $op;
        $this->fr = $fr;
        $this->hr = $hr;
        $this->clvpp = $clvpp;
    }


    public function consultar() {
        
    }
}