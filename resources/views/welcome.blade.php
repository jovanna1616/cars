@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="title m-b-md">
            <p>Welcome {{ $name }}</p>
            <p>I'm {{ $age }} years old.</p>
        </div>
    </div>

                
@endsection