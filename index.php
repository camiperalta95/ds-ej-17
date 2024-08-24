<?php

require_once 'modelo/Documento.php';
require_once 'modelo/TipoDocumento.php';
require_once 'modelo/Persona.php';
require_once 'modelo/ObraSocial.php';


$Ob= New ObraSocial();
$Ob->Id=1;
$Ob->RazonSocial='osde';
$Ob->Cuit=30616512458;
$Ob->SitioWeb='www.jsdkjlfjsk.com';
$Ob->Telefono= 45154245;


$p= New Persona();
$p->Id=1;
$p->Nombre='Raul ';
$p->Apellido='Gonzales';
$p->FechaNacimiento= '28/05/2006';
$p->ObraSocial=$Ob;

$Tdoc1 = New TipoDocumento();
$Tdoc1->Id=1;
$Tdoc1->Descripcion= 'DNI';
$Tdoc1->Habilitado= 'TRUE';

$Tdoc2 = New TipoDocumento();
$Tdoc2->Id=2;
$Tdoc2->Descripcion= 'pasaporte';
$Tdoc2->Habilitado= 'TRUE';


$Doc1 = New Documento();
$Doc1->Id = 1;
$Doc1->Numero ="40123123";
$Doc1->Habilitado= true;
$Doc1->TipoDocumento= $Tdoc1;


$Doc2 = New Documento();
$Doc2->Id = 2;
$Doc2->Numero = "40123123";
$Doc2->Habilitado= true;
$Doc2->TipoDocumento= $Tdoc2;

$p->ListaDocumento[] = $Doc1;
$p->ListaDocumento[] = $Doc2;

$p->MostrarDatos();