@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Productos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Añadir Producto</a>
</div>
@endsection
