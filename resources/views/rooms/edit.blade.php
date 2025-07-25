@extends('dashboard.layouts.app')
@section('title','')
@section('content')

    <div class="container">
        <h2>Edit Room: {{ $room->room_number }}</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems:<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Room Number</label>
                <input type="text" name="room_number" class="form-control" value="{{ old('room_number', $room->room_number) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Room Type</label>
                <select name="type" class="form-control" required>
                    <option value="">-- Select Type --</option>
                    <option value="single" {{ old('type', $room->type) == 'single' ? 'selected' : '' }}>Single</option>
                    <option value="double" {{ old('type', $room->type) == 'double' ? 'selected' : '' }}>Double</option>
                    <option value="suite" {{ old('type', $room->type) == 'suite' ? 'selected' : '' }}>Suite</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Capacity</label>
                <input type="number" name="capacity" class="form-control" min="1" value="{{ old('capacity', $room->capacity) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Price (€)</label>
                <input type="number" name="price" class="form-control" min="0" step="0.01" value="{{ old('price', $room->price) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description', $room->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Active</label>
                <select name="is_active" class="form-control">
                    <option value="1" {{ old('is_active', $room->is_active) == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('is_active', $room->is_active) == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Amenities</label>
                <input type="text" name="amenities" class="form-control" value="{{ old('amenities', $room->amenities) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Floor</label>
                <input type="number" name="floor" class="form-control" value="{{ old('floor', $room->floor) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="free" {{ old('status', $room->status) == 'free' ? 'selected' : '' }}>Free</option>
                    <option value="occupied" {{ old('status', $room->status) == 'occupied' ? 'selected' : '' }}>Occupied</option>
                    <option value="maintenance" {{ old('status', $room->status) == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                </select>
            </div>


            <div class="mb-3">
                <label class="form-label">Upload More Images</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*">
            </div>

            @if ($room->images && $room->images->count())
                <div class="mb-3">
                    <label class="form-label">Existing Images</label>
                    <div class="d-flex flex-wrap gap-3">
                        @foreach ($room->images as $image)
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Room Image" class="img-thumbnail" style="width: 120px; height: 100px; object-fit: cover;">
                        @endforeach
                    </div>
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Update Room</button>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

@endsection
