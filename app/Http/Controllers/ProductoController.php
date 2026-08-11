<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }
}