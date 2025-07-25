{{--@extends('dashboard.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900">
                👋 Welcome back, {{ auth()->user()?->name ?? 'Guest' }}!
            </h1>

            <a href="{{route('client_store')}}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Leave review</a>

            <p class="mt-2 text-lg text-gray-600">
                Here's a quick look at your past and upcoming bookings.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @forelse($bookings as $booking)
                <div class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start mb-4">
                        <h2 class="text-xl font-semibold text-blue-900">
                            🏨 {{ $booking->room->name ?? 'Unnamed Room' }}
                        </h2>
                        <span class="text-xs font-semibold px-3 py-1 rounded-full
                            @if($booking->status === 'confirmed') bg-green-100 text-green-700
                            @elseif($booking->status === 'pending') bg-yellow-100 text-yellow-800
                            @else bg-red-100 text-red-700 @endif">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </div>

                    <div class="space-y-2 text-gray-700 text-sm">
                        <p>📅 <strong>Check-in:</strong> {{ \Carbon\Carbon::parse($booking->check_in)->format('D, d M Y') }}</p>
                        <p>📅 <strong>Check-out:</strong> {{ \Carbon\Carbon::parse($booking->check_out)->format('D, d M Y') }}</p>
                        <p>🕒 <strong>Duration:</strong>
                            {{
                                max(1, \Carbon\Carbon::parse($booking->check_in)->diffInDays(\Carbon\Carbon::parse($booking->check_out)))
                            }} night(s)
                        </p>
                    </div>

                    <div class="mt-6 text-right">
                        <a href="{{ route('show.bookings', $booking->id) }}"
                           class="inline-block text-sm text-indigo-600 font-medium hover:text-indigo-800 transition">
                            ➕ View Details
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center p-10 bg-blue-50 border border-blue-200 rounded-2xl">
                    <h4 class="text-2xl font-semibold text-blue-800 mb-2">No bookings yet</h4>
                    <p class="text-blue-600 mb-6">Start planning your next stay today!</p>
                    <a href="{{ route('rooms.index') }}"
                       class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full font-medium shadow hover:bg-blue-700 transition">
                        🔍 Browse Available Rooms
                    </a>
                </div>
            @endforelse
        </div>
    </div>
@endsection--}}

@extends('dashboard.layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900">
                👋 Welcome back, {{ auth()->user()?->name ?? 'Guest' }}!
            </h1>

            <p class="mt-2 text-lg text-gray-600">
                Here's a quick look at your past and upcoming bookings.
            </p>

            <a href="{{ route('client_store') }}"
               class="mt-6 inline-flex items-center px-5 py-3 bg-green-600 text-white text-sm font-semibold rounded-full shadow hover:bg-green-700 transition duration-300">
                <i class="bi bi-plus-circle mr-2"></i> Leave a Review
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
            @forelse($bookings as $booking)
                <div class="bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-md transition p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start mb-4">
                        <h2 class="text-xl font-semibold text-blue-900">
                            🏨 {{ $booking->room->name ?? 'Unnamed Room' }}
                        </h2>
                        <span class="text-xs font-semibold px-3 py-1 rounded-full
                        @if($booking->status === 'confirmed') bg-green-100 text-green-700
                        @elseif($booking->status === 'pending') bg-yellow-100 text-yellow-700
                        @else bg-red-100 text-red-700 @endif">
                        {{ ucfirst($booking->status) }}
                    </span>
                    </div>

                    <div class="space-y-2 text-gray-700 text-sm">
                        <p>📅 <strong>Check-in:</strong> {{ \Carbon\Carbon::parse($booking->check_in)->format('D, d M Y') }}</p>
                        <p>📅 <strong>Check-out:</strong> {{ \Carbon\Carbon::parse($booking->check_out)->format('D, d M Y') }}</p>
                        <p>🕒 <strong>Duration:</strong>
                            {{
                                max(1, \Carbon\Carbon::parse($booking->check_in)->diffInDays(\Carbon\Carbon::parse($booking->check_out)))
                            }} night(s)
                        </p>
                    </div>

                    <div class="mt-6 flex justify-between items-center">
                        <a href="{{ route('show.bookings', $booking->id) }}"
                           class="text-sm text-indigo-600 font-medium hover:underline transition">
                            ➕ View Details
                        </a>
                        @if(!$booking->review)
                            <a href="{{ route('reviews.create', $booking->id) }}"
                               class="text-sm text-green-600 font-medium hover:underline transition">
                                ✍️ Leave Review
                            </a>
                        @else
                            <span class="text-sm text-gray-500 italic">✅ Reviewed</span>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center p-10 bg-blue-50 border border-blue-200 rounded-2xl">
                    <h4 class="text-2xl font-semibold text-blue-800 mb-2">No bookings yet</h4>
                    <p class="text-blue-600 mb-6">Start planning your next stay today!</p>
                    <a href="{{ route('rooms.index') }}"
                       class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full font-medium shadow hover:bg-blue-700 transition">
                        🔍 Browse Available Rooms
                    </a>
                </div>
            @endforelse
        </div>
    </div>
@endsection









