@extends('layouts.layout')

@section('content')
    <div>
        <h1>{{$title}}</h1>
        <p>Services Page</p>
        @if(count($services) > 0)
            @foreach($services as $service)
                <ul>
                    <li>{{$service}}</li>
                </ul>
            @endforeach
        @endif
    </div>
@endsection

