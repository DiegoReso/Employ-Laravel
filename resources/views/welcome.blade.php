@extends('layouts.main')

@section('title', 'Evergreen Solutions')


@section('content')

<h1>
    @if(session('msg'))
    <p>Registration completed successfully</p>
    @endif
    
    
        <div>
            We are the best!
        </div>
   
</h1>


@endsection