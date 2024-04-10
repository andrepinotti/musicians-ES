@extends('main')

@section('title', 'Editing');


@section('content')
    

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mt-5">Editing...</h1>
    <form action="/edit/{{$events->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name" class="mb-2 mt-3">Nome:</label>
            <input type="text" class="form-control mb-2" id="title" name="name" placeholder="Nome do Contratante" value="{{$events->name}}" required>
        </div>
        <div class="form-group">
            <label for="artista" class="mb-2 mt-3">Artista:</label>
            <select name="name_musician" class= "mb-3" value="{{$events->name_musician}}" required>
                <option value="Caetano Veloso">Caetano Veloso</option>
                <option value="Milton Nascimento">Milton Nascimento</option>
                <option value="Lô Borges">Lô Borges</option>
                <option value="Chico Buarque">Chico Buarque</option>
                <option value="Lobão">Lobão</option>
                <option value="Marisa Monte">Marisa Monte</option>
                <option value="Lulu Santos">Lulu Santos</option>
                <option value="Carlinhos Brown">Carlinhos Brown</option>
                <option value="Ivete Sangalo">Ivete Sangalo</option>
                <option value="Iza">Iza</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cache" class="mb-2 mt-3">Cachê:</label>
            <input type="number" class="form-control mb-2" id="title" placeholder="Valor" value="{{ $events->cache }}" name="cache" value="cache" required>
        </div>
        <div class="form-group">
            <label for="adress" class="mb-2 mt-3">Endereço:</label>
            <input type="text" class="form-control mb-2" id="title" name="adress" value="{{ $events->adress }}" placeholder="Endereço" required>
        </div>
        <div class="form-group">
            <label for="date" class="mb-2 mt-3">Data:</label>
            <input type="date" class="form-control mb-2" id="title" name="date_event" value="{{ $events->date_event }}" required>
        </div>

        <input type="submit" class="btn btn-primary mt-2" value="Update Event">

</div>


@endsection