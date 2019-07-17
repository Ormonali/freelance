@extends('layouts.layout')

@section('content')
    <div class="orders">
    @if(count($orders)>0)
    <h1>All Orders</h1>
    @else
    <h2>Cant find any order</h2>
    @endif
    </div>
    <div class="createOrders">
        <a href="order/create" class="btn btn-primary">Make order</a>
    </div>
@endsection