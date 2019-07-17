@extends('layouts.app')

@section('content')
    <div class="orders">
    @if(count($orders)>0)
    <h1>All Orders</h1>
    <br>
    @foreach($orders as $order)
        <div class="order">
            <h2>Title: {{$order->title}}</h2>
            <p>Description: {{$order->description}}</p>
            <p>Deadline: {{$order->deadline}}</p>
            <p>Price: {{$order->price}}</p>
            <a href="order/{{$order->id}}">Read more</a>
        </div>
        <br>
    @endforeach
    @else
    <h2>Cant find any order</h2>
    @endif
    </div>
@endsection