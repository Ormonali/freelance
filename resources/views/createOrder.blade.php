@extends('layouts.layout')

@section('content')
<form action="order" method="post">
    @csrf
    <input type="text" placeholder="Your name: " name="name">
    <input type="text" placeholder="title: " name="title">
    <input type="text" placeholder="description: " name="description">
    <input type="integer" placeholder="price: " name="price">
    <input type="date" name="deadline" >
    <button type="submit">Регистрироватся</button>
</form>

@endsection