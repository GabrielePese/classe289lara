@extends('layouts.main-layout')
@section('content')


<ul>    
    @foreach ($pagamenti as $value)
    <li> {{$value -> status}} {{$value -> price}}</li>
    <a href="{{route('pagamenti-destroy', $value -> id)}}">X</a>
    <a href="{{route('pagamento-edit', $value -> id)}}">EDIT</a>

@endforeach
</ul>
@endsection