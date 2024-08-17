<?php

require_once 'modelo/Estacionamiento.php';
require_once 'modelo/TipoVehiculo.php';

$TV = new TipoVehiculo();
$TV-> Id = 1 ;
$TV-> Descripcion = 'Auto';


$E1 = new Estacionamiento();
$E1->Id = 1 ;
$E1->FechaHoraIngreso ='2024-08-16T12.00';
$E1->FechaHoraSalida ='2024-08-17T13.00';
$E1->Precio = 5000 ;

$E2 = new Estacionamiento();
$E2->Id = 2 ;
$E2->FechaHoraIngreso ='2024-08-17T13.00';
$E2->FechaHoraSalida ='2024-08-17T115.00';
$E2->Precio =10000;

$E3 = new Estacionamiento();
$E3->Id = 3 ;
$E3->FechaHoraIngreso ='2024-08-17T13.00';
$E3->FechaHoraSalida ='2024-08-17T16.00';
$E3->Precio =15000;

$TV->ListaEstacionamientos[]=$E1;
$TV->ListaEstacionamientos[]=$E2;
$TV->ListaEstacionamientos[]=$E3;

$TV->MostrarDatos();


