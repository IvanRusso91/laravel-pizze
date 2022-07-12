@extends('layouts.app')

@section('content')


<div class="container">
    @if (session('pizza_cancellato'))
        <div class="alert alert-success">
            {{session('pizza_cancellato')}}
        </div>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Prezzo</th>
            <th scope="col" class="w-25">Ingredienti</th>
            <th scope="col">Popolarit&agrave;</th>
            <th scope="col">Vegetariana</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->id}}</td>
                    <td>{{$pizza->nome}}</td>
                    <td>{{$pizza->prezzo}}€</td>
                    <td class="w-25">

                        @forelse ($pizza->ingredients as $ingredient )
                             {{$ingredient->ingredient}}
                        @empty
                           -
                        @endforelse
                    </td>
                    <td>{{$pizza->popolarita}}</td>
                    <td>
                        @if ($pizza->vegetariana === 0)
                            NO
                        @else
                            SI
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.pizzas.show', $pizza)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
                          </svg></a>
                        <a href="{{route('admin.pizzas.edit', $pizza)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></a>
                        <form class="d-inline" action="{{route('admin.pizzas.destroy', $pizza)}}" method="POST"  onsubmit="return confirm('Sei sicuro di voler cancellare la pizza : {{$pizza->nome}}')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                              </svg></button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection
