@extends('layouts.app')

@section('content')
<div class="col-md-6 offset-md-3">
    <h3 class="font-weight-bold text-center my-5">Add New Car</h3>
    <form action="" method="POST">
    <div class="form-group">
        <p class="alert-danger errors" id="brandErr"></p>
        <label for="brand">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand">
    </div>
    <div class="form-group">
    <p class="alert-danger errors" id="modelErr"></p>
        <label for="model">Model</label>
        <input type="text" class="form-control" id="model" name="model" placeholder="Model">
    </div>
    <div class="form-group">
    <p class="alert-danger errors" id="plate_numberErr"></p>
        <label for="plate_number">Plate Number</label>
        <input type="text" class="form-control" id="plate_number" name="plate_number" placeholder="Plate Number">
    </div>
    <div class="form-group">
    <p class="alert-danger" id="insurance_dateErr"></p>
        <label for="insurance_date">Insurance Date</label>
        <input type="date" class="form-control" id="insurance_date" name="insurance_date" placeholder="Date">
    </div>

    <div class="form-group">
        <input type="submit" id="save" value="Save" class="btn btn-block btn-info">
    </div>
    </form>
</div>



@endsection