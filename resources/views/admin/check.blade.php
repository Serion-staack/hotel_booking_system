@extends('dashboard.layouts.app')
@section('title','Available')
@section('content')
<form action="/check-availability" method="GET">
    <label>Room ID: <input type="number" name="room_id" required></label><br><br>
    <label>Start Date: <input type="date" name="start_date" required></label><br><br>
    <label>End Date: <input type="date" name="end_date" required></label><br><br>
    <button type="submit">Check Availability</button>
</form>

@if(request()->has('room_id'))
    <p>{{ session('availability_message') ?? '' }}</p>
@endif
@endsection
