@extends('dashboard.layouts.app')

@section('content')

  <div class="container py-4">
      <div class="card shadow-sm">
          <div class="card-header bg-primary text-white">
              <h3 class="mb-0">Room : {{ $room->room_number }} - {{ ucfirst($room->type) }}</h3>
          </div>

          <div class="card-body">
              <div class="row mb-4">
                  <div class="col-md-6">
                      <p><strong>Type:</strong> {{ ucfirst($room->type) }}</p>
                      <p><strong>Capacity:</strong> {{ $room->capacity }} people</p>
                      <p><strong>Price:</strong> €{{ number_format($room->price, 2) }}</p>
                      <p><strong>Status:</strong>
                          <span class="badge
                            {{ $room->status === 'free' ? 'bg-success' : ($room->status === 'occupied' ? 'bg-danger' : 'bg-warning') }}">
                            {{ ucfirst($room->status) }}
                        </span>
                      </p>
                      <p><strong>Floor:</strong> {{ $room->floor ?? '-' }}</p>
                      <p><strong>Active:</strong>
                          <span class="badge {{ $room->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $room->is_active ? 'Yes' : 'No' }}
                        </span>
                      </p>
                  </div>

                  <div class="col-md-5">
                      <p><strong>Description:</strong></p>
                      <div class="border p-2 bg-body-secondary text-black">
                          {{ $room->description ?? 'No description provided.' }}
                      </div>

                      <p class="mt-3"><strong>Amenities:</strong></p>
                      @if($room->amenities)
                          <ul>
                              @foreach(explode(',', $room->amenities) as $amenity)
                                  <li>{{ trim($amenity) }}</li>
                              @endforeach
                          </ul>
                      @else
                          <p>No amenities listed.</p>
                      @endif
                  </div>
              </div>

              <h5 class="mb-3">Room Images</h5>
              <div class="row g-3">

                  @if($room->images && $room->images->count())
                      @foreach($room->images as $image)
                          <div class="col-6 col-md-4 col-lg-3">
                              <div class="card h-100 shadow-sm position-relative">
                                  <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      style="z-index: 5; width: 25px; height: 25px;"
                                      fill="currentColor"
                                      class="bi bi-trash position-absolute top-2 end-0 m-2 delete-image"
                                      data-id="{{ $image->id }}"
                                      viewBox="0 0 16 16"
                                  >
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg>

                                  <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" style="object-fit: cover; height: 180px;" alt="Room Image">
                              </div>
                          </div>
                      @endforeach
                  @else
                      <div class="col">
                          <p>No images available for this room.</p>
                      </div>
                  @endif



              </div>

              <div class="mt-4">
                  <a href="{{ route('rooms.index') }}" class="btn btn-secondary">← Back to Room List</a>
                  <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit Room</a>
              </div>
          </div>
      </div>
  </div>

  <script>
      document.addEventListener('DOMContentLoaded', function() {

          const deleteIcons = document.querySelectorAll('.delete-image');

          deleteIcons.forEach(icon => {
              icon.addEventListener('click', async function() {
                  const imageId = this.getAttribute('data-id');
                  if (!imageId) return;

                  if (!confirm('Are you sure you want to delete this image?')) return;

                  try {
                      const response = await fetch(`/api/room-image/${imageId}`, {
                          method: 'DELETE',
                          headers: {
                              'Accept': 'application/json',
                              'X-CSRF-TOKEN': '{{ csrf_token() }}'

                          },
                      });

                      if (response.ok) {

                          this.closest('.col-6').remove();
                          alert('Image deleted successfully!');
                      } else {
                          alert('Failed to delete image.');
                      }
                  } catch (error) {
                      alert('Error occurred: ' + error.message);
                  }
              });
          });
      });
  </script>


@endsection
