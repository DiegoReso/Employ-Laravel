@extends('layouts.main')

@section('title', 'Employees')


@section('content')

<div id="event-edit-container" class="col-md-6 offset-md-3">
    <h1>Employee</h1>
    <div>
        <p><a href="/employeessn/{{$employee->id}}"><span>Name:</span></a>  {{$employee->name}} {{$employee->middle_name}} {{$employee->last_name}} - <span>Date of Birthday:</span> {{ date('m/d/Y', strtotime($employee->date_birth))}}</p>
        <p><span>Date of Hire:</span> {{ date('m/d/Y', strtotime($employee->date_hire))}} - <span>Phone:</span> {{$employee->phone}}</p>
        <p><span>Address:</span>  {{$employee->street}} - {{$employee->city}} - {{$employee->state}} - {{$employee->zip}}</p>
        <p><span>Facility:</span> {{$employee->facility}} - <span>Position:</span> {{$employee->position}} -> 
            @foreach($employee->items as $item)
            <span>{{$item}}</span>
            @endforeach</p>
        <p><span>Date of Termination:</span> {{ date('m/d/Y', strtotime($employee->date_termination)) ?? '-------'}}</p>
        <p><span>Description:</span> {{$employee->description ?? '--------'}}</p>



    </div>
    <a href="/"><button class="btn btn-success" value="Back">Back</button></a>
    <a href="/edit/{{$employee->id}}"><button class="btn btn-primary" value="Edit">Edit</button></a>
    <form class="form-delete" action="/delete/{{ $employee->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger ">Delete</button>
    </form>

</div>

@endsection