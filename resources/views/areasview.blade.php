@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Areas</h1>
@stop

@section('content') 
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Descripcion</th>
                
            </tr>
        </thead>
        <tbody>
            <!------------------Codigo para Recorrer la DB------------------>
            @php
                $i = 1;
            @endphp
            @foreach($areal as $f) <!--Recibe los datos-->
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$f->idArea}}</td>
                    <td>{{$f->descripciones}}</td>
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

