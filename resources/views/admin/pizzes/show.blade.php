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

        <a href="{{ route('admin.pizzas.index')}}" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
            <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
          </svg>Torna</a>

        <a href="{{route('admin.pizzas.edit', $pizza)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg></a>
    </div>
@endsection
