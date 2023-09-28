@extends('layouts.main')

@section('title', 'Register')


@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Employee Register</h1>
  <form action="/create" method="POST" enctype="multipart/form-data">
    @csrf
   
    
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="employee name">
    </div>
    <div class="form-group">
      <label for="date">Hiring date:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">City:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="employee city">
    </div>
    <div class="form-group">
      <label for="title">Dependents?</label>
      <select name="private" id="private" class="form-control">
        <option value="0">No</option>
        <option value="1">Yes</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Description:</label>
      <textarea name="description" id="description" class="form-control" placeholder="Employee description"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Skills:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Housekeeping"> Housekeeping
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="CNA"> CNA
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Driver"> Driver
      </div>
     
    <input type="submit" class="btn btn-outline-success" value="Criar Evento">
  </form>
</div>


@endsection