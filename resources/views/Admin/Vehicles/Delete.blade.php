@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col md 12">
                <h1>Delete Vehicle</h1>
                <form action="/admin/vehicles/delete" method="POST">
                @csrf
                @method("DELETE")
                <input type="hidden" name="vehiculoid" id="vehiculoid" value="{{ $vehiculos->_id }}">
                    <div class="form-group">
                        <label for="brand"><b>Brand </b></label>
                        <input type="text" class="form-control" id="brand" name="brand"  value="{{ $vehiculos->brand }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="model"><b>Model</b></label>
                        <input type="text" class="form-control" id="model" name="model"  value="{{ $vehiculos->model }}" disabled >
                    </div>
                    <div class="form-group">
                        <label for="year"><b>Year </b></label>
                        <input type="text" class="form-control" id="year" name="year" value="{{ $vehiculos->year }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="mileage"> <b>Kilometers </b></label>
                        <input type="text" class="form-control" id="mileage" name="mileage"  value= "{{ $vehiculos->mileage}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="color"><b>Color </b></label>
                        <input type="text" class="form-control" id="color" name="color"  value="{{ $vehiculos->color }}" disabled >
                    </div>
                    <div class="form-group">
                        <label for="title_status"><b>Title Status </b></label>
                        <input type="text" class="form-control" id="title_status" name="title_status"  value="{{ $vehiculos->title_status}}" disabled >
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="price"><b>Price </b></label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $vehiculos->price }}" disabled  >
                    </div>
                    </div>
                    <button class="btn btn-default" type="button">Cancel</button>
                    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                       Delete
                      </button>

                    <!-- Modal -->
                    <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header bg-danger text-dark">
                                    <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Vehicle</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this product? This changes cannot be reverted.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection