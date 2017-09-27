@extends('layouts.master')

@section('content')

    <div class="content">
               
       <p>{{ $car->title }}</p>
       <p>{{ $car->producer }}</p>
       <p>{{ $car->number_of_doors }}</p>

   </div>       

@endsection

            

                