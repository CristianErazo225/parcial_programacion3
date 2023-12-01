@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Libros</h1>
@stop

@section('content') 
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Genero</th>
                <th scope="col">Precio</th>
                <th scope="col">Observacion</th>
                <th scope="col">Foto</th>
                <th scope="col">Area</th>
            </tr>
        </thead>
        <tbody>
            <!------------------Codigo para Recorrer la DB------------------>
            @php
                $i = 1;
            @endphp
            @foreach($book as $f) <!--Recibe los datos-->
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$f->ISBN}}</td>
                    <td>{{$f->nombre}}</td>
                    <td>{{$f->descripcion}}</td>
                    <td>{{$f->generoLiterario}}</td>
                    <td>{{$f->precioUnitario}}</td>
                    <td>{{$f->observacion}}</td>
                    <td>{{$f->foto}}</td>
                    <td>{{$f->areaconocimiento}}</td>
                    
                    
                    @php
                        $i = $i + 1;
                    @endphp
                </tr>
            @endforeach
            
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

