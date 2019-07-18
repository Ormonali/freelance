<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\User;
class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::orderBy('created_at','desc')->get();

        return view('orders')->with('orders',$orders);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createOrder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $order = new Orders();
        $order->customer_id = auth()->user()->id;
        $order->freelancer_id = 0;
        $order->active=0;
        $order->title = $request->get('title');
        $order->description = $request->get('description');
        $order->deadline = $request->get('deadline');
        $order->price = $request->get('price');
        $order->save();

        return redirect()->route('order.index');
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::find($id);
        return view('showOrder')->with('order',$order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Orders::find($id);
        return view('editOrder')->with('order',$order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Orders::find($id);
        $order->title = $request->get('title');
        $order->description = $request->get('description');
        $order->deadline = $request->get('deadline');
        $order->price = $request->get('price');
        $order->save();
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Orders::find($id);
        $order->delete();
        return redirect()->route('order.index');
    }
}
