@extends('layouts.main')

@section('title', 'Register')


@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Employee Registration</h1>
  <form action="/create" method="POST">
    @csrf
    <div class="row">
      <div class="my-4 col">
        <label for="name">Name</label>
        <input type="text" class="form-control"  name="name">
      </div>
      <div class="my-4 col">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control"  name="last_name">
      </div>
    </div>
 
    <div class="row">
      <div class="my-4 col">
        <label for="middle_name">Middle Name</label>
        <input type="text" class="form-control" name="middle_name">
      </div>
      <div class="my-4 col">
        <label for="date_birth">Date of Birthday</label>
        <input type="date" class="form-control" name="date_birth">
      </div>
    </div>
    <div class="row">
      <div class="my-4 col">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <div class="my-4 col">
        <label for="ssn">SSN</label>
        <input type="text" class="form-control" id="ssn" name="ssn" maxlength="12" pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}">
      </div>
    </div>
    <div class="row">
      <div class="my-4 col">
        <label for="date_hire">Date of Hire</label>
        <input type="date" class="form-control" name="date_hire">
      </div>
      <div class="my-4 col">
        <label for="facility">Facility</label>
        <input type="text" class="form-control" id="facility" name="facility">
      </div>
    </div>
    <div class="row">
      <div class="my-4 col">
        <label for="position">Position</label>
        <input type="text" class="form-control" id="position" name="position">
      </div>
      <div class="my-4 col">
        <label for="date_termination">Date of Termination</label>
        <input type="date" class="form-control" name="date_termination">
      </div>
    </div>
    <div id="box" class="box form-group">
      <div>
        <input type="checkbox" name="items[]" value="Full-Time"> Full-Time
      </div>
      <div>
        <input type="checkbox" name="items[]" value="Part-Time"> Part-Time
      </div>
    </div>

    <div class="row">
      <div class="my-4 col">
        <div>
          <label for="address">Address:</label>
          <input type="hidden" name="address">
        </div> 
        
        <label for="street">Street</label>
        <input type="text" class="form-control" id="street" name="street">
      </div>
    </div>
    <div class="row">
      <div class="my-4 col">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city">
      </div>
      <div class="my-4 col">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" name="state">
      </div>

      <div class="my-4 col">
        <label for="zip">Zip Code</label>
        <input type="text" class="form-control" id="zip" name="zip">
      </div>
    </div>
    <div class="row">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" id="description"></textarea>
    </div>
    <input type="submit" class="btn btn-outline-success" value="Register">

</div>


@endsection