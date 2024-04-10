@extends('main')

@section('title', 'Show')
    


@section('content')
    
    <div class="container">
        <div id="" class="title-container">
            <h1>Close your Event right now! Choose the artist you want</h1>
        </div>

        <div class="tendencias mt-2">
            <div class="title-container mt-4">
                <h1>Market trends, the artist with the most shows!</h1>
            </div>


            <div class="musician-data mt-5">
                <p>Artist with the most closed events: {{ $mostFrequentMusician }}</p>
                
                <p>Your media of payment cache: {{ $media }}</p>
            </div>
            
        </div>

        <div>
            <a href="/musician" class="btn btn-primary">I want to hire an artist</a>
        </div>
    </div>


    

@endsection