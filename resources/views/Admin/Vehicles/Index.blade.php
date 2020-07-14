@extends('layouts.app')

@section('content')
  <div class= "container">
        @if (session('mssg') !== null)
        <div class="alert alert-{{ session('alerttype')}} alert-dismissible fade show" role="alert">
            {{session('mssg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

     <div class="row">
         <div class= "col-md-12">
            <h1>Vehicles</h1>
            <a class="text-right" href="/admin/vehicles/create">Add Vehicles</a>
         </div>
         <div class="col md 12">
         <table class="table">
            <thead>
                <tr>
                    <th scope="">#</th>
                    <th scope=""><b>Brand</b></th>
                    <th scope=""><b>Model</b></th>
                    <th scope=""><b>Year</b></th>
                    <th scope=""><b>Mileage</b></th>
                    <th scope=""><b>Color</b></th>
                    <th scope=""><b>Status</b></th>
                    <th scope=""><b>Price</b></th>
                    <th scope=""><b>Options</b></th>
                </tr>
            </thead>
            <tbody>
            @foreach($vehiculos as $vehis)
                <tr>
                    <th scope="row">{{$loop->index + 1}}</th>
                    <td>{{ $vehis["brand"] }}</td>
                    <td>{{ $vehis["model"] }}</td>
                    <td>{{ $vehis["year"] }}</td>
                    <td>{{ $vehis["mileage"] }}</td>
                    <td>{{ $vehis["color"] }}</td>
                    <td>{{ $vehis["title_status"] }}</td>
                    <td>${{ $vehis["price"] }}</td>
                    <td>
                            <a href="/admin/vehicles/{{ $vehis ['_id']}}">Details</a>   |
                            <a href="/admin/vehicles/edit/{{ $vehis->_id }}">Edit</a>   |
                            <a href="/admin/vehicles/delete/{{ $vehis->_id }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
         </div>
     </div>
  </div>
@endsection