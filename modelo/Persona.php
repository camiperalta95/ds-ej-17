<?php

class Persona {
    public $Id; 
    public $Nombre; 
    public $Apellido; 
    public $FechaNacimiento;

    public $ObraSocial;

    public $ListaDocumento= array();

    public function MostrarDatos(){

        echo 'Datos de la persona <br>';
        echo '--------------------------------------- <br>';



        echo 'Id de la persona:' . $this->Id . '<br>';
        echo 'Nombre de la persona:' . $this->Nombre . '<br>';
        echo 'Apellido de la persona:' . $this->Apellido . '<br>';
        echo 'Fecha de nacimiento:' . $this->FechaNacimiento . '<br>';
        echo '---------------------------<br>';
        echo 'Obra social <br>';
        echo '---------------------------<br>';
        echo 'Razon social:' . $this->ObraSocial->RazonSocial . '<br>';
        echo 'Sitio web:' . $this->ObraSocial->SitioWeb . '<br>';

        foreach ($this->ListaDocumento as $d){
            
            echo 'Id:' . $d->Id . '<br>';
            echo 'Numero:' . $d->Numero . '<br>';
            echo 'Habilitado:' . $d->Habilitado . '<br>';
            echo 'Tipo de documento:' . $d->TipoDocumento->Descripcion . '<br>';





            }


    }
}