@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
   <h1>{{ $pizza->name }}</h1>
    <p>Type - {{$pizza->type}}</p>
    <p>Base - {{$pizza->base}}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
    @foreach($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
    @endforeach
    </ul>

    <form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf
    @method('DELETE') 
    <button>Complete Order</button>
    </form>
</div>
<a href="/pizzas"><-- Back to all pizzas</a>
@endsection