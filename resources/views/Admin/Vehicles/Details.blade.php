@extends('layouts.app')

@section('content')
<div class="container">
        @if (session('mssg') !== null)
        <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
            {{session('mssg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    <div class="row">
        <div class="col md 12">
            <h1>Vehicles Details
            </h1>
            <div class="card">
            <input type="hidden" name="vehicleid" id="vehicleid">
                <div class="card-body">
                <li class="list-group-item">
                   <b>Brand: </b> {{ $vehiculos -> brand }} </h5>
                </li>
                <li class="list-group-item">
                     <b>Model: </b> {{ $vehiculos -> model }}</h5>
                </li>
                <li class="list-group-item">
                      <b>Year: </b> {{ $vehiculos -> year }}</h5>
                </li>
                <li class="list-group-item">
                    <b>Mileage: </b> {{ $vehiculos -> mileage }}</h5>
                </li>
                <li class="list-group-item">
                     <b>Color: </b> {{ $vehiculos -> color }}</h5>
                </li>
                <li class="list-group-item">
                    <b>Title status: </b> {{ $vehiculos -> title_status }}</h5>
                </li>
                <li class="list-group-item">
                    <b>Price: </b> ${{$vehiculos->price }}
                </li>
                </div>
                <div class="card-body">
                    <a href="/admin/vehicles/edit/{{ $vehiculos->_id }}" class="card-link"><button class="btn btn-primary" type="submit">Edit</button></a>
                    <a href="/admin/vehicles/delete/{{ $vehiculos->_id }}" class="card-link"><button class="btn btn-danger" type="submit">Delete</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection