@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2">
                <h1 class="font-weight-bold text-center my-5">Vehicles</h1>
                <a href="{{ URL::to('/vehicle/create') }}" class="btn btn-info float-right mb-2">Add New Car</a>

                <table class="table text-center table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Plate Number</th>
                            <th scope="col">Insurance Date</th>
                            <th scope="col" colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                    
                    </tbody>
                </table>

                </div>
@endsection
