@extends('layouts.main')
@section('title', 'Home')
@section('main')
<h1 class="text-center my-5">Trains Arrivals and Departures</h1>
<div class="d-flex flex-wrap gap-3">
    @foreach ($trains as $train)   
    <div class="card" style="width: 25rem;">
        <div class="card-header text-warning">Company: {{$train->company}}</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item text-warning">Departure station: {{$train->departure_station}}</li>
            <li class="list-group-item text-warning">Arrival station: {{$train->arrival_station}}</li>
            <li class="list-group-item text-warning">Departure time: {{$train->departure_time}}</li>
            <li class="list-group-item text-warning">Arrival Time: {{$train->arrival_time}}</li>
            <li class="list-group-item text-warning">Train Code: {{$train->train_code}}</li>
            <li class="list-group-item text-warning">Carriages: {{$train->number_of_carriages}}</li>
            <li class="list-group-item text-warning">On time: {{$train->on_time}}</li>
            <li class="list-group-item text-warning">Cancelled: {{$train->cancelled}}</li>
        </ul>
    </div>
    @endforeach
</div>

@endsection