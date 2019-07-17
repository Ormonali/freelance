@extends('layouts.app')

@section('content')
<form action="/user" method="post">
    @csrf
    <input type="text" placeholder="name: " name="name">
    <input type="text" placeholder="password: " name="password">
    <input type="integer" placeholder="balance: " name="balance">
    <input type="radio" id="orderer" name="role" value="0">
    <label for="orderer">Orderer</label>
    <input type="radio" id="freelancer" name="role" value="1">  
    <label for="freelancer">freelancer</label>
    <button type="submit">Регистрироватся</button>
</form>

@endsection