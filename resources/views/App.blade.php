@extends('welcome')

@section('contenedor')
<br>
<h1>Primero</h1>

<a  href="{{ url('/formulario') }}"  class="btn btn-primary text-light mb-4">Añadir producto</a>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col"> Actualizar</th>
        <th scope="col"> Borrar</th>
      </tr>
    </thead>
    <tbody>
        @foreach($produc as $item)
        <tr>

            <td>{{$item->id}}</td>
            <td>{{$item->nombre }}</td>
            <td>{{$item->precio}}</td>
            <td>{{$item->existencia}}</td>
            <td><a class="btn btn-warning text-ligth" href="{{ url("/editar/{$item->id}") }}">  Actualizar <a></td>
            <td><a class="btn btn-danger text-ligth" href="{{ url("/eliminar/{$item->id}") }}">  Borrar <a></td>

        </tr>
        @endforeach

    </tbody>
  </table>

@endsection
