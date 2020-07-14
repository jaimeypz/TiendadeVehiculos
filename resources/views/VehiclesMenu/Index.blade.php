@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Vehicles For Sale</h1>

        <div class="row">
        @foreach($vehiculos as $vehiculo)
            <div class="card col-md-3 ">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Brand: {{ $vehiculo->brand}}</h5>
                    <h5 class="card-title">Model: {{ $vehiculo->model}}</h5>
                    <p class="card-text">Price: ${{ $vehiculo->price }}</p>
                   
                </div>
            </div>
        @endforeach
                <div class="col-md-12">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mx-auto" role="group" aria-label="First group">
                            @php
                                    $cpage = request('pg') == 0 ? 1 : request('pg');
                            @endphp
                            <a href="/vehiclesmenu?pg={{ $cpage - 1}}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                            @for ($i = 1; $i <= ceil($vehiculoCount); $i++)
                            <a href="/vehiclesmenu?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : '' }}" >{{$i}}</a>
                            @endfor
                            <a href="/vehiclesmenu?pg={{ $cpage + 1}}" class="btn btn-secondary {{ $cpage == ceil($vehiculoCount) ? 'disabled' : '' }}">&gt</a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>

@endsection
