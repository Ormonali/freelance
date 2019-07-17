@extends('layouts.app')

@section('content')
        <div class="order">
            <h2>Title: {{$order->title}}</h2>
            <p>Description: {{$order->description}}</p>
            <p>Deadline: {{$order->deadline}}</p>
            <p>Price: {{$order->price}}</p>
            @if( Auth::user()->role==1)
            <a href="order/create" class="btn btn-primary">Take order</a>
            @else
            <a href="order/" class="btn btn-primary">Edit order</a>
            <a href="order/create" class="btn btn-primary">Delete order</a>
            @endif
        </div>

@endsection