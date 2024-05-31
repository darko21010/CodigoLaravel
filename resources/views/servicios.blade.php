@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>
    <ul>
        @if ($servicios)
            @foreach ($servicios as $item)
                <li>{{$item['Titulo']}}</li>    
            @endforeach  
        @else
            <li> No existe servicio. </li>
        @endif
    </ul>
@endsection