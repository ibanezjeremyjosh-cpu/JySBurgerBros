@extends('layouts.app')
@section('title', 'Menú')
@section('content')
<div class="section">
    <h1>Menú</h1>
    <p class="sub">Elige tu favorito</p>
    <div class="grid">
        @foreach ($productos as $producto)
        <a href="{{ route('productos.show', $producto) }}" style="text-decoration:none;color:inherit">
            <div class="card">
                <div class="card-img">{{ $producto->emoji }}</div>
                <div class="card-body">
                    <div class="card-name">{{ $producto->nombre }}</div>
                    <div class="card-price">Q{{ number_format($producto->precio, 2) }}</div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection