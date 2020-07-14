@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col md 12">
                <h1>Create New Vehicle</h1>
                <form action="/admin/vehicles/create" method="POST">
                 
                    <div class="form-group">
                        <label for="marca">Brand</label>
                        <input type="text" class="form-control" id="marca" name="marca"  value="{{ $vehiculos->marca }}" >
                    </div>
                    <div class="form-group">
                        <label for="modelo">Model</label>
                        <input type="text" class="form-control" id="modelo" name="modelo"  value="{{ $vehiculos->modelo }}" >
                    </div>
                    <div class="form-group">
                        <label for="año">Year</label>
                        <input type="text" class="form-control" id="año" name="año" value="{{ $vehiculos->año}}" >
                    </div>
                    <div class="form-group">
                        <label for="kilometros">Kilometers</label>
                        <input type="text" class="form-control" id="kilometros" name="kilometros"  value="{{ $vehiculos->kilometros }}" >
                    </div>
                    <button class="btn btn-success" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
