@extends('layouts.app')

@section('content')
        <div class="order">
            <h2>Title: {{$order->title}}</h2>
            <p>Description: {{$order->description}}</p>
            <p>Deadline: {{$order->deadline}}</p>
            <p>Price: {{$order->price}}</p>
            @if( Auth::user()->role==1)
            <a href="order/create" class="btn btn-primary">Take order</a>
            @elseif(auth::user()->id == $order->customer_id)
            <a href="/order/{{$order->id}}/edit" class="btn btn-primary">Edit order</a>
            <form action="/order/{{$order->id}}" method="POST">
                @method('DELETE')
                @csrf
               <input type="submit" class="btn btn-danger" value="Delete">
            </form>
            @endif
        </div>

@endsection