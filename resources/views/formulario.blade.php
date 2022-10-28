@extends('plantilla')

@section('contenido')
@if(session()->has('Confirmacion'))
       {!!"<script>  Swal.fire(
         'Excelente!',
         'El pedido ha llegado al controlador!',
         'success'
       ) </script> "!!}
    @endif
    
<div class="container mt-5 col-md-5 " style="background: rgb(162, 93, 184)"> 
    <div class="card text-center mb-5 fw-bold " style="background: rgb(143, 44, 182)">

        <div class="card-header text-white">
            REGISTRO DE PEDIDOS
        </div>

        @if($errors->any())

        @foreach($errors->all() as $error)


        @endforeach
    @endif
        <div class="card-body">

            <form class="m-4" method="post" action="GuardarPedido" >
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white"> Nombre Cliente: </label>
                    <input type="text" class="form-control" name="txtNombre" id="" value="{{ old('txtNombre')}}">
                    <p class="text-primary fst-italic fw-bold"> {{ $errors->first('txtNombre') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Descripcion: </label>
                    <input type="text" class="form-control" name="txtDescripcion" id="" value="{{ old('txtDescripcion')}}">
                    <p class="text-primary fst-italic fw-bold"> {{ $errors->first('txtDescripcion') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Precio: </label>
                    <input type="text" class="form-control" name="txtPrecio" id="" value="{{ old('txtPrecio')}}">
                    <p class="text-primary fst-italic fw-bold"> {{ $errors->first('txtPrecio') }}</p>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Fecha de Entrega: </label>
                    <input type="text" class="form-control" name="txtFecha" id="" value="{{ old('txtFecha')}}">
                    <p class="text-primary fst-italic fw-bold"> {{ $errors->first('txtFecha') }}</p>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Pedido</button>
            </form>
        </div>
    </div>
</div>

@stop