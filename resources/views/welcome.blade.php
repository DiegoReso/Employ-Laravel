@extends('layouts.main')

@section('title', 'Evergreen Solutions')

@section('content')

<div id="search-container" class="col-md-12">
    
    <form action="/" method="GET">
        <h1>Employee Search</h1>
        <input type="text" id="search" name="search" class="form-control" placeholder="Search...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    
    <div id="cards-container" class="row">
        @foreach($employees as $employee)
        <div class="card col-md-3">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($employee->date)) }}</p>
                <h5 class="card-title">{{ $employee->name }}</h5>
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