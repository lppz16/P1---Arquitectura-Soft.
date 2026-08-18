<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

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
        // Creamos el arreglo asociativo como pide el profesor
        $viewData = [];
        $viewData['title'] = __('Listado de Órdenes - UrbanVibe Wear');
        $viewData['orders'] = Order::all();
        
        // Lo enviamos usando ->with()
        return view('orders.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        // Buscamos la orden
        $order = Order::findOrFail($id);

        // Armamos el arreglo asociativo
        $viewData = [];
        $viewData['title'] = __('Detalle de la Orden #:id', ['id' => $order->id]);
        $viewData['order'] = $order;
        
        // Lo enviamos usando ->with()
        return view('orders.show')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
        // 1. Validar la información recibida
        $validatedData = $request->validate([
            'orderNumber' => 'required|string|max:255',
            'creationDate' => 'required|date',
            'totalAmount' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // 2. Almacenar los datos en la base de datos
        Order::create($validatedData);

        // 3. Redirigir a la vista inicial con un mensaje de éxito
        return redirect()->route('order.home')
            ->with('success', __('Elemento creado satisfactoriamente'));
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