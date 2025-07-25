@extends('dashboard.layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-12 p-6 bg-white shadow rounded-xl">
        <h2 class="text-2xl font-bold mb-4">📝 Leave a Review for {{ $booking->room->name }}</h2>

        <form method="POST" action="{{ route('client_store', $booking->id) }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Your Comment</label>
                <textarea name="comment" required class="w-full p-2 border rounded mt-1">{{ old('comment') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Rating</label>
                <select name="rating" required class="w-full p-2 border rounded mt-1">
                    @for ($i = 5; $i >= 1; $i--)
                        <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                    @endfor
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Submit Review
            </button>
        </form>
    </div>
@endsection
