@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
      <h2>Add New Room</h2>

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

      <form action="{{ route('rooms.store') }}" method="POST"  enctype="multipart/form-data"  >
          @csrf

          <div class="mb-3">
              <label for="room_number" class="form-label">Room Number</label>
              <input type="text" name="room_number" class="form-control" value="{{ old('room_number') }}" required>
          </div>

          <div class="mb-3">
              <label for="type" class="form-label">Room Type</label>
              <select name="type" class="form-control" required>
                  <option value="">-- Select Type --</option>
                  <option value="single" {{ old('type') == 'single' ? 'selected' : '' }}>Single</option>
                  <option value="double" {{ old('type') == 'double' ? 'selected' : '' }}>Double</option>
                  <option value="suite" {{ old('type') == 'suite' ? 'selected' : '' }}>Suite</option>
              </select>
          </div>

          <div class="mb-3">
              <label for="capacity" class="form-label">Capacity</label>
              <input type="number" name="capacity" class="form-control" min="1" value="{{ old('capacity') }}" required>
          </div>

          <div class="mb-3">
              <label for="price" class="form-label">Price (€)</label>
              <input type="number" name="price" class="form-control" min="0" step="0.01" value="{{ old('price') }}" required>
          </div>


          <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea name="description" class="form-control">{{ old('description', $room->description ?? '') }}</textarea>
          </div>

          <div class="mb-3">
              <label for="amenities" class="form-label">Amenities</label>
              <input type="text" name="amenities" class="form-control" value="{{ old('amenities', isset($room->amenities) ? implode(',', $room->amenities) : '') }}">
          </div>

          <div class="mb-3">
              <label for="floor" class="form-label">Floor</label>
              <input type="number" name="floor" class="form-control" value="{{ old('floor', $room->floor ?? '') }}">
          </div>

          <div class="mb-3">
              <label for="status" class="form-label">Status</label>
              <select name="status" class="form-control">
                  <option value="free" {{ old('status', $room->status ?? '') == 'free' ? 'selected' : '' }}>Free</option>
                  <option value="occupied" {{ old('status', $room->status ?? '') == 'occupied' ? 'selected' : '' }}>Occupied</option>
                  <option value="maintenance" {{ old('status', $room->status ?? '') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
              </select>
          </div>


          <div class="col-md-12">
              <div class="mb-3">
                  <label for="images" class="form-label">Room Images</label>
                  <input class="form-control" type="file" name="images[]" multiple accept="image/*">
              </div>
          </div>

          <button type="submit" class="btn btn-success">Save</button>
          <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
      </form>
  </div>

@endsection
