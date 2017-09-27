@extends('layouts.master')

@section('content')

    <div class="content">
        <ul>
            @foreach($cars as $car)

                <li>
                    <a href="{{ route('single-car', ['id' => $car->id]) }}">
                        {{ $car->title }}
                    </a>
                </li>

            @endforeach
        </ul>
    </div>

@endsection
    