@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pizza: {{$pizza->nome}}</h1>
        <h2>Prezzo: {{$pizza->prezzo}}€</h2>
        <ul>
            @if ($pizza->popolarita)
                <li>Popolarità: {{$pizza->popolarita}}</li>
            @endif
            <li>Ingredienti: {{$pizza->ingredienti}}</li>
            <li>Vegetariana: 
                @if ($pizza->vegetariana === 0)
                    NO
                @else
                    SI
                @endif
            </li>
        </ul>
    </div>
    <div class="container">
        <a href="{{ route('admin.pizzas.index')}}" class="btn btn-secondary">INDIETRO</a>
        <a href="{{route('admin.pizzas.edit', $pizza)}}" class="btn btn-primary">EDIT</a>
    </div>
@endsection