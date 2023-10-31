@extends('layouts.main')

@section('title', 'Employees')


@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Employee</h1>
    <div>
        <span>Name:</span>  {{$employee->name}} {{$employee->middle_name}} {{$employee->last_name}} - <span>Date of Birthday:</span> {{ date('m/d/Y', strtotime($employee->date_birth))}} - <span>SSN:</span><em>{{$employee->ssn}}</em></p>
        <p><span>Date of Hire:</span> {{ date('m/d/Y', strtotime($employee->date_hire))}} - <span>Phone:</span> {{$employee->phone}}</p>
        <p><span>Address:</span>  {{$employee->street}} - {{$employee->city}} - {{$employee->state}} - {{$employee->zip}}</p>
        <p><span>Facility:</span> {{$employee->facility}} - <span>Position:</span> {{$employee->position}} -> 
            @foreach($employee->items as $item)
            <span>{{$item}}</span>
            @endforeach</p>
        <p><span>Date of Termination:</span> {{ date('m/d/Y', strtotime($employee->date_termination)) ?? '-------'}}</p>
        <p><span>Description:</span> {{$employee->description ?? '--------'}}</p>
        


    </div>
    <a href="/"><button class="btn btn-success" value="Voltar">Back</button></a>
</div>

@endsection