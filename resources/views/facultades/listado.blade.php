@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Libros</h1>
@stop

@section('content') 
    <p>Contenido.</p>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th colspan="110"><a type="button" href="/facultades/registrar" 
                        class="btn btn-success">adicionar</a></th>
                <!-- <th colspan="110"><button  class="btn btn-success">Registrar</button></th> -->
            </tr>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opcion</th>
            </tr>
        </thead>
        <tbody>
            <!------------------Codigo para Recorrer la DB------------------>
            @php
                $i = 1;
            @endphp
            @foreach($faculty as $f) <!--Recibe los datos-->
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$f->codfacultad}}</td>
                    <td>{{$f->nomfacultad}}</td>
                    <td>
                        <a href="{{ route('editar_fac', $f->codfacultad)}}" class="btn btn-primary">editar</a>
                        <a href="{{ route('eliminar_fac', $f->codfacultad)}}" class="btn btn-danger">Eliminar</a>
                    </td>
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

