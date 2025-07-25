@extends('dashboard.layouts.app')

@section('content')
    <title>Harta e Hoteleve</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <style>
        #map { height: 600px; width: 100%; margin-top: 20px; }
    </style>
</head>
<body>
<h1>Harta e Hoteleve</h1>
<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
    const map = L.map('map').setView([41.3275, 19.8189], 11);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    const hotels = @json($hotels);

    hotels.forEach(hotel => {
        if (hotel.latitude && hotel.longitude) {
            L.marker([hotel.latitude, hotel.longitude])
                .addTo(map)
                .bindPopup(`
                        <b>${hotel.name}</b><br>
                        ${hotel.city ?? ''}<br>
                        ${hotel.description ?? ''}<br>
                        📞 ${hotel.phone ?? ''}
                    `);
        }
    });
</script>
</body>
@endsection

