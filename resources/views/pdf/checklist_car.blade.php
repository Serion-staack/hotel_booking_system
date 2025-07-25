<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 13px; }
        h2 { margin-top: 20px; }
        ul { padding-left: 20px; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>
<h1>{{ $title }}</h1>
@foreach ($sections as $section)
    <h2>{{ $section['heading'] }}</h2>
    <ul>
        @foreach ($section['items'] as $item)
            <li>[ ] {{ $item }}</li>
        @endforeach
    </ul>
@endforeach
</body>
</html>
