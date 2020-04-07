@extends('welcome')

@section('contenedor')



@if(isset($old))
<div class="container align-items-center">
    <h3 class="mt-3">Actualizacion de productos</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="{{url("actual/{$old->id}")}}">
                        @csrf
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text"  value="{{$old->nombre}}" placeholder="Ingrese el nombre" class="form-control">


                            </div>
                            @error('nombre')
                            <p class= "text-danger">{{ $message }}</p>
                             @enderror
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="precio" name="precio" type="text" placeholder="Ingrese el precio"
                                value="{{$old->precio}}"
                                class="form-control">
                            </div>
                            @error('precio')
                             <p class= "text-danger">{{ $message }}</p>
                              @enderror
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="existencia" name="existencia"
                                value="{{$old->existencia}}"
                                type="number" min="1" max="200" placeholder="Existencia" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-ligth"> Enviar</button>

                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@else
<div class="container align-items-center">
    <h3 class="mt-3">Registro de productos</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="{{ url('/guardar') }}">
                        @csrf
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text" placeholder="Ingrese el nombre" class="form-control">


                            </div>
                            @error('nombre')
                            <p class= "text-danger">{{ $message }}</p>
                             @enderror
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="precio" name="precio" type="text" placeholder="Ingrese el precio" class="form-control">
                            </div>
                            @if(session('pr'))
                            <p class= "text-danger">{{ session('pr') }}</p>
                             @endif

                             @error('precio')
                             <p class= "text-danger">{{ $message }}</p>
                              @enderror
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="existencia" name="existencia" type="number" min="1" max="200" placeholder="Existencia" class="form-control">
                            </div>
                            @error('existencia')
                            <p class= "text-danger">{{ $message }}</p>
                             @enderror
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-ligth"> Enviar</button>

                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endif



@endsection



