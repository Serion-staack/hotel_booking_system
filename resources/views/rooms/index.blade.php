@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <h2>Rooms</h2>
        <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">+ Add Room</a>
            <a href="{{route('rooms.export')}}" class="btn btn-secondary"> + Export Rooms</a>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show position-relative" role="alert" id="success-alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                <div class="progress" style="height: 4px; position: absolute; bottom: 0; left: 0; width: 100%;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" id="success-progress" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Type</th>
                <th>Capacity</th>
                <th>Price (€)</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($rooms as $room)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $room->room_number }}</td>
                    <td>{{ $room->type }}</td>
                    <td>{{ $room->capacity }}</td>
                    <td>{{ $room->price }}</td>
                    <td>
                        <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alert = document.getElementById('success-alert');
        const progress = document.getElementById('success-progress');

        if (alert && progress) {
            let duration = 10000;
            let interval = 100;
            let width = 100;
            let decrement = (interval / duration) * 100;

            let timer = setInterval(() => {
                width -= decrement;
                if (width <= 0) {
                    width = 0;
                    clearInterval(timer);


                    let bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                    bsAlert.close();
                }
                progress.style.width = width + '%';
            }, interval);
        }
    });
</script>


