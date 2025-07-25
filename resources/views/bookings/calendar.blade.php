@extends('dashboard.layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Calendar</h2>
        <div id="calendar"></div>
    </div>
@endsection

@push('styles')
    <link href="{{ asset('assets/fullcalendar/main.min.css') }}" rel="stylesheet" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/fullcalendar/main.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('calendar');
            let calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: @json($events),
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listWeek'
                }
            });
            calendar.render();
        });
    </script>
@endpush
