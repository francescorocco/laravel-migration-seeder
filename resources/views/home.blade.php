@extends('layouts.app')

@section('page-title', 'DB Treni')

@section('content')
    <div class="container">
        <ul>
            @foreach ($trains as $train)
                
            <li>
                <div>{{$train['company']}}, {{$train['departure_station']}}, {{$train['arrival_station']}}, {{$train['date']}}, {{$train['departure_time']}}
                    {{$train['arrival_time']}}, {{$train['train_code']}}, {{$train['number_of_carriages']}}, {{$train['delay']}}, {{$train['deleted']}}</div>
                </li>
                @endforeach
        </ul>
    </div>
@endsection