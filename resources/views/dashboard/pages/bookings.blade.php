@extends('dashboard.layouts.app')

@section('content')
   <div class="container my-4">
       <div class="d-flex justify-content-between align-items-center mb-3">

           <h3 class="mb-0">All Bookings</h3>
           <a href="{{ route('bookings.export') }}" class="btn btn-success">Export Bookings</a>
{{--           <a href="{{route('twilio.call')}}" class="btn btn-success">Call</a>--}}
           <a href="{{ route('create.bookings') }}" class="btn btn-success">
               <i class="bi bi-plus-circle"></i> + New Booking </a>
           <a href="http://wa.me/355675885332" target="_blank">WhatsApp</a>

       </div>
       <div class="card shadow-sm">
           <div class="card-body p-0">
               <div class="table-responsive">
                   <table class="table table-striped table-hover mb-0">
                       <thead class="table-light">
                       <tr>
                           <th>ID</th>
                           <th>Room</th>
                           <th>Start - End</th>
                           <th>Status</th>
                           <th class="text-end">Actions</th>
                       </tr>
                       </thead>
                       <tbody>
                       @forelse($bookings as $booking)
                           <tr>
                               <td>{{ $booking->id }}</td>
                               <td>Room {{ $booking->room->room_number }}</td>
                               <td>
                                   {{ \Carbon\Carbon::parse($booking->start_date)->format('M d, Y') }}
                                   –
                                   {{ \Carbon\Carbon::parse($booking->end_date)->format('M d, Y') }}
                               </td>
                               <td>
                                    <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'cancelled' ? 'danger' : 'secondary') }}">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                               </td>
                               <td class="text-end">
                                   <a href="{{ route('show.bookings', $booking->id) }}" class="btn btn-sm btn-outline-info">
                                       <i class="bi bi-eye"></i> View
                                   </a>
                                   <a href="{{ route('edit.bookings', $booking->id) }}" class="btn btn-sm btn-outline-warning">
                                       <i class="bi bi-pencil-square"></i> Edit
                                   </a>
                                   <form action="{{ route('destroy.bookings', $booking->id) }}" method="POST" class="d-inline">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to cancel this booking?')">
                                           <i class="bi bi-x-circle"></i> Cancel
                                       </button>
                                   </form>
                               </td>
                           </tr>
                       @empty
                           <tr>
                               <td colspan="5" class="text-center text-muted">No bookings found.</td>
                           </tr>
                       @endforelse
                       </tbody>
                   </table>
               </div>
           </div>
       </div>
       <form action="{{ route('bookings.import') }}" method="POST" enctype="multipart/form-data">
           @csrf
           <input type="file" name="file" required>
           <button type="submit">Import Bookings</button>
       </form>

   </div>
@endsection
