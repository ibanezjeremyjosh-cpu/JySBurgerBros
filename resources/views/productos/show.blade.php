@extends('layouts.app')
@section('title', $producto->nombre)
@section('content')
<button class="back" onclick="window.location='{{ route('productos.index') }}'">← Volver al Menú</button>
<div class="wrap wide">
    <div class="detail">
        <div class="detail-img">{{ $producto->emoji }}</div>
        <div class="detail-body">
            <h1>{{ $producto->nombre }}</h1>
            <p class="sub">{{ $producto->descripcion }}</p>
            <div class="price">Q{{ number_format($producto->precio, 2) }}</div>
            <button class="btn" style="background:var(--orange)">Agregar al Carrito</button>
        </div>
    </div>
</div>
@endsection