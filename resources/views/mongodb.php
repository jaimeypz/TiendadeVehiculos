<?php

$collection = (new MongoDB\Client)->TiendaDeVehiculos->Vehiculos;

$document = $collection->find();

var_dump($document);