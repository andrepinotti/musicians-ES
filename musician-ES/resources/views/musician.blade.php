@extends('main')

@section('title', 'Musician')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1 class="mt-5">Create your event</h1>
        <form action=" {{ route('musician.store') }} " method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="mb-2 mt-3">Name:</label>
                <input type="text" class="form-control mb-2" id="title" name="name" placeholder="Name of the contractor" required>
            </div>
            <div class="form-group">
                <label for="artist" class="mb-2 mt-3">Artist:</label>
                <select name="name_musician" class= "mb-3" id="" required>
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
                <label for="cache" class="mb-2 mt-3">Payment Cache</label>
                <input type="number" class="form-control mb-2" id="title" placeholder="Value" name="cache" value="cache" required>
            </div>
            <div class="form-group">
                <label for="adress" class="mb-2 mt-3">Adress:</label>
                <input type="text" class="form-control mb-2" id="title" name="adress" placeholder="Adress" required>
            </div>
            <div class="form-group">
                <label for="date" class="mb-2 mt-3">Date:</label>
                <input type="date" class="form-control mb-2" id="title" name="date_event" value="data" required>
            </div>

            <input type="submit" class="btn btn-primary mt-2" value="Create Event">

    </div>




@endsection

   
