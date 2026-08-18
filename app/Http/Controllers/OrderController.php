<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    
    public function home()
    {
        return view('orders.home');
    }
    
    // Dejamos los métodos listos para las siguientes actividades
    public function create()
    {
        return view('orders.create');
    }

    public function index()
    {
        // Traemos todos los registros de la tabla orders
        $orders = Order::all();
        
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        // Buscamos el registro por su ID
        $order = Order::findOrFail($id);
        
        // Retornamos la vista pasando todos los datos de esa orden
        return view('orders.show', compact('order'));
    }
    
    public function store(Request $request)
    {
        // 1. Validar la información recibida
        $validatedData = $request->validate([
            'orderNumber'  => 'required|string|max:255',
            'creationDate' => 'required|date',
            'totalAmount'  => 'required|numeric',
            'status'       => 'required|string',
        ]);

        // 2. Almacenar los datos en la base de datos
        Order::create($validatedData);

        // 3. Redirigir a la vista inicial con un mensaje de éxito
        return redirect()->route('order.home')
                         ->with('success', 'Elemento creado satisfactoriamente');
    }

    public function destroy($id)
    {
        // Buscamos la orden y la eliminamos de la base de datos
        $order = Order::findOrFail($id);
        
        $order->delete();
        
        // Redirigimos a la lista de objetos (Actividad 6)
        return redirect()->route('order.index');
    }
    
}