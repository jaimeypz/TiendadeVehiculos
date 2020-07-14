@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col md 12">
                <h1>Modified Vehicle</h1>
                <form action="/admin/vehicles/edit" method="POST">
                @csrf
                <input type="hidden" name="vehiculoid" id="vehiculoid" value="{{ $vehiculos->_id }}">
                    <div class="form-group">
                        <label for="brand"><b>Brand </b></label>
                        <input type="text" class="form-control" id="brand" name="brand"  value="{{ $vehiculos->brand }}" >
                    </div>
                    <div class="form-group">
                        <label for="model"><b>Model</b></label>
                        <input type="text" class="form-control" id="model" name="modelo"  value="{{ $vehiculos->model }}" >
                    </div>
                    <div class="form-group">
                        <label for="year"><b>Year </b></label>
                        <input type="text" class="form-control" id="year" name="year" value="{{ $vehiculos->year }}" >
                    </div>
                    <div class="form-group">
                        <label for="mileage"> <b>Kilometers </b></label>
                        <input type="text" class="form-control" id="mileage" name="mileage"  value= "{{ $vehiculos->mileage}}" >
                    </div>
                    <div class="form-group">
                        <label for="color"><b>Color </b></label>
                        <input type="text" class="form-control" id="color" name="color"  value="{{ $vehiculos->color }}" >
                    </div>
                    <div class="form-group">
                        <label for="title_status"><b>Title Status </b></label>
                        <input type="text" class="form-control" id="title_status" name="title_status"  value="{{ $vehiculos->title_status}}" >
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="price"><b>Price </b></label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $vehiculos->price }}" ><b> Dolars </b>
                    </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection