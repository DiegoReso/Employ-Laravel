@extends('layouts.main')

@section('title', 'Employee Report')

@section('content')


<div id="events-container" class="col-md-3">

<form method="post" action="{{ route('generate.report') }}" target="_blank">
    @csrf
    <div class="form-group">
        <label for="facility">Choose Facility:</label>
        <select name="facility" class="form-control">
            @foreach ($facilities as $facility)
                <option value="{{ $facility }}">{{ $facility }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Generate Report</button>
</form>
   
</div>

@endsection