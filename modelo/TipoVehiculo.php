<?php

class TipoVehiculo{

    public $Id;
    public $Descripcion;
    public $ListaEstacionamientos = array();


    public function MostrarDatos(){

        echo 'Id del tipo de vehiculo: '. $this->Id .'<br>';
        echo 'Descripcion del vehiculo: '. $this->Descripcion .'<br>';

        echo 'Estacionamientos : <br>';
        foreach($this->ListaEstacionamientos as $Estacionamiento){

            
            echo $Estacionamiento->FechaHoraIngreso .' - '. $Estacionamiento->FechaHoraSalida .' - '. $Estacionamiento->Precio.'<br>';

        }



    }

}