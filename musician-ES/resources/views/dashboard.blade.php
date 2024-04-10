@extends('main')

@section('title', 'Dashboard')


@section('content')

    <div class="col-md-10 offset-md01 dashboard-title-container">
        <h1>Events</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope=col></th>
                        <th scope="col">Contractor's Name</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Cache</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td><!-- index of events -->
                            <td>{{ $event->name}}</td>
                            <td>{{ $event->name_musician }}</td>
                            <td>{{ $event->cache }}</td>
                            <td>{{ $event->adress }}</td>
                            <td>{{ $event->date_event }}</td>
                            <td>
                                <a href="/edit/{{$event->id}}" class="btn btn-info edit-btn"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                <form action="/dashboard/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn align-middle">
                                        <i class="fa-solid fa-trash-can"></i> Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>        
        @else
            <p>There are no events available</p>
        @endif
    </div>

@endsection
