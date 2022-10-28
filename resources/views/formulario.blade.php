@extends('plantilla')

@section('contenido')
    
<div class="container mt-5 col-md-5 " style="background: rgb(162, 93, 184)"> 
    <div class="card text-center mb-5 fw-bold " style="background: rgb(143, 44, 182)">

        <div class="card-header text-white">
            REGISTRO DE PEDIDOS
        </div>
        <div class="card-body">

            <form class="m-4" method="post" action="" >
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white"> Nombre Cliente: </label>
                    <input type="text" class="form-control" name="txtNombre" id="">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Descripcion: </label>
                    <input type="text" class="form-control" name="txtDescripcion" id="">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Precio: </label>
                    <input type="text" class="form-control" name="txtPrecio" id="">
                </div>
                <div class="mb-3">
                    <label class="form-label text-white"> Fecha de Entrega: </label>
                    <input type="text" class="form-control" name="txtFecha" id="">
                </div>
            </form>
        </div>
    </div>
</div>

@stop