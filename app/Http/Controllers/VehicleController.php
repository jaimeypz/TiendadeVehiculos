<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class VehicleController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculos = $collection->find();
        return view('Admin.Vehicles.index', [ "vehiculos" => $vehiculos ]);
    }

    // public function Create() {
    //     $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos
    //     $vehiculos = $collection->find();
    //     return view('Admin.Vehicles.create', [ "vehiculos" => $vehiculos]);
    // }

    public function Show($id) {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculos = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Vehicles.Details', [ "vehiculos" => $vehiculos ]);
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculos = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Vehicles.edit', [ "vehiculos" => $vehiculos ]);
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculos = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Admin.Vehicles.delete', [ "vehiculos" => $vehiculos ]);
    }

    // public function Store() {
    //     $vehiculos = [
    //         "marca" => request("marca"),
    //         "modelo"  => request("modelo"),
    //         "año" => request("año"),
    //         "kilometros"  => request("kilometros"),
    //         "color"  => request("color"),
    //         "precio"  => request("precio"),
    //         "currency"  => request("currency"),
    //         "tipo"  => request("tipo"),
    //         "ubicacion"  => request("ubicacion")
    //     ];
    //     $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
    //     $insertOneResult = $collection->insertOne($vehiculos);
    //     if ($insertOneResult->getInsertedCount() == 1)
    //         return redirect('/admin/vehicles')->with('mssg', request('marca')." was added successfuly.")->with('alerttype', 'success');
    // }
   
    public function Update() {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculos = [
                    "brand" => request("brand"),
                    "model"  => request("model"),
                    "year" => request("year"),
                    "mileage"  => request("mileage"),
                    "color"  => request("color"),
                    "price"  => request("price"),
                    "title_status"  => request("title_status")
                ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("vehiculoid"))
        ],[
            '$set' => $vehiculos
        ]);
        if ($updateOneResult->getModifiedCount() == 1)
        return redirect("/admin/vehicles/".request('vehiculoid'))->with('mssg', "Updated successfuly.")->with('alerttype', 'success');
    }
    
    public function Remove() {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculos = [
                        "brand" => request("brand"),
                        "model"  => request("model"),
                        "year" => request("year"),
                        "mileage"  => request("mileage"),
                        "color"  => request("color"),
                        "price"  => request("price"),
                        "title_status"  => request("title_status")
                ];
        $delteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("vehiculoid"))
        ],[
            '$set' => $vehiculos
        ]);
        if ($delteOneResult->getDeletedCount() == 1)
        return redirect("/admin/vehicles/")->with('mssg',request('marca'). " Was deleted successfuly.")->with('alerttype', 'success');
    }

    public function VehicleStore() {
        $collection = (new MongoDB\Client)->TiendadeVehiculos->Vehiculos;
        $vehiculoCount = $collection->count();
        $page = request("pg") == 0 ? 1 :request("pg");
        $vehiculos = $collection->find([], [ "limit" => 12, "skip" => ($page - 1) * 12 ]);
        return view('Vehiclesmenu.index', [ "vehiculos" => $vehiculos, "vehiculoCount" => $vehiculoCount ]);
    }
}
