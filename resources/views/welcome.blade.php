@extends('layouts.main')

@section('title', 'Evergreen Solutions')

@section('content')

<div id="search-container">
    
    <form id="form-home" action="/" method="GET">
        <h1>Employee Search</h1>
        <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    
    <div id="cards-container" class="row">
        @foreach($employees as $employee)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-date">Date of Hire: {{ date('d/m/Y', strtotime($employee->date_hire))}}</p>
                <div class="card-title">
                    <div>
                        <p>{{$employee->name}}</p>
                        <p> {{$employee->last_name}}</p>
                    </div> 
                    <div>
                        <p class="position-span">{{$employee->position}}  
                        @foreach($employee->items as $item)
                        <span>{{$item}}</span>
                        @endforeach
                        </p>
                </div>
                   
                </div>
                    <div>
                    <span>{{$employee->facility}} </span>
                   
                    </div>
                <a href="/employee/{{ $employee->id }}" class="btn btn-success">Info</a>
            </div>
        </div>
        @endforeach
        @if(count($employees) == 0 && $search)
            <p>Unable to find any employee with {{ $search }}! <a href="/">See all.</a></p>
        @elseif(count($employees) == 0)
            <p>No employer available</p>
        @endif
    </div>
</div>

@endsection