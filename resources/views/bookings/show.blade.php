@extends('dashboard.layouts.app')

@section('content')
    <div class="container my-5">
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4 d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="bi bi-info-circle me-2"></i>Booking Details</h4>
            </div>

            <div class="card-body px-4 py-3">
                <dl class="row gx-4 gy-3">
                    <dt class="col-sm-3 text-muted">Booking ID</dt>
                    <dd class="col-sm-9">{{ $booking->id }}</dd>

                    <dt class="col-sm-3 text-muted">Room Number</dt>
                    <dd class="col-sm-9">{{ $booking->room->room_number }}</dd>

                    <dt class="col-sm-3 text-muted">Customer Name</dt>
                    <dd class="col-sm-9">{{ $booking->customer_name }}</dd>

                    <dt class="col-sm-3 text-muted">Email</dt>
                    <dd class="col-sm-9">{{ $booking->customer_mail }}</dd>

                    <dt class="col-sm-3 text-muted">Start Date</dt>
                    <dd class="col-sm-9">{{ \Carbon\Carbon::parse($booking->start_date)->format('F j, Y') }}</dd>

                    <dt class="col-sm-3 text-muted">End Date</dt>
                    <dd class="col-sm-9">{{ \Carbon\Carbon::parse($booking->end_date)->format('F j, Y') }}</dd>

                    <dt class="col-sm-3 text-muted">Status</dt>
                    <dd class="col-sm-9">
                    <span class="badge px-3 py-2 bg-{{ $booking->status === 'confirmed' ? 'success' : 'secondary' }} rounded-pill text-capitalize">
                        {{ $booking->status }}
                    </span>
                    </dd>
                </dl>
            </div>

            <div class="card-footer bg-light text-end rounded-bottom-4 py-3">
                <a href="{{ route('edit.bookings', $booking->id) }}" class="btn btn-outline-warning me-2">
                    <i class="bi bi-pencil-square me-1"></i> Edit
                </a>
                <a href="{{ route('index.bookings') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Back
                </a>
            </div>
        </div>
    </div>
@endsection
