@extends('layouts.app')

@section('content')
<div class="container">

    {{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="m-0 p-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}

    <form action="{{ route('admin.pizzas.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" 
          class="form-control 
          @error('nome') is-invalid
          @enderror" 
          value="{{old('nome')}}"
          id="nome" name="nome" placeholder="Nome pizza">
          @error('nome')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="immagine">Immagine</label>
          <input type="text" 
          class="form-control
          @error('immagine') is-invalid
          @enderror" 
          id="immagine" name="immagine" 
          value="{{old('immagine')}}" placeholder="immagine pizza">
          @error('immagine')
              <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="prezzo">Prezzo</label>
          <input type="text" 
          class="form-control 
          @error('prezzo') is-invalid
          @enderror" 
          value="{{old('prezzo')}}"
          id="prezzo" name="prezzo" placeholder="Prezzo">
          @error('prezzo')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="ingredienti">Ingredienti</label>
          <input type="text" 
          class="form-control 
          @error('ingredienti') is-invalid
          @enderror" 
          value="{{old('ingredienti')}}"
          id="ingredienti" name="ingredienti" placeholder="Ingredienti">
          @error('ingredienti')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="form-group">
          <label for="popolarita">Popolarita</label>
          <input type="number" 
          class="form-control 
          @error('popolarita') is-invalid
          @enderror" 
          value="{{old('popolarita')}}"
          id="popolarita" name="popolarita" placeholder="Popolarità">
          @error('popolarita')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-3">
            <p>Vegetariana: </p>
            <label for="vegetariana" 
            class="form-label">sì</label>
            <input type="radio" value="1" name="vegetariana" id="vegetariana" required="required">

            <label for="vegetariana" 
            class="form-label">no</label>
            <input type="radio" value="0" name="vegetariana" id="vegetariana" required="required">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection