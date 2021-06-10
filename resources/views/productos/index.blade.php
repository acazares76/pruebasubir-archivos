@extends("../layouts/plantilla")
@section("cabecera")
@section("contenido")
<table border="1">
<tr>
<td>Nombre</td>
<td>Descripcion</td>
<td>Precio</td>
<td>Contenido</td>
</tr>
@foreach($productos as $producto)
<tr>
    <td>{{$producto->Nombre}}</td>  
    <td>{{$producto->Descripcion}}</td> 
    <td>{{$producto->Precio}}</td> 
    <td>{{$producto->Contenido}}</td> 
</tr>
@endforeach
</table>
@section("pie")