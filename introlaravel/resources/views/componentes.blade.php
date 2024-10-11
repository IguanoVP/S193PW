@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">
Soy el contenido del primero
</x-Card>

<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="NO Guardar"> 
Otro Gaaaato!!!!
</x-Card>


<div class="container mt-4">

<x-Alert tipo="danger"> rojo </x-Alert>
<x-Alert tipo="warning"> amarillo </x-Alert>

</div>
@endsection