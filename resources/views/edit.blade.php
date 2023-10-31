@extends('layouts.main')

@section('title', 'Edit')


@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Employee Registration</h1>
  <form action="/employee/update/{{$employee->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control"  name="name" value="{{$employee->name}}">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control"  name="last_name" value="{{$employee->last_name}}">
    </div>
    <div class="form-group">
      <label for="middle_name">Middle Name</label>
      <input type="text" class="form-control"  name="middle_name" value="{{$employee->middle_name}}">
    </div>
    <div class="form-group">
      <label for="date_birth">Date of Birthday</label>
      <input type="date" class="form-control"  name="date_birth" value="{{$employee->date_birth}}">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control"  name="phone" value="{{$employee->phone}}">
    </div>
    <div class="form-group">
      <label for="ssn">SSN</label>
      <input type="text" class="form-control" id="ssn" name="ssn" maxlength="12" pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}" value="{{$employee->ssn}}">
    </div>
    <div class="form-group">
      <label for="date_hire">Date of Hire</label>
      <input type="date" class="form-control"  name="date_hire" value="{{$employee->date_hire}}">
    </div>
    <div class="form-group">
      <label for="facility">Facility</label>
      <input type="text" class="form-control" id="facility" name="facility" value="{{$employee->facility}}">
    </div>
    <div class="form-group">
      <label for="position">Position</label>
      <input type="text" class="form-control" id="position" name="position" value="{{$employee->position}}">
    </div>
      <div class="form-group">
      <label for="date_termination">Date of Termination</label>
      <input type="date" class="form-control"  name="date_termination" value="{{$employee->date_termination}}">
    </div>
    <div id="box" class="form-group">
      <div>
        <input type="checkbox" name="items[]" value="Full-Time" {{ (in_array("Full-Time", $employee->items)) ? "checked='checked' "  :  ' '  }}> Full-Time	
      </div>	
      <div>
        <input type="checkbox" name="items[]" value="Part-Time" {{ (in_array("Part-Time", $employee->items)) ? "checked='checked' "  :  ' '  }}> Part-Time
      </div>
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="hidden" name="address" value="{{$employee->address}}">
    </div>
    <div class="form-group">
      <label for="title">Street</label>
      <input type="text" class="form-control" id="street" name="street" value="{{$employee->street}}">
    </div>
    <div class="form-group">
      <label for="title">City</label>
      <input type="text" class="form-control" id="city" name="city" value="{{$employee->city}}">
    </div>
    <div class="form-group">
      <label for="state">State</label>
      <input type="text" class="form-control" id="state" name="state" value="{{$employee->state}}">
    </div>
    <div class="form-group">
      <label for="zip">Zip Code</label>
      <input type="text" class="form-control" id="zip" name="zip" value="{{$employee->zip}}">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
  
      <textarea class="form-control" name="description" id="description">{{$employee->description}}</textarea>
    </div>
    <input type="submit" class="btn btn-outline-success"  value="Edit">
  </form>
</div>


@endsection