@extends('layout.app')

@section('titulo')
    Dashboard
@endsection

@section('contenido')

    
    {{Auth::user()->compania}}
    
@endsection