@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Booking</h2>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('update.bookings', $booking->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="room_id" class="form-label">Room:</label>
                <select name="room_id" class="form-control" required>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}" {{ $booking->room_id == $room->id ? 'selected' : '' }}>
                            {{ $room->room_number }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date:</label>
                <input type="date" name="start_date" class="form-control"
                       value="{{ old('start_date', \Carbon\Carbon::parse($booking->start_date)->format('Y-m-d')) }}" required>
            </div>

            <div class="mb-3">
                <label for="end_date" class="form-label">End Date:</label>
                <input type="date" name="end_date" class="form-control"
                       value="{{ old('end_date', \Carbon\Carbon::parse($booking->end_date)->format('Y-m-d')) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Booking</button>
            <a href="{{ route('index.bookings') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
