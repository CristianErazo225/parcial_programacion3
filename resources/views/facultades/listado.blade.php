@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content') 
    <p>Contenido.</p>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th colspan="110"><button class="btn btn-success">Registrar</button></th>
            </tr>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opcion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>'100'</td>
                <td>Otto</td>
                <td>
                    <button class="btn btn-primary">editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
                
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>'200'</td>
                <td>Thornton</td>
                <td>
                    <button class="btn btn-primary">editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>'300'</td>
                <td>Thornton</td>
                <td>
                    <button class="btn btn-primary">editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

