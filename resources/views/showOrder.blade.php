@extends('layouts.layout')

@section('content')
        <div class="order">
            <h2>Title: {{$order->title}}</h2>
            <p>Description: {{$order->description}}</p>
            <p>Deadline: {{$order->deadline}}</p>
            <p>Price: {{$order->price}}</p>
            <a href="order/create" class="btn btn-primary">Take order</a>
            <a href="order/create" class="btn btn-primary">Delete order</a>
        </div>

@endsection