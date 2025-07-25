@extends('dashboard.layouts.app')

@section('content')
<head>
    <title>Add Hotel</title>
</head>
<body>
<h1>Add new hotel</h1>

@if(session('success'))
    <div style="color:green;">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('hotels.store') }}">
    @csrf
    <label>Name:</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Latitude:</label><br>
    <input type="text" name="latitude" value="{{ old('latitude') }}"><br><br>

    <label>Longitude:</label><br>
    <input type="text" name="longitude" value="{{ old('longitude') }}"><br><br>

    <label>City:</label><br>
    <input type="text" name="city" value="{{ old('city') }}"><br><br>

    <label>Description:</label><br>
    <textarea name="description">{{ old('description') }}</textarea><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

    <button type="submit">Add Hotel</button>
</form>
</body>
@endsection

