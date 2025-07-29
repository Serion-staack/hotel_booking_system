@extends('dashboard.layouts.app')


@section('content')

        <div class="container">
            <h2>Create Booking</h2>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="room_id" class="form-label">Select Room</label>
                    <select name="room_id" class="form-select" required>
                        <option value="">-- Select Room --</option>
                        @foreach($rooms as $room)
                            <option value="{{ $room->id }}"
                                {{ isset($selectedRoomId) && $selectedRoomId == $room->id ? 'selected' : '' }}>
                                Room no: {{ $room->room_number }} - ${{ $room->price }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date') }}" required>
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}" required>
                </div>

                <div class="mb-3">
                    <label for="customer_name" class="form-label">Name</label>
                    <input type="text" name="customer_name" class="form-control" value="" required>
                </div>

                <div class="mb-3">
                    <label for="customer_mail" class="form-label">Email</label>
                    <input type="email" name="customer_mail" class="form-control" value="" required>
                </div>

                <button type="submit" class="btn btn-success">Submit Booking</button>
                <a href="{{route('index.bookings')}}" class="btn btn-primary">Back</a>
            </form>
        </div>

@endsection
