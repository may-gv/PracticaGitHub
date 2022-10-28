@extends('plantilla')

@section('contenido')
    
<div class="container mt-5 col-md-5 " style="background: rgb(162, 93, 184)"> 
    <div class="card text-center mb-5 fw-bold " style="background: rgb(143, 44, 182)">

        <div class="card-header text-white">
             PEDIDOS REALIZADOS
        </div>

        <div class="card-body">

            <table class="table ">
                <thead>
                <tr>
                    <th scope="col"># Pedido</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fecha</th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Jairo Angel</td>
                    <td>Pastel de chocolate Mediano</td>
                    <td>$150</td>
                    <td>5/Nov/2022</td>
                    
                    
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Christian Ramos</td>
                    <td>Pastel de vainilla con fresas Grande </td>
                    <td>$260</td>
                    <td>31/Oct/2022</td>
                    
                  
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Angel Jimenez</td>
                    <td>Pastel imposible mediano</td>
                    <td>$190</td>
                    <td>7/Nov/2022</td>
                    
                </tr>
                </tbody>
            </table>
        </div>





    </div>



@stop