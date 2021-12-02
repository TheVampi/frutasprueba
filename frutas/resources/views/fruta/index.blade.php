@extends('layouts.layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Mis frutas</h3>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('fruta.create') }}" class="btn btn-info">Agregar frutas</a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Nombre</th>
                                <th>Temporada</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @if($frutas->count())
                                @foreach($frutas as $fruta)
                                <tr>
                                    <td>{{$fruta->nombre}}</td>
                                    <td>{{$fruta->temporada}}</td>
                                    <td>{{$fruta->precio}}</td>
                                    <td>{{$fruta->stock}}</td>
                                    
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="8">No hay registro !!</td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection